<?php 

include '../db/koneksi.php';
require_once __DIR__.'/navbar.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <title>Document</title>
</head>

<body>
</body>

</html>
<div class="panel-block pe-2">
  <form action="" method="POST">

    <input class="input navbar-end mr-2" type="search" placeholder="search" style="width: 200px;" name="search">
    <button class="button is-success" name="submit">SUBMIT</button>
  </form>
</div>
  
 


<h1 class="has-text-centered is-size-1 has-text-black">LIST BOOK</h1>
 

<?php

if(isset($_POST['submit']))
{
  $q=mysqli_query($con,"SELECT * from books where nama like '%$_POST[search]%' ");

  if(mysqli_num_rows($q)==0)
  {
    echo "Sorry! No book found. Try searching again.";
  }
  else
  {
echo "<table class='table table-bordered table-hover' >";
  echo "<tr style='background-color: #6db6b9e6;'>";
    //Table header
    echo "<th>"; echo "ID";	echo "</th>";
    echo "<th>"; echo "Book-Name";  echo "</th>";
    echo "<th>"; echo "Authors Name";  echo "</th>";
    echo "<th>"; echo "Edition";  echo "</th>";
    echo "<th>"; echo "Status";  echo "</th>";
    echo "<th>"; echo "Quantity";  echo "</th>";
    echo "<th>"; echo "Department";  echo "</th>";
  echo "</tr>";	

  while($row=mysqli_fetch_assoc($q))
  {
    echo "<tr>";
    echo "<td>"; echo $row['bid']; echo "</td>";
    echo "<td>"; echo $row['nama']; echo "</td>";
    echo "<td>"; echo $row['author']; echo "</td>";
    echo "<td>"; echo $row['editor']; echo "</td>";
    echo "<td>"; echo $row['status']; echo "</td>";
    echo "<td>"; echo $row['quantity']; echo "</td>";
    echo "<td>"; echo $row['department']; echo "</td>";

    echo "</tr>";
  }
echo "</table>";
  }
}
  /*if button is not pressed.*/
else
{
  $res=mysqli_query($con,"SELECT * FROM books ORDER BY books.nama ASC;");

echo "<table class='table table-bordered table-hover' >";
  echo "<tr style='background-color: #6db6b9e6;'>";
    //Table header
    echo "<th>"; echo "ID";	echo "</th>";
    echo "<th>"; echo "Book-Name";  echo "</th>";
    echo "<th>"; echo "Authors Name";  echo "</th>";
    echo "<th>"; echo "Edition";  echo "</th>";
    echo "<th>"; echo "Status";  echo "</th>";
    echo "<th>"; echo "Quantity";  echo "</th>";
    echo "<th>"; echo "Department";  echo "</th>";
  echo "</tr>";	

  while($row=mysqli_fetch_assoc($res))
  {
    echo "<tr>";
    echo "<td>"; echo $row['bid']; echo "</td>";
    echo "<td>"; echo $row['nama']; echo "</td>";
    echo "<td>"; echo $row['author']; echo "</td>";
    echo "<td>"; echo $row['editor']; echo "</td>";
    echo "<td>"; echo $row['status']; echo "</td>";
    echo "<td>"; echo $row['quantity']; echo "</td>";
    echo "<td>"; echo $row['department']; echo "</td>";

    echo "</tr>";
  }
echo "</table>";
}

 
 

