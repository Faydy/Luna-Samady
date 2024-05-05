window.addEventListener('load', () => {
    const name = sessionStorage.getItem('NUME');
    const url = sessionStorage.getItem('URL');
    const pret = sessionStorage.getItem('PRET');
    document.getElementById('product-image').src = url;
    document.getElementById("product-title").innerHTML = name;
    document.getElementById("product-price").innerHTML = "Lei " + pret;
})
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