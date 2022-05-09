 
<!DOCTYPE html>
<html>
s
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Free Bulma template</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <link rel="stylesheet" href="/css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body>
    <section class="container">
      <div class="columns is-multiline">
        <div class="column is-8 is-offset-2 register">
          <div class="columns">
            <div class="column left is-align-content-center is-justify-content-center ">
              <h1 class="title is-1">Super Cool Website</h1>
              <h2 class="subtitle colored is-4">Lorem ipsum dolor sit amet.</h2>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis ex deleniti aliquam tempora libero excepturi vero soluta odio optio sed.</p>
            </div>
            <div class="column right has-text-centered">
              <h1 class="title is-4">Sign up today</h1>
              <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
              
              <form action="/index.php" method="POST" >
                <div class="field">
                  <div class="control">
                    <input class="input is-medium has-text-primary" type="text"  name="firstname" placeholder="Firstname">
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="lastname" placeholder="Lastname">
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="password" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="roll" placeholder="Rool NO">
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="email" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="contact" placeholder="Contact">
                  </div>
                </div>
                <button class="button is-block is-primary is-fullwidth is-medium" type="submit" name="submit">Submit</button>
                <br />
                <small><em>Lorem ipsum dolor sit amet consectetur.</em></small>
              </form>
            </div>
          </div>
        </div>
        <div class="column is-8 is-offset-2">
          <br>
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <span class="icon">
                  <i class="fab fa-twitter"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fab fa-facebook"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fab fa-instagram"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="level-right">
              <small class="level-item" style="color: var(--textLight)">
                &copy; Super Cool Website. All Rights Reserved.
              </small>
            </div>
          </nav>
        </div>
      </div>
    </section>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</html>

<?php 
include "../db/koneksi.php";

if (isset($_POST['submit'])) {
  
  
    
mysqli_query($con,"INSERT INTO student SET 
firstname= '$_POST[firstname]',
lastname= '$_POST[lastname]',
username= '$_POST[username]',
password= '$_POST[password]',
roll= '$_POST[roll]',
email= '$_POST[email]',
contact= '$_POST[contact]'


");

 

}


?>

<?php 

if (isset($_POST['submit'])) {
  $firstname='$_POST[username]';
  $lastname='$_POST[lastname]';
  $username='$_POST[username]';
  $password='$_POST[password]';
  $roll='$_POST[roll]';
  $email='$_POST[email]';
  $contact='$_POST[contact]';
  $sql= "SELECT * FROM student WHERE username='$username";
  $sqli= mysqli_query($con,$sql);
  $cek = mysqli_num_rows($sqli);
  if ($cek == 0) {
    mysqli_query($con,"INSERT INTO student VALUES('$firsname','$lastname','$username','$password','$roll','$email','$contact')");
  }else {
    echo "FORM SUDAH ADA YANG MENGGUNAKAN" ;
  }

}
  
   ?>