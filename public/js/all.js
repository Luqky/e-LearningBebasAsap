$(document).ready(function(){

  //smooth scroll to anchored page section
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});

  //check if there is class .has-error then focus to that section
  if ($('.has-error').length) {
    $('html, body').animate({
        scrollTop: $("#quick-register").offset().top
    }, 1200);
  };

  //show modal message on login page if there is
  if ($('#modal-message').length) {
    $('#modal-message').modal('show');
  };

});

//# sourceMappingURL=all.js.map
