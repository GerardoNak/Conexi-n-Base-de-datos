document.addEventListener('DOMContentLoaded', (event) => {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        if (!confirm('¿Estás seguro de que deseas agregar este empleado?')) {
            e.preventDefault();
        }
    });

    // Generar estrellas
    const starContainer = document.querySelector('.stars');
    for (let i = 0; i < 100; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        star.style.left = `${Math.random() * 100}vw`;
        star.style.animationDuration = `${Math.random() * 5 + 5}s`;
        starContainer.appendChild(star);
    }
});
