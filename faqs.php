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
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#all-q11" aria-expanded="true">
                      Does Novoflex follow quality control procedures?
                    </button>
                  </h2>
                  <div id="all-q11" class="accordion-collapse collapse show" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Products are manufactured under stringent quality control processes to ensure consistent performance and reliability.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q12" aria-expanded="false">
                      Are Novoflex products tested before dispatch?
                    </button>
                  </h2>
                  <div id="all-q12" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Quality checks and inspections are carried out to maintain product performance and consistency.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q13" aria-expanded="false">
                      What makes Novoflex products reliable?
                    </button>
                  </h2>
                  <div id="all-q13" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      High-quality raw materials, manufacturing expertise, process control, and rigorous testing contribute to product reliability.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q14" aria-expanded="false">
                      Are Novoflex products manufactured using engineering-grade materials?
                    </button>
                  </h2>
                  <div id="all-q14" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Products are manufactured using carefully selected engineering polymers and other high-performance materials.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q15" aria-expanded="false">
                      Why is material selection important?
                    </button>
                  </h2>
                  <div id="all-q15" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Material selection affects strength, temperature resistance, UV stability, chemical resistance, and service life.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q16" aria-expanded="false">
                      Are corrosion-resistant products available?
                    </button>
                  </h2>
                  <div id="all-q16" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Stainless steel cable ties and other specialized products are designed for corrosive environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q17" aria-expanded="false">
                      Are flame-retardant products available?
                    </button>
                  </h2>
                  <div id="all-q17" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Certain product categories include flame-retardant variants designed for safety-critical applications.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q18" aria-expanded="false">
                      How does Novoflex ensure product consistency?
                    </button>
                  </h2>
                  <div id="all-q18" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Through controlled manufacturing processes, inspections, and continuous quality monitoring.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q19" aria-expanded="false">
                      Are products suitable for long-term industrial use?
                    </button>
                  </h2>
                  <div id="all-q19" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Many products are designed for long service life in demanding operating environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q20" aria-expanded="false">
                      Can Novoflex support customers with quality documentation?
                    </button>
                  </h2>
                  <div id="all-q20" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Product specifications and technical documentation can be provided upon request.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q21" aria-expanded="false">
                      How do I select the correct cable tie?
                    </button>
                  </h2>
                  <div id="all-q21" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      The correct cable tie depends on bundle diameter, tensile strength requirements, operating temperature, environmental exposure, and installation conditions.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q22" aria-expanded="false">
                      What is tensile strength in cable ties?
                    </button>
                  </h2>
                  <div id="all-q22" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Tensile strength refers to the maximum load a cable tie can withstand before breaking. Higher tensile strength is recommended for heavy-duty applications.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q23" aria-expanded="false">
                      How do I determine the correct cable gland size?
                    </button>
                  </h2>
                  <div id="all-q23" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Cable gland selection should be based on the outer diameter of the cable, environmental conditions, and enclosure requirements.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q24" aria-expanded="false">
                      What is the difference between Nylon 6.6 and polypropylene?
                    </button>
                  </h2>
                  <div id="all-q24" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Nylon 6.6 offers higher strength and temperature resistance, while polypropylene provides superior chemical resistance for specific environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q25" aria-expanded="false">
                      How do I determine the correct cable marker size?
                    </button>
                  </h2>
                  <div id="all-q25" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Cable markers should be selected according to the cable's outer diameter rather than conductor size.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q26" aria-expanded="false">
                      What information should I provide when requesting technical assistance?
                    </button>
                  </h2>
                  <div id="all-q26" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Providing cable size, operating temperature, installation environment, exposure conditions, and application details helps us recommend the most suitable product.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q27" aria-expanded="false">
                      Are technical drawings available?
                    </button>
                  </h2>
                  <div id="all-q27" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      For many products, dimensional drawings and technical specifications can be provided upon request.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q28" aria-expanded="false">
                      Can Novoflex recommend alternatives to existing products?
                    </button>
                  </h2>
                  <div id="all-q28" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Our technical team can suggest equivalent or improved solutions based on your requirements.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q29" aria-expanded="false">
                      What is UV resistance?
                    </button>
                  </h2>
                  <div id="all-q29" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      UV resistance refers to a product's ability to withstand prolonged exposure to sunlight without significant degradation.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q30" aria-expanded="false">
                      What is flame-retardant performance?
                    </button>
                  </h2>
                  <div id="all-q30" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Flame-retardant products are designed to resist ignition and reduce flame propagation in the event of fire exposure.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q31" aria-expanded="false">
                      What is operating temperature range?
                    </button>
                  </h2>
                  <div id="all-q31" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Operating temperature range defines the minimum and maximum temperatures at which a product can reliably perform.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q32" aria-expanded="false">
                      How do I choose between nylon and stainless steel cable ties?
                    </button>
                  </h2>
                  <div id="all-q32" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Nylon ties are ideal for general-purpose applications, while stainless steel ties are preferred for extreme temperatures, corrosive environments, and heavy-duty installations.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q33" aria-expanded="false">
                      What is strain relief?
                    </button>
                  </h2>
                  <div id="all-q33" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Strain relief helps protect cables from mechanical stress by preventing excessive pulling, bending, or movement.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q34" aria-expanded="false">
                      Can Novoflex help with product selection during project design?
                    </button>
                  </h2>
                  <div id="all-q34" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Our team can provide recommendations during the design and specification stages of a project.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q35" aria-expanded="false">
                      Are installation guidelines available?
                    </button>
                  </h2>
                  <div id="all-q35" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Installation guidance and product usage recommendations can be provided for many product categories.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q36" aria-expanded="false">
                      Which industries commonly use Novoflex products?
                    </button>
                  </h2>
                  <div id="all-q36" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Novoflex products are widely used in automotive, electrical, electronics, telecom, power distribution, renewable energy, railways, pharmaceuticals, food processing, logistics, and industrial manufacturing sectors.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q37" aria-expanded="false">
                      Are Novoflex products suitable for outdoor installations?
                    </button>
                  </h2>
                  <div id="all-q37" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Various product ranges such as UV-resistant cable ties, cable glands, and identification systems are designed for outdoor environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q38" aria-expanded="false">
                      Can Novoflex products be used in renewable energy projects?
                    </button>
                  </h2>
                  <div id="all-q38" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Many products are used in solar power, wind energy, and electrical infrastructure projects where reliability and durability are essential.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q39" aria-expanded="false">
                      Which cable ties are recommended for solar installations?
                    </button>
                  </h2>
                  <div id="all-q39" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      UV-resistant cable ties and stainless steel cable ties are commonly recommended for outdoor solar installations.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q40" aria-expanded="false">
                      Are Novoflex products suitable for automotive applications?
                    </button>
                  </h2>
                  <div id="all-q40" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Automotive manufacturers and suppliers use Novoflex products for wiring harnesses, cable routing, and fastening applications.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q41" aria-expanded="false">
                      Can Novoflex products be used in control panels?
                    </button>
                  </h2>
                  <div id="all-q41" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Cable ties, cable glands, identification products, and cable protection systems are commonly used in electrical control panels.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q42" aria-expanded="false">
                      Are Novoflex products suitable for railway applications?
                    </button>
                  </h2>
                  <div id="all-q42" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Many Novoflex products are suitable for demanding transportation and railway applications where reliability is critical.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q43" aria-expanded="false">
                      Can Novoflex products be used in food processing facilities?
                    </button>
                  </h2>
                  <div id="all-q43" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Selected product ranges, including metal-detectable cable ties, are suitable for food and beverage applications.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q44" aria-expanded="false">
                      Which products are recommended for marine environments?
                    </button>
                  </h2>
                  <div id="all-q44" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Stainless steel cable ties and corrosion-resistant products are generally recommended for marine and offshore environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q45" aria-expanded="false">
                      Can Novoflex products be used in telecom infrastructure?
                    </button>
                  </h2>
                  <div id="all-q45" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Cable management, cable protection, and cable gland products are widely used in telecom installations.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q46" aria-expanded="false">
                      Are Novoflex products suitable for data centres?
                    </button>
                  </h2>
                  <div id="all-q46" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Cable identification, cable routing, and fastening solutions are commonly used in data centre environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q47" aria-expanded="false">
                      Can Novoflex products be used in pharmaceutical facilities?
                    </button>
                  </h2>
                  <div id="all-q47" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Specialized cable management and identification products are used in pharmaceutical manufacturing environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q48" aria-expanded="false">
                      Which products help improve workplace safety?
                    </button>
                  </h2>
                  <div id="all-q48" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Cable identification products, cable protection systems, cable management solutions, and security seals all contribute to safer operations.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q49" aria-expanded="false">
                      Are Novoflex products suitable for harsh industrial environments?
                    </button>
                  </h2>
                  <div id="all-q49" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Many product variants are specifically designed for exposure to chemicals, moisture, vibration, UV radiation, and extreme temperatures.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q50" aria-expanded="false">
                      Can Novoflex products support Industry 4.0 and automation systems?
                    </button>
                  </h2>
                  <div id="all-q50" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Cable management and identification solutions are widely used in automation, robotics, and smart manufacturing environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q51" aria-expanded="false">
                      Who is Novoflex?
                    </button>
                  </h2>
                  <div id="all-q51" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Novoflex is a manufacturer of cable management systems, wiring accessories, identification products, security seals, and engineered plastic solutions.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q52" aria-expanded="false">
                      What makes Novoflex different from other suppliers?
                    </button>
                  </h2>
                  <div id="all-q52" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Novoflex combines manufacturing expertise, quality control, innovation, and customer-focused engineering support.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q53" aria-expanded="false">
                      How many product variants does Novoflex manufacture?
                    </button>
                  </h2>
                  <div id="all-q53" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Novoflex offers an extensive portfolio of products across cable management, fastening, identification, protection, and security applications.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q54" aria-expanded="false">
                      Which industries does Novoflex serve?
                    </button>
                  </h2>
                  <div id="all-q54" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      The company serves automotive, electrical, telecom, renewable energy, industrial automation, infrastructure, logistics, and many other sectors.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q55" aria-expanded="false">
                      Does Novoflex support OEM customers?
                    </button>
                  </h2>
                  <div id="all-q55" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex works closely with OEMs, distributors, and industrial customers.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q56" aria-expanded="false">
                      Does Novoflex work with Tier-1 suppliers?
                    </button>
                  </h2>
                  <div id="all-q56" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Products are supplied to OEMs and Tier-1 manufacturers across multiple industries.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q57" aria-expanded="false">
                      Can Novoflex develop customer-specific products?
                    </button>
                  </h2>
                  <div id="all-q57" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Product customization and application-specific development are available depending on project requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q58" aria-expanded="false">
                      Do you support VA/VE projects?
                    </button>
                  </h2>
                  <div id="all-q58" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex can work with customers on Value Analysis and Value Engineering initiatives to optimize performance and cost.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q59" aria-expanded="false">
                      Can Novoflex provide engineering support?
                    </button>
                  </h2>
                  <div id="all-q59" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Technical guidance and product selection assistance are available throughout the project lifecycle.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q60" aria-expanded="false">
                      Do you offer private-label manufacturing?
                    </button>
                  </h2>
                  <div id="all-q60" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. OEM branding and private-label solutions are available for selected product categories.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q61" aria-expanded="false">
                      Can Novoflex support new product development projects?
                    </button>
                  </h2>
                  <div id="all-q61" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. The company can collaborate with customers to develop specialized solutions for new applications.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q62" aria-expanded="false">
                      Does Novoflex manufacture products in India?
                    </button>
                  </h2>
                  <div id="all-q62" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex is an Indian manufacturer serving both domestic and international markets.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q63" aria-expanded="false">
                      Can Novoflex support export customers?
                    </button>
                  </h2>
                  <div id="all-q63" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Export support is available for customers worldwide.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q64" aria-expanded="false">
                      How can I become a distributor or channel partner?
                    </button>
                  </h2>
                  <div id="all-q64" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Interested companies can contact the Novoflex sales team to discuss partnership opportunities.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q65" aria-expanded="false">
                      How can I contact Novoflex?
                    </button>
                  </h2>
                  <div id="all-q65" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      You can contact Novoflex through the website inquiry form, email, telephone, or by visiting the company directly.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q66" aria-expanded="false">
                      How quickly can I expect a response to my inquiry?
                    </button>
                  </h2>
                  <div id="all-q66" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      The Novoflex team strives to respond promptly to customer inquiries during business hours.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q67" aria-expanded="false">
                      Does Novoflex participate in industry exhibitions and trade shows?
                    </button>
                  </h2>
                  <div id="all-q67" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex regularly participates in industry events to showcase innovations and connect with customers.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q68" aria-expanded="false">
                      Where can I find the latest Novoflex product information?
                    </button>
                  </h2>
                  <div id="all-q68" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      The latest product information, catalogues, technical resources, and updates are available on the Novoflex website and through the sales team.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q69" aria-expanded="false">
                      What is the minimum order quantity (MOQ)?
                    </button>
                  </h2>
                  <div id="all-q69" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      MOQ depends on the product category, customization requirements, and production batch size.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q70" aria-expanded="false">
                      Can I order standard products in small quantities?
                    </button>
                  </h2>
                  <div id="all-q70" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Availability depends on the specific product and distribution channel.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q71" aria-expanded="false">
                      Do you support bulk industrial orders?
                    </button>
                  </h2>
                  <div id="all-q71" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex regularly supplies bulk quantities to OEMs, distributors, and industrial customers.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q72" aria-expanded="false">
                      Can products be customized with customer branding?
                    </button>
                  </h2>
                  <div id="all-q72" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. OEM branding, private labelling, and customized marking options are available for many product categories.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q73" aria-expanded="false">
                      Can products be supplied with custom packaging?
                    </button>
                  </h2>
                  <div id="all-q73" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Packaging solutions may be customized depending on customer requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q74" aria-expanded="false">
                      What is the typical lead time for orders?
                    </button>
                  </h2>
                  <div id="all-q74" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Lead times vary depending on product availability, customization requirements, and order volume.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q75" aria-expanded="false">
                      Do you support export shipments?
                    </button>
                  </h2>
                  <div id="all-q75" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex supplies products to customers in domestic and international markets.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q76" aria-expanded="false">
                      Can I request samples before placing a bulk order?
                    </button>
                  </h2>
                  <div id="all-q76" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Samples may be available for product evaluation and testing.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q77" aria-expanded="false">
                      How can I request a quotation?
                    </button>
                  </h2>
                  <div id="all-q77" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      You can submit an inquiry through the website, contact the sales team by email, or speak directly with a Novoflex representative.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q78" aria-expanded="false">
                      What information should be included in a quotation request?
                    </button>
                  </h2>
                  <div id="all-q78" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Product type, quantity, specifications, application details, and delivery requirements should be included whenever possible.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q79" aria-expanded="false">
                      Do you provide technical support during the ordering process?
                    </button>
                  </h2>
                  <div id="all-q79" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Technical assistance is available to help customers select the most suitable products.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q80" aria-expanded="false">
                      Can Novoflex support long-term supply agreements?
                    </button>
                  </h2>
                  <div id="all-q80" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Long-term supply arrangements may be discussed based on customer requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q81" aria-expanded="false">
                      How can I track the status of my order?
                    </button>
                  </h2>
                  <div id="all-q81" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Customers can contact the sales team for updates regarding order status and delivery schedules.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q82" aria-expanded="false">
                      Are custom-manufactured products available?
                    </button>
                  </h2>
                  <div id="all-q82" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Customized solutions can be developed subject to feasibility and volume requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q83" aria-expanded="false">
                      Can Novoflex support urgent project requirements?
                    </button>
                  </h2>
                  <div id="all-q83" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Depending on stock availability and production schedules, expedited support may be possible.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q84" aria-expanded="false">
                      What industries use Novoflex products?
                    </button>
                  </h2>
                  <div id="all-q84" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Novoflex products are used across automotive, electrical and electronics, power distribution, telecommunications, renewable energy, railways, aviation, pharmaceuticals, food processing, logistics, infrastructure, and industrial manufacturing sectors.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q85" aria-expanded="false">
                      What products does Novoflex manufacture?
                    </button>
                  </h2>
                  <div id="all-q85" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Novoflex manufactures cable ties, cable glands, wiring accessories, cable identification products, security seals, mounting solutions, cable protection products, stainless steel cable ties, connector accessories, and engineered plastic components.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q86" aria-expanded="false">
                      Are Novoflex products manufactured in India?
                    </button>
                  </h2>
                  <div id="all-q86" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex is an Indian manufacturer specializing in cable management and wiring accessory solutions with decades of industry experience. It has its manufacturing plants located in the city of Kolkata, West Bengal.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q87" aria-expanded="false">
                      What materials are used in Novoflex products?
                    </button>
                  </h2>
                  <div id="all-q87" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      <p>Depending on the product category, Novoflex products are manufactured using UL-approved Nylon 6.6, stainless steel, polypropylene, and other engineering-grade polymers.</p>
                      <p>In order to provide the best quality, we use only Nylon sourced from global market leaders.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q88" aria-expanded="false">
                      Are Novoflex products suitable for industrial environments?
                    </button>
                  </h2>
                  <div id="all-q88" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Many products are designed to perform in demanding environments involving vibration, moisture, UV exposure, chemicals, corrosion, and temperature fluctuations.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q89" aria-expanded="false">
                      Do you offer custom-made products?
                    </button>
                  </h2>
                  <div id="all-q89" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex can develop customized products, colors, branding, packaging, serial numbering, and application-specific solutions depending on project requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q90" aria-expanded="false">
                      Can I request product samples?
                    </button>
                  </h2>
                  <div id="all-q90" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Product samples may be provided for evaluation and testing subject to availability and project requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q91" aria-expanded="false">
                      Do you support OEM and private-label manufacturing?
                    </button>
                  </h2>
                  <div id="all-q91" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex supports OEM manufacturing, private labeling, and customer-specific branding solutions.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q92" aria-expanded="false">
                      Are Novoflex products exported internationally?
                    </button>
                  </h2>
                  <div id="all-q92" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Novoflex supplies products to customers across domestic and international markets.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q93" aria-expanded="false">
                      How can I determine which product is right for my application?
                    </button>
                  </h2>
                  <div id="all-q93" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Our technical team can recommend suitable products based on application requirements, operating conditions, installation methods, and industry standards.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q94" aria-expanded="false">
                      Are product datasheets available?
                    </button>
                  </h2>
                  <div id="all-q94" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. Technical datasheets, product catalogues, and specification sheets are available upon request.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q95" aria-expanded="false">
                      Can Novoflex develop products for new applications?
                    </button>
                  </h2>
                  <div id="all-q95" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Yes. We work closely with customers to develop solutions tailored to emerging industry requirements and specialized applications.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q96" aria-expanded="false">
                      Do Novoflex products comply with quality standards?
                    </button>
                  </h2>
                  <div id="all-q96" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Products are manufactured under strict quality control systems and supplied to leading OEMs and industrial customers.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q97" aria-expanded="false">
                      What makes Novoflex different from other suppliers?
                    </button>
                  </h2>
                  <div id="all-q97" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      Novoflex combines manufacturing expertise, quality control, product innovation, and customer-focused engineering support to deliver reliable solutions.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#all-q98" aria-expanded="false">
                      What is the moisture content in novoflex products and why is it important?
                    </button>
                  </h2>
                  <div id="all-q98" class="accordion-collapse collapse" data-bs-parent="#accordionAll">
                    <div class="accordion-body">
                      <p>Nylon 6,6 is a highly hygroscopic material which actively absorbs and releases moisture from the atmosphere based on the prevalent atmospheric conditions where it is stored. The moisture content significantly affects the mechanical properties of the raw material as well as the finished products, especially with regards to the flexibility and minimum loop tensile strength.</p>
                      <p>When Nylon is exposed to 100% relative humidity, it can absorb upto 8.5% moisture which reduces the loop tensile strength by upto 50%. A higher moisture content leads to a lower loop tensile strength and the highest loop tensile strength is achieved in a Dry As Moulded (DAM) condition.</p>
                      <p>Cable ties conditioned with moisture content between 2 &ndash; 4%, depending on the seasonal changes at the time of the year, are shown to have the ideal balance between flexibility and loop tensile strength prior to installation. After achieving positive locking, the cable ties enter a static condition and any further changes in moisture content are insignificant.</p>
                      <p>Polypropylene is largely unaffected by moisture content in the atmospheric conditions and hence the effect on loop tensile strength is negligible. Stainless Steel both coated and uncoated are unaffected by moisture and there is no effect on loop tensile strength.</p>
                      <p>Novoflex adjusts and processes its products according to the atmospheric conditions prevailing at the time of manufacturing. For specific requirements of atmospheric conditions, please inform us and we will process the material accordingly.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- COMPANY -->
            <div class="tab-pane fade" id="faq-company" role="tabpanel" aria-labelledby="faq-company-tab">
              <div class="accordion" id="accordionCompany">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q1" aria-expanded="true">
                      Who is Novoflex?
                    </button>
                  </h2>
                  <div id="comp-q1" class="accordion-collapse collapse show" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Novoflex is a manufacturer of cable management systems, wiring accessories, identification products, security seals, and engineered plastic solutions.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q2" aria-expanded="false">
                      What makes Novoflex different from other suppliers?
                    </button>
                  </h2>
                  <div id="comp-q2" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Novoflex combines manufacturing expertise, quality control, innovation, and customer-focused engineering support.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q3" aria-expanded="false">
                      How many product variants does Novoflex manufacture?
                    </button>
                  </h2>
                  <div id="comp-q3" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Novoflex offers an extensive portfolio of products across cable management, fastening, identification, protection, and security applications.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q4" aria-expanded="false">
                      Which industries does Novoflex serve?
                    </button>
                  </h2>
                  <div id="comp-q4" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      The company serves automotive, electrical, telecom, renewable energy, industrial automation, infrastructure, logistics, and many other sectors.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q5" aria-expanded="false">
                      Does Novoflex support OEM customers?
                    </button>
                  </h2>
                  <div id="comp-q5" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. Novoflex works closely with OEMs, distributors, and industrial customers.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q6" aria-expanded="false">
                      Does Novoflex work with Tier-1 suppliers?
                    </button>
                  </h2>
                  <div id="comp-q6" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. Products are supplied to OEMs and Tier-1 manufacturers across multiple industries.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q7" aria-expanded="false">
                      Can Novoflex develop customer-specific products?
                    </button>
                  </h2>
                  <div id="comp-q7" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. Product customization and application-specific development are available depending on project requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q8" aria-expanded="false">
                      Do you support VA/VE projects?
                    </button>
                  </h2>
                  <div id="comp-q8" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. Novoflex can work with customers on Value Analysis and Value Engineering initiatives to optimize performance and cost.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q9" aria-expanded="false">
                      Can Novoflex provide engineering support?
                    </button>
                  </h2>
                  <div id="comp-q9" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. Technical guidance and product selection assistance are available throughout the project lifecycle.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q10" aria-expanded="false">
                      Do you offer private-label manufacturing?
                    </button>
                  </h2>
                  <div id="comp-q10" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. OEM branding and private-label solutions are available for selected product categories.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q11" aria-expanded="false">
                      Can Novoflex support new product development projects?
                    </button>
                  </h2>
                  <div id="comp-q11" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. The company can collaborate with customers to develop specialized solutions for new applications.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q12" aria-expanded="false">
                      Does Novoflex manufacture products in India?
                    </button>
                  </h2>
                  <div id="comp-q12" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. Novoflex is an Indian manufacturer serving both domestic and international markets.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q13" aria-expanded="false">
                      Can Novoflex support export customers?
                    </button>
                  </h2>
                  <div id="comp-q13" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. Export support is available for customers worldwide.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q14" aria-expanded="false">
                      How can I become a distributor or channel partner?
                    </button>
                  </h2>
                  <div id="comp-q14" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Interested companies can contact the Novoflex sales team to discuss partnership opportunities.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q15" aria-expanded="false">
                      How can I contact Novoflex?
                    </button>
                  </h2>
                  <div id="comp-q15" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      You can contact Novoflex through the website inquiry form, email, telephone, or by visiting the company directly.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q16" aria-expanded="false">
                      How quickly can I expect a response to my inquiry?
                    </button>
                  </h2>
                  <div id="comp-q16" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      The Novoflex team strives to respond promptly to customer inquiries during business hours.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q17" aria-expanded="false">
                      Does Novoflex participate in industry exhibitions and trade shows?
                    </button>
                  </h2>
                  <div id="comp-q17" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      Yes. Novoflex regularly participates in industry events to showcase innovations and connect with customers.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comp-q18" aria-expanded="false">
                      Where can I find the latest Novoflex product information?
                    </button>
                  </h2>
                  <div id="comp-q18" class="accordion-collapse collapse" data-bs-parent="#accordionCompany">
                    <div class="accordion-body">
                      The latest product information, catalogues, technical resources, and updates are available on the Novoflex website and through the sales team.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- APPLICATIONS -->
            <div class="tab-pane fade" id="faq-applications" role="tabpanel" aria-labelledby="faq-applications-tab">
              <div class="accordion" id="accordionApplications">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#app-q3" aria-expanded="true">
                      Which industries commonly use Novoflex products?
                    </button>
                  </h2>
                  <div id="app-q3" class="accordion-collapse collapse show" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Novoflex products are widely used in automotive, electrical, electronics, telecom, power distribution, renewable energy, railways, pharmaceuticals, food processing, logistics, and industrial manufacturing sectors.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q4" aria-expanded="false">
                      Are Novoflex products suitable for outdoor installations?
                    </button>
                  </h2>
                  <div id="app-q4" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Various product ranges such as UV-resistant cable ties, cable glands, and identification systems are designed for outdoor environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q5" aria-expanded="false">
                      Can Novoflex products be used in renewable energy projects?
                    </button>
                  </h2>
                  <div id="app-q5" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Many products are used in solar power, wind energy, and electrical infrastructure projects where reliability and durability are essential.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q6" aria-expanded="false">
                      Which cable ties are recommended for solar installations?
                    </button>
                  </h2>
                  <div id="app-q6" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      UV-resistant cable ties and stainless steel cable ties are commonly recommended for outdoor solar installations.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q7" aria-expanded="false">
                      Are Novoflex products suitable for automotive applications?
                    </button>
                  </h2>
                  <div id="app-q7" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Automotive manufacturers and suppliers use Novoflex products for wiring harnesses, cable routing, and fastening applications.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q8" aria-expanded="false">
                      Can Novoflex products be used in control panels?
                    </button>
                  </h2>
                  <div id="app-q8" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Cable ties, cable glands, identification products, and cable protection systems are commonly used in electrical control panels.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q9" aria-expanded="false">
                      Are Novoflex products suitable for railway applications?
                    </button>
                  </h2>
                  <div id="app-q9" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Many Novoflex products are suitable for demanding transportation and railway applications where reliability is critical.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q10" aria-expanded="false">
                      Can Novoflex products be used in food processing facilities?
                    </button>
                  </h2>
                  <div id="app-q10" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Selected product ranges, including metal-detectable cable ties, are suitable for food and beverage applications.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q11" aria-expanded="false">
                      Which products are recommended for marine environments?
                    </button>
                  </h2>
                  <div id="app-q11" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Stainless steel cable ties and corrosion-resistant products are generally recommended for marine and offshore environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q12" aria-expanded="false">
                      Can Novoflex products be used in telecom infrastructure?
                    </button>
                  </h2>
                  <div id="app-q12" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Cable management, cable protection, and cable gland products are widely used in telecom installations.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q13" aria-expanded="false">
                      Are Novoflex products suitable for data centres?
                    </button>
                  </h2>
                  <div id="app-q13" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Cable identification, cable routing, and fastening solutions are commonly used in data centre environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q14" aria-expanded="false">
                      Can Novoflex products be used in pharmaceutical facilities?
                    </button>
                  </h2>
                  <div id="app-q14" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Specialized cable management and identification products are used in pharmaceutical manufacturing environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q15" aria-expanded="false">
                      Which products help improve workplace safety?
                    </button>
                  </h2>
                  <div id="app-q15" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Cable identification products, cable protection systems, cable management solutions, and security seals all contribute to safer operations.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q16" aria-expanded="false">
                      Are Novoflex products suitable for harsh industrial environments?
                    </button>
                  </h2>
                  <div id="app-q16" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Many product variants are specifically designed for exposure to chemicals, moisture, vibration, UV radiation, and extreme temperatures.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#app-q17" aria-expanded="false">
                      Can Novoflex products support Industry 4.0 and automation systems?
                    </button>
                  </h2>
                  <div id="app-q17" class="accordion-collapse collapse" data-bs-parent="#accordionApplications">
                    <div class="accordion-body">
                      Yes. Cable management and identification solutions are widely used in automation, robotics, and smart manufacturing environments.
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
                      What is the minimum order quantity (MOQ)?
                    </button>
                  </h2>
                  <div id="ord-q1" class="accordion-collapse collapse show" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      MOQ depends on the product category, customization requirements, and production batch size.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q2" aria-expanded="false">
                      Can I order standard products in small quantities?
                    </button>
                  </h2>
                  <div id="ord-q2" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Availability depends on the specific product and distribution channel.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q3" aria-expanded="false">
                      Do you support bulk industrial orders?
                    </button>
                  </h2>
                  <div id="ord-q3" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Yes. Novoflex regularly supplies bulk quantities to OEMs, distributors, and industrial customers.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q4" aria-expanded="false">
                      Can products be customized with customer branding?
                    </button>
                  </h2>
                  <div id="ord-q4" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Yes. OEM branding, private labelling, and customized marking options are available for many product categories.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q5" aria-expanded="false">
                      Can products be supplied with custom packaging?
                    </button>
                  </h2>
                  <div id="ord-q5" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Yes. Packaging solutions may be customized depending on customer requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q6" aria-expanded="false">
                      What is the typical lead time for orders?
                    </button>
                  </h2>
                  <div id="ord-q6" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Lead times vary depending on product availability, customization requirements, and order volume.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q7" aria-expanded="false">
                      Do you support export shipments?
                    </button>
                  </h2>
                  <div id="ord-q7" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Yes. Novoflex supplies products to customers in domestic and international markets.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q8" aria-expanded="false">
                      Can I request samples before placing a bulk order?
                    </button>
                  </h2>
                  <div id="ord-q8" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Yes. Samples may be available for product evaluation and testing.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q9" aria-expanded="false">
                      How can I request a quotation?
                    </button>
                  </h2>
                  <div id="ord-q9" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      You can submit an inquiry through the website, contact the sales team by email, or speak directly with a Novoflex representative.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q10" aria-expanded="false">
                      What information should be included in a quotation request?
                    </button>
                  </h2>
                  <div id="ord-q10" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Product type, quantity, specifications, application details, and delivery requirements should be included whenever possible.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q11" aria-expanded="false">
                      Do you provide technical support during the ordering process?
                    </button>
                  </h2>
                  <div id="ord-q11" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Yes. Technical assistance is available to help customers select the most suitable products.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q12" aria-expanded="false">
                      Can Novoflex support long-term supply agreements?
                    </button>
                  </h2>
                  <div id="ord-q12" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Yes. Long-term supply arrangements may be discussed based on customer requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q13" aria-expanded="false">
                      How can I track the status of my order?
                    </button>
                  </h2>
                  <div id="ord-q13" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Customers can contact the sales team for updates regarding order status and delivery schedules.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q14" aria-expanded="false">
                      Are custom-manufactured products available?
                    </button>
                  </h2>
                  <div id="ord-q14" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Yes. Customized solutions can be developed subject to feasibility and volume requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ord-q15" aria-expanded="false">
                      Can Novoflex support urgent project requirements?
                    </button>
                  </h2>
                  <div id="ord-q15" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                    <div class="accordion-body">
                      Depending on stock availability and production schedules, expedited support may be possible.
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
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q3" aria-expanded="true">
                      Does Novoflex follow quality control procedures?
                    </button>
                  </h2>
                  <div id="qual-q3" class="accordion-collapse collapse show" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Yes. Products are manufactured under stringent quality control processes to ensure consistent performance and reliability.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q4" aria-expanded="false">
                      Are Novoflex products tested before dispatch?
                    </button>
                  </h2>
                  <div id="qual-q4" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Quality checks and inspections are carried out to maintain product performance and consistency.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q5" aria-expanded="false">
                      What makes Novoflex products reliable?
                    </button>
                  </h2>
                  <div id="qual-q5" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      High-quality raw materials, manufacturing expertise, process control, and rigorous testing contribute to product reliability.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q6" aria-expanded="false">
                      Are Novoflex products manufactured using engineering-grade materials?
                    </button>
                  </h2>
                  <div id="qual-q6" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Yes. Products are manufactured using carefully selected engineering polymers and other high-performance materials.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q7" aria-expanded="false">
                      Why is material selection important?
                    </button>
                  </h2>
                  <div id="qual-q7" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Material selection affects strength, temperature resistance, UV stability, chemical resistance, and service life.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q8" aria-expanded="false">
                      Are corrosion-resistant products available?
                    </button>
                  </h2>
                  <div id="qual-q8" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Yes. Stainless steel cable ties and other specialized products are designed for corrosive environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q9" aria-expanded="false">
                      Are flame-retardant products available?
                    </button>
                  </h2>
                  <div id="qual-q9" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Yes. Certain product categories include flame-retardant variants designed for safety-critical applications.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q10" aria-expanded="false">
                      How does Novoflex ensure product consistency?
                    </button>
                  </h2>
                  <div id="qual-q10" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Through controlled manufacturing processes, inspections, and continuous quality monitoring.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q11" aria-expanded="false">
                      Are products suitable for long-term industrial use?
                    </button>
                  </h2>
                  <div id="qual-q11" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Yes. Many products are designed for long service life in demanding operating environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qual-q12" aria-expanded="false">
                      Can Novoflex support customers with quality documentation?
                    </button>
                  </h2>
                  <div id="qual-q12" class="accordion-collapse collapse" data-bs-parent="#accordionQuality">
                    <div class="accordion-body">
                      Yes. Product specifications and technical documentation can be provided upon request.
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
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q4" aria-expanded="true">
                      How do I select the correct cable tie?
                    </button>
                  </h2>
                  <div id="tech-q4" class="accordion-collapse collapse show" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      The correct cable tie depends on bundle diameter, tensile strength requirements, operating temperature, environmental exposure, and installation conditions.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q5" aria-expanded="false">
                      What is tensile strength in cable ties?
                    </button>
                  </h2>
                  <div id="tech-q5" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Tensile strength refers to the maximum load a cable tie can withstand before breaking. Higher tensile strength is recommended for heavy-duty applications.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q6" aria-expanded="false">
                      How do I determine the correct cable gland size?
                    </button>
                  </h2>
                  <div id="tech-q6" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Cable gland selection should be based on the outer diameter of the cable, environmental conditions, and enclosure requirements.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q7" aria-expanded="false">
                      What is the difference between Nylon 6.6 and polypropylene?
                    </button>
                  </h2>
                  <div id="tech-q7" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Nylon 6.6 offers higher strength and temperature resistance, while polypropylene provides superior chemical resistance for specific environments.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q8" aria-expanded="false">
                      How do I determine the correct cable marker size?
                    </button>
                  </h2>
                  <div id="tech-q8" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Cable markers should be selected according to the cable's outer diameter rather than conductor size.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q9" aria-expanded="false">
                      What information should I provide when requesting technical assistance?
                    </button>
                  </h2>
                  <div id="tech-q9" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Providing cable size, operating temperature, installation environment, exposure conditions, and application details helps us recommend the most suitable product.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q10" aria-expanded="false">
                      Are technical drawings available?
                    </button>
                  </h2>
                  <div id="tech-q10" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      For many products, dimensional drawings and technical specifications can be provided upon request.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q11" aria-expanded="false">
                      Can Novoflex recommend alternatives to existing products?
                    </button>
                  </h2>
                  <div id="tech-q11" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Yes. Our technical team can suggest equivalent or improved solutions based on your requirements.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q12" aria-expanded="false">
                      What is UV resistance?
                    </button>
                  </h2>
                  <div id="tech-q12" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      UV resistance refers to a product's ability to withstand prolonged exposure to sunlight without significant degradation.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q13" aria-expanded="false">
                      What is flame-retardant performance?
                    </button>
                  </h2>
                  <div id="tech-q13" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Flame-retardant products are designed to resist ignition and reduce flame propagation in the event of fire exposure.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q14" aria-expanded="false">
                      What is operating temperature range?
                    </button>
                  </h2>
                  <div id="tech-q14" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Operating temperature range defines the minimum and maximum temperatures at which a product can reliably perform.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q15" aria-expanded="false">
                      How do I choose between nylon and stainless steel cable ties?
                    </button>
                  </h2>
                  <div id="tech-q15" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Nylon ties are ideal for general-purpose applications, while stainless steel ties are preferred for extreme temperatures, corrosive environments, and heavy-duty installations.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q16" aria-expanded="false">
                      What is strain relief?
                    </button>
                  </h2>
                  <div id="tech-q16" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Strain relief helps protect cables from mechanical stress by preventing excessive pulling, bending, or movement.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q17" aria-expanded="false">
                      Can Novoflex help with product selection during project design?
                    </button>
                  </h2>
                  <div id="tech-q17" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Yes. Our team can provide recommendations during the design and specification stages of a project.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech-q18" aria-expanded="false">
                      Are installation guidelines available?
                    </button>
                  </h2>
                  <div id="tech-q18" class="accordion-collapse collapse" data-bs-parent="#accordionTech">
                    <div class="accordion-body">
                      Yes. Installation guidance and product usage recommendations can be provided for many product categories.
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
                      What industries use Novoflex products?
                    </button>
                  </h2>
                  <div id="prod-q1" class="accordion-collapse collapse show" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Novoflex products are used across automotive, electrical and electronics, power distribution, telecommunications, renewable energy, railways, aviation, pharmaceuticals, food processing, logistics, infrastructure, and industrial manufacturing sectors.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q2" aria-expanded="false">
                      What products does Novoflex manufacture?
                    </button>
                  </h2>
                  <div id="prod-q2" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Novoflex manufactures cable ties, cable glands, wiring accessories, cable identification products, security seals, mounting solutions, cable protection products, stainless steel cable ties, connector accessories, and engineered plastic components.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q3" aria-expanded="false">
                      Are Novoflex products manufactured in India?
                    </button>
                  </h2>
                  <div id="prod-q3" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Yes. Novoflex is an Indian manufacturer specializing in cable management and wiring accessory solutions with decades of industry experience. It has its manufacturing plants located in the city of Kolkata, West Bengal.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q4" aria-expanded="false">
                      What materials are used in Novoflex products?
                    </button>
                  </h2>
                  <div id="prod-q4" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      <p>Depending on the product category, Novoflex products are manufactured using UL-approved Nylon 6.6, stainless steel, polypropylene, and other engineering-grade polymers.</p>
                      <p>In order to provide the best quality, we use only Nylon sourced from global market leaders.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q5" aria-expanded="false">
                      Are Novoflex products suitable for industrial environments?
                    </button>
                  </h2>
                  <div id="prod-q5" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Yes. Many products are designed to perform in demanding environments involving vibration, moisture, UV exposure, chemicals, corrosion, and temperature fluctuations.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q6" aria-expanded="false">
                      Do you offer custom-made products?
                    </button>
                  </h2>
                  <div id="prod-q6" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Yes. Novoflex can develop customized products, colors, branding, packaging, serial numbering, and application-specific solutions depending on project requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q7" aria-expanded="false">
                      Can I request product samples?
                    </button>
                  </h2>
                  <div id="prod-q7" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Yes. Product samples may be provided for evaluation and testing subject to availability and project requirements.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q8" aria-expanded="false">
                      Do you support OEM and private-label manufacturing?
                    </button>
                  </h2>
                  <div id="prod-q8" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Yes. Novoflex supports OEM manufacturing, private labeling, and customer-specific branding solutions.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q9" aria-expanded="false">
                      Are Novoflex products exported internationally?
                    </button>
                  </h2>
                  <div id="prod-q9" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Yes. Novoflex supplies products to customers across domestic and international markets.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q10" aria-expanded="false">
                      How can I determine which product is right for my application?
                    </button>
                  </h2>
                  <div id="prod-q10" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Our technical team can recommend suitable products based on application requirements, operating conditions, installation methods, and industry standards.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q11" aria-expanded="false">
                      Are product datasheets available?
                    </button>
                  </h2>
                  <div id="prod-q11" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Yes. Technical datasheets, product catalogues, and specification sheets are available upon request.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q12" aria-expanded="false">
                      Can Novoflex develop products for new applications?
                    </button>
                  </h2>
                  <div id="prod-q12" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Yes. We work closely with customers to develop solutions tailored to emerging industry requirements and specialized applications.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q13" aria-expanded="false">
                      Do Novoflex products comply with quality standards?
                    </button>
                  </h2>
                  <div id="prod-q13" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Products are manufactured under strict quality control systems and supplied to leading OEMs and industrial customers.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q14" aria-expanded="false">
                      What makes Novoflex different from other suppliers?
                    </button>
                  </h2>
                  <div id="prod-q14" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      Novoflex combines manufacturing expertise, quality control, product innovation, and customer-focused engineering support to deliver reliable solutions.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod-q15" aria-expanded="false">
                      What is the moisture content in novoflex products and why is it important?
                    </button>
                  </h2>
                  <div id="prod-q15" class="accordion-collapse collapse" data-bs-parent="#accordionProducts">
                    <div class="accordion-body">
                      <p>Nylon 6,6 is a highly hygroscopic material which actively absorbs and releases moisture from the atmosphere based on the prevalent atmospheric conditions where it is stored. The moisture content significantly affects the mechanical properties of the raw material as well as the finished products, especially with regards to the flexibility and minimum loop tensile strength.</p>
                      <p>When Nylon is exposed to 100% relative humidity, it can absorb upto 8.5% moisture which reduces the loop tensile strength by upto 50%. A higher moisture content leads to a lower loop tensile strength and the highest loop tensile strength is achieved in a Dry As Moulded (DAM) condition.</p>
                      <p>Cable ties conditioned with moisture content between 2 &ndash; 4%, depending on the seasonal changes at the time of the year, are shown to have the ideal balance between flexibility and loop tensile strength prior to installation. After achieving positive locking, the cable ties enter a static condition and any further changes in moisture content are insignificant.</p>
                      <p>Polypropylene is largely unaffected by moisture content in the atmospheric conditions and hence the effect on loop tensile strength is negligible. Stainless Steel both coated and uncoated are unaffected by moisture and there is no effect on loop tensile strength.</p>
                      <p>Novoflex adjusts and processes its products according to the atmospheric conditions prevailing at the time of manufacturing. For specific requirements of atmospheric conditions, please inform us and we will process the material accordingly.</p>
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
