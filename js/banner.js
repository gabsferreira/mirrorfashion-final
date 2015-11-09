var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('.destaque img').src = banners[bannerAtual];
}

var timer = setInterval(trocaBanner, 4000);

botaoRecomeca.onclick = function () {
  timer = setInterval(trocaBanner, 4000);
}

var botaoPausa = document.querySelector("#botaoPausa");

botaoPausa.onclick = function() {
    clearInterval(timer);
}
