document.addEventListener('DOMContentLoaded', () => {
    anime({
        targets: 'h1',
        translateY: [-200, 0],
        easing: 'easeOutExpo',
        duration: 1200,
        opacity: [0, 1],
    })

    anime({
        targets: 'h4',
        translateY: [200, 0],
        easing: 'easeOutExpo',
        duration: 1700,
        delay: 500,
        opacity: [0, 1],
    })

    anime({
        targets: '.second',
        translateX: [-200, 0],
        easing: 'easeOutExpo',
        duration: 2200,
        delay: (el, i) => {
            return 500 + 100 * i;
        },
        opacity: [0, 1],
    })

    anime({
        targets: '.nav a',
        translateX: [-200, 0],
        easing: 'easeOutExpo',
        duration: 1200,
        delay: (el, i) => {
            return 1000 + 100 * i;
        },
        opacity: [0, 1],
    })

    anime({
        targets: '.hero-photo',
        easing: 'easeOutExpo',
        duration: 3800,
        delay: 1500,
        opacity: [0, 1],
    })

    anime({
        targets: '.last',
        easing: 'easeOutExpo',
        duration: 3800,
        delay: 1500,
        opacity: [0, 1],
    })
});