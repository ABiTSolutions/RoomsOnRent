<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<button type="button">Click Me</button>
<h1></h1>
<p></p>
<script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){

			$.ajax({
				type: "GET",
				dataType: "json",
				url: "calc.php",
				data: "parameter=parametervalue",
				success: function(data){
					printresult(data);
				}
			});

			function printresult(data)
			{
				//alert(data['ValueA']);  
				$("h1").text(data['ValueA']);
				$("p").text(data['ValueB']);					
				//alert(data['ValueB']);
			}
			
   });
});
</script>
</body>
</html>