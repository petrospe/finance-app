<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opnomic - Operational Economics Intelligence</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-icon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2C3E50',
                        secondary: '#1A5276',
                        accent: '#00A896',
                        light: '#ECF0F1',
                        dark: '#2C3E50',
                        success: '#27AE60',
                        warning: '#E67E22',
                        text: '#2C3E50',
                        textLight: '#7F8C8D',
                    },
                    boxShadow: {
                        'custom': '0 4px 6px rgba(0, 0, 0, 0.1)',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .hero-bg {
            background: linear-gradient(135deg, #f9f9f9 0%, #e8f4f8 100%);
        }
        
        .testimonials-bg {
            background: linear-gradient(135deg, #f9f9f9 0%, #e8f4f8 100%);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .btn:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gray-50 text-text">
    <!-- Header & Navigation -->
    <header class="bg-white fixed w-full top-0 z-50 shadow-custom">
        <div class="container mx-auto px-4 md:px-6 max-w-6xl">
            <nav class="flex justify-between items-center py-5">
                <div class="logo flex items-center font-bold text-2xl text-primary">
                    <!-- Replace with your actual logo -->
                    <img src="{{ asset('images/logo.png') }}" alt="Opnomic Logo" class="h-10 w-auto mr-2">
                    <span>Opnomic</span>
                </div>
                <!--
                <ul class="hidden md:flex list-none space-x-8">
                    <li><a href="#" class="text-text font-medium hover:text-accent transition-colors">Features</a></li>
                    <li><a href="#" class="text-text font-medium hover:text-accent transition-colors">Solutions</a></li>
                    <li><a href="#" class="text-text font-medium hover:text-accent transition-colors">Pricing</a></li>
                    <li><a href="#" class="text-text font-medium hover:text-accent transition-colors">Resources</a></li>
                </ul>
                -->
                <div class="auth-buttons flex space-x-4">
                    <a href="#" class="hidden md:inline-block px-4 py-2 bg-transparent border-2 border-accent text-accent font-semibold rounded-md hover:bg-accent hover:text-white transition-all" onclick="openPricingModal(); return false;">Pricing</a>
                    <a href="/register-company" class="px-4 py-2 bg-accent text-white font-semibold rounded-md hover:bg-[#008A79] transition-all btn">Get Started</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-bg pt-40 pb-24">
        <div class="container mx-auto px-4 md:px-6 max-w-6xl">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="hero-text md:w-1/2 md:pr-10 text-center md:text-left mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-primary mb-6">Optimize Your Operational Economics</h1>
                    <p class="text-xl text-textLight mb-8">Opnomic provides intelligent financial tracking and operational cost management for businesses seeking to maximize efficiency and profitability.</p>
                    <div class="hero-buttons flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="/register-company" class="px-6 py-3 bg-accent text-white font-semibold rounded-md text-center hover:bg-[#008A79] transition-all btn">Start Free Trial</a>
                        <a href="#" class="px-6 py-3 bg-transparent border-2 border-accent text-accent font-semibold rounded-md text-center hover:bg-accent hover:text-white transition-all">View Demo</a>
                    </div>
                </div>
                <div class="hero-image md:w-1/2 flex justify-center">
                    <!-- Replace with your actual dashboard image -->
                    <img src="{{ asset('images/dashboard-screenshot.png') }}" alt="Opnomic Dashboard" class="rounded-lg shadow-custom max-w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 md:px-6 max-w-6xl">
            <div class="section-title text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Powerful Financial Insights</h2>
                <p class="text-textLight max-w-2xl mx-auto">Opnomic combines income/expense tracking with operational analytics to give you a complete financial picture</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-8 rounded-lg shadow-custom transition-transform">
                    <div class="feature-icon bg-accent text-white w-14 h-14 rounded-full flex items-center justify-center text-xl mb-5">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">Financial Tracking</h3>
                    <p class="text-textLight">Monitor all income and expenses in one place with customizable categories and real-time reporting.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-lg shadow-custom transition-transform">
                    <div class="feature-icon bg-accent text-white w-14 h-14 rounded-full flex items-center justify-center text-xl mb-5">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">Operational Analytics</h3>
                    <p class="text-textLight">Identify cost drivers and efficiency opportunities across your business operations with advanced analytics.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-lg shadow-custom transition-transform">
                    <div class="feature-icon bg-accent text-white w-14 h-14 rounded-full flex items-center justify-center text-xl mb-5">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">Cost Allocation</h3>
                    <p class="text-textLight">Automatically allocate costs to departments, projects, or products for accurate profitability analysis.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-lg shadow-custom transition-transform">
                    <div class="feature-icon bg-accent text-white w-14 h-14 rounded-full flex items-center justify-center text-xl mb-5">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">Smart Alerts</h3>
                    <p class="text-textLight">Receive notifications for unusual spending patterns, budget overruns, or cost-saving opportunities.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-lg shadow-custom transition-transform">
                    <div class="feature-icon bg-accent text-white w-14 h-14 rounded-full flex items-center justify-center text-xl mb-5">
                        <i class="fas fa-sync"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">Automated Workflows</h3>
                    <p class="text-textLight">Streamline approval processes and reduce manual tasks with customizable automation rules.</p>
                </div>
                <div class="feature-card bg-white p-8 rounded-lg shadow-custom transition-transform">
                    <div class="feature-icon bg-accent text-white w-14 h-14 rounded-full flex items-center justify-center text-xl mb-5">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">Enterprise Security</h3>
                    <p class="text-textLight">Bank-level security protocols to keep your financial data safe and compliant with industry regulations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-bg py-24">
        <div class="container mx-auto px-4 md:px-6 max-w-6xl">
            <div class="section-title text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Trusted by Finance Leaders</h2>
                <p class="text-textLight max-w-2xl mx-auto">See how Opnomic is transforming financial operations for businesses</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="testimonial-card bg-white p-8 rounded-lg shadow-custom">
                    <!-- Replace with actual testimonial author images -->
                    <div class="flex items-center mb-5">
                        <img src="{{ asset('images/testimonial-1.jpg') }}" alt="James Davidson" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="text-primary font-semibold">James Davidson</h4>
                            <p class="text-textLight text-sm">CFO, Manufacturing Co.</p>
                        </div>
                    </div>
                    <p class="testimonial-text italic text-text">"Opnomic helped us identify $250K in annual operational savings by highlighting inefficiencies we hadn't noticed in our manufacturing process."</p>
                </div>
                <div class="testimonial-card bg-white p-8 rounded-lg shadow-custom">
                    <!-- Replace with actual testimonial author images -->
                    <div class="flex items-center mb-5">
                        <img src="{{ asset('images/testimonial-2.jpg') }}" alt="Sarah Reynolds" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="text-primary font-semibold">Sarah Reynolds</h4>
                            <p class="text-textLight text-sm">COO, Retail Chain</p>
                        </div>
                    </div>
                    <p class="testimonial-text italic text-text">"The operational cost tracking features have been invaluable for our multi-location business. We've optimized staffing and reduced overhead by 18% in the first year."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- App Screenshots Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 md:px-6 max-w-6xl">
            <div class="section-title text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">See Opnomic in Action</h2>
                <p class="text-textLight max-w-2xl mx-auto">Explore the powerful features of our operational economics platform</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Replace with your actual app screenshots -->
                <div class="flex justify-center" onclick="openModal('app-screen-1')">
                    <img src="{{ asset('images/app-screen-1.png') }}" alt="Expense Tracking" class="rounded-lg shadow-custom max-w-full h-auto">
                </div>
                <div class="flex justify-center" onclick="openModal('app-screen-2')">
                    <img src="{{ asset('images/app-screen-2.png') }}" alt="Analytics Dashboard" class="rounded-lg shadow-custom max-w-full h-auto">
                </div>
                <div class="flex justify-center"  onclick="openModal('app-screen-3')">
                    <img src="{{ asset('images/app-screen-3.png') }}" alt="Reports" class="rounded-lg shadow-custom max-w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-secondary text-white">
        <div class="container mx-auto px-4 md:px-6 max-w-4xl text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Transform Your Operational Economics</h2>
            <p class="text-xl opacity-90 max-w-2xl mx-auto mb-10">Join thousands of businesses that use Opnomic to optimize their financial operations and drive profitability</p>
            <a href="/register-company" class="inline-block px-8 py-4 bg-white text-secondary font-semibold rounded-md text-lg hover:bg-accent hover:text-white transition-all">Get Started Today</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white pt-16 pb-10">
        <div class="container mx-auto px-4 md:px-6 max-w-6xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-16">
                <div class="footer-column">
                    <!-- Replace with your actual logo -->
                    <img src="{{ asset('images/logo-white.png') }}" alt="Opnomic Logo" class="h-10 w-auto mb-5">
                    <p class="text-gray-300 mb-6">Intelligent operational economics for modern businesses.</p>
                    <div class="social-links flex space-x-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-all"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-all"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-all"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-all"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3 class="text-accent text-lg font-semibold mb-5">Product</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Features</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Solutions</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Pricing</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Demo</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="text-accent text-lg font-semibold mb-5">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Guides</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Webinars</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">API Docs</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="text-accent text-lg font-semibold mb-5">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Contact</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-accent transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright text-center pt-8 border-t border-gray-700">
                <p class="text-gray-400">&copy; {{ now()->year}} Opnomic. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Image Modal -->
    <div id="imageModal" class="modal fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity">
        <div class="modal-content bg-white rounded-lg shadow-xl max-w-4xl w-11/12 max-h-screen overflow-auto transform scale-95 transition-transform">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 id="modalTitle" class="text-lg font-semibold text-primary">App Screenshot</h3>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div class="p-4">
                <img id="modalImage" src="" alt="App Screenshot" class="w-full h-auto rounded">
            </div>
            <div class="p-4 border-t flex justify-end">
                <button onclick="closeModal()" class="px-4 py-2 bg-accent text-white rounded-md hover:bg-[#008A79] transition-colors">Close</button>
            </div>
        </div>
    </div>

    <!-- Pricing Modal -->
    <div id="pricingModal" class="modal fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity p-4">
        <div class="modal-content bg-white rounded-lg shadow-xl max-w-5xl w-full max-h-screen overflow-auto transform scale-95 transition-transform">

            <!-- Header -->
            <div class="flex justify-between items-center p-6 border-b">
            <h3 class="text-2xl font-bold text-primary">Subscription Plans</h3>
            <button onclick="closePricingModal()" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-xl"></i>
            </button>
            </div>

            <!-- Body -->
            <div class="p-6">
            
                <!-- Billing Toggle -->
                <div class="flex justify-center items-center mb-8">
                    <span class="mr-3 text-gray-600">Monthly</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" id="billingToggle" class="sr-only peer" onchange="toggleBilling()" />
                    <div class="w-14 h-7 bg-gray-300 peer-focus:outline-none rounded-full peer peer-checked:bg-accent transition"></div>
                    <div class="absolute left-1 top-1 bg-white w-5 h-5 rounded-full transition peer-checked:translate-x-7"></div>
                    </label>
                    <span class="ml-3 text-gray-600">Yearly <span class="text-green-600 font-semibold">-10%</span></span>
                </div>

                <!-- Plans -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                    
                    <!-- Basic Plan -->
                    <div id="basicPlan" class="pricing-card bg-white rounded-xl shadow-custom p-8 border-2 border-transparent transition">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                            <h4 class="text-xl font-bold text-primary">Basic Plan</h4>
                            <p class="text-textLight">For individuals & small teams</p>
                            </div>
                            <span class="bg-accent text-white text-sm font-semibold px-3 py-1 rounded-full">Starter</span>
                        </div>
                        <div class="mb-6">
                            <span id="basicPrice" class="text-4xl font-bold text-primary">$5</span>
                            <span class="text-textLight">/month</span>
                            <p id="basicDiscount" class="text-sm text-green-600 mt-1 hidden">Save 10% with yearly billing</p>
                            <p class="text-sm text-blue-600 mt-1 font-semibold">10-day free trial included</p>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Unlimited users</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Income/expense tracking</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Basic operational cost analytics</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Monthly financial reports</li>
                            <li class="flex items-center text-gray-400"><i class="fas fa-times-circle mr-3"></i>No support included</li>
                        </ul>
                        <button onclick="selectPlan('basicPlan')" 
                                class="w-full bg-accent text-white font-semibold py-3 rounded-md hover:bg-[#008A79] transition-colors">
                            Choose Basic (Free Trial)
                        </button>
                    </div>

                    <!-- Pro Plan -->
                    <div id="proPlan" class="pricing-card bg-white rounded-xl shadow-custom p-8 border-2 border-transparent transition">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                            <h4 class="text-xl font-bold text-primary">Pro Plan</h4>
                            <p class="text-textLight">For growing businesses</p>
                            </div>
                            <span class="bg-accent text-white text-sm font-semibold px-3 py-1 rounded-full">Most Popular</span>
                        </div>
                        <div class="mb-6">
                            <span id="proPrice" class="text-4xl font-bold text-primary">$150</span>
                            <span class="text-textLight">/month</span>
                            <p id="proDiscount" class="text-sm text-green-600 mt-1 hidden">Save 10% with yearly billing</p>
                            <p class="text-sm text-blue-600 mt-1 font-semibold">&nbsp</p>
                            <!-- ❌ No trial line here -->
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Unlimited users</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Advanced cost analytics</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Comprehensive financial reports</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Email & chat support</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Priority onboarding</li>
                        </ul>
                        <button onclick="selectPlan('proPlan')" 
                                class="w-full bg-accent text-white font-semibold py-3 rounded-md hover:bg-[#008A79] transition-colors">
                            Choose Pro
                        </button>
                    </div>
                </div>

                <!-- Custom Plan -->
                <div class="mt-8 text-center">
                    <p class="text-textLight">Need a custom plan? <a href="#" class="text-accent hover:underline">Contact our sales team</a></p>
                </div>
            </div>

            <!-- Footer -->
            <div class="p-6 border-t flex justify-end">
                <button onclick="closePricingModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition-colors mr-3">Close</button>
                <button id="confirmPlanBtn" class="px-4 py-2 bg-accent text-white rounded-md hover:bg-[#008A79] transition-colors" disabled>
                    Select a Plan
                </button>
            </div>

        </div>
    </div>

    <script>
        // Modal functionality
        function openModal(screenId) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            
            // Set image based on screen ID
            let imageUrl, title;
            switch(screenId) {
                case 'app-screen-1':
                    imageUrl = '{{ asset('images/app-screen-1.png') }}';
                    title = 'Expense Tracking';
                    break;
                case 'app-screen-2':
                    imageUrl = '{{ asset('images/app-screen-2.png') }}';
                    title = 'Analytics Dashboard';
                    break;
                case 'app-screen-3':
                    imageUrl = '{{ asset('images/app-screen-3.png') }}';
                    title = 'Incomes';
                    break;
            }
            
            modalImage.src = imageUrl;
            modalImage.alt = title;
            modalTitle.textContent = title;
            
            // Show modal
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100');
            
            // Scale animation
            setTimeout(() => {
                document.querySelector('.modal-content').classList.remove('scale-95');
                document.querySelector('.modal-content').classList.add('scale-100');
            }, 10);
            
            // Prevent body scrolling when modal is open
            document.body.style.overflow = 'hidden';
        }
        
        function closeModal() {
            const modal = document.getElementById('imageModal');
            
            // Hide modal with animation
            document.querySelector('.modal-content').classList.remove('scale-100');
            document.querySelector('.modal-content').classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.remove('opacity-100');
                modal.classList.add('opacity-0', 'pointer-events-none');
            }, 200);
            
            // Re-enable body scrolling
            document.body.style.overflow = 'auto';
        }
        
        // Close modal when clicking outside the content
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Pricing Modal functionality
        function openPricingModal() {
            const modal = document.getElementById('pricingModal');
            
            // Show modal
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100');
            
            // Scale animation
            setTimeout(() => {
                document.querySelector('#pricingModal .modal-content').classList.remove('scale-95');
                document.querySelector('#pricingModal .modal-content').classList.add('scale-100');
            }, 10);
            
            // Prevent body scrolling when modal is open
            document.body.style.overflow = 'hidden';
        }
        
        function closePricingModal() {
            const modal = document.getElementById('pricingModal');
            
            // Hide modal with animation
            document.querySelector('#pricingModal .modal-content').classList.remove('scale-100');
            document.querySelector('#pricingModal .modal-content').classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.remove('opacity-100');
                modal.classList.add('opacity-0', 'pointer-events-none');
            }, 200);
            
            // Re-enable body scrolling
            document.body.style.overflow = 'auto';
        }
        
        // Close modal when clicking outside the content
        document.getElementById('pricingModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePricingModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (!document.getElementById('imageModal').classList.contains('opacity-0')) {
                    closeModal();
                }
                if (!document.getElementById('pricingModal').classList.contains('opacity-0')) {
                    closePricingModal();
                }
            }
        });

        let selectedPlan = null;

        function toggleBilling() {
            const yearly = document.getElementById("billingToggle").checked;

            // Basic Plan
            const basicPrice = document.getElementById("basicPrice");
            const basicDiscount = document.getElementById("basicDiscount");
            if (yearly) {
            basicPrice.textContent = "$54"; // 5 * 12 = 60, -10% = 54
            basicDiscount.classList.remove("hidden");
            } else {
            basicPrice.textContent = "$5";
            basicDiscount.classList.add("hidden");
            }

            // Pro Plan
            const proPrice = document.getElementById("proPrice");
            const proDiscount = document.getElementById("proDiscount");
            if (yearly) {
            proPrice.textContent = "$1620"; // 150 * 12 = 1800, -10% = 1620
            proDiscount.classList.remove("hidden");
            } else {
            proPrice.textContent = "$150";
            proDiscount.classList.add("hidden");
            }
        }

        function selectPlan(planId) {
            // Clear previous selection
            document.getElementById("basicPlan").classList.remove("border-accent", "bg-accent/5");
            document.getElementById("proPlan").classList.remove("border-accent", "bg-accent/5");

            // Highlight selected
            const plan = document.getElementById(planId);
            plan.classList.add("border-accent", "bg-accent/5");

            // Save selection
            selectedPlan = planId;

            // Enable confirm button
            const confirmBtn = document.getElementById("confirmPlanBtn");
            confirmBtn.textContent = "Confirm " + (planId === "basicPlan" ? "Basic Plan" : "Pro Plan");
            confirmBtn.disabled = false;
        }
        
        // Redirect when confirming
        document.getElementById("confirmPlanBtn").addEventListener("click", function() {
            if (!selectedPlan) return;

            const yearly = document.getElementById("billingToggle").checked ? "yearly" : "monthly";
            const plan = selectedPlan === "basicPlan" ? "basic" : "pro";

            // Redirect with query params so backend knows
            window.location.href = `/register-company?plan=${plan}&billing=${yearly}`;
        });
    </script>
</body>
</html>