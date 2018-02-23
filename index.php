<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
			<h1>Ajax Live Data Search Using jQuery , PHP &amp; MySQL</h1><hr>
	<div class="col-md-8">
		<div class="input-group">
	<span class="input-group-addon">Search</span>
			<input type="text" class="form-control" id="search_text" name="search" placeholder="Search by customer name">
		</div>
	<br>
	<div id="result"></div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	
$(document).ready(function(){
	$('#search_text').keyup(function(){
        var txt = $(this).val();
        if (txt != '') {
        	$.ajax({
        		url:"db.php",
        		method:"post",
        		data:{search:txt},
        		dataType:"text",
        		success:function(data){
        			$('#result').html(data);
        		}
        	});
        }
	});
});

</script>