$(document).ready(function(){
  $(".content__stoks").slice(0, 6).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 6).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text(" ").addClass("noContent");
    }
  });
  
})