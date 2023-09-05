<?php 
	
	session_start();
	include "db_conn.php";
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart | 1mg</title>
    <link rel="shortcut icon" href="title-img.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/cart.css" />
  </head>
  <body>
    <div id="navbar">
      <div>
        <!-- image div -->
        <a href="home-test.php"
        ><img src="images/CelloSec.svg" width="100" height="40" alt="CelloSec"
      /></a>
      </div>
      <div>
        <!-- search div -->
        <div>
          <p>Search for Shopping and Fashion Products</p>
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
      <div>
        <!-- need help div -->
        <p>Need Help?</p>
      </div>
    </div>

    <div id="container">
      <!-- First Container -->
      <div>
        <p>Items NOT Requiring Prescription</p>
        <div id="items">
          <!--card div<-->
          <div>
            <p id="prod-name">No Items in Cart</p>
            <p>₹<span class="prod-price">0</span></p>
          </div>
          <div>
            <p id="prod-detail"></p>
            <p>
              MRP<span class="line-through"
                >₹<span class="prod-mrp">0</span></span
              >
            </p>
          </div>
          <div>
            <div>
              <i class="fa-solid fa-trash-can"></i>
              <p style="font-size: smaller">Remove</p>
            </div>
            <div>
              <!-- minus btn -->
              <i id="decrease" class="fa-solid fa-circle-minus"></i>
              <p id="counter-value">1</p>
              <!-- plus btn -->
              <i id="increase" class="fa-solid fa-circle-plus"></i>
            </div>
          </div>
        </div>
        <p>Last Minute Buys</p>
        <div id="last-min-div">
          <!--card div<-->
          <div class="last-min-cards">
            <img
              src="images/products/hand_band.jpg"
              alt=""
            />
            <p>Batman handband</p>
            <p>box 1 unit</p>
            <!-- ratings div -->
            <div>
              <div>
                <h5>4.6 <i class="fa-solid fa-star"></i></h5>
              </div>
              <p>9 ratings</p>
            </div>
            <div>
              <p>₹95</p>
              <h4>ADD</h4>
            </div>
          </div>
          <div class="last-min-cards">
            <img
              src="images/products/headbands.jpg"
              alt=""
            />
            <p>NewYork style headbands</p>
            <p>style headbands</p>
            <!-- ratings div -->
            <div>
              <div>
                <h5>4.6 <i class="fa-solid fa-star"></i></h5>
              </div>
              <p>11083 ratings</p>
            </div>
            <div>
              <p>₹331</p>
              <h4>ADD</h4>
            </div>
          </div>
          <div class="last-min-cards">
            <img
              src="images/products/socks.jpg"
              alt=""
            />
            <p>Urban style socks</p>
            <p>Socks from Meesho</p>
            <!-- ratings div -->
            <div>
              <div>
                <h5>4.5 <i class="fa-solid fa-star"></i></h5>
              </div>
              <p>7701 ratings</p>
            </div>
            <div>
              <p>₹29</p>
              <h4>ADD</h4>
            </div>
          </div>
        </div>
        <div class="footer-text">
          <hr />
          <p>
            CelloSec is a technology platform to facilitate transaction of
            business. The products and services are offered for sale by the
            sellers. The user authorizes the delivery personel to be his agent
            for delivery of the goods. For details read
            <span class="orange">terms and conditions.</span>
          </p>
        </div>
      </div>
      <!-- Second Container -->
      <div id="second-container">
        <div>
          <img
            src="https://onemg.gumlet.io/image/upload/v1625657833/ekjkxafxcqqg0oinr3fu.png"
            alt=""
          />
          <h4>You can save extra ₹55 on this order</h4>
          <p>Become a member</p>
          <p>Care a plan membership ₹165 / 3 months</p>
          <div>
            <button>Know More</button>
            <button>Add to Cart</button>
          </div>
        </div>
        <style>

</style>

<div id="applyCoupon">
    <form method="post">
    <div>
            <img
              src="https://res.cloudinary.com/du8msdgbj/image/upload/v1607414999/marketing/cvtnx1zh5we6atn3m7i0.svg"
              alt=""
            />
            Apply Coupon
          </div>
          <br>
        <input type="text" name="search" style="width: 100%; height: 30px">
        <br><br>
        <input type="submit" id="submit-btn" name="submit" value="Submit">
    </form>

    <br>

    <?php
    if (isset($_POST["submit"])) {
        $str = $_POST["search"];
        $sth = $conn->prepare("SELECT * FROM `coupon` WHERE coupon_name = '$str'");

        $sth->setFetchMode(PDO::FETCH_OBJ);
        $sth->execute();

        if ($row = $sth->fetch()) {
    ?>

    <div id="couponResults"> <!-- Using the CSS id for spacing -->
    <div id="validity">
        <table>
            <tr>
                <td>
                    <h4><?= $row->coupon_name ?><h4></td>
                <td><h4><?= $row->validity ?><h4>
        
                </td>
            </tr>
        </table>
        </div>
    </div>

    <?php
        } else {
            echo "";
        }
    }
    ?>
           
          <div><i class="fa-solid fa-circle-chevron-right"></i></div>

</div>

        <div id="price-details">
          <div>
            <p>Item Total(MRP)</p>
            <p id="total-mrp">₹ <span class="prod-mrp">2999</span></p>
          </div>
          <div>
            <p>Price Discount</p>
            <p>₹-<span id="prod-discount">100.00</span></p>
          </div>
          <div>
            <p>Shipping Fee</p>
            <p>₹40</p>
          </div>
          <div>
            <h5>To be paid</h5>
            <h5>₹ <span class="prod-price">2939</span></h5>
          </div>
          <div>
            <p>Total Savings</p>
            <h5>₹<span id="savings">100</span></h5>
          </div>
        </div>
        <div id="checkout">
          <div>
            <p>Your Delivery Location</p>
            <p>
              <i class="fa-solid fa-location-dot"></i>
              <span class="orange">Delhi</span>
            </p>
          </div>
          <div id="checkout-btn"><p>CHECKOUT</p></div>
        </div>

        <div class="footer-text">
          <hr />
          <p>
            *NeuCoins will be credited 7 days after your complete order is
            delivered in case of Products and in case of Lab Services NeuCoins
            will be credited within 24 hours from the time of generation of test
            report. NeuCoins will not be credited in case a return request is
            initiated for the order. NeuCoins are rounded to the nearest integer
            and the value of NeuCoins earned may change if total order value
            changes.
            <br /><br />**Coupon Discount value may change if the total order
            value changes. <br /><br />
            ***Items in your cart will always reflect the most recent price as
            compared to the prices in their product detail page.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>

<!-- javascript -->
<script src="index.js"></script>
<script
  src="https://kit.fontawesome.com/7e4208235c.js"
  crossorigin="anonymous"
></script>
