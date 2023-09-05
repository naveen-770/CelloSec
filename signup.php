<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp</title>
    <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
  <form class="shadow w-450 p-3" 
    	      action="php/signup.php" 
    	      method="post">
    <div id="data">
      <div id="Obj">
        <img id="first" src="images/Micro Animations.gif" alt="" />
        <!-- <h3>Make Health Care Simpler</h3> -->
        <!-- <p id="p1">Get medicine information,order medicines book lab <br> tests & consult doctors online from the comfort <br>of your home.</p> -->
      </div>
      <div id="Obj">
        <h1>Create Account</h1>
  
        <div class="input-cont">


		    
          
          <input id="user" type="text" class="form-control" placeholder="Enter User Name" name="uname"  value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
   

          <input id="password" class="form-control" type="password" placeholder="Create Password" name="pass"/>
          <p></p>
        </div>


        <button id="Dj" type="submit">Sign Up</button>


        <div id="last">
          <p id="Rj">
            Have an account?
            <b
              ><a href="index.php"><span id="orange">Login</span></a></b
            >
          </p>
          <p id="Dk">For corporate Sign up, <b>Click Here</b></p>
          <p id="AB">
            By logging in, you agree to our <br />
            <a href="">Terms and Conditions & Privacy Policy</a>
          </p>
        </div>
        <!-- <p id = "faf"><b>Need Help? Get In Touch</b></p>  -->
      </div>
    </div>
</form>
  </body>
</html>
<script>
  var btn = document.querySelector("button");
  btn.addEventListener("click", loginFunction);
  function loginFunction() {
    var user = document.querySelector("#user").value;
    var mobile = document.querySelector("#mobile").value;
    var password = document.querySelector("#password").value;

    var obj = {
      user: user,
      password: password,
      mobile: mobile,
    };
    // my object created here should be mapped with the login page

    localStorage.setItem("signupDetails", JSON.stringify(obj));
    window.location.href = "index.php";
  }
</script>
