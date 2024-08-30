<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->    
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <form action="" method="post">
       
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3" style="padding:40px !important">
                        <div class="d-flex align-items-center justify-content-between mb-3" style="width:100% !important;">
                            <a href="index.html" class="">
                                <!-- <h3 class="text-primary" style="font-size:22px;"><img src="img/movie icon.png" style=" width:42px !important; height:36px !important;" alt=""> Cinema Time</h3> -->
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" name="username" placeholder="jhondoe">
                            <label for="floatingText">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
    <input type="text" class="form-control" id="role" name="role" list="roleList" placeholder="Role">
    <label for="role">Role</label>
    <datalist id="roleList">
        <option value="developers">Developers</option>
        <option value="admins">Admins</option>
        <option value="cinema_owners">Cinema Owners</option>
    </datalist>
</div>

                        <div class="form-floating mb-4">
                            <input type="password" name="password"  class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="submit" name="signup"  class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
</form>   
</body>
</html>
<?php
include 'conn.php';

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    // Check if the username already exists
    $check_query = "SELECT * FROM `admins` WHERE `username` = '$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Error: Username already exists. Please choose a different username.";
    } else {
        // If the username doesn't exist, proceed with the insert
        $query = "INSERT INTO `admins`(`username`, `email`, `password`, `role`) VALUES ('$username','$email','$password','$role')";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            // Redirect to the login page after successful signup
            echo "<script>window.location.href = 'login.php';</script>";
            exit(); // Ensure no further code is executed after the redirect
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
