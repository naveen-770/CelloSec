<?php 
	
	session_start();
	include "db_conn.php";
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	if (isset($_SESSION['id']) && isset($_SESSION['uname'])) { 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="./css/home-test.css" />
    <link
      rel="stylesheet"
      href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <title>CelloSec | Online Indian Supermarket | Buy Clothes Online</title>
    <link rel="shortcut icon" href="title-img.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />
  </head>
  <body>
    <!-- Navigation Bar  -->
    <nav>
      <a href="home-test.php"
        ><img src="images/CelloSec.svg" width="100" height="40" alt="CelloSec"
      /></a>
      <div id="tags">
        <a href="">WOMEN</a>
        <a href="">MEN</a>
        <div id="s">
          <div>OFFERS</div>
        </div>
        <!-- //! YOU CAN ADD LINK HERE- -->
        <!-- <a href="./../Shital/index.html">ASK DOCTORS</a> -->
        <a href="">WINTER</a>
        <a href="">SPORTS</a>
        <a href="">FOOTWEAR</a>
        <a href="">KIDS</a>
        <div id="s">
          <div>SAVE MORE</div>
        </div>
      </div>
      <div id="pointers">
        
        <!-- <p style="color: black"> Hello, <?=$_SESSION['uname']?> </p> -->
        <a class="change" href="index.php"><?=$_SESSION['uname']?></a>
        <a href="">Offers</a>
        <a href="cart.php">
          <span
            class="material-symbols-outlined"
            style="font-size: 35px; color: black; transform: rotateY(180deg)"
          >
            shopping_cart
          </span>
        </a>
        <a href="">Need Help ?</a>
      </div>
    </nav>
    <br />
    <div id="search">
      <span class="material-symbols-rounded" style="margin-top: 5px">
        pin_drop
      </span>
      <select value="Enter City" id="">
        <option value="Mumbai">Mumbai</option>
        <option value="New Delhi">New Delhi</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Lucknow">Lucknow</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Patna">Patna</option>
        <option value="Navi Mumbai">Navi Mumbai</option>
        <option value="Aurangabad">Aurangabad</option>
        <option value="Rajkot">Rajkot</option>
      </select>
      <input
        type="text"
        placeholder="Search for Brands"
      />
      <div id="pres">
        <p>QUICK BUY! Flat 25% off on Decathalon brands*</p>
      </div>
    </div>
    <br />
    <div id="dropdown">
      <h5>Hoodies v</h5>
      <h5>Watches v</h5>
      <h5>Shorts v</h5>
      <h5>Jeans v</h5>
      <h5>Joggers v</h5>
      <h5>Hats & Caps v</h5>
      <h5>Styling products v</h5>
      <h5>Belts v</h5>
      <h5>Tees v</h5>
    </div>
    <br />
    <div id="first">
      <img
        src="images/banner1.jpg"
        width="700"
        height="400"
        alt=""
      />
      <img
        src="images/banner3.jpg"
        width="600"
        alt=""
      />
    </div>
    <br />
    <h2>CelloSec: Embrace Your Desires: Discover a World of Endless Choices with Us</h2>
    <br />
    <div id="knowmore">
      <img
        src="images/banner2.jpg"
        height="400"
        alt=""
      />
      <br />
      <div id="a">
        <h4>Different day Different Styles</h4>
      </div>
    </div>
    <div id="type">
      <p>Popular Brands</p>
      <button>SEE ALL</button>
    </div>
    <div id="tab1"></div>
    <div id="type">
      <p>Want Health Medicines? Explore more on netmeds</p>
      <button>SEE ALL</button>
    </div>  
    <div id="tab2"></div>
    <br />

    <div
      style="
        display: flex;
        height: 130px;
        justify-content: space-evenly;
        align-items: center;
      "
    >
      <div
        style="
          box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
          width: 15%;
          height: 110px;
        "
      >
        <h3
          style="
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
              'Lucida Sans', Arial, sans-serif;
          "
        >
          Levi's
        </h3>
        <p
          style="
            font-size: 10px;
            margin-left: 15px;
            margin-bottom: 5px;
            color: black;
          "
        >
          3 Tshirts off
        </p>
        <p style="font-size: 10px; margin-left: 15px; color: black">
          Exclusive
        </p>
        <br />
        <div style="display: flex; justify-content: space-evenly; width: 80%">
          <h3 style="font-size: 14px; font-family: cursive">₹ 1050</h3>
          <p
            style="
              text-decoration: line-through;
              font-size: 12px;
              margin-right: 10px;
              font-family: sans-serif;
              color: rgb(60, 60, 60);
            "
          >
            ₹ 750
          </p>
          <button
            style="
              color: green;
              width: 50px;
              border-color: green;
              height: 25px;
              margin-top: -1px;
              border-style: dashed;
              font-size: 10px;
              padding: 15px 10px 15ps;
            "
          >
            40% Off
          </button>
        </div>
      </div>

      <div
        style="
          box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
          width: 15%;
          height: 110px;
        "
      >
      
        <h3
          style="
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
              'Lucida Sans', Arial, sans-serif;
          "
        >
          H&M's Hoodies
        </h3>
        <p
          style="
            font-size: 10px;
            margin-left: 15px;
            margin-bottom: 5px;
            color: black;
          "
        >
          "
        </p>
        <p style="font-size: 10px; margin-left: 15px; color: black">
          2 Hoodies off
        </p>
        <br />
        <div style="display: flex; justify-content: space-evenly; width: 80%">
          <h3 style="font-size: 14px; font-family: cursive">₹ 2700</h3>
          <p
            style="
              text-decoration: line-through;
              font-size: 12px;
              margin-right: 10px;
              font-family: sans-serif;
              color: rgb(60, 60, 60);
            "
          >
            ₹ 4500
          </p>
          <button
            style="
              color: green;
              width: 50px;
              border-color: green;
              height: 25px;
              margin-top: -1px;
              border-style: dashed;
              font-size: 10px;
              padding: 15px 10px 15ps;
            "
          >
            40% Off
          </button>
        </div>
      </div>

      <div
        style="
          box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
          width: 15%;
          height: 110px;
        "
      >
      
        <h3
          style="
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
              'Lucida Sans', Arial, sans-serif;
          "
        >
          Allen Solly Tshirts
        </h3>
        
        <p
          style="
            font-size: 10px;
            margin-left: 15px;
            margin-bottom: 5px;
            color: black;
          "
        >
          "
        </p>
        <p style="font-size: 10px; margin-left: 15px; color: black">
          4 Tshirts
        </p>
        <br />
        <div style="display: flex; justify-content: space-evenly; width: 80%">
          <h3 style="font-size: 14px; font-family: cursive">₹ 1500</h3>
          <p
            style="
              text-decoration: line-through;
              font-size: 12px;
              margin-right: 10px;
              font-family: sans-serif;
              color: rgb(60, 60, 60);
            "
          >
            ₹ 2115
          </p>
          <button
            style="
              color: green;
              width: 50px;
              border-color: green;
              height: 25px;
              margin-top: -1px;
              border-style: dashed;
              font-size: 10px;
              padding: 15px 10px 15ps;
            "
          >
            10% Off
          </button>
        </div>
      </div>

      <div
        style="
          box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
          width: 15%;
          height: 110px;
        "
      >
        <h3
          style="
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
              'Lucida Sans', Arial, sans-serif;
          "
        >
          Trends
        </h3>
        <p
          style="
            font-size: 10px;
            margin-left: 15px;
            margin-bottom: 5px;
            color: black;
          "
        >
          4 kurtis
        </p>
        <p style="font-size: 10px; margin-left: 15px; color: black">
          Different colours
        </p>
        <br />
        <div style="display: flex; justify-content: space-evenly; width: 80%">
          <h3 style="font-size: 14px; font-family: cursive">₹ 720</h3>
          <p
            style="
              text-decoration: line-through;
              font-size: 12px;
              margin-right: 10px;
              font-family: sans-serif;
              color: rgb(60, 60, 60);
            "
          >
            ₹ 1200
          </p>
          <button
            style="
              color: green;
              width: 50px;
              border-color: green;
              height: 25px;
              margin-top: -1px;
              border-style: dashed;
              font-size: 10px;
              padding: 15px 10px 15ps;
            "
          >
            40% Off
          </button>
        </div>
      </div>

      <div
        style="
          box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
          width: 15%;
          height: 110px;
        "
      >
        <h3
          style="
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
              'Lucida Sans', Arial, sans-serif;
          "
        >
        Maxx
        </h3>
        <p
          style="
            font-size: 10px;
            margin-left: 15px;
            margin-bottom: 5px;
            color: black;
          "
        >
          Sarees
        </p>
        <p style="font-size: 10px; margin-left: 15px; color: black">
          Different colors
        </p>
        <br />
        <div style="display: flex; justify-content: space-evenly; width: 80%">
          <h3 style="font-size: 14px; font-family: cursive">₹ 840</h3>
          <p
            style="
              text-decoration: line-through;
              font-size: 12px;
              margin-right: 10px;
              font-family: sans-serif;
              color: rgb(60, 60, 60);
            "
          >
            ₹ 1400
          </p>
          <button
            style="
              color: green;
              width: 50px;
              border-color: green;
              height: 25px;
              margin-top: -1px;
              border-style: dashed;
              font-size: 10px;
              padding: 15px 10px 15ps;
            "
          >
            40% Off
          </button>
        </div>
      </div>
    </div>
    <br />
    <div id="type">
      <p>Top Sellers Brands</p>
      <button>SEE ALL</button>
    </div>

    <div id="tab3"></div>
    <br />
    <div id="type">
      <!-- <p>TATA 1mg Health Products</p> -->
      <!-- <button>SEE ALL</button> -->
    </div>

    <!-- <div id="tab4"></div>
    <br />
    <div id="type">
      <p>Health Care Products</p>
      <button>SEE ALL</button>
    </div>

    <div id="tab5"></div>
    <br> -->
    <!-- <p>Shop By Health Concerns</p>
    <div id="tab6"></div>
    <p>Health food & drinks</p>
    <div id="tab7"></div>
    <br />
    <div id="type">
      <p>Glucose & Energy Drinks</p>
      <button>SEE ALL</button>
    </div>
    <div id="tab8"></div>
    <p id="p">Ayurveda</p>
    <br />
    <div id="ayurveda">
      <div>
        <img
          src="https://onemg.gumlet.io/image/upload/kf52rw6a5ua5idcio0db.jpg"
          alt="Shankhpushpi"
        />
        <h5>Shankhpushpi</h5>
        <h6>
          Shankhpushpi or Shyamkanata is a perinnial herb that is used for its
          medicinal benifits..
        </h6>
      </div>
      <div>
        <img
          src="https://onemg.gumlet.io/image/upload/qau8w8gnbjk18zepigdc.jpg"
          alt="Suddh Suahaga"
        />
        <h5>Suddh Suahaga</h5>
        <h6>
          Suddh Suahaga is known as Tankana in Ayurveda and Borax in English. It
          is available..
        </h6>
      </div>
      <div>
        <img
          src="https://onemg.gumlet.io/image/upload/ic14xbnlmdvpzb8wxdxx.jpg"
          alt="Babool"
        />
        <h5>Babool</h5>
        <h6>
          Babool is also known as the "Healing tree" as all of its parts (bark,
          root, gum, leaves..
        </h6>
      </div>
      <div>
        <img
          src="https://onemg.gumlet.io/image/upload/gxhv6gcq41rurkyluzda.jpg"
          alt="Kuth"
        />
        <h5>Kuth</h5>
        <h6>
          Kuth or Kustha is a potent plant which is known for its medicinal
          uses. Kuth helps to..
        </h6>
      </div>
    </div> -->
    <br />
    <div class="abb">
      <h2>
        Stay with Fashion in CelloSec: Your Favourite Online Shopping and
        Shopping Platform
      </h2>
      <h3>We Bring Care to Fashion.</h3>
      <p>
        
CelloSec is your premier online shopping destination, offering a diverse range of products to cater to your every need. From the latest fashion trends to cutting-edge electronics, we've got it all right at your fingertips. With millions of happy customers across the globe and a track record of delivering excellence, we're dedicated to bringing you the ultimate shopping experience.
      </p>
      <br />
      <h3>CelloSec: Your Favourite Shopping App!</h3>
      <p>
      Our commitment to quality and convenience knows no bounds. Whether you're seeking trendy apparel, state-of-the-art gadgets, or home essentials, we've meticulously curated a selection that meets the highest standards. We understand the importance of hassle-free shopping, and that's why we strive to make your journey with us as smooth as possible.
      </p>
      <p>
      With a seamless ordering process, secure payment options, and swift delivery to countless cities, we're on a mission to redefine the way you shop. Our customer-first approach ensures that you receive nothing but the best, always. Your satisfaction is our top priority, and we go the extra mile to ensure that your shopping experience is nothing short of flawless.
      </p>
      <p>
      Join the millions of satisfied customers who have already discovered the convenience and joy of shopping with CelloSec. Explore our vast collection, place your order, and let us bring your shopping dreams to life. At CelloSec, we're here to turn your shopping desires into reality. Shop with us today and experience shopping like never before.
      </p>
      
      <br />
      <h3>The Feathers in Our Cap</h3>
      <p>
      At CelloSec, our mission is to revolutionize the way you shop online, making it a seamless, enjoyable, and secure experience for every customer. Since our inception in 2017, we have strived relentlessly to provide top-notch service and unbeatable quality, earning us numerous accolades and recognition along the way.
      </p>
      <br />
      <h3>The Services We Offer</h3>

      <p>
      CelloSec is your premier online shopping destination, offering a vast array of products at discounted prices. Whether you're in bustling cities like Delhi, Mumbai, Bangalore, Hyderabad, Pune, Gurgaon, Noida, Kolkata, Chennai, Ahmedabad, or Lucknow, or any of the 1000+ cities we serve, we're here to make your online shopping experience a breeze. Beyond delivering your orders to your doorstep, we're committed to providing reliable and trusted information on our products while ensuring you shop effectively and securely. Shop with CelloSec today and discover a world of convenience, affordability, and satisfaction.






      </p>
      
    </div>
    <p class="india">INDIA'S LARGEST SHOPPING PLATFORM</p>
    <br />
    <div id="india">
      <div>
        <h1>260m+</h1>
        <p>Visitors</p>
      </div>
      <div>
        <h1>31m+</h1>
        <p>Order Delivered</p>
      </div>
      <div>
        <h1>1800+</h1>
        <p>Cities</p>
      </div>
    </div>
    <br />
    <div id="download">
      <p>Get the link to download App</p>
      <input type="text" placeholder="Enter Phone Number" />
      <button>Send Link</button>
    </div>
    <br />
    <br />
    <div id="about">
      <div>
        <h2>Know Us</h2>
        <p>About Us</p>
        <p>Contact Us</p>
        <p>Press Coverage</p>
        <p>Carrers</p>
        <p>Business Partnership</p>
        <p>Become a Health Partner</p>
      </div>

      <div>
        <h2>Our Policies</h2>
        <p>Privacy Policy</p>
        <p>Terms & Conditions</p>
        <p>Editorial Policy</p>
        <p>Return Policy</p>
        <p>Ip Policy</p>
        <p>Grievance Redressal Policy</p>
      </div>

      <div id="social">
        <h2>Connect</h2>
        <p>Social Links</p>
        <div id="links">
          <a href="https://www.facebook.com/1mgOfficial/"
            ><img
              id="link"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMcaT2nZpZ8ome4tgwzTc2tMdue0usmbcBeQ&usqp=CAU"
              alt=""
          /></a>
          <a
            href="https://twitter.com/1mgofficial/status/1437378022898733065?lang=en"
            ><img
              id="link"
              src="https://image.similarpng.com/very-thumbnail/2020/06/Black-icon-Twitter-logo-transparent-PNG.png"
              alt=""
          /></a>
          <a href="https://m.youtube.com/c/1mgofficial/playlists"
            ><img
              id="link"
              src="https://www.vhv.rs/dpng/d/131-1312581_hd-clipart-youtube-logo-black-youtube-logo-transparent.png"
              alt=""
          /></a>
          <a href="https://in.linkedin.com/company/1mg"
            ><img
              id="link"
              src="https://iconape.com/wp-content/files/yd/367773/svg/logo-linkedin-logo-icon-png-svg.png"
              alt=""
          /></a>
          <a href="https://medium.com/1mgofficial"
            ><img
              id="link"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Medium_logo_Monogram.svg/1200px-Medium_logo_Monogram.svg.png"
              alt=""
          /></a>
        </div>
        <p>Want daily dose of health ?</p>
        <button>SIGN UP</button>
      </div>

      <div id="store">
        <h2>Download App</h2>
        <a
          href="https://play.google.com/store/apps/details?id=com.aranoah.healthkart.plus&hl=en_IN&gl=US"
          ><img
            id="store1"
            src="https://en.logodownload.org/wp-content/uploads/2019/06/get-it-on-google-play-badge.png"
            alt=""
        /></a>
        <a
          href="https://apps.apple.com/in/app/tata-1mg-Shopping-app/id554578419"
          ><img
            id="store2"
            src="https://www.pngmart.com/files/10/Download-On-The-App-Store-PNG-Image.png"
            alt=""
        /></a>
      </div>
    </div>
    <br />
    <div id="last3">
      <div id="twin">
        <div id="last">
          <img
            src="https://chauffeurnanny.com.au/wp-content/uploads/2018/05/safe-reliable-icon-01.png"
            alt=""
          />
        </div>
        <div>
          <h1>Reliable</h1>
          <p>
            All products displayed on Tata 1mg are procured from verified and
            licensed pharmacies. All labs listed on the platform are accredited
          </p>
        </div>
      </div>
      <div id="twin">
        <div id="last">
          <img
            src="https://mpng.subpng.com/20210130/gos/transparent-lock-in-a-circle-icon-lock-icon-security-icon-60159173e05d90.422359061612026227919.jpg"
            alt=""
          />
        </div>
        <div>
          <h1>Secure</h1>
          <p>
            Tata 1mg uses Secure Sockets Layer (SSL) 128-bit encryption and is
            Payment Card Industry Data Security Standard (PCI DSS) compliant
          </p>
        </div>
      </div>
      <div id="twin">
        <div id="last">
          <img
            src="https://icons-for-free.com/download-icon-shop+shopping+wallet+icon-1320191097568670396_512.png"
            alt=""
          />
        </div>
        <div>
          <h1>Affordable</h1>
          <p>
            Find affordable shopping substitutes, save up to 50% on fashion
            products, up to 80% off on offline stores and free expert consultations.
          </p>
        </div>
      </div>
    </div>
    <br />
    <div id="two">
      <img src="https://static.legitscript.com/seals/729605.png" alt="" />
      <img
        src="https://res.cloudinary.com/du8msdgbj/image/upload/v1580717209/URS_ebgmxc.png"
        alt=""
      />
    </div>
    <p
      style="
        color: black;
        font-size: 16px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
        font-weight: bold;
      "
    >
      India's only LegitScript and ISO/ IEC 27001 certified online Shopping
      platform
    </p>
    <br />
    <p style="font-size: 14px; color: black; font-weight: bold">
      Know more about CelloSec
    </p>
    <div style="display: flex; justify-content: space-evenly" id="end">
      <p>
        © 2022 CelloSec. All rights reserved. In compliance with Drugs and
        Cosmetics Act, 1940 and Drugs and Cosmetics Rules, 1945, we don't
        process requests for Schedule X and other habit forming drugs.
      </p>
      <img
        style="height: 50px; margin-top: 10px"
        src="https://s3.ap-south-1.amazonaws.com/rzp-prod-merchant-assets/payment-link/description/images%20(3)_CnyokaDvJmG1xu.png"
        alt=""
      />
    </div>

    <!-- ////// -->
  </body>
</html>

<!-- /JS -->
<script>
  // Login / Signup Change

  var obj = JSON.parse(localStorage.getItem("signupDetails")) || null;
  if (obj != null) {
    var arr = document.querySelectorAll(".change");
    arr[0].innerText = "Hello ," + " " + obj.user;
    arr[1].innerText = "";
  }

  //  console.log(obj)

  //-->Featured Brands<--//

  var popularArr = [
    {
      img: "images/logos/Levi's_logo.svg.png",
      name: "Levi's",
    },
    {
      img: "images/logos/Adidas-Logo-1991.jpg",
      name: "Adidas",
    },
    {
      img: "images/logos/H&M-Logo.svg.png",
      name: "H&M",
    },
    {
      img: "images/logos/Louis Phillipe.jpg",
      name: "Louis Phillipe",
    },
    {
      img: "images/logos/nike.jpg",
      name: "Nike",
    },
    {
      img: "images/logos/Converse_logo.svg.png",
      name: "Converse",
    },
    {
      img: "images/logos/Under-Armour-logo.png",
      name: "Under Armour",
    },
  ];

  popularArr.forEach(function (element) {
    var box = document.createElement("div");

    var logo = document.createElement("img");
    logo.setAttribute("src", element.img);

    var name = document.createElement("h4");
    name.innerText = element.name;

    box.append(logo, name);

    document.querySelector("#tab1").append(box);

    localStorage.setItem("popularBrands", JSON.stringify(popularArr));
  });

  //---> Popular Catogories <--//

  var featuredArr = [
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624525284/cabpuknnlyyzgqfnb4x5.png",
      name: "Vitamins & Supplements",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1649141994/x2z8u1osqutmxvx56hlw.png",
      name: "Ayurveda",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624525147/qjfdkz5njmk9n7vvrbb3.png",
      name: " Shopping Devices",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1642586423/uq1gwxslqqrxxwv6zi6j.jpg",
      name: "Nutritional Drinks",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624525168/p1blaka183nc1zlil8tq.png",
      name: "Sexual Wellness",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624525320/j7ruar88gacbzksuadjn.png",
      name: "Homeopathy",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624525219/tfrtydrq6uzeyb42gh08.png",
      name: "Diabates Care",
    },
  ];

  featuredArr.forEach(function (element) {
    var box = document.createElement("div");

    var logo = document.createElement("img");
    logo.setAttribute("src", element.img);

    var name = document.createElement("h4");
    name.innerText = element.name;

    box.append(logo, name);

    document.querySelector("#tab2").append(box);

    localStorage.setItem("featuredBrands", JSON.stringify(featuredArr));
  });

  //-->>Top Sellers<<--//

  var topsellerArr = [
    {
      img: "images/products/nirvana.jpg",
      name: "Nirvana hoodie",
      qty: "Oversized Fit print hoodie",
      ratings: "4.4 ☆",
      review: "249 ratings",
      mrp: "MRP ₹" + 2999,
      MRP: 2999,
      discount: "5% Off",
      price: 2599,
      key: 001,
    },
    {
      img: "images/products/puma-jacket.jpeg",
      name: "Puma Jacket",
      qty: "Regular Fit Jacket",
      ratings: "4.2 ☆",
      review: "91 ratings ",
      mrp: "MRP ₹" + 1499,
      MRP: 1499,
      discount: "11% Off ",
      price: 1199,
    },
    {
      img: "images/products/london hills printed men.jpg",
      name: "London Hills",
      qty: "Printed Men Hooded Neck T-Shirt",
      ratings: "4.5 ☆",
      review: "183 ratings",
      mrp: "MRP ₹" + 359,
      discount: "5% Off",
      price: 214,
    },
    {
      img: "images/products/51I1vEn0NYL._AC._SR360,460.jpg",
      name: "JUGULAR Men's Cotton Hooded Neck Hoodies",
      qty: "bottles of 60 capsules",
      ratings: "4.4 ☆",
      review: "211 ratings",
      mrp: "MRP ₹" + 459,
      discount: "54% Off",
      price: 283,
    },
    {
      img: "images/products/81FzPtTv6UL._UX569_.jpg",
      name: "PARX Men's Full Sleeve",
      qty: "Regular FIT Dark Blue Casual Sweatshirt",
      ratings: "4.4 ☆",
      review: "98 ratings",
      mrp: "MRP ₹" + 1699,
      discount: "46% Off",
      price: 909,
    },
    {
      img: "images/products/51txbLKMYEL._AC._SR360,460.jpg",
      name: "Alan Jones Clothing",
      qty: "Men's Cotton Hooded Neck Hoodies",
      ratings: "4.4 ☆",
      review: "190 ratings",
      mrp: "MRP ₹" + 1999,
      discount: "65% Off",
      price: 655,
    },
    {
      img: "images/products/one piece.jpg",
      name: "One Piece Luffy Gear 5 Sun God",
      qty: "Unisex Anime Hoodie 100%",
      ratings: "4.6 ☆",
      review: "118 ratings",
      mrp: "MRP ₹" + 2000,
      discount: "53% Off",
      price: 949,
    },
  ];

  // console.log(topsellerArr[0])

  topsellerArr.forEach(function (element, index) {
    var box = document.createElement("div");
    box.addEventListener("click", function () {
      localStorage.setItem("productData", JSON.stringify(topsellerArr[index]));
      window.location.href = "product.php";
    });

    var logo = document.createElement("img");
    logo.setAttribute("src", element.img);

    var name = document.createElement("h4");
    name.innerText = element.name;
    name.style.fontFamily = "franklin gothic";
    name.style.fontSize = "14px";
    name.style.width = "80%";
    name.style.display = "block";
    name.style.margin = "auto";
    name.style.marginBottom = "5px";

    var qty = document.createElement("h5");
    qty.innerText = element.qty;
    qty.style.color = "grey";
    qty.style.textAlign = "left";
    qty.style.marginLeft = "15px";
    qty.style.fontFamily = "arial";
    qty.style.marginBottom = "3px";
    qty.style.fontSize = "12px";

    var ratings = document.createElement("div");
    ratings.style.display = "flex";
    ratings.style.marginBottom = "5px";
    var star = document.createElement("div");
    star.innerText = element.ratings;
    star.style.marginLeft = "15px";
    star.style.padding = "0.5px 5px";
    star.style.fontSize = "14px";
    star.style.border = "1px solid";
    star.style.backgroundColor = "green";
    star.style.color = "white";
    var review = document.createElement("h5");
    review.innerText = element.review;
    review.style.marginTop = "5px";
    review.style.marginLeft = "5px";
    ratings.append(star, review);
    // var ratings= document.createElement("h5")
    //     ratings.innerText= element.ratings
    //     ratings.style.color= "green"
    //     ratings.style.textAlign="left"
    //     ratings.style.marginLeft="15px"
    //     ratings.style.fontSize="13px"
    //     ratings.style.marginBottom="5px"

    var price_box = document.createElement("div");
    price_box.style.display = "flex";
    price_box.style.justifyContent = "space-evenly";

    var price = document.createElement("h5");
    price.innerText = element.mrp;
    price.style.textDecoration = "line-through";
    price.style.fontFamily = "arial";
    price.style.textAlign = "left";
    price.style.marginLeft = "-10px";
    price.style.fontSize = "12px";
    price.style.color = "grey";

    var fPrice = document.createElement("h5");
    fPrice.innerText = element.discount;
    fPrice.style.fontFamily = "arial";
    fPrice.style.fontSize = "13px";
    fPrice.style.color = "red";

    price_box.append(price, fPrice);

    var sale = document.createElement("h3");
    sale.innerText = "₹ " + element.price;
    sale.style.fontFamily = "segoe ui";
    sale.style.fontSize = "14px";
    sale.style.justifyContent = "left";
    sale.style.display = "flex";
    sale.style.color = "black";
    sale.style.marginTop = "10px";

    box.append(logo, name, qty, ratings, price_box, sale);

    document.querySelector("#tab3").append(box);

    localStorage.setItem("topseller", JSON.stringify(topsellerArr));
  });

  //-->  TATA 1Mg Health products <---//

  var healthArr = [
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1650454451/pq9kpnup8oubjoihzhmw.jpg",
      name: "TATA 1mg Blood Pressure Monitor ..",
      qty: "box of 1 Unit",
      ratings: "4.7 ☆",
      review: "9 ratings",
      mrp: "MRP ₹" + 1540,
      discount: "10% Off",
      price: 1386,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1637324363/asydocau7dvbzayxel1u.jpg",
      name: "TATA 1mg CoQ 10 tablet 99% Ubiquinone",
      qty: "strip of 10 tablets",
      ratings: "4.6 ☆",
      review: "11 ratings",
      mrp: "MRP ₹" + 995,
      discount: "55% Off ",
      price: 448,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1650436845/v1rvnzqllbl7lioxslds.jpg",
      name: "TATA 1mg compressor nebulizer",
      qty: "box of 1 Unit",
      ratings: "4.7 ☆",
      review: " 9 ratings",
      mrp: "MRP ₹" + 1630,
      discount: "10% Off",
      price: 1467,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1649963382/f6t1ibz3qh3ag0o486xv.jpg",
      name: "TATA 1mg Immunity and Wellness...",
      qty: "bottle of 15 tablets",
      ratings: "4.7 ☆",
      review: " 12 ratings",
      mrp: "MRP ₹" + 99,
      discount: "10% Off",
      price: 89,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1651087844/ehhaun1dp1zj2ytc3yws.jpg",
      name: "TATA 1mg Digital Thermometer",
      qty: "box of 1 Unit",
      ratings: "4.6 ☆",
      review: "9 ratings",
      mrp: "MRP ₹" + 105,
      discount: "9% Off",
      price: 95,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1645272788/qh1au45w8u7cfvf3lg3i.jpg",
      name: "TATA 1mg Women's Multivitamins, Zinc,..",
      qty: "bottle of 60 tablets",
      ratings: "4.2 ☆",
      review: " 336 ratings ",
      mrp: "MRP ₹" + 995,
      discount: "55% Off",
      price: 448,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1642507827/fwram2p7rbkoigjg6zas.jpg",
      name: "TATA 1mg Salmon Omega 3 Fish Oil...",
      qty: "bottle of 60 capsules",
      ratings: "4.4 ☆",
      review: "673 ratings",
      mrp: "MRP ₹" + 995,
      discount: "50% Off",
      price: 498,
    },
  ];

  healthArr.forEach(function (element) {
    var box = document.createElement("div");

    var logo = document.createElement("img");
    logo.setAttribute("src", element.img);

    var name = document.createElement("h4");
    name.innerText = element.name;
    name.style.fontFamily = "franklin gothic";
    name.style.fontSize = "14px";
    name.style.width = "80%";
    name.style.display = "block";
    name.style.margin = "auto";
    name.style.marginBottom = "5px";

    var qty = document.createElement("h5");
    qty.innerText = element.qty;
    qty.style.color = "grey";
    qty.style.textAlign = "left";
    qty.style.marginLeft = "15px";
    qty.style.fontFamily = "arial";
    qty.style.marginBottom = "3px";
    qty.style.fontSize = "12px";

    var ratings = document.createElement("div");
    ratings.style.display = "flex";
    ratings.style.marginBottom = "5px";
    var star = document.createElement("div");
    star.innerText = element.ratings;
    star.style.marginLeft = "15px";
    star.style.padding = "0.5px 5px";
    star.style.fontSize = "14px";
    star.style.border = "1px solid";
    star.style.backgroundColor = "green";
    star.style.color = "white";
    var review = document.createElement("h5");
    review.innerText = element.review;
    review.style.marginTop = "5px";
    review.style.marginLeft = "5px";
    ratings.append(star, review);

    var price_box = document.createElement("div");
    price_box.style.display = "flex";
    price_box.style.justifyContent = "space-evenly";

    var price = document.createElement("h5");
    price.innerText = element.mrp;
    price.style.textDecoration = "line-through";
    price.style.fontFamily = "arial";
    price.style.textAlign = "left";
    price.style.marginLeft = "-10px";
    price.style.fontSize = "12px";
    price.style.color = "grey";

    var fPrice = document.createElement("h5");
    fPrice.innerText = element.discount;
    fPrice.style.fontFamily = "arial";
    fPrice.style.fontSize = "13px";
    fPrice.style.color = "red";

    price_box.append(price, fPrice);

    var sale = document.createElement("h3");
    sale.innerText = "₹ " + element.price;
    sale.style.fontFamily = "segoe ui";
    sale.style.fontSize = "14px";
    sale.style.justifyContent = "left";
    sale.style.display = "flex";
    sale.style.color = "black";
    sale.style.marginTop = "10px";

    box.append(logo, name, qty, ratings, price_box, sale);

    document.querySelector("#tab4").append(box);

    localStorage.setItem("healthArr", JSON.stringify(healthArr));
  });

  // --> FlashDeals  <--//

  var flashArr = [
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1643977920/c4xx071ojujdgh1byexa.jpg",
      name: "Dr.Reddy's CeleHealth for Everyday Nutrition..",
      qty: "Tin of 400gm Powder",
      ratings: "4.3 ☆",
      review: " 6 ratings",
      mrp: "MRP ₹" + 690,
      discount: "12% Off",
      price: 607,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1634637029/lizjtsgndvguxjqmevri.jpg",
      name: "Cetaphill Moisturising Lotion",
      qty: "bottle of 250ml Lotion",
      ratings: "4.2 ☆",
      review: " 201 ratings ",
      mrp: "MRP ₹" + 965,
      discount: "15% Off ",
      price: 820,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1600085677/cropped/gsntxkwr1bcsvrrrddyi.jpg",
      name: "Volini Spray",
      qty: "bottle of 100gm Spray",
      ratings: "4.5 ☆",
      review: " 1538 ratings",
      mrp: "MRP ₹" + 320,
      discount: "17% Off",
      price: 266,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1600090007/cropped/chesipqujcvcsuy1m8iw.jpg",
      name: "Shecal 500 Tablet",
      qty: "strip of 15 tablets",
      ratings: "4.5 ☆",
      review: " 4209 ratings",
      mrp: "MRP ₹" + 119.5,
      discount: "18% Off",
      price: 98,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1600085907/cropped/ysk4g4nzqqzkmdn4aemq.png",
      name: "Zincovit Tablet",
      qty: "strip of 15 Tablets",
      ratings: "4.5 ☆",
      review: "4276 ratings ",
      mrp: "MRP ₹" + 105,
      discount: "15% Off",
      price: 89,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1603182454/pc0kfczcu5phbkk5sy41.jpg",
      name: "Dr. Morepen Gluco One BG 03 Blood Glucose..",
      qty: "box of 50 test strips",
      ratings: "4.3 ☆ ",
      review: "5247 ratings ",
      mrp: "MRP ₹" + 849,
      discount: "30% Off",
      price: 596,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1600089684/cropped/pvae0u3lqct2buryvo0r.jpg",
      name: "Electral Powder",
      qty: "sachet of 21.8 gm Powder",
      ratings: "4.6 ☆ ",
      review: " 2380 ratings",
      mrp: "MRP ₹" + 19.84,
      discount: "19% Off",
      price: 16,
    },
  ];

  flashArr.forEach(function (element) {
    var box = document.createElement("div");

    var logo = document.createElement("img");
    logo.setAttribute("src", element.img);

    var name = document.createElement("h4");
    name.innerText = element.name;
    name.style.fontFamily = "franklin gothic";
    name.style.fontSize = "14px";
    name.style.width = "80%";
    name.style.display = "block";
    name.style.margin = "auto";
    name.style.marginBottom = "5px";

    var qty = document.createElement("h5");
    qty.innerText = element.qty;
    qty.style.color = "grey";
    qty.style.textAlign = "left";
    qty.style.marginLeft = "15px";
    qty.style.fontFamily = "arial";
    qty.style.marginBottom = "3px";
    qty.style.fontSize = "12px";

    var ratings = document.createElement("div");
    ratings.style.display = "flex";
    ratings.style.marginBottom = "5px";
    var star = document.createElement("div");
    star.innerText = element.ratings;
    star.style.marginLeft = "15px";
    star.style.padding = "0.5px 5px";
    star.style.fontSize = "14px";
    star.style.border = "1px solid";
    star.style.backgroundColor = "green";
    star.style.color = "white";
    var review = document.createElement("h5");
    review.innerText = element.review;
    review.style.marginTop = "5px";
    review.style.marginLeft = "5px";
    ratings.append(star, review);

    var price_box = document.createElement("div");
    price_box.style.display = "flex";
    price_box.style.justifyContent = "space-evenly";

    var price = document.createElement("h5");
    price.innerText = element.mrp;
    price.style.textDecoration = "line-through";
    price.style.fontFamily = "arial";
    price.style.textAlign = "left";
    price.style.marginLeft = "-10px";
    price.style.fontSize = "12px";
    price.style.color = "grey";

    var fPrice = document.createElement("h5");
    fPrice.innerText = element.discount;
    fPrice.style.fontFamily = "arial";
    fPrice.style.fontSize = "13px";
    fPrice.style.color = "red";

    price_box.append(price, fPrice);

    var sale = document.createElement("h3");
    sale.innerText = "₹ " + element.price;
    sale.style.fontFamily = "segoe ui";
    sale.style.fontSize = "14px";
    sale.style.justifyContent = "left";
    sale.style.display = "flex";
    sale.style.color = "black";
    sale.style.marginTop = "10px";

    box.append(logo, name, qty, ratings, price_box, sale);

    document.querySelector("#tab5").append(box);

    localStorage.setItem("flashArr", JSON.stringify(flashArr));
  });
  // ---> Shop by Concern <--//

  var concernARR = [
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624524227/hgzkyio2rphkn6wjif94.png",
      name: "Diabates Care",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624524269/zo7sc14nqpt6ebeojkvr.png",
      name: "Cardiac Care",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624524293/ttagxlnxulsvkyv9fetr.png",
      name: "Stomach Care",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624524282/zytsldnf5mvb0u19ydep.png",
      name: "Liver Care",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624524308/ijgn7fhyq8ig0welmrcp.png",
      name: "Kidney Care",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624524210/ywohqm4txnehsmibypaz.png",
      name: "Bone, Joint & Muscle Care",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1624524252/hn5bpr1ci2do5kdub51v.png",
      name: "Pain Relief",
    },
  ];

  concernARR.forEach(function (element) {
    var box = document.createElement("div");

    var logo = document.createElement("img");
    logo.setAttribute("src", element.img);

    var name = document.createElement("h4");
    name.innerText = element.name;

    box.append(logo, name);

    document.querySelector("#tab6").append(box);

    localStorage.setItem("concernArr", JSON.stringify(concernARR));
  });

  // drinks//

  var drinksArr = [
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1626676531/vuze6xhdat3watvwaro9.png",
      name: "Green tea & Herbal Tea",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1626676387/rxqxi3eybpds7l8mymrt.png",
      name: "Apple Cider Vinegar",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1626676417/odov6fsbhdgwfnqnqmyf.jpg",
      name: "Breakfast Cereals",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1626676562/rstb8fbortn6f868mznd.png",
      name: "Herbal Juices",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1626676595/rqsyo0zfof2bkupt6q0g.jpg",
      name: "Nutritional Drinks",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1626676506/jvqtphggru8juyrasmj8.png",
      name: "Dry fruits",
    },
    {
      img: "https://onemg.gumlet.io/image/upload/w_150,h_150,c_fit,a_ignore,q_auto,f_auto/v1626676627/tyislu0jse29jkwwegb8.jpg",
      name: "Honey",
    },
  ];

  drinksArr.forEach(function (element) {
    var box = document.createElement("div");

    var logo = document.createElement("img");
    logo.setAttribute("src", element.img);

    var name = document.createElement("h4");
    name.innerText = element.name;

    box.append(logo, name);

    document.querySelector("#tab7").append(box);

    localStorage.setItem("drinksArr", JSON.stringify(drinksArr));
  });

  // glucose&drinks

  var glucoseArr = [
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1650782294/xqgmcdy4bcaixm2nhkl0.jpg",
      name: "Dabur Glucose-D jar + 1lg Red Tooth Paste.. ",
      qty: "jar of 1 kg powder",
      ratings: "4.5 ☆",
      review: "174 ratings",
      mrp: "MRP ₹" + 215,
      discount: "15% Off",
      price: 183,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1604321398/mxj5kjfy5ltrwpptxqno.jpg",
      name: "ORSL Plus Orange Read to Drink ",
      qty: "packet of 200ml Liquid",
      ratings: "4.3 ☆",
      review: "152 ratings ",
      mrp: "MRP ₹" + 42,
      discount: "12% Off ",
      price: 37,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1614084909/lyssph0tahzw21ls0vbq.jpg",
      name: "Prolyte ORS Ready to Drink Orange",
      qty: "box of 200ml liquid",
      ratings: "4.1 ☆",
      review: "37 ratings",
      mrp: "MRP ₹" + 29.4,
      discount: "4% Off",
      price: 28,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1644583526/yhiekqelqjrkkczny2lc.jpg",
      name: "Tang Instant Drink Mix Orange",
      qty: "packet of 500g Powder",
      ratings: "4.5 ☆",
      review: "4209 ratings",
      mrp: "MRP ₹" + 140,
      discount: "",
      price: 140,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1645467299/kksa4e1xvacpiig99fot.jpg",
      name: " Glucon-D Instant Energy Health Drink..",
      qty: "Box of 1 kg powder",
      ratings: "4.3 ☆",
      review: "356 ratings ",
      mrp: "MRP ₹" + 198,
      discount: "10% Off",
      price: 178,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1622466534/ayuksxewnespgk0knjkc.jpg",
      name: "Fast&Up Reload Cola Effervescent Tablet",
      qty: "bottle of 20 effervescent..",
      ratings: "4.2 ☆",
      review: "220 ratings",
      mrp: "MRP ₹" + 235,
      discount: "24% Off",
      price: 179,
    },
    {
      img: "https://onemg.gumlet.io/image/upload/a_ignore,w_380,h_380,c_fit,q_auto,f_auto/v1650782218/fdwsdrcqignidzarlvn3.jpg",
      name: "Dabur Glucose-D 450gm + 50gm Free..",
      qty: "jar of 500gm Powder",
      ratings: "4.4 ☆ ",
      review: "152 ratings ",
      mrp: "MRP ₹" + 120,
      discount: "20% Off",
      price: 96,
    },
  ];

  glucoseArr.forEach(function (element) {
    var box = document.createElement("div");

    var logo = document.createElement("img");
    logo.setAttribute("src", element.img);

    var name = document.createElement("h4");
    name.innerText = element.name;
    name.style.fontFamily = "franklin gothic";
    name.style.fontSize = "14px";
    name.style.width = "80%";
    name.style.display = "block";
    name.style.margin = "auto";
    name.style.marginBottom = "5px";

    var qty = document.createElement("h5");
    qty.innerText = element.qty;
    qty.style.color = "grey";
    qty.style.textAlign = "left";
    qty.style.marginLeft = "15px";
    qty.style.fontFamily = "arial";
    qty.style.marginBottom = "3px";
    qty.style.fontSize = "12px";

    var ratings = document.createElement("div");
    ratings.style.display = "flex";
    ratings.style.marginBottom = "5px";
    var star = document.createElement("div");
    star.innerText = element.ratings;
    star.style.marginLeft = "15px";
    star.style.padding = "0.5px 5px";
    star.style.fontSize = "14px";
    star.style.border = "1px solid";
    star.style.backgroundColor = "green";
    star.style.color = "white";
    var review = document.createElement("h5");
    review.innerText = element.review;
    review.style.marginTop = "5px";
    review.style.marginLeft = "5px";
    ratings.append(star, review);

    var price_box = document.createElement("div");
    price_box.style.display = "flex";
    price_box.style.justifyContent = "space-evenly";

    var price = document.createElement("h5");
    price.innerText = element.mrp;
    price.style.textDecoration = "line-through";
    price.style.fontFamily = "arial";
    price.style.textAlign = "left";
    price.style.marginLeft = "-10px";
    price.style.fontSize = "12px";
    price.style.color = "grey";

    var fPrice = document.createElement("h5");
    fPrice.innerText = element.discount;
    fPrice.style.fontFamily = "arial";
    fPrice.style.fontSize = "13px";
    fPrice.style.color = "red";

    price_box.append(price, fPrice);

    var sale = document.createElement("h3");
    sale.innerText = "₹ " + element.price;
    sale.style.fontFamily = "segoe ui";
    sale.style.fontSize = "14px";
    sale.style.justifyContent = "left";
    sale.style.display = "flex";
    sale.style.color = "black";
    sale.style.marginTop = "10px";

    box.append(logo, name, qty, ratings, price_box, sale);

    document.querySelector("#tab8").append(box);

    localStorage.setItem("glucoseArr", JSON.stringify(glucoseArr));
  });

  // Ayurveda//
</script>
<?php 
}else {
	header("Location: index.php");
	exit;
	}
?>