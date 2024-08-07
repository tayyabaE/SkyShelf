<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , hoodie online store , buy hoodies ,online hoodie">
    <title>SkyShelf-Library</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <style>
      .novel button {
    padding: 10px 20px; /* Adjust padding for the button */
    background-color: palevioletred; /* Set your desired button color */
    color: #ffffff; /* Set your desired button text color */
    border: none;
    cursor: pointer;
    font-size: 16px; /* Set the font size for the button text */
    border-radius: 5px; /* Add border radius for rounded corners */
    transition: background-color 0.3s ease; /* Add a smooth transition effect */
}

.novel button:hover {
    background-color: rgb(204, 35, 91); /* Change the button color on hover */
}
.panel button {
    padding: 10px 20px; /* Adjust padding for the button */
    background-color: rgb(122, 105, 105); /* Set your desired button color */
    color: #ffffff; /* Set your desired button text color */
    border: none;
    cursor: pointer;
    font-size: 16px; /* Set the font size for the button text */
    border-radius: 5px; /* Add border radius for rounded corners */
    transition: background-color 0.3s ease; /* Add a smooth transition effect */
}

.panel button:hover {
    background-color: rgb(70, 59, 59); /* Change the button color on hover */
}
.book button {
    padding: 10px 20px; /* Adjust padding for the button */
    background-color: palevioletred; /* Set your desired button color */
    color: #ffffff; /* Set your desired button text color */
    border: none;
    cursor: pointer;
    font-size: 16px; /* Set the font size for the button text */
    border-radius: 5px; /* Add border radius for rounded corners */
    transition: background-color 0.3s ease; /* Add a smooth transition effect */
}

