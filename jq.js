
$(window).on('load', function (e) {
    $('#navMenu li > a').click(function() {
        $('li').removeClass("active");
        $(this).parent().addClass('active');
    });

})

  $(".nav-link").on('click', function(e) {
     e.preventDefault();
     var target = $(this).attr('href');
     $('html, body').animate({
       scrollTop: ($(target).offset().top)
     }, 2000);
  });
  /*$('.parallax-window').parallax({imageSrc: 'img/global-education.jpg'});*/


$(window).on('read', function (e) {
    
  $('.parallax-window').parallax({imageSrc: 'img/resume_writing.jpg'});
})


$(window).on('read', function (e) {
    
  console.log("Test");
})


$("ul li:last-child").removeClass();
$("ul li:last-child").addClass("nav-item");
$("ul li:last-child a").addClass("nav-link");


