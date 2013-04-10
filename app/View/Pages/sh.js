var controle = 2;
var increment = 2;

function twitterNoHeadline () {
	console.log('sobrescrenveo funcao')
}

$(document).ready(function() {
	
	
	
	if ($('.headlines.special').length > 0) {
		controle = 3;
		increment = 3;
	}
	
	
	recuperaTweets();

	console.log('Valor do controle');
	console.log(controle);
	
	console.log('Valor do incremento');
	console.log(increment);
});
	
	var teste = "";
	var qtd_tweets;
	var htmlTweet = ""; 
	
	function recuperaTweets() {
		var url = "http://search.twitter.com/search.json?q=papa";
	
		$.ajax({
			cache: false,
			dataType: 'jsonp',
			type : 'post',
			contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
			url: url,
			success: function(data) {
				teste=data;
				var tweets = data.results;
				
				console.log('rolou o ajax');
				
				console.log('Veio tantos tweets :' + data.results.length);
				
				
				
				$(tweets).each (function ( index, tweet ) {
					htmlTweet += montaTweet(tweet);
				});
				
				
				htmlTweet = htmlTweet.replace(/\n/g, " ");
				console.log(tweet);
				
				qtd_tweets = $('#twitterSearch .tweet').length;
				
				
								
				$('#twitterSearch').append(htmlTweet);
				
				$('#twitterSearch').show();
				
				
			}
		});
	}
	
	function montaTweet (tweet) {
		var html ='<div class="tweet"><a href="http://twitter.com/'+ tweet.from_user +'"><img width= "32" height= "32"  src="'+ tweet.profile_image_url + '" />';
		html += '</a><p><a class="username" href="http://twitter.com/'+ tweet.from_user + '">' + tweet.from_user + '</a>';
		html += '<p class="text">'+ tweet.text+ '</p></p></div>';
		return html;
	}
	
	
	
	
	function movement () {
	
		var total = $('.tweet').length;
	
		if (controle < total) {
			$('.tweet:lt('+controle+')').slideUp(200);
			controle += increment;
			console.log('novo valor');
			console.log(controle);
		} else {
			
			console.log('vai rolar a atualizacao');
			qtd_tweets = 0;
			
			recuperaTweets();
			
			$('.tweet').slideDown(1000, function () {
				$('.tweet:gt('+qtd_tweets+')').remove();
			});
			
			controle = 2;
			increment = 2;
			if ($('.headlines.special').length > 0) {
				controle = 3;
				increment = 3;
			}
		}
	}
	//setInterval(movement, 5000);
	 
