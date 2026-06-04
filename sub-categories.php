<?php
require 'product-data.php';

$productSlug = $_GET['product'] ?? '';
$categorySlug = $_GET['category'] ?? '';
$product = $novoflexProducts[$productSlug] ?? null;
$category = $product['categories'][$categorySlug] ?? null;

if (!$product || !$category) {
  header('Location: product.php');
  exit;
}

$productFaqs = [
  'cord-management' => [
    'description' => 'Helpful answers about Cord Organix contents, ease of use, materials, and applications.',
    'items' => [
      ['question' => 'What is exactly inside the box?', 'answer' => 'Cord Organix contains 14 types of cable management tools with 137 total pieces.'],
      ['question' => 'Is this suitable for beginners?', 'answer' => 'Yes, it is tool-free and beginner-friendly.'],
      ['question' => 'What are Cord Organix products manufactured with?', 'answer' => 'Cord Organix is manufactured with Nylon 6 and Nylon 66 material.'],
      ['question' => 'What are the uses of Cord Organix?', 'answer' => 'Cord Organix is used to de-clutter the wiring systems at home.'],
    ],
  ],
  'connector-accessories' => [
    'description' => 'Helpful answers about Connector Accessories material, applications, resistance, customisation, and quality standards.',
    'items' => [
      ['question' => 'What are Connector Accessories used for in industrial cable management applications?', 'answer' => 'Connector Accessories are used for connector protection, cable exit support, wire connection organization, and secure assembly in industrial cable management applications.'],
      ['question' => 'What types of material does Novoflex manufacture Connector Accessories in?', 'answer' => 'Connector Accessories are made of Nylon 6 material.'],
      ['question' => 'Are Connector Accessories suitable for automotive, electrical, electronics, solar, industrial equipment, and wire harness applications?', 'answer' => 'Yes, Connector Accessories are suitable for all these industries.'],
      ['question' => 'Are Connector Accessories resistant to fungus, corrosion, oils and mild chemical exposure?', 'answer' => 'Yes, Connector Accessories are resistant to fungus, corrosion, oils and mild chemical exposure.'],
      ['question' => 'Does Novoflex provide customised colours, branding, and bulk OEM supply options for Connector Accessories?', 'answer' => 'Yes, customisation is available based on MOQ.'],
      ['question' => 'Are Connector Accessories manufactured under quality-controlled standards?', 'answer' => 'Yes, Connector Accessories are manufactured under quality-controlled standards.'],
    ],
  ],
];

$productFaq = $productFaqs[$productSlug] ?? null;
$pageTitle = $category['title'];
include 'header.php';
?>

