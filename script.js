$(document).ready(function () {
  $(document).delegate('.open', 'click', function (event) {
    $(this).addClass('oppenned');
    event.stopPropagation();
  })
  $(document).delegate('body', 'click', function (event) {
    $('.open').removeClass('oppenned');
  })
  $(document).delegate('.cls', 'click', function (event) {
    $('.open').removeClass('oppenned');
    event.stopPropagation();
  });
});

var typed = new Typed(".textp", {
  strings: [
    "  Adil Elatmani ^900\n",
    "  Developpeur Full-Stack"
  ],
  smartBackspace: true,
  backSpeed: 50,
  typeSpeed: 90,
  backDelay: 30,
  loop: true
});