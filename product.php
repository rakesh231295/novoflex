<?php
$pageTitle = 'Products';
require 'product-data.php';
include 'header.php';

$productTabs = [
  'all' => 'All Products',
];

$productApplications = [
  ['icon' => 'bi-buildings', 'label' => 'Industrial Automation'],
  ['icon' => 'bi-lightning-charge', 'label' => 'Electrical Installations'],
  ['icon' => 'bi-broadcast-pin', 'label' => 'Telecom Networks'],
  ['icon' => 'bi-sun', 'label' => 'Renewable Energy'],
  ['icon' => 'bi-truck', 'label' => 'Transportation & Railways'],
  ['icon' => 'bi-building-gear', 'label' => 'Construction'],
  ['icon' => 'bi-fuel-pump', 'label' => 'Oil & Gas'],
  ['icon' => 'bi-water', 'label' => 'Marine & Shipbuilding'],
];

$productHighlights = [
  ['icon' => 'bi-award', 'title' => 'High Tensile Strength', 'text' => 'Built to handle heavy-duty applications'],
  ['icon' => 'bi-sun', 'title' => 'UV Resistant', 'text' => 'Suitable for indoor and outdoor use'],
  ['icon' => 'bi-lock', 'title' => 'Secure Locking', 'text' => 'Reliable locking for maximum safety'],
  ['icon' => 'bi-arrows-expand', 'title' => 'Wide Range of Sizes', 'text' => 'Multiple sizes and materials available'],
  ['icon' => 'bi-fire', 'title' => 'Flame Retardant', 'text' => 'UL 94V-2 flame retardant material'],
  ['icon' => 'bi-patch-check', 'title' => 'RoHS Compliant', 'text' => 'Environment friendly and safe'],
];
?>

<main class="page-shell product-page-refresh">
  <section class="product-video-hero">
    <video autoplay muted loop playsinline id="productHeroVideo">
      <source src="images/product-video.mp4" type="video/mp4">
    </video>
  </section>

  <style>
    .product-video-hero {
      width: 100%;
      overflow: hidden;
      line-height: 0;
      background: #071e43;
      padding-top: 150px;
    }
    .product-video-hero video {
      width: 100%;
      display: block;
      object-fit: cover;
    }

    /* Mobile: reduce video top padding & slider for feature strip */
    @media (max-width: 767.98px) {
      .product-video-hero {
        padding-top: 80px;
      }
      .product-feature-strip {
        display: flex !important;
        grid-template-columns: unset !important;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        gap: 0 !important;
        padding-bottom: 6px;
        scrollbar-width: none;
      }
      .product-feature-strip::-webkit-scrollbar {
        display: none;
      }
      .product-feature-item {
        flex: 0 0 160px;
        min-width: 160px;
        scroll-snap-align: start;
        border-right: 1px solid rgba(12, 23, 41, .07) !important;
        border-top: 0 !important;
        min-height: 110px;
        padding: 14px 12px;
      }
      .product-feature-item:last-child {
        border-right: 0 !important;
      }
    }
  </style>

  <div class="container">
    <div class="product-feature-strip">
      <?php foreach ($productHighlights as $highlight) : ?>
        <div class="product-feature-item">
          <i class="bi <?php echo htmlspecialchars($highlight['icon']); ?>"></i>
          <strong><?php echo htmlspecialchars($highlight['title']); ?></strong>
          <span><?php echo htmlspecialchars($highlight['text']); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <section class="product-range-section">
    <div class="container">
      <div class="product-range-head">
        <span>Our Product Range</span>
        <h2>A complete range of cable management and engineered plastic solutions.</h2>
      </div>

      <div class="product-filter-tabs" role="tablist" aria-label="Product filters">
        <?php foreach ($productTabs as $tabKey => $tabLabel) : ?>
          <button type="button" class="<?php echo $tabKey === 'all' ? 'active' : ''; ?>" data-product-filter="<?php echo htmlspecialchars($tabKey); ?>" role="tab" aria-selected="<?php echo $tabKey === 'all' ? 'true' : 'false'; ?>">
            <?php echo htmlspecialchars($tabLabel); ?>
          </button>
        <?php endforeach; ?>
      </div>

      <div class="product-range-grid">
        <?php foreach ($novoflexProducts as $productSlug => $product) : ?>
          <?php
          $categoryCount = count($product['categories']);
          ?>
          <article class="product-range-card">
            <a href="<?php echo novoflex_product_url($productSlug); ?>">
              <span class="product-range-image">
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>" />
              </span>
              <span class="product-range-label"><?php echo htmlspecialchars($product['series']); ?></span>
              <h3><?php echo htmlspecialchars($product['title']); ?></h3>
              <p><?php echo htmlspecialchars($product['description']); ?></p>
              <small><?php echo $categoryCount; ?> <?php echo $categoryCount === 1 ? 'category' : 'categories'; ?> available</small>
              <span class="product-range-link">View Products <i class="bi bi-arrow-right"></i></span>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="product-applications-section">
    <div class="container">
      <div class="product-applications-card">
        <div class="product-range-head">
          <span>Applications</span>
          <h2>Our solutions are trusted across a wide range of industries.</h2>
        </div>
        <div class="product-applications-grid">
          <?php foreach ($productApplications as $application) : ?>
            <div class="product-application-item">
              <i class="bi <?php echo htmlspecialchars($application['icon']); ?>"></i>
              <span><?php echo htmlspecialchars($application['label']); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="product-help-section">
    <div class="container">
      <div class="product-help-panel">
        <div class="product-help-main">
          <span class="product-help-icon"><i class="bi bi-chat-square-text"></i></span>
          <div>
            <h2>Need help choosing the right solution?</h2>
            <p>Talk to our experts for the best solution for your application.</p>
          </div>
          <a href="contact.php">Contact Us <i class="bi bi-telephone"></i></a>
        </div>
        <div class="product-help-points">
          <div><i class="bi bi-box-seam"></i><span>High Quality Raw Materials</span></div>
          <div><i class="bi bi-gear-wide-connected"></i><span>Advanced Manufacturing</span></div>
          <div><i class="bi bi-award"></i><span>100% Tested Products</span></div>
          <div><i class="bi bi-globe2"></i><span>Global Certification</span></div>
          <a href="contact.php">Enquire Now <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const strip = document.querySelector('.product-feature-strip');
  if (!strip) return;
  
  let slideInterval;
  
  function startSlide() {
    if (window.innerWidth <= 767.98) {
      if (!slideInterval) {
        slideInterval = setInterval(() => {
          const itemWidth = 160;
          const maxScroll = strip.scrollWidth - strip.clientWidth;
          
          if (strip.scrollLeft + itemWidth >= maxScroll - 10) {
            strip.scrollTo({ left: 0, behavior: 'smooth' });
          } else {
            strip.scrollBy({ left: itemWidth, behavior: 'smooth' });
          }
        }, 3000);
      }
    } else {
      if (slideInterval) {
        clearInterval(slideInterval);
        slideInterval = null;
      }
    }
  }

  startSlide();
  window.addEventListener('resize', startSlide);
  
  // Pause auto-slide when user interacts with the slider
  strip.addEventListener('touchstart', () => {
    if (slideInterval) clearInterval(slideInterval);
  });
  strip.addEventListener('touchend', () => {
    slideInterval = null;
    // Restart after a small delay so we don't immediately interrupt their scroll
    setTimeout(startSlide, 2000);
  });
});
</script>

<?php include 'footer.php'; ?>
