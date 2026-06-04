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
  <section class="product-range-hero">
    <div class="container">
      <div class="product-range-hero-card">
        <div class="product-range-hero-copy">
          <nav class="product-range-breadcrumb" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <span>/</span>
            <span aria-current="page">Products</span>
            <span>/</span>
            <span>Industrial Cable Management</span>
          </nav>
          <h1>Industrial Cable Management and Engineered Plastic Solutions, Built to Perform.</h1>
          <p>High-performance cable management products and engineered plastic solutions for industrial applications. Reliable. Durable. Efficient.</p>
          <div class="product-range-actions">
            <a class="product-primary-btn" href="contact.php">Request a Quote <i class="bi bi-arrow-right"></i></a>
            <a class="product-outline-btn" href="contact.php">Download Catalogue <i class="bi bi-download"></i></a>
          </div>
        </div>
        <div class="product-range-hero-media" aria-hidden="true">
          <img class="product-hero-main-img" src="images/TieMounts.png" alt="" />
          <img class="product-hero-secondary-img" src="images/cable-protection.png" alt="" />
          <img class="product-hero-corner-img" src="images/WireManagement%20.png" alt="" />
        </div>
      </div>

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
  </section>

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

<?php include 'footer.php'; ?>
