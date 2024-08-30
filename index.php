<!DOCTYPE html>
<html lang="en">



<body>
  <?php
  session_start();
  // Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to the login page
  header("Location: login.php");
  exit(); // Ensure no further code is executed
}
  include 'conn.php';
  ?>
  <?php include 'style.php';?>
 <?php
 include 'header.php';
 ?>

  <?php
  include 'carousel.php';
  ?>

  <?php include 'content.php' ?>


  <?php include 'footer.php'; ?>
  <!-- js files  -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/slick-animation.min.js"></script>

  <script src="main.js"></script>
</body>

</html>