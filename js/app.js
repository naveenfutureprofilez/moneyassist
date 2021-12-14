
// go top
$(function() {
	$(window).scroll(function(){
		var scrolltop=$(this).scrollTop();		
		if(scrolltop>=200){		
			$("#elevator_item").show();
			$('.fixed-sidebar').addClass('scroll-page');
		}else{
			$("#elevator_item").hide();
			$('.fixed-sidebar').removeClass('scroll-page');
		}
	});		
	$("#elevator").click(function(){
		$("html,body").animate({scrollTop: 0}, 500);	
	});		
	$(".qr").hover(function(){
		$(".qr-popup").show();
	},function(){
		$(".qr-popup").hide();
	});	
});

// cookies

$('.accept-btn').click(function(){
	$('.cookies-sec').hide();
});

// menu toggle
$(".toggle_btn").click(function(){
	$(this).parent().find('.collapse_box').slideToggle("slow");
	$(this).toggleClass("active");
});

// dropdown menu
$(".dropdown-link").append("<span></span>");
$('.dropdown-link > span').click(function(){
	$(this).toggleClass('active');
	$(this).parent().find('.drop-box').toggleClass('show');
});

// sidebar dots
$('.tabs-link li a').click(function(){
	$(this).toggleClass('show');
	$(this).parent().toggleClass('active');
	$(this).parent().siblings().find('a').removeClass('show');			
	$(this).parent().siblings().removeClass('active');			
});

// scroll down/up to sec
$(document).ready(function(){
    $(".scroll_down").click(function(event){
         if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){
        });
        } // End if
    });


    // scroll sidebar
    $(".scroll-sidebar a").click(function(event){
         if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 30
        }, 200, function(){
        });
        } // End if
    });
}); 

// section active

$(document).ready(function(){
	var targets = document.querySelectorAll('section, footer');
		var obsOptions = {
		  root: null, // measure against the viewport
		  threshold: .5 // how much of the element should be visible before handler is triggered
		}

		let handler = (entries, opts) => {
		  entries.forEach(entry => {
		    if (entry.intersectionRatio > opts.thresholds[0]) {
		      document.body.classList.remove(...document.body.classList);
		      document.body.classList.add(entry.target.id + '-active');
		    }
		  })
		}

		targets.forEach(el => {
		  var observer = new IntersectionObserver(handler, obsOptions);
		  observer.observe(el);
		});
});







