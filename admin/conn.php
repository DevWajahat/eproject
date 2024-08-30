<?php
$conn=mysqli_connect("localhost","root","","db_movie_tickets");
if(!$conn){
    die("error 404 connection problem");
}