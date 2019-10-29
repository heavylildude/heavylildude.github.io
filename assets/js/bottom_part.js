var bottom_part = '';
var tobelooped = '';
var titles = ['Gaby', 'Jordan', 'Sharen', 'Lee'];
var images = ['1.jpg', '2.jpg', '3.jpg', '1.jpg'];

for (var i = 0; i < 4; i++) {
  tobelooped = tobelooped + '<div class="card">' +
        '<div class="card_image" style="background-image:url(\'assets/bitmaps/' + images[i] +'\')"></div>' +
        '<div class="card_title">I am ' + titles[i] + '</div>' +
        '<div class="card_text">Lorem ipsum dolor consectetur elit</div>' +
        '<button type="button">MORE</button>' +
      '</div>';
    
}

var bottom_part = '<div class="two_col">' + tobelooped + '</div>';