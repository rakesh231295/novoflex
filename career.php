<?php
$pageTitle = 'Careers';
include 'header.php';
?>

<main class="career-page">
  <section class="career-hero">
    <div class="container">
      <div class="career-hero-banner">
        <div class="career-hero-content">
          <nav class="career-breadcrumb" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <span>&gt;</span>
            <span aria-current="page">Careers</span>
          </nav>
          <span class="career-kicker">Build. Grow. Succeed.</span>
          <h1>Grow With a Manufacturing Team That Values Ownership, Precision, and Progress.</h1>
          <p>Join a team that powers secure connections and practical innovation across industries.</p>

          <div class="career-stats" aria-label="Novoflex career highlights">
            <div class="career-stat">
              <span class="career-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
              </span>
              <span><strong>45+</strong><span>Years of Excellence</span></span>
            </div>
            <div class="career-stat">
              <span class="career-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.9"/><path d="M16 3.1a4 4 0 0 1 0 7.8"/></svg>
              </span>
              <span><strong>150+</strong><span>Team Members</span></span>
            </div>
            <div class="career-stat">
              <span class="career-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 0 20"/><path d="M12 2a15.3 15.3 0 0 0 0 20"/></svg>
              </span>
              <span><strong>Global</strong><span>Presence</span></span>
            </div>
          </div>

          <a class="career-hero-action" href="#open-positions">View Open Positions <span aria-hidden="true">-></span></a>
        </div>
      </div>
    </div>
  </section>

  <section class="career-section">
    <div class="container">
      <div class="career-section-head">
        <h2>Why Build Your Career with Novoflex?</h2>
        <p>We empower our people to learn, grow and create a lasting impact.</p>
      </div>

      <div class="career-benefits">
        <div class="benefit-card">
          <span class="career-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M12 2v20"/><path d="m17 7-5-5-5 5"/><path d="M19 14a7 7 0 0 1-14 0"/></svg>
          </span>
          <strong>Growth Opportunities</strong>
          <span>Learn, upskill and grow with us.</span>
        </div>
        <div class="benefit-card">
          <span class="career-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M4.5 16.5c-1.5 1.3-2 3.3-2 3.3s2-.5 3.3-2c.7-.8.7-1.9 0-2.6-.8-.7-1.9-.7-2.6 0z"/><path d="M12 15l-3-3a22 22 0 0 1 2-6.5A12.5 12.5 0 0 1 21 3a12.5 12.5 0 0 1-2.5 10 22 22 0 0 1-6.5 2z"/><path d="M9 12H4l2-5h5"/><path d="M12 15v5l5-2v-5"/></svg>
          </span>
          <strong>Innovation Driven</strong>
          <span>Work with modern technology and ideas.</span>
        </div>
        <div class="benefit-card">
          <span class="career-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="5"/><path d="M8.5 12.5 7 22l5-3 5 3-1.5-9.5"/></svg>
          </span>
          <strong>Performance Recognition</strong>
          <span>Celebrate achievements and contributions.</span>
        </div>
        <div class="benefit-card">
          <span class="career-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M12 22a10 10 0 1 0-10-10"/><path d="M12 6v6l4 2"/><path d="m3 17-1 5 5-1"/></svg>
          </span>
          <strong>Purpose Driven</strong>
          <span>Be part of solutions that connect the world.</span>
        </div>
      </div>
    </div>
  </section>

  <section id="open-positions" class="career-section">
    <div class="container">
      <div class="positions-head">
        <h2>Open Positions</h2>
        <p>Explore exciting career opportunities and be a part of our journey.</p>
      </div>

      <div class="positions-grid">
        <article class="position-card">
          <span class="position-kicker">Open Position</span>
          <h3>Sales Manager</h3>
          <ul>
            <li>B2B Selling to OEMs and Customer Handling.</li>
            <li>CRM System Proficiency and Lead Generation.</li>
            <li>Client Conversion and Analytical Skills.</li>
          </ul>
          <div class="position-actions d-flex gap-2">
            <button type="button" class="btn btn-outline-brand" data-bs-toggle="modal" data-bs-target="#salesManagerModal">Read More</button>
            <a class="career-btn" href="#submit-application" onclick="document.getElementById('career-role').value='Sales Manager'">Apply Now</a>
          </div>
        </article>

        <article class="position-card">
          <span class="position-kicker">Open Position</span>
          <h3>Accounts Manager</h3>
          <ul>
            <li>Strong knowledge in ROC and Expertise in Tally prime.</li>
            <li>GST/ TAX management, Income Tax returns & statutory compliance.</li>
            <li>Account finalization and handling books of accounts.</li>
          </ul>
          <div class="position-actions d-flex gap-2">
            <button type="button" class="btn btn-outline-brand" data-bs-toggle="modal" data-bs-target="#accountsManagerModal">Read More</button>
            <a class="career-btn" href="#submit-application" onclick="document.getElementById('career-role').value='Accounts Manager'">Apply Now</a>
          </div>
        </article>
      </div>

      <div class="resume-strip">
        <div>
          <h2>Do not see the right role?</h2>
          <p>We are always looking for talented and passionate individuals to join our team.</p>
          <a class="btn btn-outline-light" href="#submit-application">Submit Your Resume <span aria-hidden="true">-></span></a>
        </div>
        <a class="resume-email" href="mailto:hr@novoflex.in">
          <span class="career-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="m22 7-8.9 5.7a2 2 0 0 1-2.2 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
          </span>
          hr@novoflex.in
        </a>
      </div>
    </div>
  </section>

  <section id="submit-application" class="career-section pb-5">
    <div class="container">
      <div class="application-card">
        <h2>Submit Your Application</h2>
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label" for="career-name">Full Name</label>
              <input id="career-name" type="text" class="form-control" placeholder="Your full name" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="career-email">Email Address</label>
              <input id="career-email" type="email" class="form-control" placeholder="name@email.com" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="career-phone">Phone Number</label>
              <input id="career-phone" type="text" class="form-control" placeholder="+91 98765 43210" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="career-role">Applying For</label>
              <select id="career-role" class="form-select">
                <option selected disabled>Select role</option>
                <option value="Sales Manager">Sales Manager</option>
                <option value="Accounts Manager">Accounts Manager</option>
                <option value="General Application">General Application</option>
              </select>
            </div>
            <div class="col-12 resume-upload">
              <label class="form-label" for="career-resume">Attach Resume</label>
              <span class="career-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M17 8 12 3 7 8"/><path d="M12 3v12"/></svg>
              </span>
              <input id="career-resume" type="file" class="form-control" accept=".pdf,.doc,.docx" />
            </div>
            <div class="col-12">
              <label class="form-label" for="career-summary">Experience Summary</label>
              <textarea id="career-summary" class="form-control" placeholder="Share your background, skills, and relevant experience..."></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-brand w-100">Submit Application</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Modals -->
  <div class="modal fade" id="salesManagerModal" tabindex="-1" aria-labelledby="salesManagerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="salesManagerModalLabel">Sales Manager - Role &amp; Responsibilities</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body career-modal-body">
          <h6>Key Responsibilities</h6>
          <p><strong>B2B Selling to OEMs:</strong></p>
          <ul>
            <li>Develop and maintain strong relationships with OEM clients.</li>
            <li>Identify and target potential OEM customers to generate new business opportunities.</li>
            <li>Present and demonstrate products or services to OEM clients, addressing their specific needs and requirements.</li>
          </ul>
          
          <p><strong>Customer Handling:</strong></p>
          <ul>
            <li>Manage and nurture existing customer relationships to ensure satisfaction and repeat business.</li>
            <li>Handle customer inquiries and resolve any issues promptly and effectively.</li>
            <li>Provide exceptional customer service, ensuring a positive experience for all clients.</li>
          </ul>

          <p><strong>CRM System Proficiency:</strong></p>
          <ul>
            <li>Utilize CRM systems to manage customer information, track sales activities, and analyze sales data.</li>
            <li>Maintain accurate and up-to-date records of all customer interactions and transactions.</li>
            <li>Generate reports and insights from the CRM system to support sales strategies and decision-making.</li>
          </ul>

          <p><strong>Email Correspondence and Internet Savvy:</strong></p>
          <ul>
            <li>Conduct professional and effective email correspondence with clients.</li>
            <li>Use the internet and digital tools to research and identify potential customers, market trends, and competitor activities.</li>
            <li>Leverage online platforms for lead generation and sales promotion.</li>
          </ul>

          <p><strong>Client Conversion and Analytical Skills:</strong></p>
          <ul>
            <li>Develop and implement strategies to convert leads into clients.</li>
            <li>Analyze sales data and customer feedback to refine sales approaches and improve conversion rates.</li>
            <li>Utilize analytical skills to identify market opportunities and optimize sales performance.</li>
            <li>Lead Generation.</li>
          </ul>

          <h6>Required Skills and Qualifications</h6>
          <ul>
            <li>Proven experience in B2B sales, preferably with OEM clients.</li>
            <li>Excellent customer handling and relationship management skills.</li>
            <li>Pleasant personality with strong interpersonal skills.</li>
            <li>Fluency in English, both written and verbal.</li>
            <li>Proficiency in operating CRM systems.</li>
            <li>Strong email correspondence skills.</li>
            <li>Internet savvy with the ability to use online tools for sales activities.</li>
            <li>Demonstrated ability to convert leads into clients.</li>
            <li>Analytical mind with the ability to analyze sales data and develop strategic approaches.</li>
            <li>Bachelors degree in Business, Marketing, or a related field is preferred.</li>
          </ul>

          <h6>Preferred Attributes</h6>
          <ul>
            <li>Experience in a similar role within a fast-paced environment.</li>
            <li>Additional certifications in sales or marketing.</li>
            <li>Strong problem-solving skills and the ability to work independently as well as part of a team.</li>
            <li>Excellent organizational and time-management skills.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="accountsManagerModal" tabindex="-1" aria-labelledby="accountsManagerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="accountsManagerModalLabel">Accounts Manager - Job Description</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body career-modal-body">
          <p><strong>Academic Qualification required:</strong><br>CA (Inter)/ B.COM GRADUATE (Mandatory)</p>

          <h6>Job Description &amp; Required Skill:</h6>
          <ul>
            <li><strong>Strong knowledge in ROC</strong></li>
            <li><strong>Expertise in Tally prime</strong></li>
            <li>Account finalization</li>
            <li>Handling the company's book of accounts, payment and collection book</li>
            <li><strong>GST/ TAX management, submission/ Others statutory</strong></li>
            <li>Strong knowledge in Income Tax returns</li>
            <li>Should be smart, good in approach and group coordination.</li>
            <li>Should be Presentable.</li>
            <li>Should have good Communication and writing skills in ENGLISH.</li>
            <li>Should have very good knowledge in Computer basic excel, word, power point.</li>
            <li>Should be smart and quick learner.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
