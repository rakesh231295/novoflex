<?php
$pageTitle = 'Blog';
include 'header.php';
?>

<main class="blog-page">
  <section class="blog-hero">
    <div class="container">
      <div class="blog-hero-banner">
        <div class="blog-hero-content">
          <nav class="blog-breadcrumb" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span aria-current="page">Blog</span>
          </nav>
          <span class="blog-kicker">Novoflex Blog</span>
          <h1>The Novoflex Knowledge Center</h1>
          <p>
            Explore expert insights, technical guidance, industry trends, and product innovations designed to help engineers, manufacturers, and businesses build safer, more efficient systems.
          </p>

          <div class="blog-hero-points" aria-label="Blog highlights">
            <div class="blog-hero-point">
              <span class="blog-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M12 20h9"/><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4z"/></svg>
              </span>
              <span><strong>Expert Insights</strong><span>Practical product guidance</span></span>
            </div>
            <div class="blog-hero-point">
              <span class="blog-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5z"/></svg>
              </span>
              <span><strong>Technical Articles</strong><span>Industry-ready knowledge</span></span>
            </div>
            <div class="blog-hero-point">
              <span class="blog-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
              </span>
              <span><strong>Trends</strong><span>Updates that matter</span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-section">
    <div class="container">
      <div class="blog-toolbar">
        <div id="featured-heading">
          <span class="section-kicker">Featured Article</span>
          <h2>Latest from Novoflex</h2>
        </div>
        <div class="blog-filter-box">
          <div class="blog-search-wrap">
            <label class="visually-hidden" for="blog-search">Search blogs</label>
            <input id="blog-search" type="search" placeholder="Search blog articles..." autocomplete="off" />
            <div class="blog-search-list" id="blog-search-list" hidden></div>
          </div>
          <label class="visually-hidden" for="blog-category">Filter category</label>
          <select id="blog-category">
            <option value="all">All Categories</option>
            <option value="product-insights">Product Insights</option>
            <option value="application">Application</option>
            <option value="technical-articles">Technical Articles</option>
            <option value="industry-trends">Industry Trends</option>
            <option value="company-news">Company News</option>
          </select>
        </div>
      </div>

      <article class="featured-blog-card" style="cursor:pointer;" onclick="window.location='blog-detail.php'">
        <img src="images/polyamidecablelands.png" alt="Cable management products and industrial solutions" />
        <div class="featured-blog-body">
          <span class="blog-card-kicker">Industry Trends</span>
          <h2>The Future of Cable Management in a Sustainable World</h2>
          <p>How sustainable materials and smarter designs are shaping the future of cable management.</p>
          <div class="blog-meta">
            <span>May 8, 2024</span>
            <span>6 min read</span>
          </div>
          <a href="blog-detail.php" class="blog-read-link">Read More <span aria-hidden="true">-></span></a>
        </div>
      </article>
    </div>
  </section>

  <section class="blog-section pt-0">
    <div class="container">
      <div class="latest-blog-head">
        <div>
          <span class="section-kicker">Latest Articles</span>
          <h2>Explore the Knowledge Center</h2>
        </div>
        <span id="blog-result-count" class="blog-count">Showing all articles</span>
      </div>

      <div class="blog-grid" id="blog-grid">
        <article class="blog-card" style="cursor:pointer;" onclick="window.location='blog-detail.php'" data-category="product-insights" data-title="Choosing the Right Cable Tie for Your Application">
          <img src="images/polyamidecablelands.png" alt="Cable ties for different industrial applications" />
          <div class="blog-card-body">
            <span class="blog-card-kicker">Product Insights</span>
            <h3>Choosing the Right Cable Tie for Your Application</h3>
            <p>Understand material, strength, and application needs before choosing cable ties.</p>
            <div class="blog-meta">
              <span>May 15, 2024</span>
              <span>5 min read</span>
            </div>
          </div>
        </article>

        <article class="blog-card" style="cursor:pointer;" onclick="window.location='blog-detail.php'" data-category="application" data-title="Cable Management Solutions for Industrial Automation">
          <img src="images/contact-2.jpg" alt="Industrial automation workspace" />
          <div class="blog-card-body">
            <span class="blog-card-kicker">Application</span>
            <h3>Cable Management Solutions for Industrial Automation</h3>
            <p>Practical routing and protection ideas for automated manufacturing environments.</p>
            <div class="blog-meta">
              <span>Apr 24, 2024</span>
              <span>4 min read</span>
            </div>
          </div>
        </article>

        <article class="blog-card" style="cursor:pointer;" onclick="window.location='blog-detail.php'" data-category="technical-articles" data-title="Understanding UV Resistance in Cable Ties">
          <img src="images/polyamidecablelands.png" alt="Cable ties and cable glands close up" />
          <div class="blog-card-body">
            <span class="blog-card-kicker">Technical Articles</span>
            <h3>Understanding UV Resistance in Cable Ties</h3>
            <p>What outdoor applications need from cable tie materials and UV stability.</p>
            <div class="blog-meta">
              <span>Apr 20, 2024</span>
              <span>7 min read</span>
            </div>
          </div>
        </article>

        <article class="blog-card" style="cursor:pointer;" onclick="window.location='blog-detail.php'" data-category="company-news" data-title="Novoflex Expands Manufacturing Capacity">
          <img src="images/contact-2.jpg" alt="Novoflex manufacturing and support team" />
          <div class="blog-card-body">
            <span class="blog-card-kicker">Company News</span>
            <h3>Novoflex Expands Manufacturing Capacity</h3>
            <p>Supporting growing customer demand with stronger production capabilities.</p>
            <div class="blog-meta">
              <span>Apr 12, 2024</span>
              <span>3 min read</span>
            </div>
          </div>
        </article>

        <article class="blog-card" style="cursor:pointer;" onclick="window.location='blog-detail.php'" data-category="product-insights" data-title="Nylon 6.6 vs Nylon 12 Cable Ties">
          <img src="images/polyamidecablelands.png" alt="Cable tie product range" />
          <div class="blog-card-body">
            <span class="blog-card-kicker">Product Insights</span>
            <h3>Nylon 6.6 vs Nylon 12 Cable Ties: What is the Difference?</h3>
            <p>Compare key material differences for strength, temperature, and environment.</p>
            <div class="blog-meta">
              <span>Apr 5, 2024</span>
              <span>6 min read</span>
            </div>
          </div>
        </article>

        <article class="blog-card" style="cursor:pointer;" onclick="window.location='blog-detail.php'" data-category="application" data-title="Railway Applications Ensuring Safety with Reliable Cable Management">
          <img src="images/contact-2.jpg" alt="Industrial office and engineering support" />
          <div class="blog-card-body">
            <span class="blog-card-kicker">Application</span>
            <h3>Railway Applications: Ensuring Safety with Reliable Cable Management</h3>
            <p>How durable fastening and routing solutions support critical transport systems.</p>
            <div class="blog-meta">
              <span>Mar 30, 2024</span>
              <span>5 min read</span>
            </div>
          </div>
        </article>

        <article class="blog-card" style="cursor:pointer;" onclick="window.location='blog-detail.php'" data-category="industry-trends" data-title="Trends Driving the Cable Management Industry in 2024">
          <img src="images/polyamidecablelands.png" alt="Industrial cable products" />
          <div class="blog-card-body">
            <span class="blog-card-kicker">Industry Trends</span>
            <h3>Trends Driving the Cable Management Industry in 2024</h3>
            <p>Material innovation, efficiency, and compliance are shaping the market.</p>
            <div class="blog-meta">
              <span>Mar 18, 2024</span>
              <span>4 min read</span>
            </div>
          </div>
        </article>

        <article class="blog-card" style="cursor:pointer;" onclick="window.location='blog-detail.php'" data-category="technical-articles" data-title="Cable Tie Testing Standards You Should Know">
          <img src="images/contact-2.jpg" alt="Technical support and product testing environment" />
          <div class="blog-card-body">
            <span class="blog-card-kicker">Technical Articles</span>
            <h3>Cable Tie Testing Standards You Should Know</h3>
            <p>A quick look at product testing, performance, and reliability checks.</p>
            <div class="blog-meta">
              <span>Mar 12, 2024</span>
              <span>5 min read</span>
            </div>
          </div>
        </article>
      </div>

      <div class="blog-empty" id="blog-empty" hidden>No blog articles match your search.</div>

      <nav class="blog-pagination" aria-label="Blog pagination">
        <button type="button" id="blog-prev">Previous</button>
        <div id="blog-pages" class="blog-page-numbers"></div>
        <button type="button" id="blog-next">Next</button>
      </nav>
    </div>
  </section>

  <section class="blog-section pt-0 pb-5">
    <div class="container">
      <div class="blog-help-strip">
        <div class="blog-help-copy">
          <span class="blog-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg>
          </span>
          <span>
            <strong>Can not find what you are looking for?</strong>
            <span>Talk to our experts for tailored solutions and product recommendations.</span>
          </span>
        </div>
        <a class="btn btn-brand" href="contact.php">Contact Our Experts <span aria-hidden="true">-></span></a>
      </div>
    </div>
  </section>
