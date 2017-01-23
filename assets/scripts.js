$(document).ready(function() {
	$("#bjwplayer").click(function(){
		$.ajax({
			url: "ajax.php",
			type: "post",
			data: {
				jkanimeurl: $("#jkanimeurl").val(),
				playertype: 1
			},
			success: function(result){
            $("#container").html(result);
        }});
	});
});
$(document).ready(function() {
	$("#bhtml5").click(function(){
		$.ajax({
			url: "ajax.php",
			type: "post",
			data: {
				jkanimeurl: $("#jkanimeurl").val(),
				playertype: 2
			},
			success: function(result){
            $("#container").html(result);
        }});
	});
});