<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SkyShelf-Signup page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
</head>

<body>
 <style>
    body{
    background-color: #E3E6F3;
} 
  #signup {
            background-color: #E3E6F3;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    .signupcontainer {
        max-width: 400px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.06);
    }

    #signup h2 {
        text-align: center;
        color: #4fb9d3;
    }

    #signup form {
        display: flex;
        flex-direction: column;
    }

    #signup label {
        margin-bottom: 8px;
        color: #333;
    }

    #signup input,
    textarea {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    #signup button {
        background-color: #5dacc0;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #signup button:hover {
        background-color: rgb(11, 129, 255);

    }

    #signup p {
        text-align: center;
        margin-top: 15px;
        color: #333;
    }

    #signup a {
        color: #1977cc;
        text-decoration: none;
    }

    #signup a:hover {
        text-decoration: underline;
    }
</style>
  
  <br>   <br>     
  <main style="padding-top: 0px;" id="main">
        <!-- ======= Signup Section ======= -->
        <section id="signup" class="signup" style="padding-top: 0px;">
             <div class="signupcontainer">
        <div class="row">
        <h2>Sign Up for Sky Shelf</h2>
        <form action="signup.php" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="fullname" name="lastname" required>

            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        

            
            
            <label for="text">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.html">Login here</a>.</p>
        </div>
     </div>
        </section><!-- End Signup Section -->
    </main><!-- End #main -->

</body>
</html>