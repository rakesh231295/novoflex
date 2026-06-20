<?php
$pageTitle = 'FAQs';
include 'header.php';
?>

<main class="page-shell">
  <!-- Hero Section -->
  <section class="faq-hero">
    <div class="container">
      <div class="row align-items-center position-relative">
        <div class="col-lg-7 position-relative" style="z-index: 10;">
          <div class="mb-3">
            <span class="text-uppercase" style="color: #0056b3; font-weight: 800; font-size: 13px; letter-spacing: 0.1em;">FAQS</span>
          </div>
          <h1 style="color: #071e43; font-size: 46px; font-weight: 800; margin-bottom: 20px; line-height: 1.1;">
            Find answers to <br/><span style="color: #0056b3;">common questions.</span>
          </h1>
          <p style="color: #52637a; font-size: 16px; margin-bottom: 30px; max-width: 480px; line-height: 1.6;">
            Everything you need to know about Novoflex products, solutions and services.
          </p>
          <div class="d-flex flex-wrap gap-4 mb-4">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-chat-dots" style="font-size: 20px; color: #52637a;"></i>
              <span style="font-size: 14px; font-weight: 600; color: #071e43;">Expert Answers</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-shield-check" style="font-size: 20px; color: #52637a;"></i>
              <span style="font-size: 14px; font-weight: 600; color: #071e43;">Reliable Solutions</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-clock-history" style="font-size: 20px; color: #52637a;"></i>
              <span style="font-size: 14px; font-weight: 600; color: #071e43;">Quick Support</span>
            </div>
          </div>
          <div style="background: #071e43; border-radius: 12px; padding: 20px 24px; display: inline-flex; align-items: center; justify-content: space-between; width: 100%; max-width: 480px; box-shadow: 0 10px 30px rgba(7,30,67,0.15); position: relative; z-index: 2;">
            <div class="d-flex align-items-center gap-3">
              <div style="width: 44px; height: 44px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; color: #0056b3; font-size: 20px;">
                <i class="bi bi-headset"></i>
              </div>
              <div>
                <div style="color: #fff; font-weight: 700; font-size: 14px; margin-bottom: 2px;">Still have questions?</div>
                <div style="color: rgba(255,255,255,0.7); font-size: 12px;">Our experts are here to help you find the right solution.</div>
              </div>
            </div>
            <a href="contact.php" class="btn btn-brand btn-sm" style="background: #0056b3; border: none; padding: 8px 16px;">Contact Our Experts <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block position-absolute" style="right: 0; top: 50%; transform: translateY(-50%); height: 100%; z-index: 1;">
          <img src="images/faq-banner.png" alt="Novoflex FAQs" style="width: 100%; height: 100%; object-fit: cover; object-position: center right; -webkit-mask-image: linear-gradient(to right, transparent 0%, transparent 15%, black 60%); mask-image: linear-gradient(to right, transparent 0%, transparent 15%, black 60%); border-radius: 0 16px 16px 0;" />
        </div>
      </div>
    </div>
  </section>

  <section class="page-section" style="padding: 60px 0;">
    <div class="container">
      
      <!-- Browse by Category Tabs -->
      <div class="faq-tabs-wrap mb-5">
        <h4 style="color: #071e43; font-weight: 800; font-size: 16px; margin-bottom: 16px;">Browse by Category</h4>
        <ul class="nav nav-pills faq-nav-pills" id="faq-tabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="faq-all-tab" data-bs-toggle="pill" data-bs-target="#faq-all" type="button" role="tab" aria-selected="true">
              <i class="bi bi-globe"></i> All FAQs
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="faq-company-tab" data-bs-toggle="pill" data-bs-target="#faq-company" type="button" role="tab" aria-selected="false">
              <i class="bi bi-building"></i> Company
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="faq-applications-tab" data-bs-toggle="pill" data-bs-target="#faq-applications" type="button" role="tab" aria-selected="false">
              <i class="bi bi-gear-wide-connected"></i> Applications
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="faq-orders-tab" data-bs-toggle="pill" data-bs-target="#faq-orders" type="button" role="tab" aria-selected="false">
              <i class="bi bi-truck"></i> Orders
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="faq-quality-tab" data-bs-toggle="pill" data-bs-target="#faq-quality" type="button" role="tab" aria-selected="false">
              <i class="bi bi-shield-check"></i> Quality
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="faq-technical-tab" data-bs-toggle="pill" data-bs-target="#faq-technical" type="button" role="tab" aria-selected="false">
              <i class="bi bi-wrench"></i> Technical Support
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="faq-products-tab" data-bs-toggle="pill" data-bs-target="#faq-products" type="button" role="tab" aria-selected="false">
              <i class="bi bi-box"></i> Products
            </button>
          </li>
        </ul>
      </div>

      <div class="row g-5">
        <div class="col-lg-8">
          <div class="tab-content faq-tab-pane" id="faq-tabContent">
            
            <!-- ALL FAQS -->
            <div class="tab-pane fade show active" id="faq-all" role="tabpanel" aria-labelledby="faq-all-tab">
              <div class="accordion" id="accordionAll">
                
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#all-q1" aria-expanded="true">
                      What are the most important characteristics for selecting cable ties?
                    </button>
                  </h2>
                  <div id="all-q1" class="accordion-collapse collapse show" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Selection depends on bundle diameter, loop tensile strength, UV resistance for outdoor use, flammability rating, operating temperature, chemical resistance, anchoring or fitment features, and whether reusability is required. The right variant should match the actual installation environment and performance need.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q2" aria-expanded="false">
                      What materials are available for Novoflex products?
                    </button>
                  </h2>
                  <div id="all-q2" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      The FAQ highlights Nylon, Polypropylene, and Stainless Steel as the main material families used across Novoflex products. It also emphasizes that raw materials are sourced from established global suppliers to support product quality and consistency.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q3" aria-expanded="false">
                      Why is moisture content important in Novoflex products?
                    </button>
                  </h2>
                  <div id="all-q3" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Nylon 6,6 is hygroscopic, so it absorbs and releases moisture depending on surrounding conditions. Moisture level affects flexibility and loop tensile strength, which is why cable ties are processed to maintain a practical balance before installation. Polypropylene and Stainless Steel are far less affected by moisture in normal atmospheric conditions.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q4" aria-expanded="false">
                      Which chemicals are Novoflex cable ties resistant to?
                    </button>
                  </h2>
                  <div id="all-q4" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      The original FAQ lists resistance against a wide range of chemicals including acetone, cyclohexane, heptane, paraffin oil, silicon oil, carbon tetrachloride, trichloroethylene, xylene, and several other industrial solvents. Suitability should still be checked against the exact chemical environment before final selection.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q5" aria-expanded="false">
                      Are Novoflex products UV resistant and suitable for outdoor use?
                    </button>
                  </h2>
                  <div id="all-q5" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      The site explains that ultraviolet exposure can reduce tensile strength, increase brittleness, cause cracks, and lead to discoloration. To improve outdoor performance, Carbon Black and other stabilizing additives are used, and black variants are positioned as suitable for outdoor use.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q6" aria-expanded="false">
                      How is flammability tested?
                    </button>
                  </h2>
                  <div id="all-q6" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Flammability is described using the UL94 vertical burning test, where samples are tested in both manufactured and aged conditions. Based on flame time, self-extinguishing behavior, and whether burning particles ignite cotton placed below, materials are classified into ratings such as UL94 V0 and UL94 V2.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q7" aria-expanded="false">
                      Does temperature affect the performance of cable ties?
                    </button>
                  </h2>
                  <div id="all-q7" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. High temperatures can lead to oxidation, brittleness, and reduced long-term durability, while low temperatures can make parts temporarily brittle until conditions return to normal. The ideal installation range mentioned is between 0°C and 40°C, with performance after installation depending on the raw material used.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q8" aria-expanded="false">
                      What is loop tensile strength and how is it tested?
                    </button>
                  </h2>
                  <div id="all-q8" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Loop tensile strength measures the load-bearing performance of a cable tie after it is looped and locked. Novoflex tests cable ties in line with SAE AS 3367, using controlled conditioning and a mandrel-based tensile test to record the load at which the tie fails.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q9" aria-expanded="false">
                      How do you install adhesive-backed cable tie mounts?
                    </button>
                  </h2>
                  <div id="all-q9" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      These mounts are recommended only for light-duty bundling on smooth, straight, clean, and grease-free surfaces. Proper installation involves preparing the surface well, removing the release liner, placing the mount accurately, and applying firm pressure without touching the adhesive area unnecessarily.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q10" aria-expanded="false">
                      What are the optimum storage conditions and shelf life for Novoflex products?
                    </button>
                  </h2>
                  <div id="all-q10" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Products should ideally stay in original sealed packaging, away from direct sunlight, and in cool, dark storage conditions. Packaging is designed to maintain moisture equilibrium for about 6 months after manufacture, and once a packet is opened it should be resealed quickly if not fully used.
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- COMPANY -->
            <div class="tab-pane fade" id="faq-company" role="tabpanel" aria-labelledby="faq-company-tab">
              <div class="accordion" id="accordionCompany">
                <div class="p-4 text-center">
                  <p style="color: #52637a;">More FAQs for this category are being updated.</p>
                </div>
              </div>
            </div>

            <!-- APPLICATIONS -->
            <div class="tab-pane fade" id="faq-applications" role="tabpanel" aria-labelledby="faq-applications-tab">
              <div class="accordion" id="accordionApplications">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#app-q1" aria-expanded="true">
                      Are Novoflex products UV resistant and suitable for outdoor use?
                    </button>
                  </h2>
                  <div id="app-q1" class="accordion-collapse collapse show" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      The site explains that ultraviolet exposure can reduce tensile strength, increase brittleness, cause cracks, and lead to discoloration. To improve outdoor performance, Carbon Black and other stabilizing additives are used, and black variants are positioned as suitable for outdoor use.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q2" aria-expanded="false">
                      How do you install adhesive-backed cable tie mounts?
                    </button>
                  </h2>
                  <div id="app-q2" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      These mounts are recommended only for light-duty bundling on smooth, straight, clean, and grease-free surfaces. Proper installation involves preparing the surface well, removing the release liner, placing the mount accurately, and applying firm pressure without touching the adhesive area unnecessarily.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ORDERS -->
            <div class="tab-pane fade" id="faq-orders" role="tabpanel" aria-labelledby="faq-orders-tab">
              <div class="accordion" id="accordionOrders">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q1" aria-expanded="true">
                      What are the optimum storage conditions and shelf life for Novoflex products?
                    </button>
                  </h2>
                  <div id="ord-q1" class="accordion-collapse collapse show" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Products should ideally stay in original sealed packaging, away from direct sunlight, and in cool, dark storage conditions. Packaging is designed to maintain moisture equilibrium for about 6 months after manufacture, and once a packet is opened it should be resealed quickly if not fully used.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- QUALITY -->
            <div class="tab-pane fade" id="faq-quality" role="tabpanel" aria-labelledby="faq-quality-tab">
              <div class="accordion" id="accordionQuality">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q1" aria-expanded="true">
                      How is flammability tested?
                    </button>
                  </h2>
                  <div id="qual-q1" class="accordion-collapse collapse show" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Flammability is described using the UL94 vertical burning test, where samples are tested in both manufactured and aged conditions. Based on flame time, self-extinguishing behavior, and whether burning particles ignite cotton placed below, materials are classified into ratings such as UL94 V0 and UL94 V2.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q2" aria-expanded="false">
                      What is loop tensile strength and how is it tested?
                    </button>
                  </h2>
                  <div id="qual-q2" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Loop tensile strength measures the load-bearing performance of a cable tie after it is looped and locked. Novoflex tests cable ties in line with SAE AS 3367, using controlled conditioning and a mandrel-based tensile test to record the load at which the tie fails.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- TECHNICAL SUPPORT -->
            <div class="tab-pane fade" id="faq-technical" role="tabpanel" aria-labelledby="faq-technical-tab">
              <div class="accordion" id="accordionTech">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q1" aria-expanded="true">
                      Why is moisture content important in Novoflex products?
                    </button>
                  </h2>
                  <div id="tech-q1" class="accordion-collapse collapse show" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Nylon 6,6 is hygroscopic, so it absorbs and releases moisture depending on surrounding conditions. Moisture level affects flexibility and loop tensile strength, which is why cable ties are processed to maintain a practical balance before installation. Polypropylene and Stainless Steel are far less affected by moisture in normal atmospheric conditions.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q2" aria-expanded="false">
                      Which chemicals are Novoflex cable ties resistant to?
                    </button>
                  </h2>
                  <div id="tech-q2" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      The original FAQ lists resistance against a wide range of chemicals including acetone, cyclohexane, heptane, paraffin oil, silicon oil, carbon tetrachloride, trichloroethylene, xylene, and several other industrial solvents. Suitability should still be checked against the exact chemical environment before final selection.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q3" aria-expanded="false">
                      Does temperature affect the performance of cable ties?
                    </button>
                  </h2>
                  <div id="tech-q3" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Yes. High temperatures can lead to oxidation, brittleness, and reduced long-term durability, while low temperatures can make parts temporarily brittle until conditions return to normal. The ideal installation range mentioned is between 0°C and 40°C, with performance after installation depending on the raw material used.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- PRODUCTS -->
            <div class="tab-pane fade" id="faq-products" role="tabpanel" aria-labelledby="faq-products-tab">
              <div class="accordion" id="accordionProducts">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q1" aria-expanded="true">
                      What are the most important characteristics for selecting cable ties?
                    </button>
                  </h2>
                  <div id="prod-q1" class="accordion-collapse collapse show" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Selection depends on bundle diameter, loop tensile strength, UV resistance for outdoor use, flammability rating, operating temperature, chemical resistance, anchoring or fitment features, and whether reusability is required. The right variant should match the actual installation environment and performance need.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q2" aria-expanded="false">
                      What materials are available for Novoflex products?
                    </button>
                  </h2>
                  <div id="prod-q2" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      The FAQ highlights Nylon, Polypropylene, and Stainless Steel as the main material families used across Novoflex products. It also emphasizes that raw materials are sourced from established global suppliers to support product quality and consistency.
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-4">
          
          <!-- Sidebar Box 1: Still have questions -->
          <div class="faq-sidebar-card faq-sidebar-dark">
            <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 12px;">Still have questions?</h4>
            <p style="font-size: 14px; color: rgba(255,255,255,0.8); margin-bottom: 24px; line-height: 1.6;">
              Our experts are here to help you. Get personalized recommendations and technical support.
            </p>
            <ul style="list-style: none; padding: 0; margin-bottom: 24px; display: flex; flex-direction: column; gap: 12px;">
              <li style="display: flex; gap: 10px; align-items: center; font-size: 13px; color: rgba(255,255,255,0.9);">
                <i class="bi bi-bullseye" style="color: #0056b3;"></i> Get personalized recommendations
              </li>
              <li style="display: flex; gap: 10px; align-items: center; font-size: 13px; color: rgba(255,255,255,0.9);">
                <i class="bi bi-wrench" style="color: #0056b3;"></i> Technical support from experts
              </li>
              <li style="display: flex; gap: 10px; align-items: center; font-size: 13px; color: rgba(255,255,255,0.9);">
                <i class="bi bi-clock-history" style="color: #0056b3;"></i> Quick response within 24 hours
              </li>
            </ul>
            <a href="contact.php" class="btn">Contact Our Experts <i class="bi bi-arrow-right"></i></a>
          </div>

          <!-- Sidebar Box 2: Quick Links -->
          <div class="faq-sidebar-card faq-sidebar-light">
            <h4 style="font-size: 16px; font-weight: 800; color: #071e43; margin-bottom: 20px;">Quick Links</h4>
            <div class="faq-quick-links">
              <a href="#" class="faq-quick-link">
                <i class="bi bi-journal-text icon"></i>
                <div class="faq-quick-link-content">
                  <div class="faq-quick-link-title">Product Catalog</div>
                  <div class="faq-quick-link-desc">Explore our product range</div>
                </div>
                <i class="bi bi-arrow-right arrow"></i>
              </a>
              <a href="#" class="faq-quick-link">
                <i class="bi bi-file-earmark-text icon"></i>
                <div class="faq-quick-link-content">
                  <div class="faq-quick-link-title">Installation Guides</div>
                  <div class="faq-quick-link-desc">Step-by-step installation support</div>
                </div>
                <i class="bi bi-arrow-right arrow"></i>
              </a>
              <a href="#" class="faq-quick-link">
                <i class="bi bi-shield-check icon"></i>
                <div class="faq-quick-link-content">
                  <div class="faq-quick-link-title">Certifications</div>
                  <div class="faq-quick-link-desc">View our quality certifications</div>
                </div>
                <i class="bi bi-arrow-right arrow"></i>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
