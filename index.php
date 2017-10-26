<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="dist/css/styles.css">
</head>

<body>
  <ul class="global-UL">
    <li class="global-LI">
  <div class="tileOuterContainer">

    <ul class="tileUL">
      <li class="tileLI">
        <h3>Recent Transactions</h3>
        <div class=tileLI-bodyDIV>
          <table>
            <tr>
              <th>Date</th>
              <th>Total</th>
            </tr>
            <tr>
              <td>10/07/2017</td>
              <td>37.97 GBP</td>

            </tr>
            <tr>
              <td>27/08/2017</td>
              <td>29.45 GBP</td>

            </tr>



          </table>
        </div>
      </li>
      <li class="tileLI">
        <h3>Last Transaction</h3>
        <div class=tileLI-bodyDIV>
          <table>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
            </tr>
            <tr>
              <td>Tomatoes</td>
              <td>3.99 GBP</td>
              <td>7</td>

            </tr>
            <tr>
              <td>Milk</td>
              <td>2.49 GBP</td>
              <td>1</td>

            </tr>
            <tr>
              <td>Eggs</td>
              <td>1.99 GBP</td>
              <td>2</td>

            </tr>



          </table>
        </div>
      </li>
      <li class="tileLI">
        <h3>Spending Trends</h3>
        <div class=tileLI-bodyDIV>
          <img style="opacity: 0.5;position: absolute; border-radius:10px;" width="450px" height="250px" src="dist/assets/chart.png" />
        </div>
      </li>
      <li onmousedown="window.location.href='promotions.php';" class="tileLI">
        <h3>Promotions</h3>
        <img style="margin-top:50px; margin-left:150px;" width="200px" height="200px" src=""/>
        <p style="margin-left:100px;font-size:20px;">Purchase 10 for £35 and save £4.99</p>
      </li>

    </ul>
  </div>
</li>
</ul>
</body>

</html>
