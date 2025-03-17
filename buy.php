<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Checkout | Product Purchase</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #444;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 24px;
            color: #2c3e50;
        }
        .section {
            margin-bottom: 30px;
        }
        .section label {
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
        }
        .section input,
        .section select,
        .section textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .section input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            font-size: 18px;
            padding: 14px;
            cursor: pointer;
            border-radius: 8px;
            width: 100%;
            transition: background-color 0.3s;
        }
        .section input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .order-summary {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .order-summary p {
            margin: 10px 0;
        }
        .order-summary .total {
            font-size: 20px;
            font-weight: bold;
            color: #2c3e50;
        }
        .form-row {
            display: flex;
            gap: 15px;
        }
        .form-row input {
            width: 48%;
        }
        .terms {
            display: flex;
            align-items: center;
        }
        .terms input {
            margin-right: 10px;
        }
        .promo-code {
            background-color: #f9f9f9;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    
    <div class="container">
        <h1>Secure Checkout</h1>
        <h2>Complete your purchase</h2>

        <form action="/submit-order" method="POST">
            <!-- Personal Information Section -->
            <div class="section">
                <h3>Personal Information</h3>
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <!-- Shipping Information Section -->
            <div class="section">
                <h3>Shipping Information</h3>
                <label for="address">Shipping Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>

                <label for="shipping-method">Shipping Method:</label>
                <select id="shipping-method" name="shipping-method" required>
                    <option value="standard">Standard Shipping (5-7 Days)</option>
                    <option value="express">Express Shipping (2-3 Days)</option>
                    <option value="overnight">Overnight Shipping</option>
                </select>
            </div>

            <!-- Payment Information Section -->
            <div class="section">
                <h3>Payment Information</h3>
                <label for="payment-method">Payment Method:</label>
                <select id="payment-method" name="payment-method" required>
                    <option value="credit-card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank-transfer">Bank Transfer</option>
                </select>

                <label for="card-number">Credit Card Number:</label>
                <input type="text" id="card-number" name="card-number" placeholder="Enter your card number" required>

                <label for="expiry-date">Expiry Date:</label>
                <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
            </div>

            <!-- Promo Code Section -->
            <div class="promo-code">
                <label for="promo-code">Promo Code (Optional):</label>
                <input type="text" id="promo-code" name="promo-code" placeholder="Enter your promo code">
            </div>

            <!-- Order Summary Section -->
            <div class="order-summary">
                <h3>Order Summary</h3>
                <p>Product: iPhone 17 Pro</p>
                <p>Quantity: <input type="number" name="quantity" min="1" value="1" required></p>
                <p class="total">Total: $1000</p>
            </div>

            <!-- Terms & Conditions Section -->
           <form>
  <label>
    <input  style="margin-top: 20px;" type="checkbox" name="terms" required>
    I agree to the <a href="terms.html" target="_blank">Terms and Conditions</a>.
  </label>
</form>


<div style="margin-top: 30px;" class="section">
    <a href="home.php" style="text-decoration: none;">
        <input type="button" value="Complete Purchase" style="background-color: white; color: blue; border: 2px solid blue; padding: 10px 20px; cursor: pointer;">
    </a>
</div>

        </form>
    </div>
</body>
</html>

<?php include('footer.php'); ?>