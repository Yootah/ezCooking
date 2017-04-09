$(document).ready(function() {
	var start = php_NEWS_TO_SHOW;
	$('#loadMoreButton').click(function() {
		$('#loadMoreButton').hide();
		console.log("ayyy1");
		$.ajax({
			type: "POST",
			
			dataType: "json",

			url: "Welcome/loadmorenews/"+start,

			success: function(uudistekogu) {
				console.log("ayyy2");
			
				var i = start;
				var m = 0; // Mitu uudist on juba lisatud
				
				$.each(uudistekogu, function(key, value){
					console.log("ayyy3");
					if (m < php_NEWS_TO_SHOW) {
						$("#newsbody")
						.append(
						'<div class= "div_recipe" onClick="location.href=\'http://ezcooking.cs.ut.ee/post/' + value.recipe_id + '\'"><table><tr>' 
						+ '<td><img class="media-object news_pic" src="'
							+ value.img_url 
						+ '" alt="Reference picture"></td>' 
						+ '<td class="newspost-title">' 
							+ value.title 
						+ '<br><em class="newspost-descr">'+ value.descr +'</em></td>' 
						+ '</tr></table></div>');
						
					} else {
						$("#loadMoreButton").show();
					}
					i = i + 1;
					m = m + 1;
				});
				
				start = start + php_NEWS_TO_SHOW;
			}

		});
		
		
	});
});
