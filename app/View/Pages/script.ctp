<script type="text/javascript">

	$(document).ready(function() {
		recuperaTweets();
	});
   
   var teste = "";
   function recuperaTweets() {

		var url = "http://search.twitter.com/search.json?q=papa%20lang%3Apt%20%3A)&src=typd";
		console.log(url);
		$.ajax({
           cache: false,
           dataType: 'jsonp',
           type : 'post',
           contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
           url: url,
           success: function(data) {
           		teste=data;
				var tweets = data.results;
				
				var html = ""; 
				$(tweets).each (function ( index, tweet ) {
					
					html += montaTweet(tweet);
				});
				
				console.log(html);
				
				$('.headlines .horizontal:first').append('<div class="twitter"><div class="twitter border"><div class="header">Twittadas sobre : PAPA 2013</div><div id="twitterSearch"></div></div></div>"');
				$('#twitterSearch').append(html);
				
           },
           error: function() {
				alert('deu ruim');
			}
       });
   }
   
   
   function montaTweet (tweet) {
   	
   	var html ='<div class="tweet"><a href="http://twitter.com/'+ tweet.from_user +'"><img width= "32" height= "32"  src="'+ tweet.profile_image_url + '" />';
   	html += '</a><p><a class="username" href="http://twitter.com/'+ tweet.from_user + '">' + tweet.from_user + '</a>';
   	return html += '<p class="text">'+ tweet.text+ '</p></p></div>';
   }
   
   var controle = 2;
   function movement () {
   	
	   var total = $('.tweet').length;
	   
	   
	   console.log(controle);
	   
	   if (controle < total) {
		   $('.tweet:lt('+controle+')').slideUp(200);
		   controle+=2
		   console.log('up');
	   } else {
	   	$('.tweet').slideDown(200);
	   		controle = 2;
	   		console.log('down');
	   	
	   }
	   console.log('rodou');
   }

	setInterval(movement, 2000); 
   
</script>

<style type="text/css">

#twitterSearch {
	overflow: hidden;
	width: 640px;
	height: 70px;
	background-color: #fff;
}

#main .headlines .top_story+.twitter .tweet {
	width: 300px;
	margin: 0 0 10px 16px;
	float: left;
	overflow: hidden;
	background-color: #FFF;
	height: 60px;
}
	
</style>



-------

<div class="tweet">
	<a href="http://twitter.com/alinnevieira">
		<img width= "32" height= "32"  src="http://a0.twimg.com/profile_images/2185638147/260082_1712815430351_1537135948_31281795_7915080_n_normal.jpg" />
	</a>
	<p>
		<a class="username" href="http://twitter.com/alinnevieira">alinnevieira</a>
		<p class="text">Hahahahaha... :P RT @alebiato: Papa Francisco RT @alinnevieira: Quem é que joga a fumaça pro alto?</p>
</div>