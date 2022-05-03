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
    <h1 class="has-text-centered is-size-1 has-text-black">LIST BOOK</h1>
<?php 
$res=mysqli_query($con,"SELECT * FROM books ORDER BY'books','nama'ASC;");
$result =
<<<SQL
<table class="table"></table>
SQL;
?>
</body>
</html>
  <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
  <thead>
      <tr>
        <th>ID 1</th>
        <th>BOOK NAME</th>
        <th>AUTHOR NAME</th>
        <th>EDITOR NAME</th>
        <th>STATUS</th>
        <th>QUANTITY</th>
        <th>DEPARTMENT</th>
      </tr>
  </thead>
   <?php 
   foreach ($res as $resi) {
       
       ?>
          
         
         <tbody>
             <tr>
             <td><?=
                $resi['bid'];
                ?></td>
                <td><?=
                $resi['nama'];
                ?></td>
                <td><?=
                $resi['author'];
                ?></td>
                <td><?=
                $resi['editor'];
                ?></td>
                <td><?=
                $resi['status'];
                ?></td>
                <td><?=
                $resi['quantity'];
                ?></td>
                <td><?=
                $resi['department'];
                ?></td>
                
             </tr>
         </tbody>
       
       
       
       
       <?php 
       
    }
       ?>
   
</table>