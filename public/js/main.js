$('.carousel').carousel({
  interval: 100
})

function animacjaKoszyka(bool) {
  if(bool == true )
    document.getElementById("przycisk-koszyk").classList.add("animacjakoszyk");
  else
    document.getElementById("przycisk-koszyk").classList.remove("animacjakoszyk");
}

function sendMessage() {
  if(valid("")) {
    alert("Wysłano wiadomość!");
  }
}