<main class="page-shell product-subcategory-page">
  <section class="page-section product-subcategory-section">
    <div class="container">
      <nav class="page-breadcrumb category-page-breadcrumb" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <span>/</span>
        <a href="product.php">Products</a>
        <span>/</span>
        <?php if (!empty($product['direct_subcategory'])) : ?>
          <span aria-current="page"><?php echo htmlspecialchars($product['title']); ?></span>
        <?php else : ?>
          <a href="<?php echo novoflex_product_url($productSlug); ?>"><?php echo htmlspecialchars($product['title']); ?></a>
          <span>/</span>
          <span aria-current="page"><?php echo htmlspecialchars($category['title']); ?></span>
        <?php endif; ?>
      </nav>

      <section class="product-sub-hero">
        <div class="product-sub-hero-copy">
          <span><?php echo htmlspecialchars($product['series']); ?></span>
          <h1><?php echo htmlspecialchars($product['title']); ?></h1>
          <p><?php echo htmlspecialchars($product['description']); ?></p>
          <div class="product-sub-hero-features">
            <div><i class="bi bi-award"></i> High Tensile Strength</div>
            <div><i class="bi bi-sun"></i> UV Resistant</div>
            <div><i class="bi bi-lock"></i> Secure Locking</div>
            <div><i class="bi bi-arrows-expand"></i> Wide Range of Sizes</div>
            <div><i class="bi bi-fire"></i> Flame Retardant</div>
            <div><i class="bi bi-check2-circle"></i> RoHS Compliant</div>
          </div>
        </div>
        <div class="product-sub-hero-media">
          <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>" />
        </div>
      </section>

      <div class="product-sub-head">
        <h2>Our <?php echo htmlspecialchars($category['title']); ?> Range</h2>
        <div class="product-sub-tools">
          <button type="button" class="active"><i class="bi bi-grid-3x3-gap"></i></button>
          <button type="button"><i class="bi bi-list-ul"></i></button>
          <select aria-label="Sort products">
            <option>Sort by: Featured</option>
            <option>Sort by: Name</option>
          </select>
        </div>
      </div>

      <div class="product-sub-layout">
        <aside class="product-sub-sidebar">
          <button type="button" class="<?php echo empty($categorySlug) ? 'active' : ''; ?>"><i class="bi bi-grid"></i> All <?php echo htmlspecialchars($category['title']); ?></button>
          <?php foreach ($product['categories'] as $sideCategorySlug => $sideCategory) : ?>
            <a class="<?php echo $sideCategorySlug === $categorySlug ? 'active' : ''; ?>" href="<?php echo novoflex_category_url($productSlug, $sideCategorySlug); ?>">
              <i class="bi bi-sliders"></i> <?php echo htmlspecialchars($sideCategory['title']); ?>
            </a>
          <?php endforeach; ?>
          <div class="product-sub-help">
            <h3>Need Help?</h3>
            <p>Can't find the right product for your application?</p>
            <a href="contact.php">Contact Our Experts <i class="bi bi-telephone"></i></a>
          </div>
        </aside>

        <div class="product-sub-grid">
          <?php foreach ($category['items'] as $item) : ?>
            <?php $itemTitle = novoflex_item_title($item); ?>
            <article class="product-sub-card">
              <div class="product-sub-card-image">
                <img src="<?php echo htmlspecialchars(novoflex_item_image($item, $category, $product)); ?>" alt="<?php echo htmlspecialchars($itemTitle); ?>" />
              </div>
              <div class="product-sub-card-body">
                <h3><?php echo htmlspecialchars($itemTitle); ?></h3>
                <p>General purpose Novoflex component for industrial cable management and assembly applications.</p>
                <a href="#">View Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="product-sub-benefits">
        <div><i class="bi bi-stars"></i><strong>Reliable Performance</strong><span>Tested for strength and durability</span></div>
        <div><i class="bi bi-patch-check"></i><strong>Quality Assured</strong><span>Made from premium grade raw materials</span></div>
        <div><i class="bi bi-globe2"></i><strong>Global Standards</strong><span>RoHS compliant and internationally certified</span></div>
        <div><i class="bi bi-gear"></i><strong>Custom Solutions</strong><span>Tailored solutions for specific needs</span></div>
      </div>

      <section class="product-sub-cta">
        <div class="product-sub-cta-image">
          <img src="images/cab-lok-non-returnable-cable-ties/Cab-Lok-Cable-Ties.png" alt="Cable tie product solution" />
        </div>
        <div>
          <h2>Looking for the right solution?</h2>
          <p>Our experts are here to help you choose the best cable management solution for your application.</p>
          <a href="contact.php">Contact Us <i class="bi bi-arrow-right"></i></a>
        </div>
      </section>

      <?php if ($productFaq) : ?>
        <section class="category-faq-section mt-5">
          <div class="section-intro">
            <div class="section-kicker">FAQ</div>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-desc company-section-desc">
              <?php echo htmlspecialchars($productFaq['description']); ?>
            </p>
          </div>

          <div class="faq-shell">
            <div class="accordion" id="productFaq">
              <?php foreach ($productFaq['items'] as $faqIndex => $faq) : ?>
                <?php
                $faqHeadingId = 'productFaqHeading' . $faqIndex;
                $faqCollapseId = 'productFaqCollapse' . $faqIndex;
                ?>
                <div class="accordion-item">
                  <h3 class="accordion-header" id="<?php echo $faqHeadingId; ?>">
                    <button class="accordion-button <?php echo $faqIndex === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $faqCollapseId; ?>" aria-expanded="<?php echo $faqIndex === 0 ? 'true' : 'false'; ?>" aria-controls="<?php echo $faqCollapseId; ?>">
                      <?php echo htmlspecialchars($faq['question']); ?>
                    </button>
                  </h3>
                  <div id="<?php echo $faqCollapseId; ?>" class="accordion-collapse collapse <?php echo $faqIndex === 0 ? 'show' : ''; ?>" aria-labelledby="<?php echo $faqHeadingId; ?>" data-bs-parent="#productFaq">
                    <div class="accordion-body">
                      <?php echo htmlspecialchars($faq['answer']); ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
      <?php endif; ?>

      <div class="mt-5 text-center">
        <?php if (!empty($product['direct_subcategory'])) : ?>
          <a class="btn btn-brand btn-brand-lg" href="product.php">Back to Products</a>
        <?php else : ?>
          <a class="btn btn-brand btn-brand-lg" href="<?php echo novoflex_product_url($productSlug); ?>">Back to Categories</a>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
