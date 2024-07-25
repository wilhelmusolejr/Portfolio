document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const sections = document.querySelectorAll('section');

    const observerOptions = {
        root: null, // Use the viewport as the root
        rootMargin: '0px',
        threshold: 0.5 // 50% of the element must be visible to be considered "in the viewport"
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute('id');
            const navLink = document.querySelector(`.navbar-nav .nav-link[href="#${id}"]`).parentElement;

            if (entry.isIntersecting) {
                navLink.querySelector('a').classList.add('active');
            } else {
                navLink.querySelector('a').classList.remove('active');
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });

    // --------------------------------------
    const projectFilter = document.querySelector('.project-filter');
    const checkboxes = projectFilter.querySelectorAll('.form-check-input');
    const projects = document.querySelectorAll('.projects .project');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            filterProjects();
        });
    });

    const filterProjects = () => {
        const activeFilters = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);

        projects.forEach(project => {
            const projectTypes = project.className.split(' ').slice(1); // Get all classes except 'project'
            const isVisible = projectTypes.some(type => activeFilters.includes(type));
            project.style.display = isVisible ? 'block' : 'none';
        });
    };

    // Initial filter on page load
    filterProjects();
});
