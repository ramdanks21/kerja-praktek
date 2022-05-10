<?php 

session_start();
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  
  <section class="bg-image p-2">
    
  
  <nav class="navbar-item  " role="navigation"  aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <img src="../img/brandsmp.png" alt="SMA ISLAM BAHRUL ULUM" >
      </a>
      <a class="navbar-item">SISTEM MANAGEMENT PERPUSTAKAAN</a>
     
      <a role="button" class="navbar-burger  " aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">

    <?php

		if(isset($_SESSION['login_user']))
		{
			?>
				 <div class="navbar-end">
           <div class="navbar-item">
                    <a href="#" class="navbar-item">HOME</a>
                   </div>
                 
                 <div class="navbar-item">
                    <a href="
                    user/books.php" class="navbar-item">BOOKS</a>
                   </div>
                 <div class="navbar-item">
                    <a   class="navbar-item" href="user/logout.php">LOGOUT</a>
                   </div>
                 <div class="navbar-item">
                    <a href="#" class="navbar-item">FEEDBACK</a>
                   </div>
         </div> 
			<?php
		}else{
      ?>
      <div class="navbar-end">
      <div class="navbar-item">
         <a href="#" class="navbar-item">HOME</a>
        </div>
      
      <div class="navbar-item">
         <a href="
         user/books.php" class="navbar-item">BOOKS</a>
        </div>
      <div class="navbar-item">
         <a   class="navbar-item" href="user/login.php">STUDENT-LOGIN</a>
        </div>
      <div class="navbar-item">
         <a href="#" class="navbar-item">ADMIN-LOGIN</a>
        </div>  
      <div class="navbar-item">
         <a href="user/feedback.php" class="navbar-item">FEEDBACK</a>
        </div>
      </div>
      <?php
    }
		 ?>
    
    </div>
    </div>
    </div>
  </nav>
  
 </section>
  <script src="js/hamburger.js"></script>
</body>

</html>

 