


$(function () {

  // Scroll To top   
  $('.movetotop').click(function() {
    $('html, body').animate({scrollTop: 0}, 700);
    return false;
  });    
  
  
  // Forum Stats make responsive *************************************************
  $("#forum-stats .tab-content .table").wrap("<div class='table-responsive'></div>");
  $("#forum-stats .panel .table").wrap("<div class='table-responsive'></div>");
  
  
  // ------------------------------------------------------- //
  // Multi Level dropdowns for main menu
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  }); 
  
  //------------- Remove the comma from News Tags -------------
  $(".no-comma").each(function(){   
    $(this).html($(this).html().replace(/,/g , ''));
  });
  
  //------------- Remove the btn-success from id=subscribe -------------
  document.getElementById("subscribe").classList.remove("btn-success");

    
});