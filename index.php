<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CelloSec</title>
    <link rel="stylesheet" href="css/signup.css" />
    
  </head>
  <body>
  <form action="php/login.php" method="post"
    <div id="data">
      <div id="Obj">
        <img id="first" src="images/Micro Animations.gif" alt="" />
        <!-- <h3>Make Health Care Simpler</h3> -->
        <!-- <p id="p1">Get medicine information,order medicines book lab <br> tests & consult doctors online from the comfort <br>of your home.</p> -->
      </div>
      <div id="Obj">
        <h1>Login</h1>
        <p id="AJ">
        Embrace Your Desires: Discover a World of Endless Choices with Us
        </p>
        <!-- <input id = "Barsu" placeholder="Enter Email Id or Phone Number"> -->
        <div class="input-cont">
          <!-- <input type="text"> -->
          <input
            id="mobile"
            type="text"
            name="uname"
            placeholder="Enter username"
            value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>"
          />
   
          <input id="password" type="password" placeholder="Enter Password" name="pass" />
        </div>
    
        <button type="submit">Login</button>
        <div id="last">
          <p id="Rj1">
            New on CelloSec?
            <b
              ><a href="signup.php"><span id="orange">Sign Up</span></a></b
            >
          </p>
          <p id="Dk">Have a corporate account? <b>Click Here</b></p>
          <p id="AB">
            By logging in, you agree to our <br />
            <a href="">Terms and Conditions & Privacy Policy</a>
          </p>
          <p id="faf"><b>Need Help? Get In Touch</b></p>
        </div>
      </div>
    </div>
</form>
  </body>
</html>
<script>
  var signupDetails = JSON.parse(localStorage.getItem("signupDetails"));
  console.log(signupDetails);
  var btn = document.querySelector("button");
  btn.addEventListener("click", loginFunction);
  function loginFunction() {
    var mobile = document.querySelector("#mobile").value;
    var password = document.querySelector("#password").value;
    console.log(mobile, password);
    if (mobile == signupDetails.mobile && password == signupDetails.password) {
      console.log("correct");
      window.location.href = "./..//Rohit/index.html";
    } else {
      window.alert("Email or Password Incorrect");
    }
  }
</script>
