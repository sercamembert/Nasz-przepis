$(document).ready(function () {
    $(".signup-input").removeClass("red-underline");
    if (window.location.href.indexOf("error") > -1) {
        $(".signup-input").addClass("red-underline");
      }

});