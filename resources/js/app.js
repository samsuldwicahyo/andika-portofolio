import './bootstrap';

const root = document.documentElement;
const themeToggle = document.getElementById('theme-toggle');
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

themeToggle?.addEventListener('click', () => {
    const isDark = root.classList.toggle('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
});

menuToggle?.addEventListener('click', () => {
    mobileMenu?.classList.toggle('hidden');
});

document.querySelectorAll('.mobile-nav-link').forEach((link) => {
    link.addEventListener('click', () => mobileMenu?.classList.add('hidden'));
});

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    },
    { threshold: 0.12 }
);

document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));
