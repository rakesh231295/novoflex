<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$baseUrl = 'http://localhost/novoflex/';

$metaMap = [
  'index.php' => [
    'title' => 'NOVOFLEX',
    'description' => 'Novoflex is an Indian manufacturer of cable ties, cable glands, wiring accessories, and engineered plastic components for industrial and OEM applications.',
  ],
  'company.php' => [
    'title' => 'Company',
    'description' => 'Learn about Novoflex, its quality commitment, manufacturing approach, ethics, certifications, and industrial engineering capabilities.',
  ],
  'product.php' => [
    'title' => 'Products',
    'description' => 'Explore Novoflex product categories including cable ties, cable glands, security seals, wire management, cable protection, and engineered accessories.',
  ],
  'products.php' => [
    'title' => 'Products',
    'description' => 'Explore Novoflex product categories including cable ties, cable glands, security seals, wire management, cable protection, and engineered accessories.',
  ],
  'media.php' => [
    'title' => 'Media & Events',
    'description' => 'See Novoflex media features, trade fairs, exhibitions, awards, and industry recognitions from India and international events.',
  ],
  'career.php' => [
    'title' => 'Careers',
    'description' => 'Discover career opportunities at Novoflex and join a manufacturing team focused on precision, quality, and growth.',
  ],
  'faqs.php' => [
    'title' => 'FAQs',
    'description' => 'Find answers about Novoflex products, cable tie selection, material performance, testing, storage, and application support.',
  ],
  'blog.php' => [
    'title' => 'Blog',
    'description' => 'Read Novoflex insights on cable management, product applications, industrial guidance, and wiring accessory best practices.',
  ],
  'contact.php' => [
    'title' => 'Contact',
    'description' => 'Contact Novoflex for product enquiries, quotations, application support, and business discussions.',
  ],
];

