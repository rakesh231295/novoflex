<?php
require 'product-data.php';

$productSlug = $_GET['product'] ?? '';
$product = $novoflexProducts[$productSlug] ?? null;

if (!$product) {
  header('Location: product.php');
  exit;
}

$productFaqs = [
  'cable-ties-fastening-systems' => [
    'description' => 'Helpful answers about Cab Lok Series material, applications, resistance, customisation, and quality standards.',
    'items' => [
      ['question' => 'What are Cable Ties & Fastening Systems - Cab Lok Series used for in industrial cable management applications?', 'answer' => 'Cable Ties & Fastening Systems - Cab Lok Series are used for cable bundling, fastening, routing, and securing wire harnesses in industrial cable management applications.'],
      ['question' => 'What types of material does Novoflex manufacture Cable Ties & Fastening Systems - Cab Lok Series in?', 'answer' => 'Cable Ties & Fastening Systems - Cab Lok Series are made of Nylon 6.6, Nylon 6, Polypropylene and Stainless Steel material.'],
      ['question' => 'Are Cable Ties & Fastening Systems - Cab Lok Series suitable for automotive, electrical, electronics, solar, industrial equipment, and wire harness applications?', 'answer' => 'Yes, Cable Ties & Fastening Systems - Cab Lok Series are suitable for all these industries.'],
      ['question' => 'Are Cable Ties & Fastening Systems - Cab Lok Series resistant to fungus, corrosion, oils and mild chemical exposure?', 'answer' => 'Yes, Cable Ties & Fastening Systems - Cab Lok Series are resistant to fungus, corrosion, oils and mild chemical exposure.'],
      ['question' => 'Does Novoflex provide customised colours, branding, and bulk OEM supply options for Cable Ties & Fastening Systems - Cab Lok Series?', 'answer' => 'Yes, customisation is available based on MOQ.'],
      ['question' => 'Are Cable Ties & Fastening Systems - Cab Lok Series tested and manufactured under quality-controlled standards?', 'answer' => 'Yes, Cable Ties & Fastening Systems - Cab Lok Series are tested and manufactured under quality-controlled standards.'],
    ],
  ],
  'cable-routing-mounting-solutions' => [
    'description' => 'Helpful answers about Klip Sure material, applications, resistance, customisation, and quality standards.',
    'items' => [
      ['question' => 'What are Cable Routing & Mounting Solutions - Klip Sure used for in industrial cable management applications?', 'answer' => 'Cable Routing & Mounting Solutions - Klip Sure are used for organized cable routing, mounting, fixing, and wire harness support in industrial cable management applications.'],
      ['question' => 'What types of material does Novoflex manufacture Cable Routing & Mounting Solutions - Klip Sure in?', 'answer' => 'Cable Routing & Mounting Solutions - Klip Sure are made of Nylon 6.6 material.'],
      ['question' => 'Are Cable Routing & Mounting Solutions - Klip Sure suitable for automotive, electrical, electronics, solar, industrial equipment, and wire harness applications?', 'answer' => 'Yes, Cable Routing & Mounting Solutions - Klip Sure are suitable for all these industries.'],
      ['question' => 'Are Cable Routing & Mounting Solutions - Klip Sure resistant to fungus, corrosion, oils and mild chemical exposure?', 'answer' => 'Yes, Cable Routing & Mounting Solutions - Klip Sure are resistant to fungus, corrosion, oils and mild chemical exposure.'],
      ['question' => 'Does Novoflex provide customised colours, branding, and bulk OEM supply options for Cable Routing & Mounting Solutions - Klip Sure?', 'answer' => 'Yes, customisation is available based on MOQ.'],
      ['question' => 'Are Cable Routing & Mounting Solutions - Klip Sure tested and manufactured under quality-controlled standards?', 'answer' => 'Yes, Cable Routing & Mounting Solutions - Klip Sure are tested and manufactured under quality-controlled standards.'],
    ],
  ],
  'cable-entry-sealing-solutions' => [
    'description' => 'Helpful answers about Seal Pro material, applications, resistance, customisation, and quality standards.',
    'items' => [
      ['question' => 'What are Cable Entry & Sealing Solutions - Seal Pro used for in industrial cable management applications?', 'answer' => 'Cable Entry & Sealing Solutions - Seal Pro are used for safe cable entry, sealing, strain relief, and protection in industrial cable management applications.'],
      ['question' => 'What types of material does Novoflex manufacture Cable Entry & Sealing Solutions - Seal Pro in?', 'answer' => 'Novoflex Cable Entry & Sealing Solutions - Seal Pro are made of Polyamide, Nylon 6.6 material.'],
      ['question' => 'Are Novoflex Cable Entry & Sealing Solutions - Seal Pro suitable for automotive, electrical, electronics, solar, industrial equipment, and wire harness applications?', 'answer' => 'Yes, Novoflex Cable Entry & Sealing Solutions - Seal Pro are suitable for all these industries.'],
      ['question' => 'Are Novoflex Cable Entry & Sealing Solutions - Seal Pro resistant to fungus, corrosion, oils and mild chemical exposure?', 'answer' => 'Yes, Novoflex Cable Entry & Sealing Solutions - Seal Pro are resistant to fungus, corrosion, oils and mild chemical exposure.'],
      ['question' => 'Does Novoflex provide customised colours, branding, and bulk OEM supply options for Cable Entry & Sealing Solutions - Seal Pro?', 'answer' => 'Yes, customisation is available based on MOQ.'],
      ['question' => 'Are Novoflex Cable Entry & Sealing Solutions - Seal Pro tested for flammability and manufactured under quality-controlled standards?', 'answer' => 'Yes, Novoflex Cable Entry & Sealing Solutions - Seal Pro are tested for flammability and manufactured under quality-controlled standards.'],
    ],
  ],
  'cable-protection-systems' => [
    'description' => 'Helpful answers about Flexi-Guard material, applications, resistance, customisation, and quality standards.',
    'items' => [
      ['question' => 'What are Cable Protection Systems - Flexi-Guard used for in industrial cable management applications?', 'answer' => 'Cable Protection Systems - Flexi-Guard are used for cable protection, insulation, abrasion resistance, and organized routing in industrial cable management applications.'],
      ['question' => 'What types of material does Novoflex manufacture Cable Protection Systems - Flexi-Guard in?', 'answer' => 'Cable Protection Systems - Flexi-Guard are made of PVC Rubber material.'],
      ['question' => 'Are Cable Protection Systems - Flexi-Guard suitable for automotive, electrical, electronics, solar, industrial equipment, and wire harness applications?', 'answer' => 'Yes, Cable Protection Systems - Flexi-Guard are suitable for all these industries.'],
      ['question' => 'Are Cable Protection Systems - Flexi-Guard resistant to fungus, corrosion, oils and mild chemical exposure?', 'answer' => 'Yes, Cable Protection Systems - Flexi-Guard are resistant to fungus, corrosion, oils and mild chemical exposure.'],
      ['question' => 'Does Novoflex provide customised colours, branding, and bulk OEM supply options for Cable Protection Systems - Flexi-Guard?', 'answer' => 'Yes, customisation is available based on MOQ.'],
      ['question' => 'Are Cable Protection Systems - Flexi-Guard manufactured under quality-controlled standards?', 'answer' => 'Yes, Cable Protection Systems - Flexi-Guard are manufactured under quality-controlled standards.'],
    ],
  ],
  'pcb-support-systems' => [
    'description' => 'Helpful answers about Circuit ON material, applications, resistance, customisation, and quality standards.',
    'items' => [
      ['question' => 'What are PCB Support Systems - Circuit ON used for in industrial cable management applications?', 'answer' => 'PCB Support Systems - Circuit ON are used for printed circuit board mounting, spacing, support, insulation, and organized assembly in industrial applications.'],
      ['question' => 'What types of material does Novoflex manufacture PCB Support Systems - Circuit ON in?', 'answer' => 'PCB Support Systems - Circuit ON are made of Nylon 6 material.'],
      ['question' => 'Are PCB Support Systems - Circuit ON suitable for automotive, electrical, electronics, solar, industrial equipment, and wire harness applications?', 'answer' => 'Yes, PCB Support Systems - Circuit ON are suitable for all these industries.'],
      ['question' => 'Are PCB Support Systems - Circuit ON resistant to fungus, corrosion, oils and mild chemical exposure?', 'answer' => 'Yes, PCB Support Systems - Circuit ON are resistant to fungus, corrosion, oils and mild chemical exposure.'],
      ['question' => 'Does Novoflex provide customised colours, branding, and bulk OEM supply options for PCB Support Systems - Circuit ON?', 'answer' => 'Yes, customisation is available based on MOQ.'],
      ['question' => 'Are PCB Support Systems - Circuit ON tested and manufactured under quality-controlled standards?', 'answer' => 'Yes, PCB Support Systems - Circuit ON are tested and manufactured under quality-controlled standards.'],
    ],
  ],
  'plastic-fasteners-riveting-systems' => [
    'description' => 'Helpful answers about Snap Fit material, applications, resistance, customisation, and quality standards.',
    'items' => [
      ['question' => 'What are Plastic Fasteners & Riveting Systems - Snap Fit used for in industrial cable management applications?', 'answer' => 'Plastic Fasteners & Riveting Systems - Snap Fit are used for fastening, riveting, panel fixing, and secure assembly in industrial cable management applications.'],
      ['question' => 'What types of material does Novoflex manufacture Plastic Fasteners & Riveting Systems - Snap Fit in?', 'answer' => 'Plastic Fasteners & Riveting Systems - Snap Fit are made of Nylon 6 material.'],
      ['question' => 'Are Plastic Fasteners & Riveting Systems - Snap Fit suitable for automotive, electrical, electronics, solar, industrial equipment, and wire harness applications?', 'answer' => 'Yes, Plastic Fasteners & Riveting Systems - Snap Fit are suitable for all these industries.'],
      ['question' => 'Are Plastic Fasteners & Riveting Systems - Snap Fit resistant to fungus, corrosion, oils and mild chemical exposure?', 'answer' => 'Yes, Plastic Fasteners & Riveting Systems - Snap Fit are resistant to fungus, corrosion, oils and mild chemical exposure.'],
      ['question' => 'Does Novoflex provide customised colours, branding, and bulk OEM supply options for Plastic Fasteners & Riveting Systems - Snap Fit?', 'answer' => 'Yes, customisation is available based on MOQ.'],
      ['question' => 'Are Plastic Fasteners & Riveting Systems - Snap Fit tested and manufactured under quality-controlled standards?', 'answer' => 'Yes, Plastic Fasteners & Riveting Systems - Snap Fit are tested and manufactured under quality-controlled standards.'],
    ],
  ],
  'security-identification-systems' => [
    'description' => 'Helpful answers about Secure X material, applications, resistance, customisation, and quality standards.',
    'items' => [
      ['question' => 'What are Security & Identification Systems - Secure X used for in industrial cable management applications?', 'answer' => 'Security & Identification Systems - Secure X are used for product identification, cable marking, traceability, tamper-evident sealing, and secure cable management applications.'],
      ['question' => 'What types of material does Novoflex manufacture Security & Identification Systems - Secure X in?', 'answer' => 'Security & Identification Systems - Secure X are made of Nylon 6 and Nylon 6.6 material.'],
      ['question' => 'Are Security & Identification Systems - Secure X suitable for automotive, electrical, electronics, solar, industrial equipment, and wire harness applications?', 'answer' => 'Yes, Security & Identification Systems - Secure X are suitable for all these industries.'],
      ['question' => 'Are Security & Identification Systems - Secure X resistant to fungus, corrosion, oils and mild chemical exposure?', 'answer' => 'Yes, Security & Identification Systems - Secure X are resistant to fungus, corrosion, oils and mild chemical exposure.'],
      ['question' => 'Does Novoflex provide customised colours, branding, and bulk OEM supply options for Security & Identification Systems - Secure X?', 'answer' => 'Yes, customisation is available based on MOQ.'],
      ['question' => 'Are Security & Identification Systems - Secure X tested and manufactured under quality-controlled standards?', 'answer' => 'Yes, Security & Identification Systems - Secure X are tested and manufactured under quality-controlled standards.'],
    ],
  ],
];

$productFaq = $productFaqs[$productSlug] ?? null;
$pageTitle = $product['title'];
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
        <span aria-current="page"><?php echo htmlspecialchars($product['title']); ?></span>
      </nav>
      <div class="section-intro">
        <div class="section-kicker">Categories</div>
        <h2 class="section-title">Choose a category to view sub-categories.</h2>
      </div>

      <div class="row g-4">
        <?php foreach ($product['categories'] as $categorySlug => $category) : ?>
          <div class="col-md-6 col-lg-4">
            <a class="category-card category-card-link product-category-card" href="<?php echo novoflex_category_url($productSlug, $categorySlug); ?>">
              <span class="category-image product-category-image">
                <img src="<?php echo htmlspecialchars($category['image'] ?? $product['image']); ?>" alt="<?php echo htmlspecialchars($category['title']); ?>" />
              </span>
              <span class="category-label"><?php echo htmlspecialchars($product['label']); ?></span>
              <h3 class="category-title"><?php echo htmlspecialchars($category['title']); ?></h3>
              <p class="category-text"><?php echo count($category['items']); ?> products and sub-categories available in this range.</p>
              <span class="category-link-text">View Sub-Categories <i class="bi bi-arrow-right"></i></span>
            </a>
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
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
