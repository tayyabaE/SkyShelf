<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sky Shelf- Admin Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="style.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
  <body>
    <style>
        /*--------------------------------------------------------------
#Admin panel
--------------------------------------------------------------*/
#main {
            font-family: 'Arial', sans-serif;
            background-image: url(img/adminbg.jpg);
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .adminpanel{
            width: 60%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        
        .admin-actions {
            display: flex;
            flex-direction: column; /* Display buttons in a column */
            justify-content: space-around;
            margin-top: 20px;
        }

        .admin-action-button {
            padding: 10px;
            background-color: #1977cc;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px; /* Add margin to create space between buttons */
        }

        .admin-action-button:hover {
            background-color: #135688;
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
                <li><a href="library.php">Library</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a  class="active" href="#">Admin Panel</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
  </div>
</section>
<main id="main">

    <!-- ======= Admion Panel Section ======= -->
    <section id="adminpanel" class="adminpanel">
      <div class="container">
          
          
        <div class="section-title">
          <h2>Sky Shelf Admin Panel</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 sm 12">
         
        <div class="admin-actions">
           
           
            <button class="admin-action-button"><a href="userlist.php" style="color: white">All Users</a></button>
            <button class="admin-action-button"><a href="addUserhtml.php" style="color: white">Add A New User</a></button>
            <button class="admin-action-button"><a href="login.php" style="color: white"> Logout</a></button>
        </div>
        <div id="admin-content"></div>
    </div>
              
          </div>
          </div>
      

        </section><!-- End Departments Section -->


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