$(document).ready(function() {
    
    $advform = $("#advancedSearch").children();
    $advform.hide();
    $hidden = true;
    
    var updateSearch = function(state) {
        
	    if (state.charAt(1)=='a') {
	        $advform.show();
            $hidden = false;
            $("#advanced-btn").children()[0].href = "#/advanced";
            $("#advanced-btn").children()[0].text = "Hide advanced";
            document.title = state.charAt(1).toUpperCase() + state.slice(2)+" search";
	    }
	    else if(state.charAt(1)=='s'){
	        $advform.hide();
            $hidden = true;
            $("#advanced-btn").children()[0].href = "#/simple";
            $("#advanced-btn").children()[0].text = "Advanced search";
            document.title = state.charAt(1).toUpperCase() + state.slice(2)+" search";
	    }
	    else {
	        $.History.go('/simple');
	    }
	}
	
    var hash = (window.location.href).substring(33);
    
        updateSearch(hash);

      $("form#searchform").submit(function(e) {
           e.preventDefault(); //prevent default form submission
           var search = $("input#search").val(); 
           var auth = $("input#auth-name").val();
           $.post("search/show_search/", {search: search, author: auth}, function(data) {
               $("div#searchresults").html(data);
          });
          return false
      });
    
    $("#advanced-btn").click(function() {
        if ($hidden) {
            $advform.show();
            $hidden = false;
            $("#advanced-btn").children()[0].href = "#/advanced";
        }
        else {
            $advform.hide();
            $hidden = true;
            $("#advanced-btn").children()[0].href = "#/simple";
        }
    });
    
    $.History.bind(function(state){
            updateSearch(state);
            // Update the page's title with our current state on the end
			document.title = state.charAt(1).toUpperCase() + state.slice(2)+" search";
			});
			
		
});

