<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_01.css">
    <title>Contact</title>
</head>
<body>
      <!-- Scroll Top Button -->
  <div class="scroll-top">
    <img src="https://img.icons8.com/ios/100/000000/double-up.png"/>
  </div>
    <!-- navigation Start -->
    <section id="navigation">
        <div class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div>
    </section>
    <div id="nav-content">
        <div class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
        <div class="wrapper">
            <h2 class="section-heading">Menu</h2>
          <nav>
              <ul>
              <li><a data-text="Home" href="./index.html">Home</a></li>
              <li><a data-text="About" href="./index.html#about">About</a></li>
              <li><a data-text="Projects" href="./index.html#projects">Projects</a></li>
              <li><a data-text="Testimonial" href="./index.html#testimonial">Testimonial</a></li>
              <li><a data-text="Contact" href="./page/contact.html">Contact</a></li>
            </ul>
            <img src="moon.png" id="icon">
          </nav>
        </div>
    </div>
    <!-- navigation End -->
    <!-- contact section -->
    <section id="contact">
        <div class="container">
            <h2 class="section-heading" data-outline="contact">Contact</h2>
            <div class="wrapper">
                <div class="left">
                    <h2 class="contact-heading">Hire/Inquiry</h2>
                    <p class="contact-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Velit nesciunt nam incidunt nobis quis facere amet dignissimos dolorum, facilis dicta?</p>
                    <div class="contact-info">
                        <ul>
                            <li><a href="+916299679729">
                                <span class="icon">
                                    <img src="https://img.icons8.com/windows/96/000000/phone.png"/>
                                </span>
                                <span class="text">+916299679729</span>
                            </a></li>
                            <li><a href="vk1385p@gmail.com">
                                <span class="icon">
                                    <img src="https://img.icons8.com/material-rounded/96/000000/new-message.png"/>
                                </span>
                                <span class="text">vk1385p@gmail.com</span>
                            </a></li>
                            <li><a href="#">
                                <span class="icon">
                                    <img src="https://img.icons8.com/ios-glyphs/100/000000/home-page--v2.png"/>
                                </span>
                                <span class="text">Punjabi Mohalla Argaghat road Giridih,Jharkhand
                                815301
                                </span>
                            </a></li>
                        </ul>
                    </div>
                    <div class="social-info">
                        <ui>
                            <li><a href="https://www.facebook.com/profile.php?id=100030425719084">FB</a></li>
                            <li><a href="https://twitter.com/VishalK48525770">TW</a></li>
                            <li><a href="https://www.instagram.com/__vishal___1921264_1385___/">INSTA</a></li>
                            <li><a href="https://www.linkedin.com/in/vishal-kumar-84a879222/">LN</a></li>
                        </ui>
                    </div>
                </div>
                <div class="right">
                    <div class="form-wrapper">
                        <form action="#" method = "post">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <div class="input-wrapper">
                                    <span class="icon">
                                        <ion-icon name="person-outline"></ion-icon>
                                    </span>
                                    <input type="text" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Email</label>
                                <div class="input-wrapper">
                                    <span class="icon">
                                        <ion-icon name="mail-outline"></ion-icon>
                                    </span>
                                    <input type="email" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" width="100%" ></textarea>
                            </div>
                            <div class="buttons" name = "sub">
                                <button type="submit" name = "sub">Send</button>
                            </div>
                        </form>

<?php
// connecting to the Database 
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "myhost";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


// die if connection was not successful
if (isset($_POST['sub']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

$x = "INSERT INTO `admin` (`Name`, `Email`, `Messages`) VALUES ('$name',' $email', '$message')";
$y=mysqli_query($conn,$x);
}
if(!$conn)
{
    echo "not inserted data";
}
else
{
    echo "Successfully Send  Message".mysqli_error($conn);
}
?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End contact section --> 
    
    <!-- Footer Section -->
    <section id="footer">
        <div class="container">
            <footer>
                <div class="col-1">
                    <div class="logo"><a href="./contact.html">
              <img src="./logo.png" alt="">
            </a></div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque voluptate iusto id odio quis placeat non
            similique dolores cupiditate dolorum obcaecati explicabo nisi laboriosam, iure aliquam. </p>
        </div>
        <div class="col-2">
          <h2 class="column-heading">Important<br>Links</h2>
          <ul>
            <li><a href="./index.html#home">Home</a></li>
            <li><a href="./index.html#about">About</a></li>
            <li><a href="./contact.html">Contact</a></li>
            <li><a href="./index.html#Project">Project</a></li>
            <li><a href="./index.html#testimonial">Testimonial</a></li>
          </ul>
        </div>
        <div class="col-3">
          <h2 class="column-heading">Contact<br>Info</h2>
          <ul>
            <li><a href="+916299679729">+916299679729</a></li>
            <li><a href="vk1385p@gmail.com">vk1385p@gmail.com</a></li>
            <li><a href="#">Punjabi Mohalla ,Giridih</a></li>
          </ul>
        </div>
        <div class="col-4">
            <h2 class="column-heading">Social<br>Links</h2>
          <ul>
            <li><a href="https://www.facebook.com/profile.php?id=100030425719084">FB</a></li>
            <li><a href="https://twitter.com/VishalK48525770">TW</a></li>
            <li><a href="https://www.instagram.com/__vishal___1921264_1385___/">IG</a></li>
            <li><a href="https://www.linkedin.com/in/vishal-kumar-84a879222/">Li</a></li>
          </ul>
        </div>
      </footer>
    </div>
  </section>
  <section id="copyright">
    <div class="container">
      <p> &copy; Copyright 2021 Vishal Kumar. All right Reserved</p>
    </div>
</section>

<!-- end the footer -->

<script src="./cont.js"></script>
<script src="./theme.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
</html>