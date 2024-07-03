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

    // Luego de 2 segundos, ejecutar fadeIn para mostrar el section
    setTimeout(() => {
        productSection.fadeIn();
    }, 2000);
});

// Clase para manejar la animación del texto del encabezado
class AnimatedHeader {
    constructor(textIds) {
        this.textElements = textIds.map(id => document.getElementById(id));
        this.addEventListeners();
    }

    addEventListeners() {
        this.textElements.forEach(textElement => {
            textElement.addEventListener('mouseover', () => {
                this.animateText(textElement);
            });
            textElement.addEventListener('mouseout', () => {
                this.resetText(textElement);
            });
        });
    }

    animateText(element) {
        element.style.color = 'red'; // Cambia el color al pasar el cursor
    }

    resetText(element) {
        element.style.color = ''; // Restaura el color original
    }
}

// Crear una instancia de AnimatedHeader para los textos del encabezado
const animatedHeader = new AnimatedHeader(['text1', 'text2', 'text3', 'text4']);

// Definición de clase para producto
class Product {
    constructor(id, name, imageUrl, price, sale = false, salePrice = 0) {
        this.id = id;
        this.name = name;
        this.imageUrl = imageUrl;
        this.price = price;
        this.sale = sale;
        this.salePrice = salePrice;
    }

    render() {
        let card = document.createElement('div');
        card.classList.add('col', 'mb-5', 'card');
        card.innerHTML = `
            <div class="card h-100">
                ${this.sale ? '<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>' : ''}
                <img class="card-img-top" src="${this.imageUrl}" alt="..." />
                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder">${this.name}</h5>
                        ${this.sale ? `<span class="text-muted text-decoration-line-through">$${this.price}</span> $${this.salePrice}` : `$${this.price}`}
                    </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><button class="btn btn-outline-dark mt-auto" onclick="addToCart(${this.id})">Add to Cart</button></div>
                </div>
            </div>
        `;
        return card;
    }
}

// Lista de productos
const products = [
    new Product(1, 'Croqueta 1', 'https://placehold.co/200x200', 10.00),
    new Product(2, 'Croqueta 2', 'https://placehold.co/200x200', 15.00, true, 12.00),
    new Product(3, 'Croqueta 3', 'https://placehold.co/200x200', 20.00),
];

// Función para mostrar productos en la galería
function displayProducts() {
    const productList = document.getElementById('product-list');
    productList.innerHTML = '';
    products.forEach(product => {
        productList.appendChild(product.render());
    });
}

// Clase para manejar el carrito de compras
class ShoppingCart {
    constructor() {
        this.cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
        this.updateCartCount();
    }

    addToCart(productId) {
        this.cart.push(productId);
        localStorage.setItem('shoppingCart', JSON.stringify(this.cart));
        this.updateCartCount();
        Swal.fire({
            icon: 'success',
            title: 'Added to Cart',
            text: 'Product has been added to your cart!',
            timer: 2000,
            showConfirmButton: false
        });
    }

    updateCartCount() {
        const cartCount = document.getElementById('cart-count');
        cartCount.textContent = this.cart.length;
    }
}

// Instancia del carrito de compras
const shoppingCart = new ShoppingCart();

// Función global para agregar producto al carrito
function addToCart(productId) {
    shoppingCart.addToCart(productId);
}

// Mostrar productos al cargar la página
displayProducts();
