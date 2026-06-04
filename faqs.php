<?php
$pageTitle = 'FAQs';
include 'header.php';
?>

<main class="page-shell">
  <section class="page-hero">
    <div class="container">
      <div class="row page-hero-grid g-4">
        <div class="col-lg-7">
          <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
              <a href="index.php">Home</a>
              <span>/</span>
              <span aria-current="page">FAQs</span>
            </nav>
            <span class="page-kicker">FAQs</span>
            <h1 class="page-title">Answers to Common Questions About Products, Supply, and Business Support.</h1>
            <p class="page-desc">
              These FAQs are adapted from the old Novoflex site and reorganized into a cleaner, more readable format to help buyers quickly understand how the company works.
            </p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="page-visual-card">
            <img src="images/SecuritySeals.png" alt="Novoflex FAQ and support" />
            <div class="page-visual-caption">
              <strong>Fast Answers for Industrial Buyers</strong>
              <span>Key questions around products, quality, supply support, and enquiries made easier to scan.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="row g-4 align-items-start">
        <div class="col-lg-8">
          <div class="faq-shell">
            <div class="accordion" id="faqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                    What are the most important characteristics for selecting cable ties?
                  </button>
                </h2>
                <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Selection depends on bundle diameter, loop tensile strength, UV resistance for outdoor use, flammability rating, operating temperature, chemical resistance, anchoring or fitment features, and whether reusability is required. The right variant should match the actual installation environment and performance need.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                    What materials are available for Novoflex products?
                  </button>
                </h2>
                <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    The old FAQ page highlights Nylon, Polypropylene, and Stainless Steel as the main material families used across Novoflex products. It also emphasizes that raw materials are sourced from established global suppliers to support product quality and consistency.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                    Why is moisture content important in Novoflex products?
                  </button>
                </h2>
                <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Nylon 6,6 is hygroscopic, so it absorbs and releases moisture depending on surrounding conditions. Moisture level affects flexibility and loop tensile strength, which is why cable ties are processed to maintain a practical balance before installation. Polypropylene and Stainless Steel are far less affected by moisture in normal atmospheric conditions.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                    Which chemicals are Novoflex cable ties resistant to?
                  </button>
                </h2>
                <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    The original FAQ lists resistance against a wide range of chemicals including acetone, cyclohexane, heptane, paraffin oil, silicon oil, carbon tetrachloride, trichloroethylene, xylene, and several other industrial solvents. Suitability should still be checked against the exact chemical environment before final selection.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                    Are Novoflex products UV resistant and suitable for outdoor use?
                  </button>
                </h2>
                <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    The old site explains that ultraviolet exposure can reduce tensile strength, increase brittleness, cause cracks, and lead to discoloration. To improve outdoor performance, Carbon Black and other stabilizing additives are used, and black variants are positioned as suitable for outdoor use.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqSix" aria-expanded="false" aria-controls="faqSix">
                    How is flammability tested?
                  </button>
                </h2>
                <div id="faqSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Flammability is described using the UL94 vertical burning test, where samples are tested in both manufactured and aged conditions. Based on flame time, self-extinguishing behavior, and whether burning particles ignite cotton placed below, materials are classified into ratings such as UL94 V0 and UL94 V2.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqSeven" aria-expanded="false" aria-controls="faqSeven">
                    Does temperature affect the performance of cable ties?
                  </button>
                </h2>
                <div id="faqSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes. High temperatures can lead to oxidation, brittleness, and reduced long-term durability, while low temperatures can make parts temporarily brittle until conditions return to normal. The ideal installation range mentioned on the old site is between 0°C and 40°C, with performance after installation depending on the raw material used.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqEight" aria-expanded="false" aria-controls="faqEight">
                    What is loop tensile strength and how is it tested?
                  </button>
                </h2>
                <div id="faqEight" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Loop tensile strength measures the load-bearing performance of a cable tie after it is looped and locked. The old FAQ states that Novoflex tests cable ties in line with SAE AS 3367, using controlled conditioning and a mandrel-based tensile test to record the load at which the tie fails.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqNine" aria-expanded="false" aria-controls="faqNine">
                    How do you install adhesive-backed cable tie mounts?
                  </button>
                </h2>
                <div id="faqNine" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    The old page recommends using these mounts only for light-duty bundling on smooth, straight, clean, and grease-free surfaces. Proper installation involves preparing the surface well, removing the release liner, placing the mount accurately, and applying firm pressure without touching the adhesive area unnecessarily.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTen" aria-expanded="false" aria-controls="faqTen">
                    What are the optimum storage conditions and shelf life for Novoflex products?
                  </button>
                </h2>
                <div id="faqTen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    The old FAQ explains that products should ideally stay in original sealed packaging, away from direct sunlight, and in cool, dark storage conditions. Packaging is designed to maintain moisture equilibrium for about 6 months after manufacture, and once a packet is opened it should be resealed quickly if not fully used.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info-image-card">
            <img src="images/flexiform.png" alt="Product support and enquiry" />
            <div class="info-image-body">
              <div class="info-image-title">Need a direct answer?</div>
              <div class="info-image-text">
                If your requirement is specific to a project, application, or volume enquiry, connect through the contact page and the Novoflex team can respond directly.
              </div>
              <div class="mt-4">
                <a class="btn btn-brand" href="contact.php">Contact Novoflex</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
