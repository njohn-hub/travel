<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book</title>

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

      .booking .book-form {
          padding: 2rem;
          background: var(--light-bg);
      }

      .booking .book-form .flex{
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
      }

      .booking .book-form .flex .inputBox {
        flex: 1 1 41rem;
      }

      .booking .book-form .flex .inputBox input {
        width: 100%;
        padding: 1.2rem 1.4rem;
        font-size: 1.6rem;
        color: var(--light-black);
        text-transform: none;
        margin-top: 1.5ren;
        border: var(--border);
      }

      .booking .book-form .flex .inputBox input:focus{
        background: var(--black);
        color: var(--white);
      }

      .booking .book-form .flex .inputBox input:focus::placeholder{
        color: var(--light-white);
      }

      .booking .book-form .flex .inputBox span {
        font-size: 1.5rem;
        color: var(--light-black);
      }

      .booking .book-form .btn {
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

    <div class="heading" style="background: url('https://images.pexels.com/photos/20890446/pexels-photo-20890446/free-photo-of-timeless-tide.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load')no-repeat;">

    <h1>book now</h1>
  </div>

  <!-- booking section  -->

  <section class="booking">

  <h1 class="heading-title">book your trip</h1>

  <form action="book_form.php" method="post" class="book-form" >

  <div class="flex">
    
    <div class="inputBox">
      <span>name :</span>
      <input type="text" placeholder="enter your name" name="name">
    </div>
    
    <div class="inputBox">
      <span>email :</span>
      <input type="email" placeholder="enter your email" name="email">
    </div>
    
    <div class="inputBox">
      <span>phone :</span>
      <input type="number" placeholder="enter your number" name="phone">
    </div>
    
    <div class="inputBox">
      <span>address :</span>
      <input type="text" placeholder="enter your address" name="address">
    </div>
    
    <div class="inputBox">
      <span>where to :</span>
      <input type="text" placeholder="enter your destination" name="location">
    </div>
    
    <div class="inputBox">
      <span>how many :</span>
      <input type="number" placeholder="how many guests" name="guests">
    </div>
    
    <div class="inputBox">
      <span>arrivals :</span>
      <input type="date" name="arrivals">
    </div>
    
    <div class="inputBox">
      <span>leaving :</span>
      <input type="date" name="leaving">
    </div>
  </div>

  <input type="submit" value="submit" class="btn" name="send" >

  </form>

  </section>

  <!-- booking section  -->


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
