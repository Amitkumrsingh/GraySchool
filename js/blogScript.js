//-----------------------------------------------------------------

//fav-button and like 
var heartButton = document.querySelector(".fa-heart");

$(".icon-heart .fav-count").on("click",function() {
    var total = parseInt($(this).html(), 10);
    if ($(this).parent().hasClass("active")) {
        total -= 1;
        heartButton.style.color = "#b1b1b1";

    } else {
        total += 1;
        heartButton.style.color = "#fddb00";
    }
    $(this).html(total);
    $(this).parent().toggleClass("active");
});

$(".icon-heart .fa-heart").on("click",function() {
    var total = parseInt($(this).parent().siblings(".fav-count").first().html(), 10);
    if ($(this).parent().parent().hasClass("active")) {
        heartButton.style.color = "#b1b1b1";
        total -= 1;
    } else {
        heartButton.style.color = "#fddb00";
        total += 1;
    }
    $(this).parent().siblings(".fav-count").first().html(total);
    $(this).parent().parent().toggleClass("active");
});


// function ToggleColorBtn(){
//     if(heartButton.style.color == "#b1b1b1"){
//         heartButton.style.color = "#fddb00";
//     }
//     else{
//         heartButton.style.color = "#b1b1b1";
//     }
// }



