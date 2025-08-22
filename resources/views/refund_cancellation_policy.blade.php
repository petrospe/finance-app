<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Refund & Cancellation Policy | [Your Company Name]</title>
<link rel="icon" type="image/x-icon" href="{{ asset('images/logo-icon.png') }}">
<style>
body { font-family: system-ui, sans-serif; margin:0; line-height:1.6; background:#f9fafb; color:#1a202c; }
.container { max-width:900px; margin:0 auto; padding:2.5rem 1.25rem; }
h1,h2,h3 { font-weight:bold; margin-top:1.5rem; }
h1 { font-size:2rem; margin-bottom:0.5rem; }
h2 { font-size:1.5rem; margin-top:2rem; }
h3 { font-size:1.2rem; margin-top:1.25rem; }
ul { padding-left:1.2rem; margin-top:0.5rem; }
a { color:#2563eb; text-decoration:none; }
a:hover { text-decoration:underline; }
.card { background:rgba(0,0,0,0.03); border:1px solid rgba(0,0,0,0.08); padding:1rem; border-radius:0.5rem; margin-top:0.5rem; }
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

<main class="container">
<h1>Refund & Cancellation Policy</h1>
<p>Effective Date: <strong>[Insert Date]</strong></p>

<section>
<h2>1. Refund Eligibility</h2>
<p>Refunds are only available within the first [X] days of subscription for unused service periods.</p>
</section>

<section>
<h2>2. Non-Refundable Items</h2>
<ul>
<li>Completed services or past invoices</li>
<li>Fees for late cancellations or contract breaches</li>
</ul>
</section>

<section>
<h2>3. How to Request a Refund</h2>
<p>Contact <a href="mailto:[contact@email.com]">[contact@email.com]</a> with your subscription details.</p>
</section>

<section>
<h2>4. Cancellation</h2>
<p>You can cancel at any time via your Stripe subscription portal or by contacting support. Your subscription will remain active until the end of the billing period.</p>
</section>

<footer class="card" style="margin-top:2rem;">
&copy; <span id="y"></span> [Your Company Name]. All rights reserved.
</footer>
<script>document.getElementById('y').textContent = new Date().getFullYear();</script>
</main>
</body>
</html>
