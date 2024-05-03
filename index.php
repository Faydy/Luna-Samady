<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luna Samady</title>
    <link rel="stylesheet" href="style.css">
    
    <script src="https://kit.fontawesome.com/d8ef06f089.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" onclick="hide_everything();" />
                <div class="hamburger-lines">
                  <span class="line line1"></span>
                  <span class="line line2"></span>
                  <span class="line line3"></span>
                </div>  
              <div class="menu-items">
                <li><input type="text" name="" id="input_mobile" placeholder="Caută..."></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">blogs</a></li>
                <li><a href="#">portfolio</a></li>
                <li><a href="#">contact</a></li>
              </div>
            </div>
        </div>

        <div class="logo-div"><a href="/"><img src="1.png" alt=""></a></div>
        <div class="search-div">
          <input   type="text" id="search-input">
          <button class="btn" id="search-button" onclick="Show_Search()"><i class="fa-solid fa-magnifying-glass"></i></button></i>
          
        </div>
        <div class="cart-div"><button><i class="fa-solid fa-cart-shopping"></i></button></i></div>
    </header>

    <div class="main">
      <img src="2-Collection-banner-1920x600px.jpg" alt="bed" id="main-bed">
      <div class="banner">
        <div class="banner-div">
        <h1>Descoperă modelele</h1>
        <button id="buton_search">Apasă aici</button>
      </div>
      </div>
    </div>

    <div class="products">
      <section class="mini">Uite ce-ți recomandam:</section>
      <div class="produs">
        <div class="bloc">
          <img src="test.jpg" alt="">
          <p><a class="titlu" href="">Finet - 6 piese</a>, <a class="categorie" href="">Lenjerii de pat</a></p>
          <a href="" class="nume">Lenjerie de pat bumbac finet – 6 piese | 0122-J</a>
        </div>
        <div class="bloc">
          <img src="test.jpg" alt="">
          <p><a class="titlu" href="">Finet - 6 piese</a>, <a class="categorie" href="">Lenjerii de pat</a></p>
          <a href="" class="nume">Lenjerie de pat bumbac finet – 6 piese | 0122-J</a>
        </div>
        <div class="bloc">
          <img src="test.jpg" alt="">
          <p><a class="titlu" href="">Finet - 6 piese</a>, <a class="categorie" href="">Lenjerii de pat</a></p>
          <a href="" class="nume">Lenjerie de pat bumbac finet – 6 piese | 0122-J</a>
        </div>
        <div class="bloc">
          <img src="test.jpg" alt="">
          <p><a class="titlu" href="">Finet - 6 piese</a>, <a class="categorie" href="">Lenjerii de pat</a></p>
          <a href="" class="nume">Lenjerie de pat bumbac finet – 6 piese | 0122-J</a>
        </div>
      </div>
    </div>
</body>

<script>
  var active = false;
  var hidden = false;
  function Show_Search()
  { 
    if(!active)
    {
      document.getElementById("search-button").style.animation = "search_btn_in 0.4s linear both";
      document.getElementById("search-input").style.animation = "search_in 0.4s linear both";
      document.getElementById("search-input").style.borderBottom = "0.5px solid";
      document.getElementById("search-input").style.display = "block"
      active = true;
    }
    else
    {
      alert("you searched: " );
    }
    
  }
  function hide_everything()
  {
    var width = screen.width;
    if(hidden)
    {
      hidden = false;
      setTimeout(function() {
        if(width > 850)
          document.getElementsByClassName("banner")[0].style.display = "unset";
      }, 500);
        setTimeout();
    }
    else
    {
      hidden = true;
      document.getElementsByClassName("banner")[0].style.display = "none";
      
    }
  }
  </script>
</html>