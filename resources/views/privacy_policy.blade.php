<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Privacy Policy | [Your Company Name]</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-icon.png') }}">
  <meta name="description" content="Privacy Policy for [Your Company Name]. GDPR-compliant information on how we collect, use, and protect your personal data."/>
  <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
  <style>
    :root { color-scheme: light dark; }
    body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji"; margin:0; }
    .wrap { max-width: 900px; margin: 0 auto; padding: 2.5rem 1.25rem; line-height:1.6; }
    h1,h2,h3 { line-height:1.25; }
    h1 { font-size: 2rem; margin-bottom: 0.25rem; }
    .muted { color: #6b7280; font-size: 0.95rem; }
    h2 { font-size: 1.25rem; margin-top: 2rem; }
    h3 { font-size: 1.05rem; margin-top: 1.25rem; }
    ul { padding-left: 1.2rem; }
    a { color: #2563eb; text-decoration: none; }
    a:hover { text-decoration: underline; }
    .card { background: rgba(0,0,0,0.03); border: 1px solid rgba(0,0,0,0.08); padding: 1rem; border-radius: .5rem; }
    @media (prefers-color-scheme: dark) {
      .card { background: rgba(255,255,255,0.04); border-color: rgba(255,255,255,0.12); }
      .muted { color: #9ca3af; }
    }
    /* Navbar wrapper: full width + shadow + white background */
    .navbar {
      width: 100%;
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Center container */
    .navbar-container {
      max-width: 1200px; /* like max-w-6xl */
      margin: 0 auto;
      padding: 20px 24px; /* py-5 px-6 */
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Force logo link to have no underline */
    .navbar-logo,
    .navbar-logo:link,
    .navbar-logo:visited,
    .navbar-logo:hover,
    .navbar-logo:active {
      text-decoration: none !important;
    }

    /* Logo wrapper */
    .navbar-logo {
      display: flex;
      align-items: center;
    }

    /* Logo image */
    .navbar-logo-img {
      height: 40px; /* like h-10 */
      width: auto;
      margin-right: 8px;
    }

    /* Logo text */
    .navbar-logo-text {
      font-size: 1.5rem; /* like text-2xl */
      font-weight: bold;
      color: #1a202c; /* dark gray / primary */
      transition: color 0.3s;
    }

    /* Hover effect */
    .navbar-logo:hover .navbar-logo-text {
      color: #f97316; /* example accent orange */
    }
  </style>
</head>
<body>
  <!-- Full-width background -->
  <nav class="navbar">
    <div class="navbar-container">
      <!-- Logo -->
      <a href="{{ url('/') }}" class="navbar-logo">
        <img src="{{ asset('images/logo.png') }}" alt="Opnomic Logo" class="navbar-logo-img">
        <span class="navbar-logo-text">Opnomic</span>
      </a>
    </div>
  </nav>
  <main class="wrap">
    <header>
      <h1>Privacy Policy (GDPR-Compliant)</h1>
      <p class="muted">
        Effective Date: <strong>[Insert Effective Date]</strong> &nbsp;|&nbsp;
        Last Updated: <strong>[Insert Last Updated Date]</strong>
      </p>
    </header>

    <section>
      <p>
        <strong>[Your Company Name]</strong> (“we,” “our,” or “us”) is committed to protecting your personal data and respecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard personal data when you use our website and services (the “Service”).
      </p>
      <p>
        For the purposes of the EU General Data Protection Regulation (“GDPR”), we act as the <strong>Data Controller</strong> when processing your personal data for registration, account management, and billing.
      </p>
    </section>

    <section>
      <h2>1. Contact Details (Data Controller)</h2>
      <div class="card">
        <p><strong>[Your Company Name]</strong><br/>
          [Street Address]<br/>
          [City, Post Code, Country]<br/>
          Email: <a href="mailto:[contact@email.com]">[contact@email.com]</a>
        </p>
      </div>
      <p>
        You have the right to lodge a complaint with your local Data Protection Authority (DPA) if you believe your rights have been infringed.
      </p>
    </section>

    <section>
      <h2>2. What Personal Data We Collect</h2>
      <h3>a) Information You Provide</h3>
      <ul>
        <li>Company name and subdomain</li>
        <li>Name, email address, password</li>
        <li>Billing and subscription details (processed by <strong>Stripe</strong>)</li>
        <li>Support requests and communications</li>
      </ul>
      <h3>b) Information Collected Automatically</h3>
      <ul>
        <li>IP address, device and browser information</li>
        <li>Usage logs and product analytics events</li>
        <li>Cookies and similar technologies (see “Cookies & Tracking”)</li>
      </ul>
      <h3>c) Information from Third Parties</h3>
      <ul>
        <li>Payment status and subscription metadata from Stripe (we do <strong>not</strong> store full card numbers)</li>
      </ul>
    </section>

    <section>
      <h2>3. Legal Bases for Processing (GDPR Art. 6)</h2>
      <ul>
        <li><strong>Contractual Necessity</strong> – to provide and maintain the Service you request.</li>
        <li><strong>Legal Obligation</strong> – to meet tax, accounting, and regulatory requirements.</li>
        <li><strong>Legitimate Interests</strong> – to secure, improve, and support the Service.</li>
        <li><strong>Consent</strong> – for optional activities (e.g., marketing emails, non-essential cookies). You can withdraw consent at any time.</li>
      </ul>
    </section>

    <section>
      <h2>4. How We Use Personal Data</h2>
      <ul>
        <li>Account creation, authentication, and tenant (subdomain) setup</li>
        <li>Subscription and billing management via Stripe</li>
        <li>Service operations, product analytics, and improvements</li>
        <li>Security, fraud prevention, and abuse detection</li>
        <li>Legal compliance and enforcement of terms</li>
      </ul>
      <p>We do not engage in automated decision-making producing legal or similarly significant effects.</p>
    </section>

    <section>
      <h2>5. Sharing Your Data</h2>
      <p>We do <strong>not</strong> sell personal data. We may share data with:</p>
      <ul>
        <li><strong>Stripe</strong> (payment processing and subscription management)</li>
        <li>Hosting, analytics, email, and support providers under GDPR-compliant agreements</li>
        <li>Public authorities when required by law</li>
        <li>Successors in the event of a merger, acquisition, or reorganization</li>
      </ul>
    </section>

    <section>
      <h2>6. International Transfers</h2>
      <p>
        Where personal data is transferred outside the EU/EEA, we ensure appropriate safeguards, such as <strong>EU Standard Contractual Clauses (SCCs)</strong> and vendor <strong>Data Processing Agreements (DPAs)</strong>, to protect your data.
      </p>
    </section>

    <section>
      <h2>7. Data Retention</h2>
      <p>
        We retain personal data only as long as necessary for the purposes described above, including account operation, legal obligations, and security. When data is no longer required, we securely delete or anonymize it.
      </p>
    </section>

    <section>
      <h2>8. Your Rights Under GDPR</h2>
      <ul>
        <li><strong>Access</strong> – request a copy of your personal data.</li>
        <li><strong>Rectification</strong> – correct inaccurate or incomplete data.</li>
        <li><strong>Erasure</strong> – request deletion (“right to be forgotten”).</li>
        <li><strong>Restriction</strong> – limit processing under certain conditions.</li>
        <li><strong>Portability</strong> – receive your data in a machine-readable format.</li>
        <li><strong>Objection</strong> – object to processing based on legitimate interests or direct marketing.</li>
        <li><strong>Withdraw Consent</strong> – where processing is based on consent.</li>
      </ul>
      <p>
        To exercise any of these rights, contact us at <a href="mailto:[contact@email.com]">[contact@email.com]</a>. We will respond within 30 days.
      </p>
    </section>

    <section>
      <h2>9. Security Measures</h2>
      <p>
        We implement appropriate technical and organizational measures (encryption in transit, access controls, least-privilege, monitoring). However, no method of transmission or storage is completely secure.
      </p>
    </section>

    <section>
      <h2>10. Cookies & Tracking</h2>
      <p>
        We use cookies and similar technologies to operate and improve the Service:
      </p>
      <ul>
        <li><strong>Essential cookies</strong> – required for core functionality (authentication, security).</li>
        <li><strong>Analytics cookies</strong> – help us understand usage and improve features.</li>
        <li><strong>Marketing cookies</strong> – used only with your consent.</li>
      </ul>
      <p>
        You can manage cookie preferences via your browser or our cookie banner (where applicable). For more information, see our <a href="/cookie-policy">Cookie Policy</a>.
      </p>
    </section>

    <section>
      <h2>11. Children’s Privacy</h2>
      <p>
        Our Service is not directed to children under 16. We do not knowingly collect personal data from children.
      </p>
    </section>

    <section>
      <h2>12. Changes to This Policy</h2>
      <p>
        We may update this Privacy Policy from time to time. The latest version will be posted here with a revised “Last Updated” date.
      </p>
    </section>

    <section>
      <h2>13. How to Contact Us</h2>
      <p>
        If you have any questions about this Privacy Policy or our data practices, contact:
      </p>
      <p>
        <strong>[Your Company Name]</strong><br/>
        [Street Address]<br/>
        [City, Post Code, Country]<br/>
        Email: <a href="mailto:[contact@email.com]">[contact@email.com]</a>
      </p>
    </section>

    <footer class="muted" style="margin-top:2rem;">
      © <span id="y"></span> [Your Company Name]. All rights reserved.
    </footer>
  </main>

  <script>
    document.getElementById('y').textContent = new Date().getFullYear();
  </script>
</body>
</html>
