<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- swipper css link  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- font awesone link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- css link  -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <!-- header section  -->

  <section class="header">

    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

  </section>

  <!-- header section  -->



  <!-- home section  -->

  <section class="home">

    <div class="swiper home-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url('https://images.pexels.com/photos/2245436/pexels-photo-2245436.png?auto=compress&cs=tinysrgb&w=1600') no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around the world</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url('https://images.pexels.com/photos/2105937/pexels-photo-2105937.jpeg?auto=compress&cs=tinysrgb&w=1600') no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover new places</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url('https://images.pexels.com/photos/91217/pexels-photo-91217.jpeg?auto=compress&cs=tinysrgb&w=1600') no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your tour worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>

  <!-- home section  -->

  <!-- services section  -->

  <section class="services">

    <h1 class="heading-title">Our services</h1>

    <div class="box-container">

      <div class="box">
        <img src="Images/adventure.png" alt="">
        <h3>adventure</h3>
      </div>

      <div class="box">
        <img src="Images/map.png" alt="">
        <h3>tour guide</h3>
      </div>

      <div class="box">
        <img src="Images/map.png" alt="">
        <h3>trekking</h3>
      </div>

      <div class="box">
        <img src="Images/fire.png" alt="">
        <h3>camp fire</h3>
      </div>

      <div class="box">
        <img src="Images/off-road.png" alt="">
        <h3>off road</h3>
      </div>

      <div class="box">
        <img src="Images/camping.png" alt="">
        <h3>camping</h3>
      </div>

    </div>
  </section>

  <!-- services section  -->



  <!-- home about section  -->

  <section class="home-about">

    <div class="image">
      <img src="https://images.pexels.com/photos/307006/pexels-photo-307006.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
    </div>

    <div class="content">
      <h3>about us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iusto eaque suscipit qui sapiente dolorem neque officiis consectetur maxime eveniet accusamus explicabo incidunt dolor accusantium aliquid molestias fugiat, non et?</p>
      <a href="about.php" class="btn">read more</a>
    </div>

  </section>

  <!-- home about section  -->


  <!-- home package section  -->

  <section class="home-packages">

    <h1 class="heading-title">our package</h1>

    <div class="box-container">

      <div class="box">
        <div class="image">
          <img src="https://images.pexels.com/photos/16563297/pexels-photo-16563297/free-photo-of-hermitage-of-saint-john-in-montserrat.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, fugiat.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.pexels.com/photos/8536415/pexels-photo-8536415.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, fugiat.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="https://images.pexels.com/photos/20307657/pexels-photo-20307657/free-photo-of-a-doorway-with-intricate-carvings-on-it.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, fugiat.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

    </div>

    <div class="load-more"><a href="package.php" class="btn"> load more</a></div>

  </section>

  <!-- home package section  -->


  <!-- home offer section  -->

  <section class="home-offer">
    <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis obcaecati unde odio exercitationem laboriosam dolorum nisi velit deleniti tenetur? Nobis.</p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </section>

  <!-- home offer section  -->




  <!-- footer section  -->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>Quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"> </i> Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"> </i> ask Questions</a>
        <a href="#"> <i class="fas fa-angle-right"> </i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"> </i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"> </i> terms of use</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"> </i> +123-456-7980</a>
        <a href="#"> <i class="fas fa-phone"> </i> +123-456-7980</a>
        <a href="#"> <i class="fas fa-envelope"> </i> njohn4752@gmail.com</a>
        <a href="#"> <i class="fas fa-map"> </i> nairobi, Kenya</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-pinterest"></i>pinterest</a>
      </div>

    </div>

    <div class="credit">created by <span> njohn-hub</span> | all rights reserved</div>

  </section>

  <!-- footer section  -->




  <!-- swiper js link   -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".home-slider", {
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>



  <!-- js file link  -->
  <script src="js/script.js"></script>
</body>

</html>