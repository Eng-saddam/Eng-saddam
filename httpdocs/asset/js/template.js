$(document).ready(function(){
    $(".nav-link").click(function(){
    //  alert( $(this).attr("href"));
      window.location.href = $(this).attr("href")
    });
});
