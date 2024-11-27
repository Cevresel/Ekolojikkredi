function toggleMenu() {
    var menuContent = document.querySelector('.menu-content');
    menuContent.style.display = menuContent.style.display === 'block' ? 'none' : 'block';
}

function showEkolojikKredi() {
    alert("Ekolojik Kredi, geri dönüşüm yaparak kazandığınız puanları ifade eder. Her atık türü farklı miktarda kredi kazandırır.");
}

function showAtiklar() {
    alert("Kağıt, Plastik, Cam, Metal, Pil ve Elektronik atıklar için farklı kredi miktarları vardır. Her biri geri dönüşüm katkısı sağlar.");
}
