<?php 
include 'koneksi.php';
include 'navbar.php';
if (isset($_POST['submit'])) {
  $count=0;
  $rest=mysqli_query($con,"SELECT * FROM student WHERE username='$_POST[username]' && password='$_POST[password]';");
  $count=mysqli_num_rows($rest);
  if ($count==0) {
    ?>
    <script type="text/javascript">
      alert("The Username Success");
    </script>
    <div class="alert alert-primary" role="alert" width="50" height="50">
  The username and password does't match
</div>
    <?php 
  }else {
    $_SESSION['login_user'] = $_POST['username'];
    ?>
    <script>
      alert("LOGIN BERHASIL");
      window.location="index.php";
    </script>
    <?php 
  }
}
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Free Bulma template</title>
    <link rel="stylesheet" href="/css/login.css" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     </script>
     
    <link
      rel="stylesheet"
      href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"
    />
     
  </head>

  <body>
    
    <section class="hero is-success is-fullheight">
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="column is-4 is-offset-4">
            <h3 class="title has-text-black">Login User</h3>
            <hr class="login-hr" />
            <p class="subtitle has-text-black">Please login to proceed.</p>
            <div class="box">
              <!-- <figure class="avatar">
                <img src="https://placehold.it/128x128" />
              </figure> -->
              <form method="POST">
                <div class="field">
                  <div class="control">
                    <input
                      class="input is-large"
                      type="text" name="username"
                      placeholder="Your username"
                      autofocus=""
                    />
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <input
                      class="input is-large"
                      type="password" name="password"
                      placeholder="Your Password"
                    />
                  </div>
                </div>
                <div class="field">
                  <label class="checkbox">
                    <input type="checkbox" />
                    Remember me
                  </label>
                </div>
                <button class="button is-block is-info is-large is-fullwidth" type="submit" name="submit">
                  Login <i class="fa fa-sign-in" aria-hidden="true"></i>
                </button>
              </form>
            </div>
            <p class="has-text-white">
              <a href="form.php">Sign Up</a> &nbsp;·&nbsp;
              <a href="">Forgot Password</a> &nbsp;·&nbsp;
              <a href="">Need Help?</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
  </body>
</html>
