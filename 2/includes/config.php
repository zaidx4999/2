<?php
//Database connection

$servername='localhost';
$username='root';
$password='';
$dbname = "zaid";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}


//Select specific columns from DB
$query = mysqli_query($conn, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($query))
{
  $title = $row['title'];
  $content = $row['content'];
}


//Select specific columns from DB
$query = mysqli_query($conn, "SELECT * FROM contact");
while($row = mysqli_fetch_assoc($query))
{
  $contact_title = $row['contact_title'];
}
 ?>

 