</main>

<script>
  (function () {
    var cards = Array.prototype.slice.call(document.querySelectorAll('.blog-card'));
    var search = document.getElementById('blog-search');
    var category = document.getElementById('blog-category');
    var searchList = document.getElementById('blog-search-list');
    var featured = document.querySelector('.featured-blog-card');
    var featuredHeading = document.getElementById('featured-heading');
    var pages = document.getElementById('blog-pages');
    var prev = document.getElementById('blog-prev');
    var next = document.getElementById('blog-next');
    var empty = document.getElementById('blog-empty');
    var count = document.getElementById('blog-result-count');
    var currentPage = 1;
    var perPage = 6;

    function getMatches() {
      var query = (search.value || '').trim().toLowerCase();
      var selected = category.value;

      return cards.filter(function (card) {
        var haystack = (card.dataset.title + ' ' + card.textContent).toLowerCase();
        var categoryMatch = selected === 'all' || card.dataset.category === selected;
        var searchMatch = !query || haystack.indexOf(query) !== -1;
        return categoryMatch && searchMatch;
      });
    }

    function render() {
      var matches = getMatches();
      var hasSearch = (search.value || '').trim().length > 0;
      var totalPages = Math.max(1, Math.ceil(matches.length / perPage));
      currentPage = Math.min(currentPage, totalPages);
      var start = (currentPage - 1) * perPage;
      var visible = matches.slice(start, start + perPage);

      cards.forEach(function (card) {
        card.hidden = visible.indexOf(card) === -1;
      });

      empty.hidden = matches.length !== 0;
      count.textContent = matches.length ? 'Showing ' + matches.length + ' article' + (matches.length === 1 ? '' : 's') : 'No articles found';

      if (featured) {
        featured.hidden = hasSearch;
      }
      if (featuredHeading) {
        featuredHeading.style.visibility = hasSearch ? 'hidden' : '';
      }

      pages.innerHTML = '';
      for (var i = 1; i <= totalPages; i += 1) {
        var button = document.createElement('button');
        button.type = 'button';
        button.textContent = i;
        button.className = i === currentPage ? 'is-active' : '';
        button.addEventListener('click', function () {
          currentPage = parseInt(this.textContent, 10);
          render();
        });
        pages.appendChild(button);
      }

      prev.disabled = currentPage === 1;
      next.disabled = currentPage === totalPages || matches.length === 0;
    }

    function renderSearchList() {
      var query = (search.value || '').trim().toLowerCase();
      var matches = getMatches().slice(0, 6);

      searchList.innerHTML = '';

      if (!query) {
        searchList.hidden = true;
        return;
      }

      if (!matches.length) {
        var emptyItem = document.createElement('div');
        emptyItem.className = 'blog-search-item is-empty';
        emptyItem.textContent = 'No matching blogs found';
        searchList.appendChild(emptyItem);
        searchList.hidden = false;
        return;
      }

      matches.forEach(function (card) {
        var item = document.createElement('button');
        item.type = 'button';
        item.className = 'blog-search-item';
        item.innerHTML = '<strong>' + card.querySelector('h3').textContent + '</strong><span>' + card.querySelector('.blog-card-kicker').textContent + '</span>';
        item.addEventListener('click', function () {
          search.value = card.querySelector('h3').textContent;
          currentPage = 1;
          render();
          searchList.hidden = true;
        });
        searchList.appendChild(item);
      });

      searchList.hidden = false;
    }

    search.addEventListener('input', function () {
      currentPage = 1;
      render();
      renderSearchList();
    });

    category.addEventListener('change', function () {
      currentPage = 1;
      render();
      renderSearchList();
    });

    search.addEventListener('focus', renderSearchList);

    document.addEventListener('click', function (event) {
      if (!event.target.closest('.blog-search-wrap')) {
        searchList.hidden = true;
      }
    });

    prev.addEventListener('click', function () {
      currentPage = Math.max(1, currentPage - 1);
      render();
    });

    next.addEventListener('click', function () {
      currentPage += 1;
      render();
    });

    render();
  }());
</script>

<?php include 'footer.php'; ?>
