<script>
$(document ).ready(function() {
	
	
	$("#about").click(function(){
		if($("#aboutdiv").is(":hidden")){
			$("#aboutdiv").slideDown('slow');
			$("#contactdiv").slideUp('slow');
		}else {
			$("#aboutdiv").slideUp('slow');
			$("#contactdiv").slideUp('slow');
			
		}
	});
	
	
	$("#contact").click(function(){
		if($("#contactdiv").is(":hidden")){
			$("#contactdiv").slideDown('slow');
			$("#aboutdiv").slideUp('slow');
		}else {
			$("#contactdiv").slideUp('slow');
			$("#aboutdiv").slideUp('slow');
			
		}
	});
 $("#close").click(function(){
	$("div#infohere").slideUp('slow');
 });
 
});
function championinfo(name){
	$.post('\championinfo.php', {name: name}, function(data){
		if ($("div#infohere").is(":hidden")) {
			$("div#infohere").slideDown('slow');
	        $('div#infohere').html(data);
		}else {
			$('div#infohere').html(data);
		}	
	});
}

</script>

</body>
</html>