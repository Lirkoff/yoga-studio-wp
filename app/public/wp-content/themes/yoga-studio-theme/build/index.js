

// Wait until the DOM is fully parsed
document.addEventListener('DOMContentLoaded', () => {
    const hamburger  = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    if (!hamburger || !mobileMenu) return; // safe-guard if the markup isn't present

    // Toggle the drawer
    hamburger.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.toggle('hidden');
        hamburger.setAttribute('aria-expanded', !isHidden);
    });

    // Auto-close when a link is clicked
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            hamburger.setAttribute('aria-expanded', false);
        });
    });
});
