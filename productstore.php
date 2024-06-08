<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protein Products Store</title>
    
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header Styles */
        header {
            background-color: #298b9b;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        /* Section Styles */
        section {
            margin: 1%;
            padding: 1%;
            background-color: whitesmoke;
            text-align: center;
        }

        /* Product Styles */
        .product {
            border: 1px solid #ddd;
            padding: 0.4%;
            margin: 1%;
            text-align: center;
            background-color: #fafafa;
            border-radius: 5px;
            display: inline-block;
            width: 30%;
        }

        /* Button Styles */
        .buy-btn {
            background-color: #298b9b;
            color: white;
            padding: 2% 4%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 0.8vw;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Image Styles */
        img {
            max-width: 25%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 2%;
        }

        /* Filter Styles */
        #filters {
            text-align: center;
            margin: 1% 0;
        }

        /* Price Filter Styles */
        #priceFilter {
            margin-left: 0.5%;
            padding: 0.29%;
            font-size: 0.8vw;
        }

        /* Cart Styles */
        #cart {
            position: fixed;
            top: 11.4%;
            right: -20%; /* Initial position outside the viewport */
            width: 15%;
            height: 100%;
            background-color: #fff;
            padding: 2%;
            text-align: center;
            border-left: 1px solid #ddd;
            transition: right 0.3s ease; /* Smooth transition effect */
        }

        #cart-icon {
            position:absolute;
            top: 13%;
            right: 42%;
            cursor: pointer;
            font-size: 1.3vw;
            color: #298b9b;
        }

        #close-cart {
            position: absolute;
            top:2%;
            right: 2%;
            cursor: pointer;
            font-size: 1.4vw;
            color: #298b9b;
        }

        .cart-items {
            text-align: left;
        }

        .cart-item {
            margin-bottom: 1%;
        }
        .home a{
            text-decoration:none;
            color: #298b9b;
            margin-left:50%;
        }

        /* Message Styles */
        #checkout-message {
            color: #298b9b;
            margin-top: 1%;
        }
    </style>
</head>

<body>

    <header>
        <h1>Protein Products Store</h1>
    </header>
    <div class = "home">
        <a href = "index.php">Home</a>
    </div>

    <div id="cart-icon" onclick="toggleCart()">
        🛒 <!-- You can replace this with an icon of your choice -->
    </div>

    <div id="cart">
        <span id="close-cart" onclick="toggleCart()">×</span>
        <h2>Shopping Cart</h2>
        <div id="cart-items" class="cart-items"></div>
        <p>Total Price: $<span id="total-price">0.00</span></p>
        <div id="checkout-message"></div> <!-- New message element -->
        <button class="buy-btn" onclick="clearCart()">Clear Cart</button>
        <!-- Checkout button -->
        <button class="buy-btn" onclick="checkout()">Checkout</button>
    </div>

    <div id="filters">
        <label for="priceFilter">Sort by Price:</label>
        <select id="priceFilter" onchange="sortItems()">
            <option value="default">Default</option>
            <option value="lowToHigh">Low to High</option>
            <option value="highToLow">High to Low</option>
        </select>
    </div>

    <section id='products'>
        <script src="productstorejavascript.js"></script>
    </section>

    <!-- Link to an external JavaScript file -->
    <script>
        function toggleCart() {
            var cart = document.getElementById('cart');
            var rightValue = window.getComputedStyle(cart).getPropertyValue('right');

            if (rightValue === '0px' || rightValue === '') {
                cart.style.right = '-300px';
            } else {
                cart.style.right = '0';
            }
        }

        function clearCart() {
            var cart = document.getElementById('cart-items');
            cart.innerHTML = ''; // Clear the cart items

            totalPrice = 0; // Reset the total price
            document.getElementById('total-price').innerText = totalPrice.toFixed(2);
        }

        // New function for checkout
       // ...

       function checkout() {
    var cartItems = document.getElementById('cart-items');
    var numberOfItems = cartItems.children.length;
    var checkoutMessage = document.getElementById('checkout-message');

    if (numberOfItems === 0) {
        checkoutMessage.innerText = 'Your cart is empty. Please add items before checking out.';
    } else {
        // Create a form element
        var form = document.createElement('form');
        form.method = 'post';
        form.action = 'checkout.php'; // Replace with the actual path to your PHP script

        var price = 0;

        // Loop through cart items and add hidden input fields for each item
        for (var i = 0; i < numberOfItems; i++) {
            var cartItem = cartItems.children[i];
            var productName = cartItem.querySelector('p').innerText.split(' - ')[0];
            var price = cartItem.querySelector('p').innerText.split(' - ')[1]

            price = price.split('$')[1];

            var productNameInput = document.createElement('input');
            productNameInput.type = 'hidden';
            productNameInput.name = 'productName[]'; // Use square brackets to treat it as an array
            productNameInput.value = productName;
            form.appendChild(productNameInput);
        }

        // Add hidden input fields for other data
        var quantityInput = document.createElement('input');
        quantityInput.type = 'hidden';
        quantityInput.name = 'quantity[]'; // Use square brackets to treat it as an array
        quantityInput.value = totalPrice / price;
        form.appendChild(quantityInput);

        var totalPriceInput = document.createElement('input');
        totalPriceInput.type = 'hidden';
        totalPriceInput.name = 'totalPrice';
        totalPriceInput.value = totalPrice;
        form.appendChild(totalPriceInput);

        // Append the form to the body and submit it
        document.body.appendChild(form);
        form.submit();

        // Optionally, you can remove the form from the DOM after submission
        document.body.removeChild(form);
        
        // Clear the cart (optional)
        clearCart();
    }
}


// ...

    </script>

    <script>
        var inactivityTime = 1000000;
        var logoutTimer;

        function resetTimer() {
            clearTimeout(logoutTimer);
            logoutTimer = setTimeout(logout, inactivityTime);
        }

        function logout() {
            // Redirect to the login page
            window.location.href = "loginpage.php";
        }

        // Reset the timer on user activity
        document.addEventListener("mousemove", resetTimer);
        document.addEventListener("keydown", resetTimer);
        resetTimer();
    </script>
</body>

</html>