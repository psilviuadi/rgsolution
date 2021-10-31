require('./bootstrap');

$('img').on("error", function() {
  $(this).attr('src', 'img/user.png');
});
