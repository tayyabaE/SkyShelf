<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyShelf-Contact Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <style>
        body {
    font-family: 'Inter', sans-serif;
    background-color: #f8f9fa;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.section-title {
    text-align: center;
    margin-bottom: 40px;
}

.contact {
    padding: 80px 0;
}

.info {
    background: #fff;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    padding: 30px;
    border-radius: 8px;
    margin-bottom: 30px;
}

.info h4 {
    color: #007bff;
}

form {
    background: #fff;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    padding: 30px;
    border-radius: 8px;
}

form input,
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

form button:hover {
    background-color: #0056b3;
}

/* Add more styles as needed */

    </style>
    <section id="header">
        <div id="logoo"> 
            <!--<a href="#"  class="logo3"><img src="img/products/logo3.jpg" alt="" ></a>-->
            <h1 class="logo" id="logoo" >Sky Shelf</h1>
        </div>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                
                <li><a href="userlogin.php">Library</a></li>
                <li><a  href="blogs.php">Blogs</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a  href="about.php">About</a></li>
                <li><a class="active" href="#">Contact</a></li>
                

            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <section id="page-header" class="about-header">
        
        <h2 style="color: black;">#let's_talk</h2>
        
    </section>
    <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            
            <p>If you have any questions, concerns, or feedback, we would love to hear from you. Please feel free to reach out</p>
          </div>
        </div>
  
        <div>
    
        
  <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.6633468354185!2d73.04767427453113!3d33.66588393803435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9570806ed9ed%3A0x894fbeb9e70954d4!2sNational%20University%20Of%20Modern%20Languages%20(NUML)!5e0!3m2!1sen!2s!4v1703178623860!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
        <div class="container">
          <div class="row mt-5">
  
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street Islamabad 535022 Pakistan</p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>healthHub@gmail.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>051 234 567</p>
                </div>
  
              </div>
  
            </div>
  
            <div class="col-lg-8 mt-5 mt-lg-0">
  
                <form id="contactForm" onsubmit="submitForm()">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Signup For Newsletters</h4>
            <p> Get E-mail updates for our latest shop and <span>special offers</span>.</p>
            
        </div>
        <div class="form">
            <input type="text " placeholder=" Your E-mail Address">
            <button class="normal">Sign Up</button>
        </div>
       </section>
       <footer class="section-p1">
        <div class="col">
            <div id="logoo"> 
                <!--<a href="#"  class="logo3"><img src="img/products/logo3.jpg" alt="" ></a>-->
                <h1 class="logo" id="logoo" >Sky Shelf</h1>
            </div>
            <h4>Contact</h4>
            <p><strong>Address:</strong> Numl Islamabad</p>
            <p><strong>Phone:</strong> +92 34567891</p>
            <p><strong>Hours:</strong> 10:00 - 18:00 , Mon - Sat</p>
        </div>
        <div class="col">
            <h4> About </h4>
            <a href="about.php">About Us</a>
            <a href="privacy.php">Privacy Policy</a>
            <a href="terms.php">Terms & Conditions</a>
            <a href="contact.php">Contact Us</a>
        
        </div>
        <div class="col">
            <h4>Quick links</h4>
                
                <a href="https://www.twitter.com">Twitter</a>
                <a href="https://facebook.com" class="facebook"><i class="bi bi-facebook"></i>Facebook</a>
                <a href="https://instagram.com" class="instagram"><i class="bi bi-instagram"></i>Instagram</a>
                <a href="https://linkedin.com" class="linkedin"><i class="bi bi-linkedin"></i>LinkedIn</a>
                <a href="https://www.skype.com" class="google-plus"><i class="bi bi-skype"></i>Skype</a>
              
        
        </div>
       <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div clas="row">
            <img src="img/pay/app.jpg" alt="polo ">
            <img src="img/pay/play.jpg" alt="hoodie wala sweater">   
        </div>
        <p>Secured Payment Gateways</p>
        <img src="img/pay/pay.png" alt="hoodie wala sweater">
       </div>
       <div class="copyright">
        <p><i class="fa-regular fa-copyright" style="color: #9da0a4;"></i> 2023, SkyShelf Website</p>
       </div>
       </footer>
   
        
        <script>
            function submitForm() {
                
                alert("Form submitted!");
            }
        </script>
    </body>
    </html>