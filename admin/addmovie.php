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
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="title">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <input type="text" class="form-control" style="height: 100px;" id="exampleInputPassword1" name="description">  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Rating</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="rating">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">GP_rating</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="gp_rating">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Runtime</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="runtime">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Trailer_URL</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="trailer_url">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Poster_URL</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="poster_url">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Starring</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="starring">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Genres</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="genres">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tags</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="tags">
                                </div>
                                <button type="submit" name="add_movie" class="btn btn-primary">Add Movie</button>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- Form End -->
</body>
</html>
<?php
// Start session if needed
// session_start();

// if (isset($_POST['add_movie'])) {
    include 'conn.php';

//     // Sanitize and validate input
//     $title = htmlspecialchars(trim($_POST['title']));
//     $description = htmlspecialchars(trim($_POST['description']));
//     $rating = filter_var($_POST['rating'], FILTER_VALIDATE_FLOAT);
//     $gp_rating = htmlspecialchars(trim($_POST['gp_rating']));
//     $runtime = htmlspecialchars(trim($_POST['runtime']));
//     $trailer_url = filter_var($_POST['trailer_url'], FILTER_VALIDATE_URL);
//     $starring = htmlspecialchars(trim($_POST['starring']));
//     $genres = htmlspecialchars(trim($_POST['genres']));
//     $tags = htmlspecialchars(trim($_POST['tags']));

//     // Handle file upload
//     if (isset($_FILES['poster_url']) && $_FILES['poster_url']['error'] === UPLOAD_ERR_OK) {
//         $poster_name = $_FILES['poster_url']['name'];
//         $poster_tmp = $_FILES['poster_url']['tmp_name'];
//         $poster_size = $_FILES['poster_url']['size'];
//         $poster_ext = pathinfo($poster_name, PATHINFO_EXTENSION);
//         $allowed_ext = ['jpg', 'jpeg', 'png', 'gif','JPG','PNG','GIF','JPEG'];
        
//         // Validate file extension
//         if (in_array($poster_ext, $allowed_ext) && $poster_size <= 5000000) { // Limit file size to 5MB
//             // Generate a unique name for the file
//             $poster_new_name = uniqid('', true) . '.' . $poster_ext;
//             $poster_upload_path = 'upload/'.$poster_new_name;

//             // Move the file to the uploads directory
//             if (move_uploaded_file($poster_tmp, $poster_upload_path)) {
//                 echo "File successfully uploaded!";
//             } else {
//                 echo "Failed to move uploaded file.";
//             }
//         } else {
//             echo "Invalid file type or file too large.";
//         }
//     } else {
//         echo "No file uploaded or upload error.";
//     }

//     // Database connection (update with your own details)
    

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Prepare and bind
//     $stmt = $conn->prepare("INSERT INTO movies (id,title, description, rating, gp_rating, runtime, trailer_url, poster_url, starring, genres, tags) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("", $title, $description, $rating, $gp_rating, $runtime, $trailer_url, $poster_upload_path, $starring, $genres, $tags);

//     // Execute the statement
//     if ($stmt->execute()) {
//         echo "New movie added successfully.";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     // Close statement and connection
//     $stmt->close();
//     $conn->close();
// }
if (isset($_POST['add_movie'])){
    $image_name = $_FILES['poster_url']['name'];
    $image_temp = $_FILES['poster_url']['tmp_name'];
    $title = $_POST ['title'];
    $description = $_POST ['description'];
    $rating = $_POST ['rating'];
    $gp_rating = $_POST ['gp_rating'];
    $runtime = $_POST ['runtime'];
    $trailer_url = $_POST ['trailer_url'];
    // $description = $_POST ['description'];
    $starring = $_POST ['starring'];
    $tags = $_POST ['genres'];
    // $description = $_POST ['description'];

    $exp = explode(".",$image_name);
    $ext = end($exp);
    $name = time(). ".".$ext;
    $path = "upload/".$name;
    $allowed_ext = array ("jpeg", "jpg", "gif", "png","PNG","JPEG","JPG");
    if (in_array($ext, $allowed_ext)){
        if(move_uploaded_file($image_temp,$path)){
            mysqli_query($conn, "INSERT INTO `movies`(`id`, `title`, `description`, `rating`, `GP_rating`, `runtime`, `trailer_url`, `poster_url`, `starring`, `Genres`, `Tags`) VALUES ('','$title','$description','$rating','$gp_rating','$runtime','$trailer_url','$path','$starring','$genres','$tags')");
            echo "<script> alert('User account saved!); </script>";
            // header("location: index.php");
            echo "<script>window.location.href='index.php'</script>";
        }
    }
    else{
        echo "<script> alert('Invalid file format. Only JPG, JPEG, PNG, GIF are allowed.'); </script>";
    }
}
 ?>
