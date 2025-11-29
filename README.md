# QuickPOS Landing Page

A professional, pixel-perfect landing page for a Point of Sale (POS) system built with PHP, HTML, CSS, and JavaScript.

## 🚀 Features

- **Responsive Navigation Bar** - Sticky header with mobile hamburger menu
- **Hero Section** - Eye-catching banner with POS dashboard mockup and animated floating cards
- **Features Section** - Showcases 4 key features with icons and descriptions
- **Pricing Section** - 3-tier pricing plans with monthly/yearly toggle
- **Contact Form** - Fully functional form with PHP validation and thank-you page
- **Footer** - Comprehensive footer with social links and company information
- **Modern UI/UX** - Clean design with gradients, animations, and smooth transitions
- **Fully Responsive** - Optimized for desktop, tablet, and mobile devices

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6)
- **Backend**: PHP
- **Icons**: Font Awesome 6.4.2
- **Fonts**: Google Fonts (Inter)

## 📋 Project Structure

```
QuickPOS/
├── index.php                 # Main landing page
├── submit-form.php           # Contact form handler
├── thank-you.html            # Success page after form submission
├── css/
│   └── style.css            # Main stylesheet with all sections
├── js/
│   └── script.js            # JavaScript for navigation, pricing toggle, and form validation
├── .gitignore               # Git ignore file
└── README.md                # Project documentation
```

## 🚦 Getting Started

### Prerequisites

- PHP 7.4 or higher
- Modern web browser

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/saif55045/QuickPOS.git
   cd QuickPOS
   ```

2. **Start PHP development server**
   ```bash
   php -S localhost:8000
   ```

3. **Open in browser**
   ```
   http://localhost:8000
   ```

### Alternative Setup (XAMPP/WAMP)

1. Copy the project folder to `htdocs` (XAMPP) or `www` (WAMP)
2. Start Apache server
3. Navigate to `http://localhost/QuickPOS`

## 📱 Sections Overview

### 1. Navigation & Header (POS-101)
- Fixed sticky navigation
- Smooth scroll to sections
- Mobile-responsive hamburger menu
- QuickPOS logo with gradient branding

### 2. Hero Section (POS-201)
- Compelling headline and subheadline
- Dual CTA buttons
- Interactive POS dashboard mockup
- Animated floating notification cards
- Statistics display (Users, Uptime, Support)

### 3. Features Section (POS-301)
- **Inventory Management** - Real-time tracking and alerts
- **Sales Analytics** - Dashboards and custom reports
- **Easy Integration** - 50+ integrations and API access
- **Secure Payments** - PCI compliant with fraud protection

### 4. Pricing Section (POS-401)
- **Basic Plan** - $29/month (or $23/month yearly)
- **Pro Plan** - $79/month (or $63/month yearly) - Most Popular
- **Enterprise Plan** - $199/month (or $159/month yearly)
- Monthly/Yearly toggle with 20% discount
- 30-day money-back guarantee

### 5. Contact Form (POS-501)
- Name, Email, and Message fields
- Client-side JavaScript validation
- Server-side PHP validation
- Redirects to thank-you page on success
- Contact information display (Email, Phone, Address)

### 6. Footer (POS-601)
- Social media links (Facebook, Twitter, LinkedIn, Instagram, GitHub)
- Quick links to Product, Company, Resources, Legal
- Copyright information
- Security badges (SSL Secured, PCI Compliant)

## 🎨 Design Features

- **Color Scheme**: Purple gradient (#6366f1 to #8b5cf6)
- **Typography**: Inter font family
- **Animations**: Fade-in, slide-in, floating effects
- **Shadows**: Multi-level elevation system
- **Border Radius**: Rounded corners for modern look
- **Hover States**: Interactive feedback on all clickable elements

## 🧪 Testing

### Contact Form Testing

1. Navigate to Contact section
2. Try submitting empty form (validation errors appear)
3. Fill in valid data:
   - Name: At least 2 characters
   - Email: Valid email format
   - Message: At least 10 characters
4. Submit and verify redirect to thank-you page

### Responsive Testing

- Desktop: 1200px+
- Tablet: 768px - 1024px
- Mobile: < 768px

## 📦 Development Workflow

This project follows professional development practices:

- **Version Control**: Git with feature branches
- **Branch Strategy**: GitFlow (main, develop, feature/*)
- **Commit Convention**: `[TICKET-ID] Description`
- **Code Review**: Pull requests required before merging

### Sample Git Workflow

```bash
# Create feature branch
git checkout -b feature/SCRUM-XX-feature-name

# Make changes and commit
git add .
git commit -m "[POS-XXX] Description of changes"

# Push to remote
git push -u origin feature/SCRUM-XX-feature-name

# Create pull request and merge after review
```

## 🐛 Known Issues

None at this time.

## 🔮 Future Enhancements

- Add actual email sending functionality
- Database integration for form submissions
- Admin dashboard for managing inquiries
- Multi-language support
- Dark mode toggle
- Blog section
- Live chat integration

## 👥 Team

- **Product Owner**: Defines features and approves deliverables
- **Project Manager & QA**: Manages Jira board and testing
- **Tech Lead**: Manages GitHub repository
- **Lead Developer**: Primary feature development

## 📄 License

This project is part of a Software Project Management course assignment.

## 🙏 Acknowledgments

- Font Awesome for icons
- Google Fonts for typography
- Inspiration from modern SaaS landing pages

---

**Made with ❤️ for modern businesses**
