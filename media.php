<?php
$pageTitle = 'Media & Events';
include 'header.php';
?>

<main class="media-events-page">
  <section class="media-events-hero">
    <div class="container">
      <div class="media-events-hero-card">
        <div class="media-events-hero-content">
          <nav class="media-events-breadcrumb" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span aria-current="page">Media &amp; Events</span>
          </nav>
          <span class="media-events-kicker">Events &amp; Media</span>
          <h1>Industry Presence, Recognition, and Brand Visibility Across Key Platforms.</h1>
          <p>Adapted from the old Novoflex Media &amp; Events page, this section brings together press mentions, exhibitions, awards, and public-facing milestones that reflect the company's market presence and continued engagement with industry audiences.</p>
          <div class="media-events-actions">
            <a href="#upcoming-events" class="media-events-btn media-events-btn-primary">Upcoming Events <i class="bi bi-arrow-right"></i></a>
            <a href="#photo-gallery" class="media-events-btn media-events-btn-outline">Explore Gallery <i class="bi bi-images"></i></a>
          </div>
        </div>
        <div class="media-events-nav">
          <a href="#upcoming-events"><i class="bi bi-calendar-event"></i> Upcoming Events</a>
          <a href="#past-events"><i class="bi bi-stars"></i> Past Event Highlights</a>
          <a href="#photo-gallery"><i class="bi bi-images"></i> Photo Gallery</a>
          <a href="#press-releases"><i class="bi bi-newspaper"></i> Media Coverage &amp; Press Releases</a>
          <a href="#videos"><i class="bi bi-play-btn"></i> Videos &amp; Interviews</a>
        </div>
      </div>
    </div>
  </section>

  <section class="media-events-section" id="upcoming-events">
    <div class="container">
      <div class="media-events-layout">
        <div>
          <div class="media-events-section-head">
            <h2>Upcoming Events</h2>
            <a href="#">View All Events <i class="bi bi-arrow-right"></i></a>
          </div>
          <div class="media-events-card-grid">
            <article class="media-event-card"><div class="media-event-image"><img src="images/e3.jpg" alt="Wire India 2025"><span><strong>14</strong> May</span></div><div class="media-event-body"><h3>Wire India 2025</h3><p><i class="bi bi-geo-alt"></i> Pragati Maidan, New Delhi</p><p><i class="bi bi-calendar3"></i> 14 - 16 May, 2025</p><a href="#">Know More <i class="bi bi-arrow-right"></i></a></div></article>
            <article class="media-event-card"><div class="media-event-image"><img src="images/e4.jpg" alt="Elecrama 2025"><span><strong>05</strong> Jun</span></div><div class="media-event-body"><h3>Elecrama 2025</h3><p><i class="bi bi-geo-alt"></i> India Expo Centre, Greater Noida</p><p><i class="bi bi-calendar3"></i> 5 - 9 Jun, 2025</p><a href="#">Know More <i class="bi bi-arrow-right"></i></a></div></article>
            <article class="media-event-card"><div class="media-event-image"><img src="images/e1.jpg" alt="InnoCable 2025"><span><strong>17</strong> Jul</span></div><div class="media-event-body"><h3>InnoCable 2025</h3><p><i class="bi bi-geo-alt"></i> Jio World Convention Centre, Mumbai</p><p><i class="bi bi-calendar3"></i> 17 - 19 July, 2025</p><a href="#">Know More <i class="bi bi-arrow-right"></i></a></div></article>
            <article class="media-event-card"><div class="media-event-image"><img src="images/e2.jpg" alt="CWIEME Berlin 2025"><span><strong>10</strong> Sep</span></div><div class="media-event-body"><h3>CWIEME Berlin 2025</h3><p><i class="bi bi-geo-alt"></i> Messe Berlin, Germany</p><p><i class="bi bi-calendar3"></i> 10 - 12 September, 2025</p><a href="#">Know More <i class="bi bi-arrow-right"></i></a></div></article>
          </div>
        </div>
        <aside class="media-events-stats">
          <div><i class="bi bi-calendar2-check"></i><strong>25+</strong><span>Events Participated</span></div>
          <div><i class="bi bi-globe2"></i><strong>10+</strong><span>Countries</span></div>
          <div><i class="bi bi-people"></i><strong>5000+</strong><span>Visitors Engaged</span></div>
          <div><i class="bi bi-building"></i><strong>20+</strong><span>Industry Collaborations</span></div>
        </aside>
      </div>
    </div>
  </section>

  <section class="media-events-section media-events-tight" id="past-events">
    <div class="container">
      <div class="media-events-section-head"><h2>Past Event Highlights</h2><a href="#">View All Events <i class="bi bi-arrow-right"></i></a></div>
      <div class="media-past-row">
        <button type="button" data-media-prev aria-label="Previous event"><i class="bi bi-chevron-left"></i></button>
        <div class="media-past-viewport">
          <div class="media-past-track" data-media-slider>
            <article><img src="images/e3.jpg" alt="Wire India 2024"><h3>Wire India 2024</h3></article>
            <article><img src="images/e4.jpg" alt="Elecrama 2024"><h3>Elecrama 2024</h3></article>
            <article><img src="images/e5.jpg" alt="InnoCable 2024"><h3>InnoCable 2024</h3></article>
            <article><img src="images/e6.jpg" alt="CWIEME Berlin 2024"><h3>CWIEME Berlin 2024</h3></article>
          </div>
        </div>
        <button type="button" data-media-next aria-label="Next event"><i class="bi bi-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <section class="media-events-section media-events-tight" id="photo-gallery">
    <div class="container">
      <div class="media-events-section-head"><h2>Photo Gallery</h2></div>
      <div class="media-gallery-tabs" data-media-tabs><button type="button" class="active">All Events</button><button type="button">Exhibitions</button><button type="button">Corporate Events</button><button type="button">Dealer Meets</button><button type="button">Training Programs</button><button type="button">CSR</button></div>
      <div class="media-gallery-grid">
        <img src="images/e1.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e2.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e3.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e4.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e5.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e6.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e3.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e4.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e1.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e5.jpg" alt="Novoflex event gallery" data-gallery-zoom><img src="images/e2.jpg" alt="Novoflex event gallery" data-gallery-zoom><a href="#"><i class="bi bi-images"></i><span>View All Photos</span></a>
      </div>
    </div>
  </section>

  <section class="media-events-section media-events-tight" id="press-releases">
    <div class="container">
      <div class="media-events-section-head"><h2>Media Coverage &amp; Press Releases</h2><a href="#">View All <i class="bi bi-arrow-right"></i></a></div>
      <div class="media-press-tabs" data-media-tabs><button type="button" class="active">Media Coverage</button><button type="button">Press Releases</button></div>
      <div class="media-press-grid">
        <article><h3>Electrical India</h3><p>Novoflex strengthens position in cable accessories market</p><span>May 2024</span><a href="#">Read More <i class="bi bi-arrow-right"></i></a></article>
        <article><h3>Wire &amp; Cable India</h3><p>Novoflex showcases advanced cable jointing solutions</p><span>April 2024</span><a href="#">Read More <i class="bi bi-arrow-right"></i></a></article>
        <article><h3>Industry Outlook</h3><p>Novoflex - Powering a Secure World</p><span>March 2024</span><a href="#">Read More <i class="bi bi-arrow-right"></i></a></article>
        <article><h3>TradeIndia News</h3><p>Novoflex launches new range of heat shrink products</p><span>Feb 2024</span><a href="#">Read More <i class="bi bi-arrow-right"></i></a></article>
        <article><h3>Cable India</h3><p>Innovation and quality at the core of Novoflex growth</p><span>Jan 2024</span><a href="#">Read More <i class="bi bi-arrow-right"></i></a></article>
      </div>
    </div>
  </section>

  <section class="media-events-section media-events-tight" id="videos">
    <div class="container">
      <div class="media-events-section-head"><h2>Videos &amp; Interviews</h2><a href="#">View All Videos <i class="bi bi-arrow-right"></i></a></div>
      <div class="media-video-grid">
        <article><img src="images/e1.jpg" alt="Corporate film"><i class="bi bi-play-circle"></i><span>Corporate Film</span><small>02:45</small></article>
        <article><img src="images/e2.jpg" alt="Heat shrink technology"><i class="bi bi-play-circle"></i><span>Heat Shrink Technology</span><small>03:12</small></article>
        <article><img src="images/e3.jpg" alt="Product installation guide"><i class="bi bi-play-circle"></i><span>Product Installation Guide</span><small>04:06</small></article>
        <article><img src="images/e4.jpg" alt="Exhibition highlights"><i class="bi bi-play-circle"></i><span>Exhibition Highlights</span><small>02:30</small></article>
      </div>
    </div>
  </section>

  <section class="media-events-cta-section">
    <div class="container">
      <div class="media-events-cta">
        <div class="media-events-cta-icon"><i class="bi bi-plugin"></i></div>
        <div><h2>Let's Build a Stronger Connection</h2><p>Have a query or want to collaborate with Novoflex? We are here to help.</p></div>
        <div class="media-events-cta-actions"><a href="contact.php" class="media-events-btn media-events-btn-primary">Get in Touch <i class="bi bi-arrow-right"></i></a><a href="#" class="media-events-btn media-events-btn-outline">Download Brochure <i class="bi bi-download"></i></a></div>
      </div>
    </div>
  </section>
