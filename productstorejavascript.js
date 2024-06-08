// Updated JavaScript
var totalPrice = 0;

function addToCart(productName, price) {
    console.log("testst");
    var cart = document.getElementById('cart-items');
    var cartItems = cart.getElementsByClassName('cart-item');

    // Check if the item is already in the cart
    for (var i = 0; i < cartItems.length; i++) {
        var cartItem = cartItems[i];
        var itemText = cartItem.querySelector('p').innerText;

        if (itemText.includes(productName)) {
            // If the item is in the cart, increment the quantity and update the total price
            var quantityInput = cartItem.querySelector('.quantity-input');
            var newQuantity = parseInt(quantityInput.value) + 1;
            quantityInput.value = newQuantity;

            totalPrice += price;
            document.getElementById('total-price').innerText = totalPrice.toFixed(2);

            return; // Exit the function if the item is found in the cart
        }
    }

    // If the item is not in the cart, create a new cart item
    var cartItem = document.createElement('div');
    cartItem.className = 'cart-item';

    // Add a quantity input field
    cartItem.innerHTML = `
        <p>${productName} - $${price.toFixed(2)}</p>
        <label for="${productName}-quantity">Quantity:</label>
        <input type="number" class="quantity-input" id="${productName}-quantity" value="1" min="1" onchange="updateCartItem('${productName}', ${price}, this.value)">
    `;
    cart.appendChild(cartItem);

    // Update the total price
    totalPrice += price;
    document.getElementById('total-price').innerText = totalPrice.toFixed(2);
}


// Modify your existing JavaScript to include a sortItems function
var productsData = [
    // An array containing objects for each product with name and price
    { name: 'Whey Protein', price: 29.99, image: 'wheyy.jpg',description:'High-quality whey protein for muscle building.', addToCartFunction: function() {addToCart('Whey Protein', 29.99);  } },
    { name: 'Vegan Protein', price: 34.99, image: 'vegan.jpg',description:'Plant-based protein for a sustainable diet.',   addToCartFunction: function() {addToCart('Vegan Protein', 34.99); }},
    { name: 'Casein protein', price: 39.99, image: 'casein.jpg',description:'Slow-digesting protein for prolonged amino acid release.',addToCartFunction: function() {addToCart('Casein Protein', 39.99); }},
    { name: 'Pea Protein', price: 27.99, image: 'peaa.jpg',description:'Alternative plant-based protein source for dietary preferences.', addToCartFunction: function() {addToCart('Pea Protein', 27.99); }},
    { name: 'Isolate Protein', price: 49.99, image: 'isolate.jpg',description:'Highly refined protein with minimal fat and carbs.', addToCartFunction: function() {addToCart('Isolate Protein', 49.99); }},
    { name: 'Soy Protein', price: 31.99, image: 'soy.jpg',description:'Complete protein source suitable for vegetarians and vegans.', addToCartFunction: function() {addToCart('Soy Protein', 31.99); }},
    { name: 'Collagen Protein', price: 44.99, image: 'colagen.jpg',description:'Supports joint health and promotes skin elasticity.', addToCartFunction: function() {addToCart('Colagen Protein', 44.99); }},
    { name: 'Hemp Protein', price: 36.99, image: 'hemp.jpg',description:'Rich in omega-3 fatty acids and suitable for a plant-based diet.', addToCartFunction: function() {addToCart('Hemp Protein', 36.99); }},

    // Add other products
];


function renderProducts() {
    var productsContainer = document.getElementById('products');
    productsContainer.innerHTML = '';

    productsData.forEach(function(product) {
        var productDiv = document.createElement('div');
        productDiv.className = 'product';
        productDiv.innerHTML = `<h2>${product.name}</h2><p>Price: $${product.price.toFixed(2)}</p>`;
        productDiv.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h2>${product.name}</h2>
            <p>Price: $${product.price.toFixed(2)}</p>
            <p class="description">${product.description}</p>
            <button class="buy-btn" onclick="addToCart('${product.name}', ${product.price})">Add to Cart</button>
        `;
        productsContainer.appendChild(productDiv);
    });
}

function sortItems() {
    var priceFilter = document.getElementById('priceFilter');
    var selectedOption = priceFilter.options[priceFilter.selectedIndex].value;

    if (selectedOption === 'lowToHigh') {
        productsData.sort(function(a, b) {
            return a.price - b.price;
        });
    } else if (selectedOption === 'highToLow') {
        productsData.sort(function(a, b) {
            return b.price - a.price;
        });
    }

    renderProducts();
}

// Initial rendering of products
renderProducts();

function updateCartItem(productName, price, quantity) {
    var cart = document.getElementById('cart-items');
    var cartItems = cart.getElementsByClassName('cart-item');

    // Loop through cart items to find the specific product
    for (var i = 0; i < cartItems.length; i++) {
        var cartItem = cartItems[i];
        var itemText = cartItem.querySelector('p').innerText;

        if (itemText.includes(productName)) {
            // Update the total price considering the new quantity
            totalPrice += quantity * price;
            document.getElementById('total-price').innerText = totalPrice.toFixed(2);

            break;
        }
    }
}








