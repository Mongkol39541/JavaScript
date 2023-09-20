const links = document.querySelectorAll("a.text-xl");

    links.forEach(link => {
        link.addEventListener('mouseover', () => {
            const bg = link.querySelector('.slide-bg');
            bg.style.width = "100%";
        });
        link.addEventListener('mouseout', () => {
            const bg = link.querySelector('.slide-bg');
            bg.style.width = "0";
        });
    });