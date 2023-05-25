<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rent a Tourist Car</title>
  <link rel="stylesheet" href="rent.css">
  <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
  }
  
  header {
    background-color: #ffc107;
    color: #fff;
    padding: 20px;
    text-align: center;
  }
  
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  nav li {
    display: inline-block;
    margin: 0 10px;
  }
  
  nav a {
    color: #fff;
    text-decoration: none;
  }
  
  main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  
  h2 {
    color: #333;
    text-align: center;
  }
  
  section {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin:auto;
  } 
  </style> 
</head>

<body>
  <header>
    <h1>Rent a Tourist Car</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Cars</a></li>
        <li><a href="#">Rates</a></li>
        <li><a href="#">Reservations</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Choose Your Car</h2>
    <section>
      <img src="images/tourist1.jpg" alt="Toyota Hiace">
      <h3>Toyota Hiace</h3>
      <p>14 Seater Toyota Hiace with a retractable roof. </p>
      <button>Book Now</button>
    </section>
    <section>
      <img src="images/tourist2.jpg" alt="Toyota LandCruiser">
      <h3>Toyota LandCruiser</h3>
      <p>10 Seater LandCruiser with a 4000 litre turbo-charged engine </p>
      <button>Book Now</button>
    </section>
    <section>
      <img src="images/tourist3.jpg" alt="Toyota Prado">
      <h3>Toyota Prado</h3>
      <p>8 seater Prado with crawl function  </p>
      <button>Book Now</button>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Rent a Tourist Car</p>
  </footer>
</body>
</html>
