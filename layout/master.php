<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Cura Pharmacy! | <?php echo $master_title; ?></title>

  <link rel="stylesheet" type="text/css" href="public/css/styles.css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<?php echo $master_link; ?>
</head>

<body style="background-attachment: fixed; text-align:center">
  <div id="header">
    <table border="0" width="100%" bgcolor="#FFFFFF">
      <tr>
        <td><p align="center"><img border="0" src="public/images/logo.png" width="450" height="450"></td>
      </tr>
    </table>
    <!-- 
    <table border="0" width="100%" bgcolor="#FFFFFF"5
      <tr>
        <td width="200" align="center" background="public/images/blue1.jpg"><font face="verdana" size="4"><a href="index.php"><font color="#FFFFFF">Home</font></a></font></td>
        <td width="200" align="center" background="public/images/blue1.jpg"><font face="verdana" size="4"><a href="products.php"><font color="#FFFFFF">Products</font></a></font></td>
        <td width="200" align="center" background="public/images/blue1.jpg"><font face="verdana" size="4"><a href="contact us.php"><font color="#FFFFFF">Contact us</font></a></font></td>
        <div id = "dropdown">Placeholder<i class="fa fa-caret-down"></i> </div>
        <div id = "dropdown-parent"> </div>
        <div id = "dropdown-button"><td width="200" align="center" background="public/images/blue1.jpg"><font face="verdana" size="4"><a href="login.php"><font color="#FFFFFF">Login</font></a></font></td>
        <td width="200" align="center" background="public/images/blue1.jpg"><font face="verdana" size="4"><a href="register.php"><font color="#FFFFFF">Register</font></a></font></td>
        </div>
        <td width="200" align="center" background="public/images/blue1.jpg"><font face="verdana" size="4"><a href="payment.php"><font color="#FFFFFF">Payment</font></a></font></td>
      </tr>
    </table> -->
  <div id="menu">
    <ul id = "navmain">
      <li><a href="index.php">Home</a></li>
      <li><a href="products.php">Product</a></li>
      <li><a href="contact us.php">Contact</a></li>
      <li><a href="payment.php">Payment</a></li>
      <li><div id = "dropdown"><a href="#">User Dashboard</a>
        <div id = "dropdown-list">
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li></li>
        </div>
      </div>
      
    </ul>
    
  </div>
 </div>

  <div id="main">
  <section>
    <?php echo $master_content; ?>
  </section>
  </div>

  <p>&nbsp;</div>
  <p>&nbsp;</div>
  <p>&nbsp;</div>

  <div id="footer">
  <div>
<il> <a href> </a><p>Placeholder</p></il>
  </div>
  <div>
  <il> <a href> </a><p>Placeholder</p></il>
  </div>
  <div>
  <il> <a href> </a><p>Placeholder</p></il>
  </div>
  </div>
  <div id="outer_footer">
    <footer>
      <p>Copyright Cura Pharmacy ©2021. All rights reserved.</p>
      <a href="privacy.php">Privacy.</a> | <a href="terms.php">Terms & Conditions.</a>
    </footer>
  </div>
</body>
</html>
