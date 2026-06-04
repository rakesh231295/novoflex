<?php
$pageTitle = 'Products';
require 'product-data.php';
include 'header.php';
?>

<main class="page-shell">
  <section class="page-hero">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
              <a href="index.php">Home</a>
              <span>/</span>
              <span aria-current="page">Products</span>
            </nav>
            <span class="page-kicker">Products</span>
            <h1 class="page-title">Industrial Cable Management and Engineered Plastic Solutions, Built to Perform.</h1>
            <p class="page-desc">
              The Novoflex product portfolio is built around fastening, sealing, routing, protection, and support needs across industrial assemblies. This page follows the old product page structure more closely while presenting the categories in a sharper visual format.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="page-visual-card">
            <img src="images/TieMounts.png" alt="Novoflex product range" />
            <div class="page-visual-caption">
              <strong>Built for Multiple Industries</strong>
              <span>From fastening and routing to sealing and protection, the product mix is designed for practical industrial use.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="section-intro">
        <div class="section-kicker">Product Categories</div>
        <h2 class="section-title">Core product categories from the Novoflex range.</h2>
      </div>
      <div class="row g-4">
        <?php foreach ($novoflexProducts as $productSlug => $product) : ?>
          <div class="col-md-6 col-lg-4">
            <a class="category-card category-card-link" href="<?php echo novoflex_product_url($productSlug); ?>">
              <span class="category-image"><img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>" /></span>
              <span class="category-label"><?php echo htmlspecialchars($product['label']); ?></span>
              <h3 class="category-title"><?php echo htmlspecialchars($product['title']); ?></h3>
              <p class="category-text"><?php echo htmlspecialchars($product['description']); ?></p>
              <span class="category-link-text">View Categories <i class="bi bi-arrow-right"></i></span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="page-section page-section-alt">
    <div class="container">
      <div class="row g-4 align-items-stretch">
        <div class="col-lg-6">
          <div class="content-card">
            <h2 class="content-card-title">What Guides Product Selection</h2>
            <ul class="feature-list">
              <li>Application environment including heat, vibration, abrasion, and exposure.</li>
              <li>Material suitability, dimensional reliability, and long-term performance.</li>
              <li>Ease of installation, servicing, and maintenance in the field.</li>
              <li>Compatibility with OEM assembly standards and industrial usage conditions.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content-card content-card-dark">
            <h2 class="content-card-title">Why Buyers Choose the Range</h2>
            <ul class="feature-list">
              <li>Practical products engineered around real installation needs.</li>
              <li>Broad portfolio from standard fastening to niche accessory categories.</li>
              <li>Dependable performance focus aligned to industrial quality expectations.</li>
              <li>Supportive approach for repeat purchase and application-specific requirements.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="section-intro">
        <div class="section-kicker">Applications</div>
        <h2 class="section-title">Applications categories highlighted on the original product page.</h2>
      </div>
      <div class="pill-grid justify-content-center">
        <span class="app-pill">Aviation</span>
        <span class="app-pill">Automobiles</span>
        <span class="app-pill">Chemicals &amp; Dyes</span>
        <span class="app-pill">Computers &amp; Networking</span>
        <span class="app-pill">Pharmaceuticals &amp; Drugs</span>
        <span class="app-pill">Consumer Durables</span>
        <span class="app-pill">Couriers &amp; Logistics</span>
        <span class="app-pill">Solar Power</span>
        <span class="app-pill">Electric Metering</span>
        <span class="app-pill">Electronics</span>
        <span class="app-pill">Food Processing</span>
        <span class="app-pill">Retail Stores</span>
        <span class="app-pill">Control Panels</span>
        <span class="app-pill">Telecom</span>
        <span class="app-pill">Power Plants</span>
        <span class="app-pill">Railways</span>
        <span class="app-pill">Ship Building</span>
        <span class="app-pill">New Project Installations</span>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
