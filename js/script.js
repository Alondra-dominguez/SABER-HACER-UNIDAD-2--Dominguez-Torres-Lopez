// Clase para manejar las transiciones de opacidad
class TransitionBox {
    constructor(elementId) {
        this.element = document.getElementById(elementId);
    }

    fadeIn() {
        this.element.style.transition = 'opacity 0.5s ease-in-out';
        this.element.style.opacity = '1';
    }

    fadeOut() {
        this.element.style.transition = 'opacity 0.5s ease-in-out';
        this.element.style.opacity = '0';
    }
}

// Crear una instancia de TransitionBox para el section con ID product-section
const productSection = new TransitionBox('product-section');

// Ejecutar fadeOut al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    productSection.fadeOut();

    // Simular carga de productos después de 1 segundo
    setTimeout(() => {
        productSection.fadeIn();
    }, 1000);
});

