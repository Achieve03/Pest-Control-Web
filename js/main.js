// Service Details Data
const serviceDetails = {
    termite: {
        title: "Termite Control",
        description: "Our comprehensive termite control service includes thorough inspection, treatment, and prevention. We use eco-friendly solutions to protect your property from termite damage.",
        features: [
            "Professional inspection",
            "Eco-friendly treatment",
            "Prevention measures",
            "Regular monitoring"
        ]
    },
    rodent: {
        title: "Rodent Removal",
        description: "Safe and effective rodent control services to keep your property free from mice, rats, and other rodents. We use humane methods and preventive measures.",
        features: [
            "Humane removal",
            "Entry point sealing",
            "Sanitation recommendations",
            "Follow-up inspections"
        ]
    },
    general: {
        title: "General Pest Control",
        description: "Comprehensive pest control service for all types of common household pests. Regular maintenance and treatment to keep your property pest-free.",
        features: [
            "Regular inspections",
            "Customized treatment plans",
            "Eco-friendly solutions",
            "Emergency services"
        ]
    },
    cockroach: {
        title: "Cockroach Control",
        description: "Professional cockroach elimination and prevention services. We target both visible infestations and hidden nests.",
        features: [
            "Thorough inspection",
            "Targeted treatment",
            "Sanitation recommendations",
            "Prevention measures"
        ]
    },
    mosquito: {
        title: "Mosquito Control",
        description: "Effective mosquito treatment and prevention to protect your outdoor spaces. We focus on breeding site elimination and barrier treatments.",
        features: [
            "Breeding site inspection",
            "Barrier treatments",
            "Larvicide application",
            "Prevention tips"
        ]
    },
    ant: {
        title: "Ant Control",
        description: "Comprehensive ant colony elimination and prevention. We target both indoor and outdoor ant problems.",
        features: [
            "Colony location",
            "Targeted treatment",
            "Entry point sealing",
            "Prevention measures"
        ]
    },
    bee: {
        title: "Bee & Wasp Removal",
        description: "Safe and humane bee and wasp nest removal services. We prioritize the safety of both humans and beneficial pollinators.",
        features: [
            "Safe removal",
            "Nest relocation",
            "Prevention measures",
            "Emergency services"
        ]
    },
    bedbug: {
        title: "Bed Bug Treatment",
        description: "Thorough bed bug inspection and elimination services. We use heat treatment and other effective methods.",
        features: [
            "Detailed inspection",
            "Heat treatment",
            "Follow-up visits",
            "Prevention tips"
        ]
    },
    wildlife: {
        title: "Wildlife Control",
        description: "Humane wildlife removal and prevention services. We handle various wildlife issues with care and expertise.",
        features: [
            "Humane removal",
            "Entry point sealing",
            "Habitat modification",
            "Prevention measures"
        ]
    },
    garden: {
        title: "Garden Pest Control",
        description: "Eco-friendly garden pest management to protect your plants while maintaining environmental safety.",
        features: [
            "Plant inspection",
            "Organic treatments",
            "Beneficial insects",
            "Prevention tips"
        ]
    }
};

// Service Details Functions
function showServiceDetails(serviceType) {
    const serviceDetailsPage = document.getElementById('serviceDetails');
    const serviceTitle = document.getElementById('serviceDetailsTitle');
    const serviceContent = document.getElementById('serviceDetailsContent');
    
    const service = serviceDetails[serviceType];
    
    serviceTitle.textContent = service.title;
    serviceContent.innerHTML = `
        <div class="service-description">
            <p>${service.description}</p>
        </div>
        <div class="service-features">
            <h3>Features:</h3>
            <ul>
                ${service.features.map(feature => `<li>${feature}</li>`).join('')}
            </ul>
        </div>
    `;
    
    serviceDetailsPage.style.display = "block";
    document.body.style.overflow = "auto";
    serviceDetailsPage.style.zIndex = "1000";
}

function closeServiceDetails() {
    const serviceDetailsPage = document.getElementById('serviceDetails');
    serviceDetailsPage.style.display = "none";
    document.body.style.overflow = "auto";
}

// Update modal functions
function showModal(serviceType) {
    const modal = document.getElementById('serviceModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalContent = document.getElementById('modalContent');
    
    const service = serviceDetails[serviceType];
    
    modalTitle.textContent = service.title;
    modalContent.innerHTML = `
        <p>${service.description}</p>
        <h3>Features:</h3>
        <ul>
            ${service.features.map(feature => `<li>${feature}</li>`).join('')}
        </ul>
    `;
    
    modal.style.display = "block";
    document.body.style.overflow = "auto";
}

function closeModal() {
    const modal = document.getElementById('serviceModal');
    modal.style.display = "none";
    document.body.style.overflow = "auto";
}

function scheduleService() {
    closeModal();
    const contactSection = document.getElementById('contact');
    if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
    }
}

// Update window click handler
window.onclick = function(event) {
    const modal = document.getElementById('serviceModal');
    const serviceDetailsPage = document.getElementById('serviceDetails');
    
    if (event.target == modal) {
        closeModal();
    }
    if (event.target == serviceDetailsPage) {
        closeServiceDetails();
    }
}

// Update escape key handler
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
        closeServiceDetails();
    }
});

// Mobile Navigation Toggle
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
}

// Smooth Scrolling for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
            
            if (navLinks) {
                navLinks.classList.remove('active');
            }
            if (hamburger) {
                hamburger.classList.remove('active');
            }
        }
    });
});

