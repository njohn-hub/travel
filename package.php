<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Package</title>

    <!-- swipper css link  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- font awesone link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- css link  -->
    <link rel="stylesheet" href="css/style.css" />

    <style>
.packages .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
}

.packages .box-container .box {
    border: var(--border);
    box-shadow: var(--box-shadow);
    background: var(--white);
    display: none;
}

.packages .box-container .box:nth-child(1),
.packages .box-container .box:nth-child(2),
.packages .box-container .box:nth-child(3),
.packages .box-container .box:nth-child(4),
.packages .box-container .box:nth-child(5),
.packages .box-container .box:nth-child(6){
  display: inline-block;
}

.packages .box-container .box .image {
    height: 25rem;
    overflow: hidden;
}

.packages .box-container .box .image img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: .2s linear;
}

.packages .box-container .box .content {
    padding: 2rem;
    text-align: center;
}

.packages .box-container .box .content h3 {
    font-size: 2.5rem;
    color: var(--black);
}

.packages .box-container .box .content p {
    font-size: 1.5rem;
    color: var(--light-black);
    line-height: 2;
    padding: 1rem 0;
}

.packages .load-more {
    text-align: center;
    margin-top: 2rem;
}

    </style>

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


    <!-- packages section  -->

    <section class="packages">

    <h1 class="heading-title">top destinations</h1>

    <div class="box-container">

      <div class="box">
      <div class="image">
      <img src="https://images.pexels.com/photos/447329/pexels-photo-447329.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/20582013/pexels-photo-20582013/free-photo-of-white-horses-grazing-green-grass-on-a-pasture.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/11962503/pexels-photo-11962503.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/9323301/pexels-photo-9323301.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/19845624/pexels-photo-19845624/free-photo-of-an-aerial-view-of-a-pond-in-the-snow.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/14410271/pexels-photo-14410271.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/18865653/pexels-photo-18865653/free-photo-of-trees-around-alley.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/20596245/pexels-photo-20596245/free-photo-of-the-peaks.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/10187904/pexels-photo-10187904.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/14717335/pexels-photo-14717335.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/19175645/pexels-photo-19175645/free-photo-of-woman-in-a-brown-coat-and-a-gray-cap-sitting-on-a-river-embankment.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

      <div class="box">

      <div class="image">

      <img src="https://images.pexels.com/photos/18827668/pexels-photo-18827668/free-photo-of-brown-cow-on-a-pasture.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="">
      </div>

      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, magnam.</p>
        <a href="book.php" class="btn" >book now</a>
      </div>
      </div>

    </div>

    <div class="load-more"> <span class="btn">load more</span> </div>

    </section>

    <!-- packages section  -->


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



    <!-- js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>