</main>

<div class="media-gallery-lightbox" data-gallery-lightbox>
  <button type="button" aria-label="Close gallery image" data-gallery-close><i class="bi bi-x-lg"></i></button>
  <img src="" alt="Novoflex event gallery preview" data-gallery-preview>
</div>

<script>
  document.querySelectorAll('[data-media-tabs]').forEach((tabGroup) => {
    tabGroup.querySelectorAll('button').forEach((tab) => {
      tab.addEventListener('click', () => {
        tabGroup.querySelectorAll('button').forEach((item) => item.classList.remove('active'));
        tab.classList.add('active');
      });
    });
  });

  document.querySelectorAll('[data-media-slider]').forEach((slider) => {
    const sliderShell = slider.closest('.media-past-row');
    const prev = sliderShell.querySelector('[data-media-prev]');
    const next = sliderShell.querySelector('[data-media-next]');

    if (slider.querySelectorAll('article').length < 2) {
      return;
    }

    let isAnimating = false;

    const rotate = (direction = 1) => {
      if (isAnimating) {
        return;
      }

      isAnimating = true;
      const cards = Array.from(slider.querySelectorAll('article'));
      const step = cards[0].offsetWidth + 16;

      if (direction > 0) {
        const clone = cards[0].cloneNode(true);
        slider.appendChild(clone);
        slider.style.transition = 'transform .62s linear';
        slider.style.transform = `translateX(-${step}px)`;

        setTimeout(() => {
          cards[0].remove();
          slider.style.transition = 'none';
          slider.style.transform = 'translateX(0)';
          slider.offsetHeight;
          slider.style.transition = '';
          isAnimating = false;
        }, 620);
      } else {
        const clone = cards[cards.length - 1].cloneNode(true);
        slider.insertBefore(clone, cards[0]);
        slider.style.transition = 'none';
        slider.style.transform = `translateX(-${step}px)`;
        slider.offsetHeight;
        slider.style.transition = 'transform .62s linear';
        slider.style.transform = 'translateX(0)';

        setTimeout(() => {
          cards[cards.length - 1].remove();
          slider.style.transition = 'none';
          slider.style.transform = 'translateX(0)';
          slider.offsetHeight;
          slider.style.transition = '';
          isAnimating = false;
        }, 620);
      }
    };

    let timer = setInterval(() => rotate(1), 2600);
    const restart = () => {
      clearInterval(timer);
      timer = setInterval(() => rotate(1), 2600);
    };

    next.addEventListener('click', () => {
      rotate(1);
      restart();
    });

    prev.addEventListener('click', () => {
      rotate(-1);
      restart();
    });
  });

  const galleryLightbox = document.querySelector('[data-gallery-lightbox]');
  const galleryPreview = document.querySelector('[data-gallery-preview]');
  const galleryClose = document.querySelector('[data-gallery-close]');

  document.querySelectorAll('[data-gallery-zoom]').forEach((image) => {
    image.addEventListener('click', () => {
      galleryPreview.src = image.src;
      galleryPreview.alt = image.alt;
      galleryLightbox.classList.add('is-open');
      document.body.classList.add('media-lightbox-open');
    });
  });

  const closeGalleryLightbox = () => {
    galleryLightbox.classList.remove('is-open');
    document.body.classList.remove('media-lightbox-open');
    galleryPreview.src = '';
  };

  galleryClose.addEventListener('click', closeGalleryLightbox);
  galleryLightbox.addEventListener('click', (event) => {
    if (event.target === galleryLightbox) {
      closeGalleryLightbox();
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && galleryLightbox.classList.contains('is-open')) {
      closeGalleryLightbox();
    }
  });
</script>

<?php include 'footer.php'; ?>
