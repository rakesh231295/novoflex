(function () {
  function initSiteSearch() {
    var form = document.querySelector('[data-site-search-form]');
    if (!form) return;

    var input = form.querySelector('input[name="q"]');
    var searchTargets = Array.isArray(window.novoflexSearchTargets)
      ? window.novoflexSearchTargets
      : [];

    if (!input || !searchTargets.length) return;

    function normalizeValue(value) {
      return String(value || '')
        .toLowerCase()
        .replace(/&/g, 'and')
        .replace(/[^a-z0-9]+/g, ' ')
        .trim();
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      var query = normalizeValue(input.value);
      if (!query) return;

      var exactMatch = searchTargets.find(function (item) {
        return normalizeValue(item.label) === query;
      });

      var partialMatch = exactMatch || searchTargets.find(function (item) {
        return normalizeValue(item.label).indexOf(query) !== -1;
      });

      if (partialMatch && partialMatch.url) {
        window.location.href = partialMatch.url;
        return;
      }

      input.setCustomValidity('No matching page found. Please choose a listed page.');
      input.reportValidity();
      window.setTimeout(function () {
        input.setCustomValidity('');
      }, 1200);
    });

    input.addEventListener('input', function () {
      input.setCustomValidity('');
    });
  }

  function initLanguageSwitcher() {
    var select = document.querySelector('[data-language-switcher]');
    if (!select) return;

    function applyLanguage(languageCode) {
      var googleSelect = document.querySelector('.goog-te-combo');
      if (!googleSelect) return false;

      googleSelect.value = languageCode || '';
      googleSelect.dispatchEvent(new Event('change'));
      return true;
    }

    window.novoflexApplyTranslation = applyLanguage;

    select.addEventListener('change', function () {
      if (!select.value) {
        window.location.reload();
        return;
      }

      if (applyLanguage(select.value)) return;

      select.disabled = true;

      var pollAttempts = 0;
      var poller = window.setInterval(function () {
        pollAttempts += 1;

        if (applyLanguage(select.value) || pollAttempts > 20) {
          window.clearInterval(poller);
          select.disabled = false;
        }
      }, 300);
    });
  }

  window.novoflexInitTranslate = function () {
    var translateRoot = document.getElementById('google_translate_element');
    if (!translateRoot || typeof google === 'undefined' || !google.translate || !google.translate.TranslateElement) {
      return;
    }

    new google.translate.TranslateElement({
      pageLanguage: 'en',
      autoDisplay: false,
      includedLanguages: 'en,hi,bn,ta,mr'
    }, 'google_translate_element');
  };

  function initHeaderState() {
    var header = document.querySelector('.site-header');
    if (!header) return;

    function syncHeaderState() {
      if (window.scrollY > 24) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    }

    syncHeaderState();
    window.addEventListener('scroll', syncHeaderState, { passive: true });
  }

  function initMediaZoom() {
    var modalEl = document.getElementById('mediaZoomModal');
    var imgEl = document.getElementById('mediaZoomImg');
    if (!modalEl || !imgEl || typeof bootstrap === 'undefined') return;

    var modal = bootstrap.Modal.getOrCreateInstance(modalEl);

    function openZoom(src, alt) {
      if (!src) return;
      imgEl.src = src;
      imgEl.alt = alt || 'Zoomed image';
      modal.show();
    }

    document.addEventListener('click', function (e) {
      var target = e.target;
      if (!target) return;

      var tile = target.closest ? target.closest('.media-tile') : null;
      if (!tile) return;

      var src = tile.getAttribute('data-zoom-src');
      var image = tile.querySelector('img');
      var alt = image ? image.getAttribute('alt') : 'Zoomed image';
      openZoom(src, alt);
    });

    modalEl.addEventListener('hidden.bs.modal', function () {
      imgEl.src = '';
    });
  }

  function initPdfLeadForm() {
    var form = document.querySelector('.pdf-lead-form');
    if (!form) return;

    var statusEl = form.querySelector('.pdf-form-status');
    var modalEl = document.getElementById('pdfLeadModal');
    var modal = modalEl && typeof bootstrap !== 'undefined'
      ? bootstrap.Modal.getOrCreateInstance(modalEl)
      : null;

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      if (statusEl) {
        statusEl.textContent = form.getAttribute('data-success-message') || 'Thank you. We will get back to you shortly.';
      }

      form.reset();

      if (modal) {
        window.setTimeout(function () {
          modal.hide();
          if (statusEl) {
            statusEl.textContent = '';
          }
        }, 1800);
      }
    });
  }

  function initLazyImages() {
    var images = document.querySelectorAll('img');
    if (!images.length) return;

    images.forEach(function (image) {
      if (image.closest('.hero') || image.closest('#mediaZoomModal')) return;
      if (image.hasAttribute('loading') || image.dataset.noLazy === 'true') return;

      image.setAttribute('loading', 'lazy');
      image.setAttribute('decoding', 'async');
    });
  }

  function initSlidingTrackSliders(options) {
    var sliders = document.querySelectorAll(options.selector);
    if (!sliders.length) return;

    sliders.forEach(function (slider, sliderIndex) {
      if (slider.classList.contains('is-ready')) return;

      var slides = Array.prototype.slice.call(
        slider.querySelectorAll(options.slideSelector)
      );

      if (slides.length < 2) return;

      var track = document.createElement('div');
      track.className = options.trackClass;

      slides.forEach(function (slide) {
        track.appendChild(slide);
      });

      slider.appendChild(track);
      slider.classList.add('is-ready');

      var activeIndex = slides.findIndex(function (slide) {
        return slide.classList.contains('is-active');
      });

      if (activeIndex < 0) {
        activeIndex = 0;
        slides[0].classList.add('is-active');
      }

      var interval = parseInt(slider.getAttribute('data-interval'), 10);
      var delay = Number.isFinite(interval) ? interval : options.defaultDelay;
      var timerId;

      function syncTrack(animate) {
        if (!animate) {
          track.style.transition = 'none';
        }

        track.style.transform = 'translateX(-' + (activeIndex * 100) + '%)';

        if (!animate) {
          track.offsetHeight;
          track.style.transition = '';
        }
      }

      function showSlide(nextIndex) {
        slides[activeIndex].classList.remove('is-active');
        activeIndex = nextIndex;
        slides[activeIndex].classList.add('is-active');
        syncTrack(true);
      }

      function startSlider() {
        stopSlider();

        timerId = window.setTimeout(function runSlider() {
          var nextIndex = (activeIndex + 1) % slides.length;
          showSlide(nextIndex);
          timerId = window.setTimeout(runSlider, delay);
        }, delay + (sliderIndex * options.startOffset));
      }

      function stopSlider() {
        if (timerId) {
          window.clearTimeout(timerId);
          timerId = null;
        }
      }

      syncTrack(false);

      slider.addEventListener('mouseenter', function () {
        stopSlider();
        var nextIndex = (activeIndex + 1) % slides.length;
        showSlide(nextIndex);
      });

      slider.addEventListener('mouseleave', function () {
        stopSlider();
        showSlide(0);
      });
    });
  }

  function initProductSliders() {
    initSlidingTrackSliders({
      selector: '[data-product-slider]',
      slideSelector: '.product-slide',
      trackClass: 'product-slider-track',
      defaultDelay: 2800,
      startOffset: 180
    });
  }

  function initIndustrySliders() {
    initSlidingTrackSliders({
      selector: '[data-industry-slider]',
      slideSelector: '.industry-slide',
      trackClass: 'industry-slider-track',
      defaultDelay: 3000,
      startOffset: 160
    });
  }

  function initJourneyReveal() {
    var items = document.querySelectorAll('.company-journey-item');
    if (!items.length) return;

    if (!('IntersectionObserver' in window)) {
      items.forEach(function (item) {
        item.classList.add('is-visible');
      });
      return;
    }

    var observer = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;

        entry.target.classList.add('is-visible');
        obs.unobserve(entry.target);
      });
    }, {
      threshold: 0.18,
      rootMargin: '0px 0px -40px 0px'
    });

    items.forEach(function (item, index) {
      item.style.setProperty('--journey-delay', (index * 70) + 'ms');
      observer.observe(item);
    });
  }

  function initEthicsReadMore() {
    var panels = document.querySelectorAll('.company-ethics-panel');
    if (!panels.length) return;

    panels.forEach(function (panel) {
      var body = panel.querySelector('[data-ethics-panel-body]');
      var toggle = panel.querySelector('[data-ethics-toggle]');

      if (!body || !toggle) return;

      var collapsedHeight = parseFloat(window.getComputedStyle(body).maxHeight) || 0;
      var isCollapsible = body.scrollHeight > (collapsedHeight + 8);

      panel.classList.toggle('is-collapsible', isCollapsible);
      panel.classList.remove('is-expanded');
      toggle.setAttribute('aria-expanded', 'false');
      toggle.textContent = 'Read more';

      if (!isCollapsible) return;

      toggle.addEventListener('click', function () {
        var expanded = panel.classList.toggle('is-expanded');
        toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
        toggle.textContent = expanded ? 'Read less' : 'Read more';
      });
    });
  }

  function initWorkflowAutoSlider() {
    var tracks = document.querySelectorAll('[data-workflow-slider]');
    if (!tracks.length) return;

    tracks.forEach(function (track) {
      if (track.dataset.workflowReady === 'true') return;

      var steps = Array.prototype.slice.call(
        track.querySelectorAll('.company-workflow-step')
      );

      if (steps.length < 2) return;

      var innerTrack = document.createElement('div');
      var rafId = null;
      var paused = false;
      var speed = 24;
      var resumeTimerId = null;
      var offset = 0;
      var lastTs = 0;

      track.dataset.workflowReady = 'true';

      innerTrack.className = 'company-workflow-horizontal-track';

      steps.forEach(function (step) {
        innerTrack.appendChild(step);
      });

      steps.forEach(function (step) {
        var clone = step.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        innerTrack.appendChild(clone);
      });

      track.appendChild(innerTrack);

      function tick(ts) {
        if (!lastTs) {
          lastTs = ts;
        }

        var delta = ts - lastTs;
        lastTs = ts;

        if (!paused) {
          var resetPoint = innerTrack.scrollWidth / 2;

          if (resetPoint > 0) {
            offset += (speed * delta) / 1000;

            if (offset >= resetPoint) {
              offset -= resetPoint;
            }

            innerTrack.style.transform = 'translate3d(' + (-offset) + 'px, 0, 0)';
          }
        }

        rafId = window.requestAnimationFrame(tick);
      }

      function pause() {
        paused = true;
        lastTs = 0;

        if (resumeTimerId) {
          window.clearTimeout(resumeTimerId);
          resumeTimerId = null;
        }
      }

      function resume() {
        paused = false;
      }

      function resumeLater(delay) {
        if (resumeTimerId) {
          window.clearTimeout(resumeTimerId);
        }

        resumeTimerId = window.setTimeout(function () {
          resumeTimerId = null;
          resume();
        }, delay);
      }

      track.addEventListener('mouseenter', pause);
      track.addEventListener('mouseleave', resume);
      track.addEventListener('focusin', pause);
      track.addEventListener('focusout', resume);
      track.addEventListener('touchstart', pause, { passive: true });
      track.addEventListener('touchend', function () {
        resumeLater(1500);
      }, { passive: true });
      track.addEventListener('wheel', function () {
        pause();
        resumeLater(1400);
      }, { passive: true });

      innerTrack.style.transform = 'translate3d(0, 0, 0)';
      rafId = window.requestAnimationFrame(tick);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initHeaderState();
      initSiteSearch();
      initLanguageSwitcher();
      initMediaZoom();
      initPdfLeadForm();
      initLazyImages();
      initProductSliders();
      initIndustrySliders();
      initJourneyReveal();
      initEthicsReadMore();
      initWorkflowAutoSlider();
    });
  } else {
    initHeaderState();
    initSiteSearch();
    initLanguageSwitcher();
    initMediaZoom();
    initPdfLeadForm();
    initLazyImages();
    initProductSliders();
    initIndustrySliders();
    initJourneyReveal();
    initEthicsReadMore();
    initWorkflowAutoSlider();
  }
})();
