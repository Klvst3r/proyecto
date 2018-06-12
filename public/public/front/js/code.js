$(document).ready(function() {
 /*Este script espara eventos*/
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
    //es para cultura y tradicion
    $(document).ready(function() {
 
      var owl = $("#owl-demo2");

      owl.owlCarousel({
        navigation : true,
        singleItem : true,
        transitionStyle : "fade"
      });

    });
    // Paginacion para gastronomia
    $("#pro-page-1").css("display","block");
    
    $('.paginacion').bootpag({
       total: 3,
       page: 1,
       maxVisible: 3,
       href: "#pro-page-{{number}}",
       leaps: false,
       next: '>>',
       prev: "<<"
    }).on('page', function(event, num){
        $(".cm-page").css("display","none");
        $("#pro-page-"+num).css("display","block");
    });
    
    /*Este Script es para hacer scroll*/
    var nav = $('.tamano');
     $(window).scroll(function () {
        if ($(this).scrollTop() > 60) {
            nav.addClass("menu-fix");
            if($(".menu-fix .lista-menu .item-logo").length){

            }else{

            }
         } else {
            $(".item-logo").remove();
            nav.removeClass("menu-fix");
            nav.addClass("f-quitar");
         }
    });
    
    /* este script es para turismo */
     $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
});