.book button:hover {
    background-color: rgb(204, 35, 91); /* Change the button color on hover */
}
        #header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 80px;
        background-color: #E3E6F3;
        box-shadow: 0 5px 15px rgba(0,0,0,0.06);
        z-index: 999;
        position: sticky;
        top: 0;
        left: 0;
    }

    .logo3 img {
        width: 100px;
        height: auto;
        display: block;
        margin: 10px 0;
        border-radius: 50%;
    }

    .logo {
        font-family: 'Indie Flower', cursive;
        font-size: 28px;
        font-weight: bold;
        color: #5dacc0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    #logoo {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    #navbar {
        display: flex;
        justify-content: space-between;
    }

    #navbar li {
        list-style: none;
        padding: 0 20px;
        position: relative;
    }

    #navbar li a {
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        color: #1a1a1a;
        transition: 0.3s ease;
    }

    #navbar li a:hover,
    #navbar li a.active {
        color: #0cc1b5;
    }

    #navbar li a.active::after,
    #navbar li a:hover::after {
        content:"";
        width:30%;
        height:2px;
        background-color: #0cc1b5;
        position: absolute;
        bottom: -4px;
        left:20px;
    }

    #mobile {
        display: none;
        align-items: center;
    }

    #close {
        display: none;
    }

    /* Additional styling for mobile view */
    @media (max-width:799px) {
        #navbar {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            position: fixed;
            top: 0;
            right: -300px;
            height: 100vh;
            width: 300px;
            background-color: #E3E6F3;
            box-shadow: 0 40px 60px rgba(0,0,0,0.01);
            padding: 80px 0 0 10px;
            transition: 0.3s;
        }

        #navbar.active {
            right: 0px;
        }

        #navbar li {
            margin-bottom: 25px;
        }

        #mobile {
            display: flex;
            align-items: center;
        }

        #mobile i {
            color: #1a1a1a;
            font-size: 24px;
            padding-left: 20px;
        }

        #close {
            display: initial;
            position: absolute;
            top:30px;
            left: 30px;
            color: #222;
            font-size: 24px;
        }

        #lg-bag {
            display: none;
        }
    }
    #hero {
        text-align: center;
        background-image: url("img/librarybg.jpg"); /* Set your desired background color */
        padding: 20px; /* Add padding for better spacing */
    }

    #hero h2 {
        color: white;
    }

    #hero p {
        color: white;
    }

    #hero input {
        padding: 8px; /* Adjust padding for the input field */
    }

    #hero button {
        padding: 10px 20px; /* Adjust padding for the button */
        background-color: #ffffff; /* Set your desired button color */
        color: #0cc1b5; /* Set your desired button text color */
        border: none;
        cursor: pointer;
    }
    .search h5
    {
       text-align: center;
       font-size: 50px ;
    }
    
    section {
            text-align: center;
            padding: 40px;
        }

        .novel {
            background-color: pink;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .novel:hover {
            transform: scale(1.05);
        }

        .panel {
            background-image: url("img/magazines.jpeg");
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .panel:hover {
            transform: scale(1.05);
        }

        .book {
            background-color: pink;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .book:hover {
            transform: scale(1.05);
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }
       
       
        #panel-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .panelD {
      width: 300px;
      height: 400px;
      margin: 10px;
      background-color: #3498db;
      color: #fff;
      border-radius: 10px;
      text-align: center;
      line-height: 150px;
      font-size: 18px;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .panelD:hover {
      transform: scale(1.05);
      background-color: #2980b9;
    }

    #panel-1 {
      background-color: #3498db;
    }

    #panel-1:hover {
      background-color: #2980b9;
    }

    #panel-2 {
      background-color: #e74c3c;
    }

    #panel-2:hover {
      background-color: #c0392b;
    }

    #panel-3 {
      background-color: #2ecc71;
    }

    #panel-3:hover {
      background-color: #27ae60;
    }

    #panel-4 {
      background-color: #f39c12;
    }

    #panel-4:hover {
      background-color: #d35400;
    }

    .panel img {
      width: 50%;
      height: auto;
      max-height: 100px;
      object-fit: cover;
    }

    .dictionary-name {
      margin-top: 10px;
      font-size: 16px;
    }

    #news-hero-section {
      position: relative;
      height: 500px;
      background: rgba(0, 0, 0, 0.5); /* Transparent background */
      color: #fff;
      overflow: hidden;
      text-align: center;
    }

    .fixed-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .news-heading {
      color: white;
      font-size: 4em;
      margin-bottom: 20px;
    }

    #news-panels-section {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
      z-index: 1; /* Ensure panels appear above the background */
    }

    .news-panel {
      width: 200px;
     
      margin: 20px;
      text-align: center;
    }

    .news-panel img {
      width: 100%;
      height: auto;
      max-height: 150px;
      object-fit: cover;
      border-radius: 8px;
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
            <li><a class="active" href="#">Library</a></li>
            <li><a href="blogs.php">Blogs</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Logout</a></li>

        </ul>
    </div>
    
</section>
<section id="hero">
    <div style="text-align: center; color: #ffffff;">
        <h2>Search for Your Favorite Books</h2>
        <p>The future of education is here – and it starts with you. Welcome to the E-Library revolution!</p>
        <input type="text" placeholder="Enter book title..." style="width: 500px;">
        <button>Search</button>
    </div>
</section>
<div class="search">
    <br>
    <br>
    <br>
<h5>Broaden Your Search</h5>
</div>
<section id="feature" class="section-p1">
   
    <div class="fe-box">
        <img src="img/health.png" alt="Trendy37">
        <h6><a href="health.php">Health and Medical</a></h6>
    </div>
    <div class="fe-box">
        <img src="img/economics.png" alt="Casual style35">
        <h6><a href="health.php">Economics</a></h6>
    </div>
    <div class="fe-box">
        <img src="img/arts.png" alt="Blended fabrics42">
        <h6><a href="health.php">Art of Colour</a></h6>
    </div>
    <div class="fe-box">
        <img src="img/humanities.png" alt="Pullover32">
        <h6><a href="health.php">Humanities</a></h6>
    </div>
    <div class="fe-box">
        <img src="img/socialscience.png" alt="Hoodie culture36">
        <h6><a href="health.php">Social Services</a></h6>
    </div>
</section>
<section>
    <div class="novel">
        <h2>Novels</h2>
        <p>Explore our collection of captivating novels.</p>
        <button onclick="navigateToSection('novels')">View All</button>
    </div>

    <div class="panel">
        <h2>Magazines</h2>
        <p>Dive into the latest issues of popular magazines.</p>
        <button onclick="navigateToSection('magazines')">View All</button>
    </div>

    <div class="book">
        <h2>Comics</h2>
        <p>Discover a vast selection of informative books.</p>
        <button onclick="navigateToSection('comics')">View All</button>
    </div>
</section>
<div class="search">
    <br>
    <br>
    <br>
<h5>Looking For A Dictionary</h5>
</div>
<div id="panel-section">
    <div id="panel-1" class="panelD">
        <a href="https://www.oed.com/?tl=true" target="_blank">
      <img src="img/English_Dictionary.jpg" alt="Dictionary Image 1">
    </a>
      <div class="dictionary-name">English</div>
    </div>

    <div id="panel-2" class="panelD">
        <a href="https://faakhirislamic.wordpress.com/2013/03/30/feroz-ul-lughat-urdu-to-urdu-dictionary-complete/" target="_blank">
      <img src="img/feroz.jpg" alt="Dictionary Image 2">
    </a>
      <div class="dictionary-name">Wörterbuch</div>
    </div>

    <div id="panel-3" class="panelD">
      
      <img src="img/japanese.jpg" alt="Dictionary Image 3">
   
      <div class="dictionary-name">辞書</div>
    </div>

    <div id="panel-4" class="panelD">
       
      <img src="img/Al_Mawrid.png" alt="Dictionary Image 4">
  
      <div class="dictionary-name">قاموس</div>
    </div>
  </div>
<br>
<br>
<br>
<br>
  <section id="news-hero-section">
    <img class="fixed-background" src="img/news.webp" alt="Background Image">
    <h1 class="news-heading">News Room</h1>
    <section id="news-panels-section">
      <div id="news-panel-1" class="news-panel">
        <a href="https://www.nytimes.com/section/todayspaper" target="_blank">
        <img src="img/new1.png" alt="Panel Image 1">
        </a>
        <!-- Add content for the first panel -->
      </div>
      <div id="news-panel-2" class="news-panel">
        <a href="https://e.jang.com.pk/" target="_blank">
        <img src="img/jang.png" alt="Panel Image 2">
        </a>
        <!-- Add content for the second panel -->
      </div>
      <div id="news-panel-3" class="news-panel">
        <a href="https://www.chinadaily.com.cn/" target="_blank">
        <img src="img/chinadaily.png" alt="Panel Image 3">
        </a>
        <!-- Add content for the third panel -->
      </div>
      <div id="news-panel-4" class="news-panel">
        <a href="https://www.express.com.pk/" target="_blank">
        <img src="img/express.png" alt="Panel Image 4">
        </a>
        <!-- Add content for the fourth panel -->
      </div>
    </section>
  </section>

  <!----Newletter Footer---->
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
        <a href="about.html">About Us</a>
        <a href="privacy.html">Privacy Policy</a>
        <a href="terms.html">Terms & Conditions</a>
        <a href="contact.html">Contact Us</a>
    
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
    function navigateToSection(sectionId) {
      window.location.href = 'novel.php#' + sectionId;
    }
  </script>
</body>
</html>
