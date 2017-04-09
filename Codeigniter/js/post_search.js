$(document).ready(function() {
      $("form#searchform").submit(function(e) {
           e.preventDefault(); //prevent default form submission
           var search = $("input#search").val(); 
           $.post("search/show_search/", {search: search}, function(data) {
               $("div#searchresults").html(data);
          });
          return false
      });
});