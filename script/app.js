$(document).ready(function(){
    $(".content__stock").slice(0, 2).show();
    $("#loadMore").on("click", function(e){
      e.preventDefault();
      $(".content__stock:hidden").slice(0, 4).slideDown();
      if($(".content__stock:hidden").length == 0) {
        $("#loadMore").text(" ").addClass("noContent");
      }
    });
    
  })