$(document).ready(function () {
    window.narrator = $("#narrator")[0];

    $('.play-puase').click(function () {
        if ($(this).find("i").hasClass("pause")) {
            narrator.pause();
        } else {
            narrator.play();
        }

        $(this).find("i").toggleClass("play pause");
    })
})