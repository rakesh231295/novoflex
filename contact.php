<?php
$pageTitle = 'Contact';
include 'header.php';
?>


<main class="contact-page">
  <section class="contact-hero">
    <div class="container">
      <div class="contact-hero-banner">
        <div class="contact-hero-content">
          <nav class="contact-breadcrumb" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span aria-current="page">Contact Us</span>
          </nav>
          <h1>Start a Conversation With the Novoflex Team.</h1>
          <p>
            Have a question, need more information, or looking for the right solution for your application? Our team is ready to assist you.
          </p>

          <div class="contact-hero-points" aria-label="Contact highlights">
            <div class="hero-point">
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7A2 2 0 0 1 22 16.9z"/></svg>
              </span>
              <span><strong>Quick Response</strong><span>We will get back to you promptly.</span></span>
            </div>
            <div class="hero-point">
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M18 20a6 6 0 0 0-12 0"/><circle cx="12" cy="10" r="4"/><path d="M12 2a8 8 0 0 1 8 8v3a3 3 0 0 1-3 3h-1"/></svg>
              </span>
              <span><strong>Expert Support</strong><span>Talk to our product and industry experts.</span></span>
            </div>
            <div class="hero-point">
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 0 20"/><path d="M12 2a15.3 15.3 0 0 0 0 20"/></svg>
              </span>
              <span><strong>Global Presence</strong><span>Serving customers worldwide.</span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-section">
    <div class="container">
      <div class="row g-4 align-items-stretch">
        <div class="col-lg-6">
          <div class="support-card h-100">
            <img src="images/contact-2.jpg" alt="Novoflex office team supporting customer enquiries" />
            <div class="support-card-body">
              <h2>Reliable Support Starts Here</h2>
              <p>
                Have a product inquiry, sourcing requirement, or technical question? Reach out to our team and receive expert assistance tailored to your application and industry needs.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="contact-form-card h-100">
            <h2>Send us a Message</h2>
            <form action="#" method="post">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" for="contact-name">Your Name</label>
                  <input id="contact-name" type="text" class="form-control" placeholder="John Doe" />
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="contact-email">Email Address</label>
                  <input id="contact-email" type="email" class="form-control" placeholder="john@company.com" />
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="contact-phone">Phone Number</label>
                  <input id="contact-phone" type="text" class="form-control" placeholder="+91 98765 43210" />
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="contact-subject">Subject</label>
                  <select id="contact-subject" class="form-select">
                    <option selected disabled>Select a subject</option>
                    <option>Product Inquiry</option>
                    <option>Request a Quote</option>
                    <option>Bulk Order Requirement</option>
                    <option>Custom Manufacturing Requirement</option>
                    <option>Technical Support</option>
                    <option>Partnership / Business Inquiry</option>
                    <option>General Inquiry</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label" for="contact-message">Message</label>
                  <textarea id="contact-message" class="form-control" placeholder="Tell us about your requirement..."></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-brand w-100">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-section">
    <div class="container">
      <div class="row g-4 align-items-stretch">
        <div class="col-lg-5">
          <div class="direct-card">
            <div class="section-kicker">Reach Us</div>
            <h2>Direct Contact Information</h2>
            <div class="contact-detail-list">
              <div class="contact-detail">
                <span class="contact-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </span>
                <div>
                  <strong>Address</strong>
                  <span>Raikva, Unit 506 - 508, 5th Floor, 3A Ram Mohan Mullick Garden Lane, Kolkata - 700 010, India</span>
                </div>
              </div>
              <div class="contact-detail">
                <span class="contact-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7A2 2 0 0 1 22 16.9z"/></svg>
                </span>
                <div>
                  <strong>Call Us</strong>
                  <a href="tel:+913323720088">+91 33 2372 0088</a><br />
                  <a href="tel:+919903163634">+91 99031 63634</a>
                </div>
              </div>
              <div class="contact-detail">
                <span class="contact-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="m22 7-8.9 5.7a2 2 0 0 1-2.2 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                </span>
                <div>
                  <strong>Email Us</strong>
                  <a href="mailto:sales@novoflex.in">sales@novoflex.in</a>
                </div>
              </div>
              <div class="contact-detail">
                <span class="contact-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.5 7.3L3 20l1.3-5.2A8.4 8.4 0 1 1 21 11.5z"/><path d="M9 10.5c.5 1.5 1.7 2.7 3.5 3.5l1.2-1.1 2 .5"/></svg>
                </span>
                <div>
                  <strong>WhatsApp Us</strong>
                  <a href="https://wa.me/919903163634">+91 99031 63634</a>
                </div>
              </div>
              <div class="contact-detail">
                <span class="contact-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </span>
                <div>
                  <strong>Working Hours</strong>
                  <span>Monday to Saturday, 9:00 AM to 6:00 PM</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="contact-map-card">
            <iframe
              title="Novoflex Location"
              src="https://www.google.com/maps?q=Raikva%2C%20Unit%20506%20-%20508%2C%205th%20Floor%2C%203A%20Ram%20Mohan%20Mullick%20Garden%20Lane%2C%20Kolkata%20700010&output=embed"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-section pb-5">
    <div class="container">
      <div class="contact-help-strip">
        <div class="contact-help-copy">
          <span class="contact-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M18 14v3a2 2 0 0 1-2 2h-1v-5h3z"/><path d="M6 14v3a2 2 0 0 0 2 2h1v-5H6z"/><path d="M4 14v-2a8 8 0 0 1 16 0v2"/></svg>
          </span>
          <span>
            <strong>Need help choosing the right solution?</strong>
            <span>Talk to our experts for the best solution for your application.</span>
          </span>
        </div>
        <div class="contact-actions">
          <a class="btn btn-outline-light" href="tel:+913323720088">Contact Us</a>
          <a class="btn btn-brand" href="enquiry.php">Enquire Now</a>
        </div>
      </div>

      <div class="trust-row" aria-label="Novoflex strengths">
        <div class="trust-item">
          <span class="contact-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
          </span>
          <span><strong>High Quality</strong><span>Raw Materials</span></span>
        </div>
        <div class="trust-item">
          <span class="contact-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M3 21h18"/><path d="M5 21V7l8-4v18"/><path d="M19 21V11l-6-3"/><path d="M9 9h1M9 13h1M9 17h1M17 15h1"/></svg>
          </span>
          <span><strong>Advanced</strong><span>Manufacturing</span></span>
        </div>
        <div class="trust-item">
          <span class="contact-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M12 15.5A3.5 3.5 0 1 0 12 8a3.5 3.5 0 0 0 0 7.5z"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.6V21a2 2 0 0 1-4 0v-.1a1.7 1.7 0 0 0-1-1.6 1.7 1.7 0 0 0-1.9.3l-.1.1A2 2 0 1 1 4.2 17l.1-.1A1.7 1.7 0 0 0 4.6 15a1.7 1.7 0 0 0-1.6-1H3a2 2 0 0 1 0-4h.1a1.7 1.7 0 0 0 1.6-1 1.7 1.7 0 0 0-.3-1.9L4.3 7A2 2 0 1 1 7.1 4.2l.1.1A1.7 1.7 0 0 0 9 4.6 1.7 1.7 0 0 0 10 3V3a2 2 0 0 1 4 0v.1a1.7 1.7 0 0 0 1 1.6 1.7 1.7 0 0 0 1.9-.3l.1-.1A2 2 0 1 1 19.8 7l-.1.1a1.7 1.7 0 0 0-.3 1.9 1.7 1.7 0 0 0 1.6 1H21a2 2 0 0 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1z"/></svg>
          </span>
          <span><strong>100% Tested</strong><span>Products</span></span>
        </div>
        <div class="trust-item">
          <span class="contact-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="5"/><path d="M8.5 12.5 7 22l5-3 5 3-1.5-9.5"/></svg>
          </span>
          <span><strong>Global</strong><span>Certifications</span></span>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
