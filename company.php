<?php
$pageTitle = 'Company';
include 'header.php';
?>

<main class="page-shell company-page company-page-refresh">
  <section class="page-hero company-hero">
    <div class="container">
      <div class="row page-hero-grid g-4 align-items-center">
        <div class="col-lg-7">
          <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
              <a href="index.php">Home</a>
              <span>/</span>
              <span aria-current="page">Company</span>
            </nav>
            <span class="page-kicker">Company</span>
            <h1 class="page-title">Engineering-led manufacturing for industrial wiring accessories and precision plastic components.</h1>
            <p class="page-desc">
              Since 1980, Novoflex has supported OEMs, panel builders, infrastructure teams, and industrial buyers with application-focused products, disciplined quality systems, and dependable execution across demanding environments.
            </p>
            <div class="d-flex gap-3 flex-wrap page-hero-actions">
              <a class="btn btn-brand btn-brand-lg" href="contact.php">Talk to Our Team</a>
              <a class="btn btn-outline-brand btn-brand-lg" href="product.php">Explore Product Range</a>
            </div>

            <div class="company-stat-strip">
              <div class="company-stat">
                <strong>40+</strong>
                <span>Years of manufacturing experience</span>
              </div>
              <div class="company-stat">
                <strong>35,000</strong>
                <span>Sq. ft. production footprint</span>
              </div>
              <div class="company-stat">
                <strong>1500+</strong>
                <span>Industrial products and variants</span>
              </div>
              
              <div class="company-stat">
                <strong>200+</strong>
                <span>Skilled employee</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <img src="images/collage.jpg" class="img-fluid" alt="Novoflex manufacturing" />
        </div>
      </div>
    </div>
  </section>

  <section class="page-section" id="leadership-message">
    <div class="container">
      <div class="company-leadership-tabs">
        <div class="company-leadership-tab-nav nav" id="leadership-tab" role="tablist">
          <button
            class="company-leadership-tab active"
            id="founder-tab"
            data-bs-toggle="tab"
            data-bs-target="#founder-panel"
            type="button"
            role="tab"
            aria-controls="founder-panel"
            aria-selected="true"
          >
            Founder
          </button>
          <button
            class="company-leadership-tab"
            id="director-tab"
            data-bs-toggle="tab"
            data-bs-target="#director-panel"
            type="button"
            role="tab"
            aria-controls="director-panel"
            aria-selected="false"
          >
            MD & CEO
          </button>
        </div>

        <div class="tab-content" id="leadership-tab-content">
          <div
            class="tab-pane fade show active"
            id="founder-panel"
            role="tabpanel"
            aria-labelledby="founder-tab"
            tabindex="0"
          >
            <div class="row g-4 align-items-stretch">
              <div class="col-lg-5">
                <div class="content-media">
                  <img src="images/tc-banka.jpeg" alt="Founder of Novoflex" />
                </div>
              </div>
              <div class="col-lg-7">
                <div class="content-card content-card-dark company-message-card">
                  <span class="company-card-kicker">Our Founder</span>
                  <h2 class="content-card-title">Built on the belief that quality and innovation must move together.</h2>
                  <p class="content-card-text">
                    Late T.C. Banka envisioned Novoflex as a company that would deliver dependable products and services while continuously keeping pace with new technologies in wiring accessories and engineered plastic components.
                  </p>
                  <p class="content-card-text">
                    That direction still shapes the business today. The company continues to invest its energy in stronger products, practical engineering, disciplined execution, and long-term customer value rather than short-term wins.
                  </p>
                  <blockquote class="company-inline-quote">
                    "We continue on the path of quality, innovation, and growing customer value with greater passion, vigour, enthusiasm, and energy."
                  </blockquote>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade"
            id="director-panel"
            role="tabpanel"
            aria-labelledby="director-tab"
            tabindex="0"
          >
            <div class="row g-4 align-items-stretch">
              <div class="col-lg-5">
                <div class="content-media">
                  <img src="images/director.png" alt="Director Dinesh Kumar Banka" />
                </div>
              </div>
              <div class="col-lg-7">
                <div class="content-card content-card-dark company-message-card">
                  <span class="company-card-kicker">MD & CEO Profile</span>
                  <h2 class="content-card-title">Dinesh Kumar Banka</h2>
                  <p class="content-card-text">
                    With over four decades of deep industry experience, our Director has been the driving force behind Novoflex's evolution into a trusted manufacturing partner for leading OEMs and engineering companies.
                  </p>
                  <p class="content-card-text">
                    His journey is built on hands-on manufacturing expertise and a clear, uncompromising philosophy: quality is non-negotiable. This principle has enabled Novoflex to build enduring relationships with customers, consistently delivering products that meet stringent performance and reliability standards.
                  </p>
                  <p class="content-card-text">
                    Under his leadership, the company has continuously strengthened its capabilities across precision moulding, process control, and quality systems, aligning operations with the demanding requirements of the automotive and engineering sectors. His practical approach to problem-solving, combined with strong technical insight, has been central to the company's sustained growth and credibility.
                  </p>
                  <p class="content-card-text">
                    He is now focused on taking Novoflex to the next level by continuously enhancing its advanced manufacturing ecosystem, built on modern infrastructure, automation, and globally benchmarked quality standards. His vision is clear: to position Novoflex among India's most respected and export-driven manufacturers in cable management and engineering solutions.
                  </p>
                  <p class="content-card-text">
                    His leadership reflects discipline, integrity, and long-term thinking, laying the foundation for a resilient, future-ready organisation.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="company-directors-showcase">
        <div class="section-intro text-center">
          <div class="section-kicker">Leadership Team</div>
          <h2 class="section-title">Our Directors</h2>
          <p class="section-desc company-section-desc mx-auto">
            Driving Novoflex forward with long-term commitment, operational discipline, and a shared focus on growth.
          </p>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-xl-4">
            <article class="content-card company-director-card h-100">
              <div class="company-director-media">
                <img src="images/Deepa-Banka.png" alt="Deepa Banka" />
              </div>
              <div class="company-director-copy">
                <span class="company-card-kicker">Director</span>
                <h3 class="content-card-title">Deepa Banka</h3>
                <p class="content-card-text">Director</p>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-4">
            <article class="content-card company-director-card h-100">
              <div class="company-director-media">
                <img src="images/Vaibhav-Banka.png" alt="Vaibhav Banka" />
              </div>
              <div class="company-director-copy">
                <span class="company-card-kicker">Director</span>
                <h3 class="content-card-title">Vaibhav Banka</h3>
                <p class="content-card-text">Director</p>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-xl-4">
            <article class="content-card company-director-card h-100">
              <div class="company-director-media">
                <img src="images/Vineet-Kr.-Banka.png" alt="Vineet Kr. Banka" />
              </div>
              <div class="company-director-copy">
                <span class="company-card-kicker">Director</span>
                <h3 class="content-card-title">Vineet Kr. Banka</h3>
                <p class="content-card-text">Director</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section company-vm-section" id="vision-mission-values">
    <div class="container">
      <div class="section-intro">
        <div class="section-kicker">Vision, Mission &amp; Core Values</div>
        <h2 class="section-title">A simple operating philosophy with strong industrial discipline behind it.</h2>
        <p class="section-desc company-section-desc">
          Novoflex combines clear long-term direction with everyday execution focused on reliability, responsiveness, and engineering practicality.
        </p>
      </div>

      <div class="row g-4 company-privacy-grid company-vm-grid">
        <div class="col-lg-6">
          <article class="content-card h-100 company-privacy-card company-vm-feature-card company-vm-feature-card-red">
            <div class="company-vm-card-head">
              <span class="company-vm-icon" aria-hidden="true"><i class="bi bi-eye"></i></span>
              <span class="company-card-kicker">Vision</span>
            </div>
            <p class="company-vm-statement">
              To be a part of the core of every machine and system.
            </p>
          </article>
        </div>
        <div class="col-lg-6">
          <article class="content-card h-100 company-privacy-card company-vm-feature-card">
            <div class="company-vm-card-head">
              <span class="company-vm-icon" aria-hidden="true"><i class="bi bi-bullseye"></i></span>
              <span class="company-card-kicker">Mission</span>
            </div>
            <p class="company-vm-statement">
              To continuously innovate and produce cost effective quality products that simplify the needs of our customers on a daily basis.
            </p>
          </article>
        </div>
      </div>

      <div class="content-card company-values-panel mt-4">
        <div class="company-values-head">
          <span class="company-card-kicker">Core Values</span>
          <h3 class="content-card-title">Novoflex Core Values</h3>
          <p class="content-card-text">
            The principles that shape our manufacturing culture, customer relationships, and long-term direction.
          </p>
        </div>

        <div class="company-values-grid">
          <article class="company-value-card">
            <span class="company-value-no">01</span>
            <h4>Quality Without Compromise</h4>
            <p>We believe consistent quality is the foundation of long-term trust and manufacturing excellence.</p>
          </article>

          <article class="company-value-card">
            <span class="company-value-no">02</span>
            <h4>Customer Commitment</h4>
            <p>We build relationships that go beyond transactions, working closely with customers as long-term partners.</p>
          </article>

          <article class="company-value-card">
            <span class="company-value-no">03</span>
            <h4>Engineering Discipline</h4>
            <p>Precision, reliability, and continuous improvement guide everything we design and manufacture.</p>
          </article>

          <article class="company-value-card">
            <span class="company-value-no">04</span>
            <h4>Integrity in Every Interaction</h4>
            <p>Transparency and accountability define how we work with customers, suppliers, and our team.</p>
          </article>

          <article class="company-value-card">
            <span class="company-value-no">05</span>
            <h4>Reliability in Delivery</h4>
            <p>Dependable supply and responsiveness remain central to our service philosophy.</p>
          </article>

          <article class="company-value-card company-value-card-accent">
            <span class="company-value-no">06</span>
            <h4>Continuous Growth &amp; Innovation</h4>
            <p>We continuously evolve our products, processes, and infrastructure to meet future industry needs.</p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section" id="usp">
    <div class="container">
      <div class="section-intro">
        <div class="section-kicker">Why Novoflex</div>
        <h2 class="section-title">Six reasons industrial buyers continue to trust Novoflex.</h2>
        <p class="section-desc company-section-desc">
          A practical combination of legacy, breadth, quality discipline, and application-focused execution.
        </p>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-xl-4">
          <div class="content-card h-100 company-usp-card">
            <div class="company-usp-meta">
              <span class="company-usp-icon"><i class="bi bi-shield-check"></i></span>
              <span class="company-usp-index">01</span>
            </div>
            <h3 class="content-card-title">Trust &amp; Legacy</h3>
            <p class="content-card-text">
              A trusted partner to OEMs and industrial customers across sectors for over four decades.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="content-card h-100 company-usp-card">
            <div class="company-usp-meta">
              <span class="company-usp-icon"><i class="bi bi-diagram-3"></i></span>
              <span class="company-usp-index">02</span>
            </div>
            <h3 class="content-card-title">India's Widest Range of Wiring Accessories</h3>
            <p class="content-card-text">
              Comprehensive solutions across cable management, fastening, PCB accessories, and engineered plastic components.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="content-card h-100 company-usp-card">
            <div class="company-usp-meta">
              <span class="company-usp-icon"><i class="bi bi-award"></i></span>
              <span class="company-usp-index">03</span>
            </div>
            <h3 class="content-card-title">Certified Quality Manufacturing</h3>
            <p class="content-card-text">
              Products manufactured under globally aligned quality systems using high-grade raw materials.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="content-card h-100 company-usp-card">
            <div class="company-usp-meta">
              <span class="company-usp-icon"><i class="bi bi-cash-coin"></i></span>
              <span class="company-usp-index">04</span>
            </div>
            <h3 class="content-card-title">Cost-Effective Solutions</h3>
            <p class="content-card-text">
              Optimized manufacturing ensuring competitive pricing without compromising quality.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="content-card h-100 company-usp-card">
            <div class="company-usp-meta">
              <span class="company-usp-icon"><i class="bi bi-truck"></i></span>
              <span class="company-usp-index">05</span>
            </div>
            <h3 class="content-card-title">Reliable Supply Chain</h3>
            <p class="content-card-text">
              Efficient production planning and inventory systems ensure dependable supply timelines for all sectors and OEMs.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="content-card h-100 company-usp-card company-usp-card-accent">
            <div class="company-usp-meta">
              <span class="company-usp-icon"><i class="bi bi-gear-wide-connected"></i></span>
              <span class="company-usp-index">06</span>
            </div>
            <h3 class="content-card-title">Customer-Centric Engineering Approach</h3>
            <p class="content-card-text">
              Standard and customized solutions designed around real application requirements.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section page-section-alt" id="journey">
    <div class="container">
      <div class="section-intro company-journey-intro">
        <div class="section-kicker">Our Journey</div>
        <h2 class="section-title">Our Journey</h2>
        <p class="section-desc company-section-desc">
          A Legacy of Engineering Growth &amp; Capability Expansion
        </p>
      </div>

      <div class="company-journey-track">
        <article class="company-journey-item">
          <div class="company-journey-stage">
            <div class="company-journey-stage-icon"><i class="bi bi-building-gear"></i></div>
            <div class="company-journey-card-shell">
              <div class="company-journey-band">1980</div>
              <div class="company-journey-card-body">
                <h3>Foundation of Novoflex</h3>
                <ul class="company-journey-points">
                  <li>Established to manufacture precision plastic components.</li>
                </ul>
              </div>
            </div>
          </div>
        </article>

        <article class="company-journey-item">
          <div class="company-journey-stage">
            <div class="company-journey-stage-icon"><i class="bi bi-diagram-3"></i></div>
            <div class="company-journey-card-shell">
              <div class="company-journey-band">1990s</div>
              <div class="company-journey-card-body">
                <h3>Product Range Diversification</h3>
                <ul class="company-journey-points">
                  <li>Expanded into Wiring Accessories &amp; Security Seals</li>
                  <li>Deepened OEM Engagements</li>
                </ul>
              </div>
            </div>
          </div>
        </article>

        <article class="company-journey-item">
          <div class="company-journey-stage">
            <div class="company-journey-stage-icon"><i class="bi bi-buildings"></i></div>
            <div class="company-journey-card-shell">
              <div class="company-journey-band">2012-2013</div>
              <div class="company-journey-card-body">
                <h3>Product &amp; Facility Expansion</h3>
                <ul class="company-journey-points">
                  <li>Shift to New Modernised Facility</li>
                  <li>Stainless Steel Cable Ties Introduced as New Product</li>
                </ul>
              </div>
            </div>
          </div>
        </article>

        <article class="company-journey-item">
          <div class="company-journey-stage">
            <div class="company-journey-stage-icon"><i class="bi bi-patch-check"></i></div>
            <div class="company-journey-card-shell">
              <div class="company-journey-band">2014-2016</div>
              <div class="company-journey-card-body">
                <h3>Certification &amp; IATF Certified</h3>
                <ul class="company-journey-points">
                  <li>IATF 16949 Automotive Certification</li>
                  <li>Commissioned 2<sup>nd</sup> State-of-the-Art Plant</li>
                </ul>
              </div>
            </div>
          </div>
        </article>

        <article class="company-journey-item company-journey-item-featured">
          <div class="company-journey-stage">
            <div class="company-journey-stage-icon"><i class="bi bi-award"></i></div>
            <div class="company-journey-card-shell">
              <div class="company-journey-band">2024-2026</div>
              <div class="company-journey-card-body">
                <h3>ZED Gold &amp; 3rd Facility</h3>
                <ul class="company-journey-points">
                  <li>Awarded ZED Gold Certification</li>
                  <li>Construction Underway for world class 3<sup>rd</sup> Manufacturing Facility</li>
                </ul>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>


  <section class="page-section page-section-alt" id="product-line">
    <div class="container">
      <div class="section-intro section-intro-left mx-0">
        <div class="section-kicker">Our product line</div>
        <h2 class="section-title">Engineered Solutions Across 1500+ Components</h2>
      </div>

      <div class="content-card company-product-line-card">
        <div class="company-product-line-copy">
          <p class="content-card-text mt-0">
            At Novoflex, our product portfolio includes <strong>1500+ precision-engineered plastic components and fastening solutions</strong> designed to support a wide spectrum of industries including electrical, electronics, automotive, appliances, infrastructure, and OEM manufacturing.
          </p>
          <p class="content-card-text">
            Driven by a strong in-house <strong>R&amp;D and tooling capability</strong>, our products are developed to simplify installation, improve reliability, and enhance long-term performance in real-world operating environments.
          </p>
          <p class="content-card-text">
            Through continuous <strong>Value Analysis (VA) and Value Engineering (VE)</strong> initiatives, we deliver solutions that are not only technically efficient but also cost-optimized for large-scale production requirements.
          </p>
          <p class="content-card-text">
            We have a wide variety of engineered <strong>component solutions ranging from:</strong>
          </p>
          <ul class="feature-list company-product-line-list">
            <li>Cable Identification Systems</li>
            <li>Cable Binding and Fixing Systems</li>
            <li>Circuit Board Accessories</li>
            <li>Polyamide Cable Glands</li>
            <li>Fasteners</li>
            <li>Push Rivets</li>
            <li>Grommet Rings</li>
            <li>Electronic Component Parts</li>
            <li>Automobile Body, Trim and Harness Clips</li>
            <li>Security Seals</li>
          </ul>
          <p class="content-card-text">
            Novoflex is a <strong>one- stop source for all your fastening needs, whether standard or customized.</strong> If you don't find what you are looking for from our ever expanding range, please give us a call and give us a chance to design and develop exactly what you want. No part is too small, or too big, or too complex for our team.
          </p>
        </div>
        <figure class="company-product-line-media">
          <img src="images/TieMounts.png" alt="Novoflex engineered product components" />
          <figcaption>Representative product image</figcaption>
        </figure>
      </div>
    </div>
  </section>

  <section class="page-section" id="how-we-work">
    <div class="container">
      <div class="section-intro">
        <div class="section-kicker">How We Work</div>
        <h2 class="section-title">How Novoflex Converts Material, Tooling, and Process Control into Reliable Output.</h2>
        <p class="section-desc company-section-desc">
          Follow the complete production journey from raw material preparation and mould design to moulding, packaging, warehousing, and final dispatch.
        </p>
      </div>

      <div class="company-workflow-horizontal-shell">

        <div class="company-workflow-horizontal" data-workflow-slider>
          <article class="company-workflow-step">
            <span class="company-workflow-step-no">01</span>
            <div class="company-workflow-step-media">
              <img src="images/polyamide.jpg" alt="Polyamide raw material" />
            </div>
            <div class="company-workflow-step-copy">
              <h3>Polyamide</h3>
              <p>Novoflex believes in quality and uses Nylon 6.6 and Nylon 4.6 from top brand suppliers. The selection process supports efficient production and reliable performance.</p>
            </div>
          </article>

          <article class="company-workflow-step">
            <span class="company-workflow-step-no">02</span>
            <div class="company-workflow-step-media">
              <img src="images/design.jpg" alt="Design of injection press moulds" />
            </div>
            <div class="company-workflow-step-copy">
              <h3>Design of Injection Press Moulds</h3>
              <p>Mould design is treated as a key production factor, with detailed development aligned to customer needs and the required final result.</p>
            </div>
          </article>

          <article class="company-workflow-step">
            <span class="company-workflow-step-no">03</span>
            <div class="company-workflow-step-media">
              <img src="images/mixture.jpg" alt="Mixture preparation" />
            </div>
            <div class="company-workflow-step-copy">
              <h3>Mixture</h3>
              <p>Polyamide is mixed in the raw material department according to the production requirement, product type, and chosen material and colour combination.</p>
            </div>
          </article>

          <article class="company-workflow-step">
            <span class="company-workflow-step-no">04</span>
            <div class="company-workflow-step-media">
              <img src="images/tooling.jpg" alt="Tooling setup" />
            </div>
            <div class="company-workflow-step-copy">
              <h3>Tooling</h3>
              <p>The injection press maintenance and outfitting teams prepare each production site so the right moulds are installed according to the production schedule.</p>
            </div>
          </article>

          <article class="company-workflow-step company-workflow-step-featured">
            <span class="company-workflow-step-no">05</span>
            <div class="company-workflow-step-media">
              <img src="images/injectionpress.jpg" alt="Injection press coordination" />
            </div>
            <div class="company-workflow-step-copy">
              <h3>Injection Press</h3>
              <p>The mixing department communicates directly with the injection press team to deliver the correct raw material to the moulding unit according to the set production schedule.</p>
            </div>
          </article>

          <article class="company-workflow-step">
            <span class="company-workflow-step-no">06</span>
            <div class="company-workflow-step-media">
              <img src="images/moulding-process.jpg" alt="Moulding process" />
            </div>
            <div class="company-workflow-step-copy">
              <h3>Moulding Process</h3>
              <p>Novoflex products are manufactured through automated injection moulding systems built for repeatable output and dependable production quality.</p>
            </div>
          </article>

          <article class="company-workflow-step">
            <span class="company-workflow-step-no">07</span>
            <div class="company-workflow-step-media">
              <img src="images/packing.jpg" alt="Packaging process" />
            </div>
            <div class="company-workflow-step-copy">
              <h3>Packaging</h3>
              <p>Each product is hand-packed and checked for quality while moisture control helps maintain consistent material condition during final packing.</p>
            </div>
          </article>

          <article class="company-workflow-step">
            <span class="company-workflow-step-no">08</span>
            <div class="company-workflow-step-media">
              <img src="images/logistics.jpg" alt="Logistics and storage" />
            </div>
            <div class="company-workflow-step-copy">
              <h3>Logistics</h3>
              <p>Finished products are stored in the company warehouse where inventory is maintained so stock can be dispatched immediately when required.</p>
            </div>
          </article>

          <article class="company-workflow-step">
            <span class="company-workflow-step-no">09</span>
            <div class="company-workflow-step-media">
              <img src="images/transport.jpg" alt="Transport and distribution" />
            </div>
            <div class="company-workflow-step-copy">
              <h3>Transport</h3>
              <p>A well-organized and widespread distribution network enables Novoflex to support customers at scale with reliable product movement.</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section page-section-alt" id="commitment-quality">
    <div class="container">
      <div class="section-intro text-center">
        <div class="section-kicker">Our Certification</div>
        <h2 class="section-title">Trusted through globally aligned certifications and compliance benchmarks.</h2>
        <p class="section-desc company-section-desc mx-auto">
          From product safety to quality systems and material compliance, our certifications reflect disciplined manufacturing and dependable standards.
        </p>
      </div>

      <div class="company-certification-marquee">
        <div class="company-certification-row company-certification-row-forward">
          <div class="company-certification-track">
            <article class="company-certification-card">
              <img src="images/certificate/CE.png" alt="CE Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/DUNS.png" alt="DUNS Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/food-grade-rubber.png" alt="Food Grade Rubber Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/Halogen-Free.png" alt="Halogen Free Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/IATF.jpeg" alt="IATF Certification" />
            </article>

            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/CE.png" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/DUNS.png" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/food-grade-rubber.png" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/Halogen-Free.png" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/IATF.jpeg" alt="" />
            </article>
          </div>
        </div>

        <div class="company-certification-row company-certification-row-reverse">
          <div class="company-certification-track">
            <article class="company-certification-card">
              <img src="images/certificate/iatf.png" alt="IATF Certified" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/IP 68.png" alt="IP 68 Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/REACHCompliant.jpeg" alt="REACH Compliant Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/RoHS.jpg" alt="RoHS Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/TUV-India.png" alt="TUV India Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/UL_Mark.svg.png" alt="UL Mark Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/UV-Resistant.jpeg" alt="UV Resistant Certification" />
            </article>
            <article class="company-certification-card">
              <img src="images/certificate/zed-gold-logo.png" alt="ZED Gold Certification" />
            </article>

            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/iatf.png" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/IP 68.png" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/REACHCompliant.jpeg" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/RoHS.jpg" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/TUV-India.png" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/UL_Mark.svg.png" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/UV-Resistant.jpeg" alt="" />
            </article>
            <article class="company-certification-card" aria-hidden="true">
              <img src="images/certificate/zed-gold-logo.png" alt="" />
            </article>
          </div>
        </div>
      </div>

      <div class="company-quality-commitment">
        <div class="company-quality-shell">
          <div class="company-quality-intro">
            <div class="company-quality-intro-copy">
              <span class="company-card-kicker">Commitments to Quality &amp; Service</span>
              <h2 class="content-card-title">Built on rigorous standards, verified testing, and dependable delivery.</h2>
              <p class="content-card-text">
                At Novoflex, quality is embedded into every stage of manufacturing. Our products are developed in line with internationally accepted standards, with stringent controls maintained across production, procurement, inspection, packaging, and dispatch.
              </p>
            </div>
            <div class="company-quality-intro-aside">
              <div class="company-quality-intro-badge">
                <span>Our Assurance</span>
                <strong>Consistent product quality backed by disciplined process control and responsive service support.</strong>
              </div>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-lg-6">
              <div class="content-card h-100 company-quality-card">
                <div class="company-quality-card-head">
                  <span class="company-quality-card-no">01</span>
                  <span class="company-quality-card-label">External Agencies</span>
                </div>
                <h3 class="company-quality-card-title">Our products and systems are regularly tested by external agencies such as:</h3>
                <ol class="company-quality-list">
                  <li>Underwriters Laboratories, USA</li>
                  <li>TUV Nord, Germany</li>
                  <li>National Test House</li>
                  <li>CIPET</li>
                  <li>SGS</li>
                  <li>Intertek</li>
                </ol>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="content-card h-100 company-quality-card">
                <div class="company-quality-card-head">
                  <span class="company-quality-card-no">02</span>
                  <span class="company-quality-card-label">Product Testing</span>
                </div>
                <h3 class="company-quality-card-title">We also regularly conduct extensive testing based on the products for:</h3>
                <ol class="company-quality-list company-quality-list-compact">
                  <li>UV Resistance</li>
                  <li>Extreme Temperature, Weather and Thermal Shock Tests</li>
                  <li>Halogen and Low Smoke Compliance</li>
                  <li>IP Rating</li>
                  <li>Tensile Strength</li>
                  <li>RoHS &amp; REACH</li>
                  <li>Flammability Rating</li>
                  <li>Push Pull Force Testing</li>
                  <li>Glow Wire Testing</li>
                  <li>Vibration</li>
                  <li>Food Safety</li>
                  <li>Salt Spray Testing</li>
                  <li>Impact Resistance</li>
                  <li>Raw Material Identification</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="content-card company-quality-note">
            <div class="company-quality-note-head">
              <span class="company-quality-card-no">03</span>
              <div>
                <span class="company-quality-card-label">Service Reliability</span>
                <h3 class="company-quality-card-title">End-to-end control with timely delivery support.</h3>
              </div>
            </div>
            <div class="company-quality-note-body">
              <p class="content-card-text">
                We exercise total control over the engineering and quality of the products we manufacture, right from the raw material selection and procurement to the packaging and transportation of the final order. We are committed towards maintaining reliability for service, quick turnaround time, quality and value of products that has led to the world wide acceptance of Novoflex.
              </p>
              <p class="content-card-text">
                Our manufacturing facilities are programmed to ensure prompt deliveries and our highly efficient shipping department ensures timely deliveries. We try to maintain adequate buffer stocks and are able to <strong>provide 24 hour dispatch service for catalog products.</strong>
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="page-section" id="code-of-ethics">
    <div class="container">
      <div class="section-intro">
        <div class="section-kicker">Code of Ethics</div>
        <h2 class="section-title">A business code centered on fairness, dignity, lawful conduct, and long-term responsibility.</h2>
        <p class="section-desc company-section-desc">
          Clear commitments that guide how Novoflex works with partners, employees, institutions, and stakeholders.
        </p>
      </div>

      <div class="company-ethics-layout">
        <article class="company-ethics-panel company-ethics-panel-featured">
          <div class="company-ethics-panel-head">
            <span class="company-ethics-panel-no">01</span>
            <div>
              <span class="company-card-kicker">Suppliers &amp; Clients</span>
              <h3 class="company-ethics-panel-title">In relation to suppliers and clients of the Company:</h3>
            </div>
          </div>
          <div class="company-ethics-panel-body" data-ethics-panel-body>
            <ul class="company-ethics-list">
              <li>Select suppliers on the basis of the appropriateness of their products or services, as well as of their prices, delivery conditions and quality.</li>
              <li>Search for and select only suppliers whose business practices respect human dignity, are not in breach of law and do not place the company’s reputation in danger.</li>
              <li>Aspire to excellence in the goods and services of the company in such a way that clients and consumers obtain the satisfaction expected therefrom.</li>
              <li>Make payment and comply with debts incurred by the company without unjustified delay or breach.</li>
            </ul>
          </div>
          <button class="company-ethics-toggle" type="button" data-ethics-toggle aria-expanded="false">Read more</button>
        </article>

        <div class="row g-4">
          <div class="col-lg-6">
            <article class="company-ethics-panel h-100">
              <div class="company-ethics-panel-head">
                <span class="company-ethics-panel-no">02</span>
                <div>
                  <span class="company-card-kicker">Competitors</span>
                  <h3 class="company-ethics-panel-title">In relation to competitors of the Company:</h3>
                </div>
              </div>
              <div class="company-ethics-panel-body" data-ethics-panel-body>
                <ul class="company-ethics-list">
                  <li>Never to take undue advantage of a privileged market position.</li>
                  <li>Compete in good faith with other companies, ensuring free market competition and abstain from engaging in unfair practices.</li>
                  <li>Not poach clients from competitor companies employing unethical methods.</li>
                </ul>
              </div>
              <button class="company-ethics-toggle" type="button" data-ethics-toggle aria-expanded="false">Read more</button>
            </article>
          </div>

          <div class="col-lg-6">
            <article class="company-ethics-panel company-ethics-panel-dark h-100">
              <div class="company-ethics-panel-head">
                <span class="company-ethics-panel-no">03</span>
                <div>
                  <span class="company-card-kicker">Employees</span>
                  <h3 class="company-ethics-panel-title">In relation to employees of the Company:</h3>
                </div>
              </div>
              <div class="company-ethics-panel-body" data-ethics-panel-body>
                <ul class="company-ethics-list company-ethics-list-dark">
                  <li>Treat employees with dignity, respect and justice, never to discriminate against employees on the grounds of race, religion, age, nationality, sex or any other personal or social condition.</li>
                  <li>Not permit any form of violence, harassment or abuse at the workplace.</li>
                  <li>Provide an environment of professional development, training and promotion of employees.</li>
                  <li>Link remuneration and the promotion of employees to their conditions of merit and capacity.</li>
                  <li>Guarantee health and safety on the job, taking any such measures as are considered reasonable to maximise prevention of occupational risk.</li>
                </ul>
              </div>
              <button class="company-ethics-toggle" type="button" data-ethics-toggle aria-expanded="false">Read more</button>
            </article>
          </div>

          <div class="col-lg-6">
            <article class="company-ethics-panel h-100">
              <div class="company-ethics-panel-head">
                <span class="company-ethics-panel-no">04</span>
                <div>
                  <span class="company-card-kicker">Civil Society</span>
                  <h3 class="company-ethics-panel-title">In relation to the civil society:</h3>
                </div>
              </div>
              <div class="company-ethics-panel-body" data-ethics-panel-body>
                <ul class="company-ethics-list">
                  <li>Respect human rights and democratic institutions, and promote them wherever possible.</li>
                  <li>Maintain licit and respectful relationships with public authorities and institutions, not accepting or offering gifts or commissions in cash or in kind.</li>
                  <li>Collaborate with Public Entities and non-governmental entities and organisations dedicated to improving levels of social attention for disadvantaged persons.</li>
                </ul>
              </div>
              <button class="company-ethics-toggle" type="button" data-ethics-toggle aria-expanded="false">Read more</button>
            </article>
          </div>

          <div class="col-lg-6">
            <article class="company-ethics-panel h-100">
              <div class="company-ethics-panel-head">
                <span class="company-ethics-panel-no">05</span>
                <div>
                  <span class="company-card-kicker">Ownership Rights</span>
                  <h3 class="company-ethics-panel-title">In the exercise of our ownership rights:</h3>
                </div>
              </div>
              <div class="company-ethics-panel-body" data-ethics-panel-body>
                <ul class="company-ethics-list">
                  <li>Strive to obtain a profit compatible with sustainable, environmentally sound social development practices, making certain that all activities are carried out in an ethical and responsible manner.</li>
                  <li>Configure the company as a long-term entity, not compromising its continuity through an interest in short-term enrichment.</li>
                  <li>Ensure that the workers receive fair compensation for their work.</li>
                  <li>Appoint directors and management persons suitable for the role with their knowledge and experience, and who carry out management functions in a professional and ethical manner.</li>
                  <li>Provide external and internal auditors of the company with all such information and explanations as maybe required to carry out their work.</li>
                  <li>Subordinate own interests to those of the company when acting on behalf and in representation thereof and not use corporate assets for our own benefit.</li>
                  <li>Maintain confidentiality of documents and information which we have access to.</li>
                </ul>
              </div>
              <button class="company-ethics-toggle" type="button" data-ethics-toggle aria-expanded="false">Read more</button>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="page-section page-section-alt" id="privacy-policy">
  <div class="container">
    <div class="section-intro company-privacy-intro">
      <div class="section-kicker">Privacy Policy</div>
      <h2 class="section-title">Privacy Policy for Novoflex</h2>
      <p class="section-desc company-section-desc">
        The same Privacy Policy content is organized below with clear headings for easier reading.
      </p>
    </div>

    <div class="company-policy-banner">
      <div class="company-policy-banner-copy">
        <span class="company-card-kicker">Novoflex</span>
        <h3 class="company-policy-banner-title">Privacy Policy for Novoflex</h3>
        <p class="company-policy-banner-text">
          At Novoflex, accessible from www.novoflex.in, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Novoflex and how we use it.
        </p>
        <p class="company-policy-banner-text">
          If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.
        </p>
        <p class="company-policy-banner-text">
          This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Novoflex. This policy is not applicable to any information collected offline or via channels other than this website.
        </p>
      </div>
      <div class="company-policy-banner-points">
        <div class="company-policy-stat">
          <strong>01</strong>
          <span>Privacy of our visitors is one of the main priorities at Novoflex.</span>
        </div>
        <div class="company-policy-stat">
          <strong>02</strong>
          <span>This Privacy Policy applies only to our online activities and website visitors.</span>
        </div>
        <div class="company-policy-stat">
          <strong>03</strong>
          <span>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</span>
        </div>
      </div>
    </div>

    <div class="row g-4 company-privacy-grid">
      
      <div class="col-lg-6">
        <article class="content-card h-100 company-privacy-card company-privacy-card-accent">
          <div class="company-privacy-card-head">
            <span class="company-privacy-card-no">01</span>
            <div>
              <span class="company-card-kicker">Agreement</span>
              <h3 class="company-privacy-card-title">Consent</h3>
            </div>
          </div>
          <div class="company-privacy-copy">
            <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="content-card h-100 company-privacy-card">
          <div class="company-privacy-card-head">
            <span class="company-privacy-card-no">02</span>
            <div>
              <span class="company-card-kicker">Data Collection</span>
              <h3 class="company-privacy-card-title">Information we collect</h3>
            </div>
          </div>
          <div class="company-privacy-copy">
            <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
            <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
            <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="content-card h-100 company-privacy-card">
          <div class="company-privacy-card-head">
            <span class="company-privacy-card-no">03</span>
            <div>
              <span class="company-card-kicker">Usage</span>
              <h3 class="company-privacy-card-title">How we use your information</h3>
            </div>
          </div>
          <div class="company-privacy-copy">
            <p>We use the information we collect in various ways, including to:</p>
            <ul>
              <li>Provide, operate, and maintain our website</li>
              <li>Improve, personalize, and expand our website</li>
              <li>Understand and analyze how you use our website</li>
              <li>Develop new products, services, features, and functionality</li>
              <li>Communicate with you for customer service, updates, and marketing</li>
              <li>Send you emails and find and prevent fraud</li>
            </ul>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="content-card h-100 company-privacy-card">
          <div class="company-privacy-card-head">
            <span class="company-privacy-card-no">04</span>
            <div>
              <span class="company-card-kicker">Tracking</span>
              <h3 class="company-privacy-card-title">Log Files & Cookies</h3>
            </div>
          </div>
          <div class="company-privacy-copy">
            <p>Novoflex follows a standard procedure of using log files. Information collected includes IP addresses, browser type, ISP, date/time stamp, and referring pages. These are not linked to personally identifiable information.</p>
            <p>Like any other website, Novoflex uses 'cookies' to store visitors' preferences and optimize the user experience based on browser type.</p>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="content-card h-100 company-privacy-card">
          <div class="company-privacy-card-head">
            <span class="company-privacy-card-no">05</span>
            <div>
              <span class="company-card-kicker">External</span>
              <h3 class="company-privacy-card-title">Third Party Privacy Policies</h3>
            </div>
          </div>
          <div class="company-privacy-copy">
            <p>Novoflex's Privacy Policy does not apply to other advertisers or websites. We advise you to consult the respective Privacy Policies of these third-party ad servers for more detailed information.</p>
            <p>You can choose to disable cookies through your individual browser options.</p>
          </div>
        </article>
      </div>

      <div class="col-lg-6">
        <article class="content-card h-100 company-privacy-card company-privacy-card-accent">
          <div class="company-privacy-card-head">
            <span class="company-privacy-card-no">06</span>
            <div>
              <span class="company-card-kicker">Legal Rights</span>
              <h3 class="company-privacy-card-title">CCPA & GDPR Rights</h3>
            </div>
          </div>
          <div class="company-privacy-copy">
            <p><strong>CCPA:</strong> You have the right to request disclosure of data categories, request deletion of data, and opt-out of the sale of personal data.</p>
            <p><strong>GDPR:</strong> You have the right to access, rectification, erasure, restrict processing, object to processing, and data portability.</p>
            <p>If you make a request, we have one month to respond to you. Please contact us to exercise these rights.</p>
          </div>
        </article>
      </div>

    </div>
  </div>
</section>


  <section class="page-section company-cta-section">
    <div class="container">
      <div class="company-cta-panel">
        <div>
          <span class="company-card-kicker">Let Us Build With You</span>
          <h2 class="company-cta-title">Looking for a dependable partner for cable management, fastening, sealing, and engineered plastic component requirements?</h2>
        </div>
        <div class="d-flex gap-3 flex-wrap">
          <a class="btn btn-brand btn-brand-lg" href="contact.php">Request a Discussion</a>
          <a class="btn btn-outline-brand btn-brand-lg" href="product.php">View Product Categories</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
