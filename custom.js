$(document).ready(function(){

	$("#tweet").submit(function(){
		tweet = $("#text-tweet").val();

		if(tweet == ""){
			$(".error").remove();
			$("#resultado").append('<div class="error">El tweet no se puede enviar en blanco</div>');
			$("#resultado").slideDown();
			setTimeout(function(){ $("#resultado").slideUp(); }, 3000);
		}else{

			$.ajax({
							   
				type: 'POST',
				url: 'send.php',
				data: $(this).serialize(),
				success: function(data){
					$('#resultado').slideDown();
					$('#resultado').html(data);
				}
						
			});
		}

	return false;
	});

});

$(document).ready( function() {
	$('#text-tweet').simplyCountable({
		counter: '#counter',
		maxCount: 140,
		strictMax: true,
	});	
});

function clearform(){
	$("#text-tweet").val('');
}