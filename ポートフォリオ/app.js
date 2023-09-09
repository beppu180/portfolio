<<<<<<< HEAD
// スリックスライダー
$('#SlickSlider').slick({
    adaptiveHeight: true,
    autoplay: true,
    centerMode: true,
    centerPadding: '50px',
    arrows: false,

     responsive: [{
        breakpoint: 990, // ブレイクポイントを指定
        settings: {
           centerMode: false, 
        }
    }

    ]

});
// /スリックスライダー

// バーガースイッチ
var app = new Vue({
    el: '#app',
    data: {
        on: false,
        off: true
    }
});
=======
// スリックスライダー
$('#SlickSlider').slick({
    adaptiveHeight: true,
    autoplay: true,
    centerMode: true,
    centerPadding: '50px',
    arrows: false,

     responsive: [{
        breakpoint: 990, // ブレイクポイントを指定
        settings: {
           centerMode: false, 
        }
    }

    ]

});
// /スリックスライダー

// バーガースイッチ
var app = new Vue({
    el: '#app',
    data: {
        on: false,
        off: true
    }
});
>>>>>>> 5ef3362414ec97123d807e8b12dc7d4c996e01db
// /バーガースイッチ