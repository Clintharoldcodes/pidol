<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Product Catalogue</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 20px;
    }
    .catalogue {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }
    .product-card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.2s;
    }
    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 16px rgba(0,0,0,0.15);
    }
    .product-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    .product-details {
      padding: 15px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .product-title {
      font-size: 18px;
      font-weight: bold;
      margin: 0 0 10px;
      color: #333;
    }
    .product-description {
      font-size: 14px;
      color: #666;
      flex-grow: 1;
    }
    .product-price {
      margin-top: 10px;
      font-size: 16px;
      font-weight: bold;
      color: #2a9d8f;
    }
    .buy-button {
      margin-top: 15px;
      background-color: #e76f51;
      border: none;
      color: white;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }
    .buy-button:hover {
      background-color: #d65a3a;
    }
  </style>
</head>
<body>

  <h1>Product Catalogue</h1>

  <div class="catalogue">
    <div class="product-card">
      <img src="https://via.placeholder.com/300x180?text=Product+1" alt="Product 1" class="product-image" />
      <div class="product-details">
        <h2 class="product-title">Product 1</h2>
        <p class="product-description">A brief description of Product 1 that highlights its features and benefits.</p>
        <div class="product-price">$29.99</div>
        <button class="buy-button">Buy Now</button>
      </div>
    </div>

    <div class="product-card">
      <img src="https://via.placeholder.com/300x180?text=Product+2" alt="Product 2" class="product-image" />
      <div class="product-details">
        <h2 class="product-title">Product 2</h2>
        <p class="product-description">A brief description of Product 2 that highlights its features and benefits.</p>
        <div class="product-price">$49.99</div>
        <button class="buy-button">Buy Now</button>
      </div>
    </div>

    <div class="product-card">
      <img src="https://via.placeholder.com/300x180?text=Product+3" alt="Product 3" class="product-image" />
      <div class="product-details">
        <h2 class="product-title">Product 3</h2>
        <p class="product-description">A brief description of Product 3 that highlights its features and benefits.</p>
        <div class="product-price">$19.99</div>
        <button class="buy-button">Buy Now</button>
      </div>
    </div>

    <!-- Add more product cards as needed -->
  </div>

</body>
</html>
