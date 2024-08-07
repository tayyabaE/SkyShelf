<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SkyShelf- login page</title>
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
  

</head>

<body>
    <style>
        /*--------------------------------------------------------------
        #Login section
        --------------------------------------------------------------*/
        #main {
            background-image: url(img/loginbg.avif);
            background-size: cover;
            background-color: #E3E6F3;
            margin: 0;
            padding: 0;
        }
    
        #login-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-height: 100vh;
        }
    
        .login-form {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
        }
    
        .login-form h2 {
            text-align: center;
            color: #071d4d;
        }
    
        .login-form form {
            display: flex;
            flex-direction: column;
        }
    
        .login-form label {
            margin-bottom: 8px;
            color: #333;
        }
    
        .login-form input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    
        .login-form button {
            background-color: #071d4d;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        .login-form button:hover {
            background-color: rgb(11, 129, 255);
        }
    
        .login-form p {
            text-align: center;
            margin-top: 15px;
            color: #333;
        }
    
        .login-form a {
            color: #1977cc;
            text-decoration: none;
        }
    
        .login-form a:hover {
            text-decoration: underline;
        }
      </style>
    <section id="header">
        <div id="logoo"> 
        <!--<a href="#"  class="logo3"><img src="img/products/logo3.jpg" alt="" ></a>-->
        <h1 class="logo" id="logoo" >Sky Shelf</h1>
        </div>
        <div>
        <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="userlogin.php">Library</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a  class="active" href="#">Login</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </section>
    <main id="main">
        <!-- ======= Login Section ======= -->
        <section id="login" class="login">
            <div id="login-container">
                <div col-lg-6 col-sm-6>
                <!-- Admin Login Form -->
                <div class="login-form">
                    <h2>Admin Login</h2>
                    
                    <form action="login_process.php" method="post">
                        <label for="adminUsername">Username:</label>
                        <input type="text" id="adminUsername" name="adminUsername" required>
    
                        <label for="adminPassword">Password:</label>
                        <input type="password" id="adminPassword" name="adminPassword" required>
    
                        <button type="submit">Login</button>
                    </form>
                    <!-- You can customize the admin login form as needed -->
                    <p>Admin forgot the password? <a href="#">Reset here</a>.</p>
                </div>
            </div>
            <div col-lg-6 col-sm-6>
                <!-- User Login Form -->
                <div class="login-form">
                    <h2 class="ul">User Login</h2>
                    <form action="login_process.php" method="post">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
    
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
    
                        <button type="submit">Login</button>
                    </form>
                    <p>Don't have an account? <a href="signuphtml.php">Sign up here</a>.</p>
                </div>
            </div>
            </div>
        </section><!-- End login Section -->
    </main><!-- End #main -->
    
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
        
    </body>
    </html>