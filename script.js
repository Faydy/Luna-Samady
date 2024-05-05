function handleSubmit (nume, url, pret) {
    location.href = "product.html";
    sessionStorage.setItem("NUME", nume);
    sessionStorage.setItem("URL", url);
    sessionStorage.setItem("PRET", pret);
    return;
}