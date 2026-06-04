<footer class="site-footer">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="footer-brand d-flex align-items-center gap-2">
          <img class="footer-logo" src="images/logo.png" alt="NOVOFLEX" />
        </div>
        <p class="footer-desc mt-3">
          Novoflex is a leading Indian manufacturer of cable ties, cable glands, wiring accessories, and
engineered plastic components serving OEMs and industrial sectors for over 40 years. We
deliver ISO-certified, high-performance cable management solutions across India and global
markets.
        </p>
        <div class="footer-socials mt-3">
          <a class="social-btn" href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a class="social-btn" href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
          <a class="social-btn" href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a class="social-btn" href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>

      <div class="col-sm-6 col-lg-2">
        <div class="footer-title">Quick Links</div>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="company.php">Company</a></li>
          <li><a href="product.php">Products</a></li>
          <li><a href="media.php">Media &amp; Events</a></li>
          <li><a href="career.php">Careers</a></li>
          <li><a href="faqs.php">FAQs</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="footer-title">Products</div>
        <ul class="footer-links">
          <li><a href="product.php">Cable Ties</a></li>
          <li><a href="product.php">Polyamide Cable Glands</a></li>
          <li><a href="product.php">Security Seals</a></li>
          <li><a href="product.php">Wire Management</a></li>
          <li><a href="product.php">Cable Protection</a></li>
          <li><a href="product.php">Connector Backshells</a></li>
        </ul>
      </div>

      <div class="col-lg-3">
        <div class="footer-title">Contact Us</div>
        <div class="footer-contact">
          <div>Raikva, Unit 506 - 508, 3A Ram Mohan Mullick Garden Lane, Kolkata - 700 010</div>
          <div><a href="tel:+913323720088">+91 33 2372 0088</a></div>
          <div><a href="tel:+919903163634">+91 99031 63634</a></div>
          <div><a href="mailto:sales@novoflex.in">sales@novoflex.in</a></div>
        </div>
      </div>
    </div>

    <div class="footer-bottom mt-5">
      <div class="row g-3 align-items-center">
        <div class="col-md-6">
          <div class="footer-copy">© <?php echo date('Y'); ?> Novoflex Industries Pvt. Ltd. All rights reserved.</div>
        </div>
        <div class="col-md-6">
          <div class="footer-bottom-links">
            <a href="company.php#privacy-policy">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a class="back-to-top" href="index.php#home" aria-label="Back to top"><i class="bi bi-arrow-up"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="floating-actions">
  <button type="button" class="floating-btn floating-btn-pdf" data-bs-toggle="modal" data-bs-target="#pdfLeadModal" aria-label="Open PDF download form">
    <i class="bi bi-file-earmark-arrow-down"></i>
    <span>Download PDF</span>
  </button>
  <a class="floating-btn floating-btn-whatsapp" href="https://wa.me/919903163634?text=Hello%20Novoflex%2C%20I%20would%20like%20to%20know%20more%20about%20your%20products." target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
    <i class="bi bi-whatsapp"></i>
    <span>WhatsApp</span>
  </a>
</div>

<div class="modal fade" id="pdfLeadModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content pdf-modal">
      <div class="pdf-modal-head">
        <div>
          <div class="section-kicker">Company Profile</div>
          <h3 class="pdf-modal-title">Download Novoflex PDF</h3>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="pdf-modal-body">
        <p class="pdf-modal-text">
          Share your details and we will help you with the company profile and product information.
        </p>
        <form class="pdf-lead-form" data-success-message="Thank you. Your request has been received and our team will share the PDF shortly.">
          <div class="row g-3">
            <div class="col-12">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control contact-control" placeholder="Your name" required />
            </div>
            <div class="col-12">
              <label class="form-label">Company Name</label>
              <input type="text" class="form-control contact-control" placeholder="Your company" required />
            </div>
            <div class="col-md-6">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control contact-control" placeholder="name@company.com" required />
            </div>
            <div class="col-md-6">
              <label class="form-label">Phone Number</label>
              <input type="text" class="form-control contact-control" placeholder="+91 98765 43210" required />
            </div>
            <div class="col-12">
              <label class="form-label">Requirement</label>
              <select class="form-select contact-control" required>
                <option value="" selected disabled>Select requirement</option>
                <option>Company Profile</option>
                <option>Product Catalogue</option>
                <option>Technical Datasheet</option>
                <option>Bulk Purchase Enquiry</option>
              </select>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-brand w-100 btn-brand-lg">Submit Request</button>
            </div>
          </div>
          <div class="pdf-form-status" aria-live="polite"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="https://translate.google.com/translate_a/element.js?cb=novoflexInitTranslate"></script>
</body>
</html>
