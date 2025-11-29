<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - The Last POS System You'll Ever Need</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <!-- Navigation & Header - POS-101 -->
    <header class="header" id="header">
        <nav class="navbar container">
            <a href="#" class="logo">
                <i class="fas fa-cash-register logo-icon"></i>
                <span class="logo-text">Quick<span class="logo-highlight">POS</span></span>
            </a>
            
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item">
                    <a href="#features" class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            
            <a href="#contact" class="btn btn-primary nav-btn">Sign Up</a>
            
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </nav>
    </header>

    <!-- Hero Section - POS-201 -->
    <section class="hero" id="hero">
        <div class="hero-bg">
            <div class="hero-gradient"></div>
            <div class="hero-pattern"></div>
        </div>
        <div class="container hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-bolt"></i>
                    <span>Lightning Fast POS Solution</span>
                </div>
                <h1 class="hero-title">
                    The Last <span class="gradient-text">POS System</span> You'll Ever Need
                </h1>
                <p class="hero-subtitle">
                    Streamline your business operations with our powerful, intuitive point-of-sale system. 
                    Accept payments, manage inventory, and grow your business — all in one place.
                </p>
                <div class="hero-cta">
                    <a href="#contact" class="btn btn-primary btn-lg">
                        <i class="fas fa-rocket"></i>
                        Get Started for Free
                    </a>
                    <a href="#features" class="btn btn-secondary btn-lg">
                        <i class="fas fa-play-circle"></i>
                        See How It Works
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">10K+</span>
                        <span class="stat-label">Active Users</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-number">99.9%</span>
                        <span class="stat-label">Uptime</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Support</span>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-image-wrapper">
                    <div class="hero-mockup">
                        <div class="mockup-screen">
                            <div class="mockup-header">
                                <div class="mockup-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <span class="mockup-title">QuickPOS Dashboard</span>
                            </div>
                            <div class="mockup-content">
                                <div class="mockup-sidebar">
                                    <div class="sidebar-item active"><i class="fas fa-home"></i></div>
                                    <div class="sidebar-item"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="sidebar-item"><i class="fas fa-box"></i></div>
                                    <div class="sidebar-item"><i class="fas fa-chart-bar"></i></div>
                                    <div class="sidebar-item"><i class="fas fa-cog"></i></div>
                                </div>
                                <div class="mockup-main">
                                    <div class="mockup-card">
                                        <div class="card-icon"><i class="fas fa-dollar-sign"></i></div>
                                        <div class="card-info">
                                            <span class="card-label">Today's Sales</span>
                                            <span class="card-value">$2,459</span>
                                        </div>
                                    </div>
                                    <div class="mockup-card">
                                        <div class="card-icon green"><i class="fas fa-shopping-bag"></i></div>
                                        <div class="card-info">
                                            <span class="card-label">Orders</span>
                                            <span class="card-value">156</span>
                                        </div>
                                    </div>
                                    <div class="mockup-chart">
                                        <div class="chart-bar" style="height: 60%"></div>
                                        <div class="chart-bar" style="height: 80%"></div>
                                        <div class="chart-bar" style="height: 45%"></div>
                                        <div class="chart-bar" style="height: 90%"></div>
                                        <div class="chart-bar" style="height: 70%"></div>
                                        <div class="chart-bar" style="height: 85%"></div>
                                        <div class="chart-bar" style="height: 55%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="floating-card card-1">
                        <i class="fas fa-check-circle"></i>
                        <span>Payment Received</span>
                    </div>
                    <div class="floating-card card-2">
                        <i class="fas fa-chart-line"></i>
                        <span>+24% Revenue</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </section>
 <!-- Features Section - POS-301 -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Features</span>
                <h2 class="section-title">Everything You Need to <span class="gradient-text">Succeed</span></h2>
                <p class="section-subtitle">
                    Powerful tools designed to streamline your business operations and boost your sales
                </p>
            </div>
            
            <div class="features-grid">
                <!-- Feature 1: Inventory Management -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-boxes-stacked"></i>
                    </div>
                    <h3 class="feature-title">Inventory Management</h3>
                    <p class="feature-description">
                        Track stock levels in real-time, set low-stock alerts, and manage multiple locations effortlessly.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Real-time stock tracking</li>
                        <li><i class="fas fa-check"></i> Automated reorder alerts</li>
                        <li><i class="fas fa-check"></i> Multi-location support</li>
                    </ul>
                </div>
                
                <!-- Feature 2: Sales Analytics -->
                <div class="feature-card">
                    <div class="feature-icon icon-green">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="feature-title">Sales Analytics</h3>
                    <p class="feature-description">
                        Get actionable insights with detailed reports and beautiful visualizations of your sales data.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Real-time dashboards</li>
                        <li><i class="fas fa-check"></i> Custom report builder</li>
                        <li><i class="fas fa-check"></i> Trend analysis</li>
                    </ul>
                </div>
                
                <!-- Feature 3: Easy Integration -->
                <div class="feature-card">
                    <div class="feature-icon icon-orange">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3 class="feature-title">Easy Integration</h3>
                    <p class="feature-description">
                        Connect seamlessly with your favorite tools, payment gateways, and accounting software.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> 50+ integrations</li>
                        <li><i class="fas fa-check"></i> Open API access</li>
                        <li><i class="fas fa-check"></i> Webhook support</li>
                    </ul>
                </div>
                
                <!-- Feature 4: Secure Payments -->
                <div class="feature-card">
                    <div class="feature-icon icon-pink">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3 class="feature-title">Secure Payments</h3>
                    <p class="feature-description">
                        Accept all payment methods securely with PCI-compliant processing and fraud protection.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> PCI DSS compliant</li>
                        <li><i class="fas fa-check"></i> Fraud detection</li>
                        <li><i class="fas fa-check"></i> Multiple currencies</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>
