<?php 
include "navbar.php";
include "../db/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
<section class="hero is-fullheight">
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="columns is-8 is-variable ">
					<div class="column is-two-thirds has-text-left">
						<h1 class="title is-1">Kotak Saran</h1>
						<p class="is-size-4">dukungan atau saran anda sangat kami apresiasi untuk kemajuan web kami</p>
						<!-- <div class="social-media">
							<a href="https://facebook.com" target="_blank" class="button is-light is-large"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							<a href="https://instagram.com" target="_blank" class="button is-light is-large"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="https://twitter.com" target="_blank" class="button is-light is-large"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</div> -->
					</div>
					<div class="column is-one-third has-text-left">
                        <div class="field">
                            <form action="" method="POST">
							<label class="label">Name</label>
							<div class="control">
								<input class="input is-medium" name="username" type="text">
							</div>
						</div>
						<div class="field">
							<label class="label">Email</label>
							<div class="control">
								<input name="email" class="input is-medium" type="text">
							</div>
						</div>
						<div class="field">
							<label class="label">Message</label>
							<div class="control">
                                <input type="text" class="textarea" name="comment">
							</div>
						</div>
						<div class="control">
							<button type="submit" name="submit" class="button is-link is-fullwidth has-text-weight-medium is-medium">Send Message</button>
						</div>
                        </form>
					</div>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO feedback (name,email,message)
    VALUES 
    (
        '$_POST[username]',
        '$_POST[email]',
        '$_POST[comment]'
    )";
    mysqli_query($con,$sql);
}

?>