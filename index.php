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

    <script src="js/script.js"></script>
</body>
</html>
