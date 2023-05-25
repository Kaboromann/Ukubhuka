<!DOCTYPE html>
<html>
  <head>
    <title>Smart Vacation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
      }
      header {
        background-color: #ffc107;
        color: white;
        text-align: center;
        padding: 1em;
      }
      nav {
        display: flex;
        justify-content: space-between;
        background-color: #f2f2f2;
        padding: 0.5em;
      }
      nav a {
        text-decoration: none;
        color: black;
        padding: 0.5em;
        margin: 0 0.5em;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out;
      }
      nav a:hover {
        background-color: #333;
        color: white;
      }
      section {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        padding: 1em;
      }
      .card {
        width: 300px;
        margin: 1em;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
      }
      .card:hover {
        transform: translateY(-5px);
      }
      .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }
      .card h3 {
        text-align: center;
        margin: 0.5em;
      }
      .card p {
        text-align: justify;
        padding: 0.5em;
        margin: 0;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Destinations</h1>
    </header>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </nav>
    <section>
      <div class="card">
        <img src="images/mountkenya.jpg" alt="Mount Kenya National Park">
        <h3>Mount Kenya National Park</h3>
        <p>Mount Kenya National Park is a UNESCO World Heritage Site and a popular destination for hikers and mountaineers. It is home to diverse wildlife, including elephants, buffalo, and hyenas.</p>
      </div>
      <div class="card">
        <img src="images/masaimara.jpg" alt="Masai Mara National Reserve">
        <h3>Masai Mara National Reserve</h3>
        <p>Masai Mara National Reserve is one of the most famous wildlife reserves in Africa, known for its annual wildebeest migration. It is also home to lions, elephants, and zebras.</p>
      </div>
      <div class="card">
        <img src="images/diani.jpg" alt="Diani Beach">
        <h3>Diani Beach</h3>
        <p>Diani Beach is a beautiful white-sand beach on the Indian Ocean, popular for swimming, snorkeling,