<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="dist/css/styles.css">
<script>
  function showMenu() {
    if(document.getElementById('menu').style.left == "0px"){
      document.getElementById('menu').style.left = "-255px";
    } else {document.getElementById('menu').style.left = "0px";
}
  }
</script>

  <div class="headerContainer">
    <div onmousedown="showMenu()" class="header-menuContainer">></div>
    <div class="header-linksContainer">
    </div>
  </div>
  <div id="menu" class="menu">
    <ul class="menuUL">
      <li class="menuLI">Recent Transactions
      </li>
      <li class="menuLI">Last Transaction
      </li>
      <li class="menuLI">Spending Trends
      </li>
      <li class="menuLI">Promotions
      </li>
    <li class="menuLI">Products
    </li>

    </ul>
  </div>
</head>
</html>
