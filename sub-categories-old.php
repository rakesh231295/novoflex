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

<main class="page-shell">
  <section class="page-section">
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
      <div class="section-intro">
        <div class="section-kicker">Sub-Categories</div>
        <h2 class="section-title"><?php echo htmlspecialchars($category['title']); ?> product range.</h2>
      </div>

      <div class="row g-4">
        <?php foreach ($category['items'] as $item) : ?>
          <?php $itemTitle = novoflex_item_title($item); ?>
          <div class="col-md-6 col-lg-4">
            <div class="category-card subcategory-card product-category-card">
              <span class="category-image product-category-image">
                <img src="<?php echo htmlspecialchars(novoflex_item_image($item, $category, $product)); ?>" alt="<?php echo htmlspecialchars($itemTitle); ?>" />
              </span>
              <span class="category-label"><?php echo htmlspecialchars($product['label']); ?></span>
              <h3 class="category-title"><?php echo htmlspecialchars($itemTitle); ?></h3>
              <p class="category-text">Precision-engineered Novoflex component for industrial cable management and assembly applications.</p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

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
