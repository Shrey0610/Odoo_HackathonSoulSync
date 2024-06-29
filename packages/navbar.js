window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('perfixed');
    } else {
        navbar.classList.remove('perfixed');
    }
});

window.addEventListener('scroll', () => {
    const anchors = document.querySelectorAll('.navbar ul li a');
    
    anchors.forEach(anchor => {
        if (window.scrollY > 50) {
            anchor.classList.add('perfixed');
        } else {
            anchor.classList.remove('perfixed');
        }
    });
});

window.addEventListener('scroll', () => {
    const logoBox = document.querySelector('.logo');

    if (window.scrollY > 50) {
        logoBox.classList.add('perfixed');
    } else {
        logoBox.classList.remove('perfixed');
    }
});

