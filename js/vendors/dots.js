document.addEventListener('DOMContentLoaded', function () {
    const dots = document.querySelectorAll('.dot');
    const sections = document.querySelectorAll('section'); // Change this to select all relevant sections

    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
            updateActiveDot(sectionId); // Update active dot after scrolling
        }
    }

    function updateActiveDot(targetId) {
        dots.forEach(dot => {
            dot.classList.remove('active');
            if (dot.getAttribute('data-target') === targetId) {
                dot.classList.add('active');
            }
        });
    }

    // Set up click event for each dot
    dots.forEach(dot => {
        dot.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');
            scrollToSection(targetId);
        });
    });

    // Update active dot based on scroll position
    window.addEventListener('scroll', function () {
        let currentSectionId = '';
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            // Check if the section is in the viewport
            if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                currentSectionId = section.getAttribute('id');
            }
        });
        if (currentSectionId) {
            updateActiveDot(currentSectionId);
        }
    });
});
