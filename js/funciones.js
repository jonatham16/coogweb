jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
/*
	$(".menu-enlace").click(function(evento){
	   evento.preventDefault();
	   alert("entrooo");
	});
*/
	$(".menu-enlace").click (function (e) {
	   e.preventDefault(); //will stop the link href to call the blog page
//	   $('.nav li.active').removeClass("active");
//       $(this).parent().addClass("active");
	   var url;
	   //alert("entrooo");
	   url=$(this).attr('href');
	   setTimeout(function () {
	       window.location.href = url; //will redirect to your blog page (an ex: blog.html)
	    }, 450); //will call the function after 2 secs.

	});

//agregando la clase activa del menu
	var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
     $("#navbar ul li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          		if($(this).parents().eq(1).attr("class") == 'dropdown-menu')
					$(this).parents().eq(2).addClass("active");
				else
          			$(this).parent().addClass("active");
     });


/*
	$(document).on('click', "a.menu-enlace", function(e){		
	   e.preventDefault(); //will stop the link href to call the blog page
	   var url;
	   alert("entrooo");
	   url=$(this).attr('href');
	   setTimeout(function () {
	       window.location.href = url; //will redirect to your blog page (an ex: blog.html)
	    }, 450); //will call the function after 2 secs.
	});
*/

});


/*
function delayedAlert(url) {
  //alert("ggg");
  window.setTimeout(function() {
  window.location.href = url;
  },350);

}
$('#blogLink').click (function (e) {
   e.preventDefault(); //will stop the link href to call the blog page

   setTimeout(function () {
       window.location.href = "blog.html"; //will redirect to your blog page (an ex: blog.html)
    }, 2000); //will call the function after 2 secs.

});
*/