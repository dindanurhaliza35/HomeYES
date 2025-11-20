<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #fc9416ff;
    }
    header {
      background: #7b00afff;
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header h1 {
      margin: 0;
      font-size: 28px;
    }
    nav a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-size: 16px;
    }
    .hero {
      height: 80vh;
      background: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      padding: 20px;
    }
    .hero h2 {
      font-size: 48px;
      margin-bottom: 10px;
    }
    .hero p {
      font-size: 20px;
      max-width: 600px;
      margin: auto;
    }
    .btn {
      margin-top: 20px;
      padding: 12px 28px;
      font-size: 18px;
      background: #fc9416ff;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
    .features {
      padding: 60px 40px;
      text-align: center;
    }
    .features h3 {
      font-size: 32px;
      margin-bottom: 30px;
    }
    .feature-boxes {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }
    .box {
      background: white;
      padding: 30px;
      width: 280px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    footer {
      background: #333;
      color: white;
      padding: 20px;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <header>
    <h1>BrandName</h1>
    <nav>
      <a href="#home">Home</a>
      <a href="#features">Features</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section class="hero" id="home">
    <div>
      <h2>Your Amazing Product</h2>
      <p>Solusi terbaik untuk kebutuhan digital Anda. Cepat, modern, elegan, dan mudah digunakan.</p>
      <button class="btn">Get Started</button>
    </div>
  </section>

  <section class="features" id="features">
    <h3>Why Choose Us?</h3>
    <div class="feature-boxes">
      <div class="box">
        <h4>Fast</h4>
        <p>Performa cepat dan responsif untuk pengalaman terbaik.</p>
      </div>
      <div class="box">
        <h4>Modern</h4>
        <p>Desain bersih, minimalis, dan mengikuti tren masa kini.</p>
      </div>
      <div class="box">
        <h4>Secure</h4>
        <p>Keamanan data terjamin untuk melindungi privasi Anda.</p>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 BrandName. All rights reserved.</p>
  </footer>
</body>
</html>
