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
// /バーガースイッチ