$resolvedTitle = $metaMap[$currentPage]['title'] ?? ($pageTitle ?? 'NOVOFLEX');
$resolvedDescription = $metaMap[$currentPage]['description'] ?? 'Novoflex manufactures industrial wiring accessories and engineered plastic components for OEM and industrial applications.';
$canonicalUrl = $baseUrl . $currentPage;
$metaImage = $baseUrl . 'images/logo.png';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($resolvedTitle) . ' | NOVOFLEX'; ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($resolvedDescription); ?>" />
  <meta name="keywords" content="Novoflex, cable ties, cable glands, wire management, security seals, cable protection, engineered plastic components, industrial wiring accessories" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="NOVOFLEX" />
  <meta property="og:title" content="<?php echo htmlspecialchars($resolvedTitle) . ' | NOVOFLEX'; ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($resolvedDescription); ?>" />
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>" />
  <meta property="og:image" content="<?php echo htmlspecialchars($metaImage); ?>" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo htmlspecialchars($resolvedTitle) . ' | NOVOFLEX'; ?>" />
  <meta name="twitter:description" content="<?php echo htmlspecialchars($resolvedDescription); ?>" />
  <meta name="twitter:image" content="<?php echo htmlspecialchars($metaImage); ?>" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<header class="site-header">
  <div class="header-top">
    <div class="container">
      <div class="header-top-row d-flex align-items-center justify-content-between gap-3 flex-wrap">
        <div class="d-flex align-items-center gap-3 flex-wrap">
          <a class="header-top-link" href="tel:+913323720088">
            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
            <span>+91 33 2372 0088</span>
          </a>
          <a class="header-top-link" href="mailto:sales@novoflex.in">
            <i class="bi bi-envelope-fill" aria-hidden="true"></i>
            <span>sales@novoflex.in</span>
          </a>
        </div>

        <div class="header-utility-group d-flex align-items-end gap-2 flex-wrap">
          <form class="header-search-form" data-site-search-form role="search" aria-label="Site search">
            <label class="visually-hidden" for="siteSearchInput">Search website</label>
            <div class="header-search-shell">
              <i class="bi bi-search" aria-hidden="true"></i>
              <input
                id="siteSearchInput"
                class="header-search-input"
                type="search"
                name="q"
                list="siteSearchSuggestions"
                placeholder="Search pages"
                autocomplete="off"
              />
              <button class="header-search-button" type="submit">Go</button>
            </div>
            <datalist id="siteSearchSuggestions">
              <option value="Home"></option>
              <option value="Company"></option>
              <option value="About Us"></option>
              <option value="Commitment to Quality"></option>
              <option value="How We Work"></option>
              <option value="Code of Ethics"></option>
              <option value="Privacy Policy"></option>
              <option value="Products"></option>
              <option value="Media & Events"></option>
              <option value="Careers"></option>
              <option value="FAQs"></option>
              <option value="Blog"></option>
              <option value="Contact"></option>
              <option value="Get Quote"></option>
            </datalist>
          </form>

          <div class="header-language-wrap">
            <label class="visually-hidden" for="languageSwitcher">Translate page</label>
            <div class="header-language-control">
              <select id="languageSwitcher" class="header-language-select" data-language-switcher aria-describedby="translationDisclaimer">
                <option value="">Language</option>
                <option value="en">English</option>
                <option value="hi">Hindi</option>
                <option value="bn">Bengali</option>
                <option value="ta">Tamil</option>
                <option value="mr">Marathi</option>
              </select>
              <button type="button" class="header-info-trigger" aria-label="Translation information">
                <i class="bi bi-info-circle-fill" aria-hidden="true"></i>
              </button>
              <div id="translationDisclaimer" class="header-utility-note" role="tooltip">
                Auto-translation is for convenience only and may not reflect the exact original meaning.
              </div>
            </div>
            <div id="google_translate_element" class="header-translate-element" aria-hidden="true"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark navbar-glass">
    <div class="container">
      <a class="navbar-brand" href="index.php" aria-label="NOVOFLEX Home">
        <span class="logo-frame">
          <img class="site-logo" src="images/logo.png" alt="NOVOFLEX" />
        </span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'index.php' ? ' active' : ''; ?>" href="index.php">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle<?php echo $currentPage === 'company.php' ? ' active' : ''; ?>" href="company.php" id="companyNav" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Company
            </a>
            <ul class="dropdown-menu company-dropdown" aria-labelledby="companyNav">
              <li><a class="dropdown-item" href="company.php#about-us">About Us</a></li>
              <li><a class="dropdown-item" href="company.php#commitment-quality">Commitment to Quality</a></li>
              <li><a class="dropdown-item" href="company.php#how-we-work">How We Work</a></li>
              <li><a class="dropdown-item" href="company.php#code-of-ethics">Code of Ethics</a></li>
              <li><a class="dropdown-item" href="company.php#privacy-policy">Privacy Policy</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'product.php' ? ' active' : ''; ?>" href="product.php">Products</a></li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'media.php' ? ' active' : ''; ?>" href="media.php">Media &amp; Events</a></li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'career.php' ? ' active' : ''; ?>" href="career.php">Careers</a></li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'faqs.php' ? ' active' : ''; ?>" href="faqs.php">FAQs</a></li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'blog.php' ? ' active' : ''; ?>" href="blog.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'contact.php' ? ' active' : ''; ?>" href="contact.php">Contact</a></li>
          <li class="nav-item ms-lg-2"><a class="btn btn-brand" href="contact.php">Get Quote</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<script>
  window.novoflexSearchTargets = [
    { label: 'Home', url: 'index.php' },
    { label: 'Company', url: 'company.php' },
    { label: 'About Us', url: 'company.php#about-us' },
    { label: 'Commitment to Quality', url: 'company.php#commitment-quality' },
    { label: 'How We Work', url: 'company.php#how-we-work' },
    { label: 'Code of Ethics', url: 'company.php#code-of-ethics' },
    { label: 'Privacy Policy', url: 'company.php#privacy-policy' },
    { label: 'Products', url: 'product.php' },
    { label: 'Media & Events', url: 'media.php' },
    { label: 'Careers', url: 'career.php' },
    { label: 'FAQs', url: 'faqs.php' },
    { label: 'Blog', url: 'blog.php' },
    { label: 'Contact', url: 'contact.php' },
    { label: 'Get Quote', url: 'contact.php' }
  ];
</script>
