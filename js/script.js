// Función para cargar imágenes en la galería de productos
function loadProductImages() {
    const products = [
        {src: 'https://th.bing.com/th/id/OIP.Mj9mYPhQhAyDG-kWR_mWpwHaDt?w=326&h=174&c=7&r=0&o=5&pid=1.7', brand: 'Royal Canin', price: '$50', offer: false},
        {src: 'https://th.bing.com/th/id/OIP.vtF-F_xqovGa9nwbDmKuPQHaHa?w=158&h=180&c=7&r=0&o=5&pid=1.7', brand: 'Hills Science Diet', price: '$45', offer: true},
        {src: 'https://th.bing.com/th/id/OIP.B3tP0bXpXr-VRca4tnPJfwHaHa?w=176&h=180&c=7&r=0&o=5&pid=1.7', brand: 'Purina Pro Plan', price: '$40', offer: false},
        {src: 'https://th.bing.com/th/id/OIP.UQDdk8ZeGoYKWYZFOmhhmAHaHa?w=170&h=180&c=7&r=0&o=5&pid=1.7', brand: 'Eukanuba', price: '$35', offer: true},
        {src: 'https://th.bing.com/th?q=Iams+Pet+Food&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=es-MX&cc=MX&setlang=es&adlt=strict&t=1&mw=247', brand: 'Iams', price: '$30', offer: false},
        {src: 'https://i5.walmartimages.com/asr/8afee5be-2c60-4307-bffe-488d618ef0b1.d8cd6886a8f50a12fbbc2cf8929131e8.jpeg', brand: 'Pedigree', price: '$35', offer: true},
        {src: 'https://th.bing.com/th/id/OIP.wiqgcYZDVrGj6xO_ber2KQHaHa?rs=1&pid=ImgDetMain', brand: 'Ganador', price: '$40', offer: false},
        {src: 'https://th.bing.com/th/id/R.3e3f612fad93b86c01739a2345691dde?rik=FilDAoCVNRLbAQ&pid=ImgRaw&r=0', brand: 'DOG CHOW', price: '$50', offer: true},
    ];

    const productGallery = document.getElementById('product-list');

    products.forEach(product => {
        const card = document.createElement('div');
        card.classList.add('product-card');

        const image = document.createElement('img');
        image.classList.add('product-image');
        image.src = product.src;
        image.alt = product.brand;

        const details = document.createElement('div');
        details.classList.add('product-details');

        const brand = document.createElement('div');
        brand.classList.add('product-brand');
        brand.textContent = product.brand;

        const price = document.createElement('div');
        price.classList.add('product-price');
        price.textContent = product.price;

        const addToCartBtn = document.createElement('button');
        addToCartBtn.classList.add('add-to-cart-btn');
        addToCartBtn.textContent = 'Add to Cart';

        if (product.offer) {
            const offerTag = document.createElement('div');
            offerTag.classList.add('offer-tag');
            offerTag.textContent = 'OFERTA';
            details.appendChild(offerTag);
        }

        details.appendChild(brand);
        details.appendChild(price);
        details.appendChild(addToCartBtn);

        card.appendChild(image);
        card.appendChild(details);

        productGallery.appendChild(card);
    });
}

// Ejecutar fadeOut al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    loadProductImages();
});