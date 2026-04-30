$files = @(
    'about.html','services.html','service-single.html',
    'index-video.html','index-image.html','blog.html','blog-single.html',
    'case-study.html','case-study-single.html','pricing.html','faqs.html',
    'testimonials.html','team.html','team-single.html','contact.html',
    '404.html','image-gallery.html','video-gallery.html'
)

foreach ($f in $files) {
    $c = Get-Content $f -Raw -Encoding UTF8

    # Page Title
    $c = $c -replace 'Netzon - Cyber Security Services HTML Template','Netzon - Web & Software Development Agency'

    # Footer
    $c = $c -replace 'Secure your cloud environments & ensure safe migration with compliance-ready\.','Building powerful digital solutions that help your business grow and thrive in the digital age.'
    $c = $c -replace 'Stay informe with the latest cybersecurity news, expert tips\.','Stay updated with the latest development trends, tools and insights.'

    # Core company description
    $c = $c -replace 'Delivering end to end cybersecurity that not only protect against today.s threats but also prepare businesses for the challenges of tomorrow','Delivering end to end software solutions that not only solve today''s business challenges but also prepare you for the digital opportunities of tomorrow'
    $c = $c -replace 'We go beyond traditional protection by offering proactive, adaptive, and scalable cybersecurity solutions\. Our mission is to shield your organization from today.s cyber risks while building the resilience needed to face tomorrow.s challenges\.','We go beyond traditional development by offering innovative, adaptive, and scalable software solutions. Our mission is to transform your ideas into powerful digital products that drive business growth and success.'
    $c = $c -replace 'With expert guidance, advanced technology, and 24/7 monitoring, we ensure your business operates with confidence in an ever-changing digital world\.','With expert guidance, a modern technology stack, and dedicated project management, we ensure your digital products are built to the highest standards and delivered on time, every time.'

    # Hero section
    $c = $c -replace 'Guardians of Your Digital World','Architects of Your Digital Future'
    $c = $c -replace 'Guardians of Your\s+Digital World','Architects of Your Digital Future'
    $c = $c -replace 'security solutions that adapt\s+<span>to new threats</span>','development solutions that bring your <span>ideas to life</span>'
    $c = $c -replace 'security solutions that adapt <span>to new threats</span>','development solutions that bring your <span>ideas to life</span>'
    $c = $c -replace 'end-to-end protection, ensuring your\s+business runs securely and without\s+interruption\.','end-to-end digital solutions, ensuring your business grows faster and smarter.'
    $c = $c -replace 'end-to-end protection, ensuring your business runs securely and without interruption\.','end-to-end digital solutions, ensuring your business grows faster and smarter.'
    $c = $c -replace 'Cybersecurity is not just tech,\s+it.s about trust - protecting your\s+data\.','Software is not just about code, it''s about crafting experiences that transform businesses.'
    $c = $c -replace 'Cybersecurity is not just tech, it.s about trust - protecting your data\.','Software is not just about code, it''s about crafting experiences that transform businesses.'
    $c = $c -replace 'CEO at DBC','CEO at TechBase'
    $c = $c -replace 'Empowering businesses to grow\s+smarter, move faster, and stay\s+secure\.','Empowering businesses to build smarter, scale faster, and innovate boldly.'
    $c = $c -replace 'Empowering businesses to grow smarter, move faster, and stay secure\.','Empowering businesses to build smarter, scale faster, and innovate boldly.'
    $c = $c -replace 'Every day, our technology stops, and\s+eliminate 500\+ threats\.','Every day, our team ships 500+ features, updates, and improvements.'
    $c = $c -replace 'Every day, our technology stops, and eliminate 500\+ threats\.','Every day, our team ships 500+ features, updates, and improvements.'

    # Services
    $c = $c -replace 'Protecting businesses with tailored cyber\s+security <span>services that fit</span>','Empowering businesses with tailored web & software <span>solutions that fit</span>'
    $c = $c -replace 'Protecting businesses with tailored cyber security <span>services that fit</span>','Empowering businesses with tailored web & software <span>solutions that fit</span>'
    $c = $c -replace 'We provide customized cybersecurity services\s+designed to match your business needs,\s+whether you.re a startup or an enterprise\.','We provide customized development services designed to match your business needs, whether you''re a startup or a global enterprise.'
    $c = $c -replace 'We provide customized cybersecurity services designed to match your business needs, whether you.re a startup or an enterprise\.','We provide customized development services designed to match your business needs, whether you''re a startup or a global enterprise.'
    $c = $c -replace 'Identity & Access Management','Web Development'
    $c = $c -replace 'Cloud Security and Solutions','Mobile App Development'
    $c = $c -replace 'Data Protection & Encryption','UI/UX Design'
    $c = $c -replace 'Endpoint Security Management','Custom Software Development'
    $c = $c -replace 'Network Security Monitoring','E-Commerce Development'
    $c = $c -replace 'Penetration Testing','API Development & Integration'
    $c = $c -replace 'Security Awareness Training','Cloud Solutions & DevOps'
    $c = $c -replace 'Compliance & Risk Management','Digital Transformation'
    $c = $c -replace 'Control who has access to your systems\s+with secure authentication &\s+authorization\.','We build fast, responsive, and modern websites and web applications tailored to your brand.'
    $c = $c -replace 'Control who has access to your systems with secure authentication & authorization\.','We build fast, responsive, and modern websites and web applications tailored to your brand.'
    $c = $c -replace 'Secure your cloud environments and\s+ensure safe migration with\s+compliance-ready solutions\.','Native and cross-platform mobile apps that deliver seamless experiences on iOS and Android.'
    $c = $c -replace 'Secure your cloud environments and ensure safe migration with compliance-ready solutions\.','Native and cross-platform mobile apps that deliver seamless experiences on iOS and Android.'
    $c = $c -replace 'Keep sensitive information safe with\s+advanced encryption and secure storage\s+solutions\.','Beautiful, intuitive interfaces designed to engage users and convert visitors into loyal customers.'
    $c = $c -replace 'Keep sensitive information safe with advanced encryption and secure storage solutions\.','Beautiful, intuitive interfaces designed to engage users and convert visitors into loyal customers.'
    $c = $c -replace 'Protect laptops, mobiles, and IoT\s+devices with advanced endpoint defense\s+solutions\.','Scalable, robust custom software solutions built from the ground up to solve your unique business challenges.'
    $c = $c -replace 'Protect laptops, mobiles, and IoT devices with advanced endpoint defense solutions\.','Scalable, robust custom software solutions built from the ground up to solve your unique business challenges.'
    $c = $c -replace 'Protecting what matters most -','Building what matters most -'
    $c = $c -replace 'See how our services keep you safe!','See how our solutions help you grow!'

    # Why Choose Us
    $c = $c -replace 'Future ready cybersecurity that\s+<span>goes beyond defense</span>','Future-ready development solutions that <span>go beyond just code</span>'
    $c = $c -replace 'Future ready cybersecurity that <span>goes beyond defense</span>','Future-ready development solutions that <span>go beyond just code</span>'
    $c = $c -replace 'We don.t just stop attacks.we prepare your\s+business to withstand them\. By combining\s+proactive defense, real-time intelligence,\s+and long-term strategies\.','We don''t just write code - we architect solutions that scale, perform, and evolve with your business needs.'
    $c = $c -replace 'We don.t just stop attacks.we prepare your business to withstand them\. By combining proactive defense, real-time intelligence, and long-term strategies\.','We don''t just write code - we architect solutions that scale, perform, and evolve with your business needs.'
    $c = $c -replace '"Cybersecurity is not just about\s+protecting systems, it.s about\s+protecting trust\."','"Development is not just about writing code, it''s about crafting solutions that drive real business growth."'
    $c = $c -replace '"Cybersecurity is not just about protecting systems, it.s about protecting trust\."','"Development is not just about writing code, it''s about crafting solutions that drive real business growth."'
    $c = $c -replace 'Future-Ready Security','Agile Delivery'
    $c = $c -replace 'Advance data protection','Scalable Architecture'
    $c = $c -replace 'Proactive Threat Detection','Agile Development Process'
    $c = $c -replace 'We don.t just wait for threats to\s+strike - our advanced monitoring\s+tools identify\.','We deliver your project in iterative sprints, ensuring continuous feedback and rapid time-to-market.'
    $c = $c -replace 'We don.t just wait for threats to strike - our advanced monitoring tools identify\.','We deliver your project in iterative sprints, ensuring continuous feedback and rapid time-to-market.'
    $c = $c -replace 'Tailored Security Solutions','Custom-Built Solutions'
    $c = $c -replace 'We design customized cybersecurity\s+strategy that align with your\s+industry\.','We architect solutions that are 100% tailored to your specific business requirements and goals.'
    $c = $c -replace 'We design customized cybersecurity strategy that align with your industry\.','We architect solutions that are 100% tailored to your specific business requirements and goals.'

    # How It Works
    $c = $c -replace 'Smart cybersecurity strategies designed to\s+defend,','Smart development strategies designed to discover, design,'
    $c = $c -replace 'Smart cybersecurity strategies designed to defend,','Smart development strategies designed to discover, design,'
    $c = $c -replace 'respond, <span>and evolve</span>','build, <span>and deliver</span>'
    $c = $c -replace 'Risk Assessment','Discovery & Planning'
    $c = $c -replace 'Threat Detection','Design & Prototyping'
    $c = $c -replace 'Protection Deployment','Development & Testing'
    $c = $c -replace 'Security Evolution','Launch & Ongoing Support'
    $c = $c -replace 'We start with a full evaluation of your\s+IT infrastructure\.','We start with a deep dive into your business goals, requirements, and target audience.'
    $c = $c -replace 'We start with a full evaluation of your IT infrastructure\.','We start with a deep dive into your business goals, requirements, and target audience.'
    $c = $c -replace 'Self-learning algorithms for continuous\s+improvement','Our designers craft wireframes and interactive prototypes for your approval.'
    $c = $c -replace 'Self-learning algorithms for continuous improvement','Our designers craft wireframes and interactive prototypes for your approval.'
    $c = $c -replace 'We implement advanced defense\s+measures-firewalls, encryption\.','We build your solution using modern technologies with rigorous QA testing at every step.'
    $c = $c -replace 'We implement advanced defense measures-firewalls, encryption\.','We build your solution using modern technologies with rigorous QA testing at every step.'
    $c = $c -replace 'We continually refine, update &\s+strengthen your defenses\.','We deploy your product live and provide ongoing maintenance, updates, and dedicated support.'
    $c = $c -replace 'We continually refine, update & strengthen your defenses\.','We deploy your product live and provide ongoing maintenance, updates, and dedicated support.'
    $c = $c -replace 'Building resilience step by step','Building your vision step by step'
    $c = $c -replace 'Explore how our process protects you!','Explore how our process delivers results!'

    # Case Studies
    $c = $c -replace 'Real world examples of cybersecurity that builds\s+<span>trust and resilience</span>','Real world examples of our work that builds <span>trust and delivers results</span>'
    $c = $c -replace 'Real world examples of cybersecurity that builds <span>trust and resilience</span>','Real world examples of our work that builds <span>trust and delivers results</span>'
    $c = $c -replace 'See how our tailored approach to\s+cybersecurity transforms challenges into\s+opportunities, helping businesses protect\s+what matters most\.','See how our tailored approach to development transforms ideas into impactful digital products that drive real business results.'
    $c = $c -replace 'See how our tailored approach to cybersecurity transforms challenges into opportunities, helping businesses protect what matters most\.','See how our tailored approach to development transforms ideas into impactful digital products that drive real business results.'
    $c = $c -replace 'E-Commerce Fraud','E-Commerce Platform'
    $c = $c -replace 'Banking Security','Fintech Web App'
    $c = $c -replace 'Healthcare Compliance','Healthcare Portal'
    $c = $c -replace 'Startup Protection','Startup MVP Launch'
    $c = $c -replace '>Finance<','>E-Commerce<'
    $c = $c -replace '>DataSecurity<','>React<'
    $c = $c -replace '>Firewall<','>Fintech<'
    $c = $c -replace '>ECommerce<','>Node.js<'
    $c = $c -replace '>Health<','>Healthcare<'
    $c = $c -replace '>DataPrivacy<','>React Native<'
    $c = $c -replace '>Security<','>Flutter<'

    # Intro Video
    $c = $c -replace 'A journey built on trust, innovation, and\s+<span>unwavering security</span>','A journey built on passion, innovation, and <span>exceptional craftsmanship</span>'
    $c = $c -replace 'A journey built on trust, innovation, and <span>unwavering security</span>','A journey built on passion, innovation, and <span>exceptional craftsmanship</span>'

    # Features
    $c = $c -replace 'Smart, scalable, and reliable cybersecurity\s+tools designed','Smart, scalable, and reliable development solutions designed'
    $c = $c -replace 'Smart, scalable, and reliable cybersecurity tools designed','Smart, scalable, and reliable development solutions designed'
    $c = $c -replace 'Advanced Threat Detection','Custom Web Applications'
    $c = $c -replace 'Multi-Layer Firewall Protection','Mobile-First Development'
    $c = $c -replace 'Data Encryption & Privacy','Scalable Architecture'
    $c = $c -replace 'Incident Response & Recovery','Agile Sprints & Delivery'
    $c = $c -replace '24/7 Network Monitoring','24/7 Support & Maintenance'
    $c = $c -replace 'Risk Management','Web Development'
    $c = $c -replace 'Next-Gen Security','Mobile Apps'
    $c = $c -replace 'Network Protection','UI/UX Design'
    $c = $c -replace 'Data Protection','Cloud Solutions'
    $c = $c -replace 'Cyber Defense','API Integration'

    # Pricing
    $c = $c -replace 'Affordable, scalable cybersecurity services for\s+businesses','Affordable, scalable development services for businesses'
    $c = $c -replace 'Affordable, scalable cybersecurity services for businesses','Affordable, scalable development services for businesses'
    $c = $c -replace 'Basic firewall\s+protection','Landing Page Development'
    $c = $c -replace 'Basic firewall protection','Landing Page Development'
    $c = $c -replace 'Monthly security reports','Mobile Responsive Design'
    $c = $c -replace 'Real-time threat\s+monitoring','Basic SEO Setup'
    $c = $c -replace 'Real-time threat monitoring','Basic SEO Setup'
    $c = $c -replace 'Yearly security reports','Mobile Responsive Design'

    # FAQs
    $c = $c -replace 'Everything you want to\s+<span>know cybersecurity</span>','Everything you want to <span>know about development</span>'
    $c = $c -replace 'Everything you want to <span>know cybersecurity</span>','Everything you want to <span>know about development</span>'
    $c = $c -replace 'From service details to protection strategies, we provide clear explanations to help you make informed decisions\.','From project timelines to technical requirements, we provide clear answers to help you make informed decisions.'
    $c = $c -replace 'Q1: Why is cybersecurity important for\s+my business\?','Q1: What technologies and frameworks do you specialize in?'
    $c = $c -replace 'Q1: Why is cybersecurity important for my business\?','Q1: What technologies and frameworks do you specialize in?'
    $c = $c -replace 'Q2: What industries do you provide\s+cybersecurity services for\?','Q2: How long does it take to build a website or app?'
    $c = $c -replace 'Q2: What industries do you provide cybersecurity services for\?','Q2: How long does it take to build a website or app?'
    $c = $c -replace 'Q3: Do small businesses really need\s+cybersecurity\?','Q3: Do you offer post-launch support and maintenance?'
    $c = $c -replace 'Q3: Do small businesses really need cybersecurity\?','Q3: Do you offer post-launch support and maintenance?'
    $c = $c -replace 'Q4: How quickly can you respond to a\s+cyber threat\?','Q4: What does your development process look like?'
    $c = $c -replace 'Q4: How quickly can you respond to a cyber threat\?','Q4: What does your development process look like?'
    $c = $c -replace 'Q5: Is your solution customizable for my industry\?','Q5: Can you redesign my existing website or app?'
    $c = $c -replace 'We work with business across various industr including finance, healthcare, e-commerce, and technology, tailoring solutions to meet each sector.s unique security needs\.','We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more, tailored to each project''s unique requirements.'

    # Testimonials
    $c = $c -replace 'What our clients say about staying\s+<span>secure with us</span>','What our clients say about building <span>great products with us</span>'
    $c = $c -replace 'What our clients say about staying <span>secure with us</span>','What our clients say about building <span>great products with us</span>'
    $c = $c -replace 'Discover how our trusted cybersecurity\s+solutions have empowered businesses to\s+operate with confidence\.','Discover how our development expertise has helped businesses launch successful digital products and grow online.'
    $c = $c -replace 'Discover how our trusted cybersecurity solutions have empowered businesses to operate with confidence\.','Discover how our development expertise has helped businesses launch successful digital products and grow online.'
    $c = $c -replace 'cybersecurity team has\s+completely transformed\s+the way we protect our\s+digital assets\. Their\s+proactive monitoring,\s+advanced threat\s+detection, and immediate\s+response to incidents\s+have given our entire\s+organization a level of\s+confidence we never had\s+before\. We now operate\s+without fear of\s+breaches\.','development team has completely transformed our digital presence. Their expertise, attention to detail, and commitment to delivering on time have given our entire organization a competitive edge we never had before. We launched our platform in record time.'
    $c = $c -replace 'FinSecure Ltd\.','FinBridge Ltd.'

    # Blog
    $c = $c -replace 'Stay updated with the latest trends, tips, and\s+<span>cybersecurity insights</span>','Stay updated with the latest trends, tips, and <span>development insights</span>'
    $c = $c -replace 'Stay updated with the latest trends, tips, and <span>cybersecurity insights</span>','Stay updated with the latest trends, tips, and <span>development insights</span>'
    $c = $c -replace 'Our blog delivers actionable advice, expert opinions, and in-depth analysis to help your business stay protected and informed\.','Our blog delivers actionable advice, expert opinions, and in-depth analysis to help your business leverage technology and grow online.'
    $c = $c -replace 'Top 10 Cybersecurity Threats Every\s+Business Must Watch Out for in\s+2025','Top 10 Web Development Trends Every Business Should Embrace in 2025'
    $c = $c -replace 'Top 10 Cybersecurity Threats Every Business Must Watch Out for in 2025','Top 10 Web Development Trends Every Business Should Embrace in 2025'
    $c = $c -replace 'Ransomware Attack Explain Preventin\s+Response & Recovery Strategies','Why Your Business Needs a Progressive Web App in Today''s Mobile World'
    $c = $c -replace 'Ransomware Attack Explain Preventin Response & Recovery Strategies','Why Your Business Needs a Progressive Web App in Today''s Mobile World'
    $c = $c -replace 'Essential Security Tips to Protect Your\s+Remote Workforce and Data','How to Choose the Right Tech Stack for Your Next Web or Mobile Project'
    $c = $c -replace 'Essential Security Tips to Protect Your Remote Workforce and Data','How to Choose the Right Tech Stack for Your Next Web or Mobile Project'

    # About page specific
    $c = $c -replace 'The core principles that guide our mission\s+<span>in cybersecurity</span>','The core principles that guide our mission <span>in software development</span>'
    $c = $c -replace 'The core principles that guide our mission <span>in cybersecurity</span>','The core principles that guide our mission <span>in software development</span>'
    $c = $c -replace 'At the heart of our work lies a set of unwavering principles that shape every solution we deliver\. We believe that true cybersecurity goes beyond technology - it is built on trust, integrity, and a commitment to protecting what matters most\.','At the heart of our work lies a set of unwavering principles that shape every solution we deliver. We believe that great software development goes beyond writing code - it is built on creativity, collaboration, and a commitment to excellence.'
    $c = $c -replace 'We are dedicated to staying ahead of evolving threats, providing tailored\.','We are dedicated to building innovative digital products that solve real problems and create lasting value for our clients.'
    $c = $c -replace 'We aim to be the trusted that not only protects against today.s cyber threats\.','We aim to be the most trusted development partner for businesses seeking to thrive in the digital world.'
    $c = $c -replace 'Celebrating our journey of innovation, trust & excellence\s+<span>in cyber security</span>','Celebrating our journey of innovation, trust & excellence <span>in software development</span>'
    $c = $c -replace 'Celebrating our journey of innovation, trust & excellence <span>in cyber security</span>','Celebrating our journey of innovation, trust & excellence <span>in software development</span>'

    # Catch-all remaining security terms
    $c = $c -replace 'cybersecurity','web & software development'
    $c = $c -replace 'Cybersecurity','Web Development'
    $c = $c -replace 'cyber security','web development'
    $c = $c -replace 'Cyber Security','Web Development'

    Set-Content $f $c -Encoding UTF8
    Write-Host ('Done: ' + $f)
}
Write-Host 'All files transformed!'
