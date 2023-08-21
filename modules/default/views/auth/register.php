<!DOCTYPE html>
<html>

<head>
  <link rel = "stylesheet" type = "text/css"
   href = "<?= assets("css/register_style.css") ?>">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>

	<form method="POST" action="<?= base_url('auth/register-action'); ?>" data-role="register-action">
    <?php if (Flash::has("message")): ?>
      <div class="alert alert-<?= Flash::get("type") ?>" role="alert">
        <?= Flash::get("message") ?>
      </div>
    <?php endif; ?>
    <div class="main">
  		<input type="checkbox" id="chk" aria-hidden="true">

  			<div class="signup">

  					<label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="first_name" placeholder="First Name" required />
            <input type="text" name="last_name" placeholder="Last Name" required />
  					<input type="email" name="email" placeholder="Email" required>
  					<input type="password" name="password" placeholder="Password" required id="password">
            <input type="password" name="password" placeholder="Confirm Password" required id="confirmPassword">
            <button id="btn"  disabled type="submit" name="button" />Sign up</button>
  			</div>


  			<div class="login">
  				<form>
  					<label for="chk" aria-hidden="true"> More  </label>
            <label for="chk" aria-hidden="true"><a href="login" > Login </a> </label>
  				</form>
  			</div>
  	</div>
	</form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="<?= assets("js/master.js")  ?>"> </script>
</body>
</html>
