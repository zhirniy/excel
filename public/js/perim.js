window.onload = function () {
    //При загрузке страницы мы будем прослушивать изменения поля суммы в гривнах
    var curs={};
    curs.test;
    var length = document.getElementById("length");
    var width = document.getElementById("width");
    var perimeter = document.getElementById("perimeter");

    length.addEventListener("change",
    function () {
          perimeter.value = (length.value * 1 + width.value * 1)*2;
    }, false);
    length.addEventListener("keyup",
    function () {
          perimeter.value = (length.value * 1 + width.value * 1)*2;
    }, false);

    width.addEventListener("change",
    function () {
          perimeter.value = (length.value * 1 + width.value * 1)*2;
    }, false);
    width.addEventListener("keyup",
    function () {
          perimeter.value = (length.value * 1 + width.value * 1)*2;
    }, false);
}