// Active Nav

// $(function() {
//      var pgurl = window.location.href.substr(window.location.href
// .lastIndexOf("/")+1);
//      $("#nav ul li a").each(function(){
//           if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
//           $(this).addClass("active");
//      })
// });

// $('li > a').click(function() {
//     $('li').removeClass();
//     $(this).parent().addClass('active');
// });

// $('#primary-menu a').click(function(e) {
//     e.preventDefault(); //prevent the link from being followed
//     $('#primary-menu a').removeClass('selected');
//     $(this).addClass('selected');
// });

// $('#navlist a').click(function(e) {
//     e.preventDefault(); //prevent the link from being followed
//     $('#navlist a').removeClass('selected');
//     $(this).addClass('selected');
// });

    // $(".menu li").on("click", function() {
    //   $(".menu li").removeClass("active");
    //   $(this).addClass("active");
    // });

// jQuery(function($){
//   console.log('helloo');
//     $('.menu').click(function () {
//         console.log('click');
//         $('.menu a').removeClass('active');
//         $(this).addClass('active');
//      });
//  })

// $(function(){
//     $('#navbar a').click(function () {
//         $('#navbar a').removeClass('active');
//         $(this).addClass('active');
//      });
//  });

jQuery(function($){
	 $('.menu a').click(function () {
	         $('.menu a').removeClass('active');
	          $(this).addClass('active');
	       });
})

// jQuery(function($){
// 	 $('.menu li').click(function () {
// 	         $('.menu li').removeClass('active');
// 	          $(this).addClass('active');
// 	       });
// })