// Form Validation
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic form validation
        const name = this.querySelector('input[name="name"]').value;
        const email = this.querySelector('input[name="email"]').value;
        const message = this.querySelector('textarea[name="message"]').value;
        
        if (!name || !email || !message) {
            alert('Please fill in all required fields');
            return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address');
            return;
        }
        
        // If validation passes, submit the form
        this.submit();
    });
}

// Testimonial Slider
let currentTestimonial = 0;
const testimonials = document.querySelectorAll('.testimonial');
const totalTestimonials = testimonials.length;

function showTestimonial(index) {
    if (testimonials.length > 0) {
        testimonials.forEach(testimonial => {
            testimonial.style.display = 'none';
        });
        testimonials[index].style.display = 'block';
    }
}

function nextTestimonial() {
    if (testimonials.length > 0) {
        currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
        showTestimonial(currentTestimonial);
    }
}

// Initialize first testimonial
if (testimonials.length > 0) {
    showTestimonial(0);
    // Auto-rotate testimonials every 5 seconds
    setInterval(nextTestimonial, 5000);
}

// Scroll to Top Button
const scrollToTopBtn = document.createElement('button');
scrollToTopBtn.innerHTML = '↑';
scrollToTopBtn.className = 'scroll-to-top';
document.body.appendChild(scrollToTopBtn);

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollToTopBtn.style.display = 'flex';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
});

scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Testimonial Controls
const prevBtn = document.querySelector('.prev-testimonial');
const nextBtn = document.querySelector('.next-testimonial');

if (prevBtn && nextBtn) {
    prevBtn.addEventListener('click', () => {
        currentTestimonial = (currentTestimonial - 1 + totalTestimonials) % totalTestimonials;
        showTestimonial(currentTestimonial);
    });

    nextBtn.addEventListener('click', () => {
        currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
        showTestimonial(currentTestimonial);
    });
}

// Chatbot Functions
function openChatbot() {
    const chatbotModal = document.getElementById('chatbotModal');
    chatbotModal.classList.add('active');
    
    // Clear previous messages
    const messagesContainer = document.querySelector('.chatbot-messages');
    messagesContainer.innerHTML = '';
    
    // Add welcome message
    addMessage("Hello! I'm your pest control assistant. How can I help you today?", 'bot');
}

function closeChatbot() {
    const chatbotModal = document.getElementById('chatbotModal');
    chatbotModal.classList.remove('active');
}

function sendMessage() {
    const input = document.querySelector('.chatbot-input input');
    const message = input.value.trim();

    if (message) {
        // Add user message
        addMessage(message, 'user');
        input.value = '';

        // Show typing indicator
        const typingIndicator = document.createElement('div');
        typingIndicator.className = 'message bot typing';
        typingIndicator.innerHTML = '<span></span><span></span><span></span>';
        document.querySelector('.chatbot-messages').appendChild(typingIndicator);

        // Scroll to bottom
        const messagesContainer = document.querySelector('.chatbot-messages');
        messagesContainer.scrollTop = messagesContainer.scrollHeight;

        // Simulate bot response after delay
        setTimeout(() => {
            typingIndicator.remove();
            const botResponse = getBotResponse(message);
            addMessage(botResponse, 'bot');
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }, 1500);
    }
}

function addMessage(text, sender) {
    const messagesContainer = document.querySelector('.chatbot-messages');
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${sender}`;
    messageDiv.textContent = text;
    messagesContainer.appendChild(messageDiv);
}

function getBotResponse(message) {
    const lowerMessage = message.toLowerCase();
    
    if (lowerMessage.includes('service') || lowerMessage.includes('price')) {
        return "We offer various pest control services. You can click on any service card to learn more about specific services and pricing.";
    } else if (lowerMessage.includes('emergency') || lowerMessage.includes('urgent')) {
        return "For emergency services, please call us immediately at (123) 456-7890. We offer 24/7 emergency response.";
    } else if (lowerMessage.includes('schedule') || lowerMessage.includes('appointment')) {
        return "You can schedule an appointment by:\n1. Filling out our contact form\n2. Calling us at (123) 456-7890\n3. Using our online booking system";
    } else if (lowerMessage.includes('location') || lowerMessage.includes('address')) {
        return "Our office is located at 123 Pest Control St, City, State. We service the entire metropolitan area. You can find our exact location on the service details page.";
    } else if (lowerMessage.includes('hello') || lowerMessage.includes('hi')) {
        return "Hello! I'm here to help with your pest control needs. You can ask me about our services, pricing, or how to schedule an appointment.";
    } else if (lowerMessage.includes('thank')) {
        return "You're welcome! Is there anything else I can help you with?";
    } else {
        return "I'm here to help with your pest control needs. You can ask about our services, pricing, or schedule an appointment. You can also click on any service card to learn more about specific services.";
    }
}

// Event Listeners
document.querySelectorAll('.service-btn').forEach(button => {
    button.addEventListener('click', function() {
        const serviceType = this.getAttribute('data-service');
        showServiceDetails(serviceType);
    });
});

document.querySelector('.close-chatbot').addEventListener('click', closeChatbot);

document.querySelector('.chatbot-input input').addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        sendMessage();
    }
});

// Close chatbot when clicking outside
window.addEventListener('click', (event) => {
    const chatbotModal = document.getElementById('chatbotModal');
    if (event.target === chatbotModal) {
        closeChatbot();
    }
}); 