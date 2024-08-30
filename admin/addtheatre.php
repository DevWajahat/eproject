<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
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
</head>
<body>
      <!-- Form Start -->
            <div class="container-fluid mt-5 d-flex justify-content-center align-items-center">
                <div class="row ">
                    <div class="col col-lg-12" style="width: 50vw;">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add movie</h6>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="name">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Location</label>
                                    <input type="text" class="form-control" style="height: 100px;" id="exampleInputPassword1" name="location">  
                                </div>
                                
                                <button type="submit" name="add_theatre" class="btn btn-primary">Add Theatre</button>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- Form End -->
</body>
</html>
<?php
include 'conn.php';
if(isset($_POST['add_theatre'])){
    $name= $_POST['name'];
    $location=$_POST['location'];
    $query= mysqli_query($conn,"INSERT INTO `theaters`(`id`, `name`, `location`, `created_at`) VALUES ('','$name','$location','')");
    if($query>0){
        header("Location: theatres.php");
    }
}

?>