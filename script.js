// Gestion globale
document.addEventListener('DOMContentLoaded', () => {
    // Scroll Menu
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 30) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
    if (window.scrollY > 30) navbar.classList.add('scrolled');
  
    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', e => {
        const targetAttr = anchor.getAttribute('href');
        if(targetAttr === "#") return;
        
        e.preventDefault();
        const target = document.querySelector(targetAttr);
        if (target) {
            const top = target.getBoundingClientRect().top + window.scrollY - 80;
            window.scrollTo({ top: top, behavior: 'smooth' });
        }
        const navLinks = document.getElementById('nav-links');
        if (navLinks) navLinks.classList.remove('open');
      });
    });
  
    // Mobile Menu
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    if (menuToggle && navLinks) {
      menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('open');
      });
    }
  
    // Cookies Banner
    const banner = document.getElementById("cookie-banner");
    const acceptBtn = document.getElementById("accept-cookies");
    const rejectBtn = document.getElementById("reject-cookies");
  
    const cookieChoice = localStorage.getItem("cookieConsent");
    if (!cookieChoice && banner) {
      setTimeout(() => banner.classList.add("show"), 1000);
    }
    if (acceptBtn) {
        acceptBtn.addEventListener("click", () => {
            localStorage.setItem("cookieConsent", "accepted");
            banner.classList.remove("show");
        });
    }
    if (rejectBtn) {
        rejectBtn.addEventListener("click", () => {
            localStorage.setItem("cookieConsent", "rejected");
            banner.classList.remove("show");
        });
    }

    // Dynamic Gallery Logic (Load More)
    const galleryItems = document.querySelectorAll('.gallery-item-legal');
    const loadMoreBtn = document.getElementById('load-more');
    let visibleCount = 8;

    if (loadMoreBtn && galleryItems.length > 0) {
        loadMoreBtn.addEventListener('click', () => {
            visibleCount += 8;
            for (let i = 0; i < visibleCount && i < galleryItems.length; i++) {
                galleryItems[i].style.display = 'block';
            }
            if (visibleCount >= galleryItems.length) {
                loadMoreBtn.style.display = 'none';
            }
        });
    }
});
