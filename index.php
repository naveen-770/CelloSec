<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100" style= "background-color: #B8E8FC; ">
    	
    	<form class="shadow w-450 p-3" 
    	      action="php/signup.php" 
    	      method="post" style= "background-color: white; border-radius: 10px;">

    		<h4 class="display-4  fs-1">Create Account</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		    <label class="form-label">First Name</label>
		    <input type="text" 
		           class="form-control"
		           name="fname"
		           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
		  </div>

          <div class="mb-3">
		    <label class="form-label">Last Name</label>
		    <input type="text" 
		           class="form-control"
		           name="lname"
		           value="<?php echo (isset($_GET['lname']))?$_GET['lname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

          <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="text" 
		           class="form-control"
		           name="email"
		           value="<?php echo (isset($_GET['email']))?$_GET['email']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
		  <div style= "display: flex;">
		    <button type="submit" class="btn btn-primary">Sign Up</button> &nbsp &nbsp
            <div>
                <button type="submit" class="btn btn-primary"><a href="login.php" class="link-secondary">Login</a></button>
            </div>
        </div>
		</form>
    </div>
</body>
</html>