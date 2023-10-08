// バーガースイッチ
var app = new Vue({
    el: '#app',
    data: {
        on: false,
        off: true
    }
});
// /バーガースイッチ


// スリックスライダー
$('#SlickSlider').slick({
    adaptiveHeight: true,
    autoplay: true,
    centerMode: true,
    centerPadding: '300px',
    arrows: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,

     responsive: [{
        breakpoint: 990, // ブレイクポイントを指定
        settings: {
           centerMode: false, 
        }
    }

    ]

});
// /スリックスライダー

