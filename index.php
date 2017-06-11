<?php
session_start();
include('conn.php'); 
error_reporting(E_ERROR);
?>
<!DOCTYPE html>
<html>
<head>
<title>RoomsOnRent | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
 <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.css">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="fair owner " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<script type="text/javascript">
function fill(Value)
{
$('#name').val(Value);
$('#display').hide();
}

$(document).ready(function(){
$("#name").keyup(function() {
var name = $('#name').val();
if(name=="")
{
$("#display").html("");
}
else
{
$.ajax({
type: "POST",
url: "ajax.php",
data: "name="+ name ,
success: function(html){
$("#display").html(html).show();
}
});
}
});
});
</script>

<style>
#display
{
	position: absolute;
}	
#display ul
{
list-style: none;
margin: 3px 20px 20px 0px;
width: 450px;
max-width: 450px;
max-height: 150px;
overflow:auto;
}
#display  li
{
display: block;
padding: 5px;
background-color: #f5ebeb;
border-bottom: 1px solid #367;
cursor:pointer;
}
#content
{
padding:50px;
width:500px; border:1px solid #666;
float:left;
}
#clear
{ clear:both; }
#box
{
float:left;
margin:0 0 20px 0;
text-align:justify;
}
.ui-autocomplete
{
	height:300px;
	overflow-y:auto;
}
</style>

</head>
<body >
<!--header-->
		<?php
			include('header.php');
		?>

<!--//-->	
	<div class=" header-right">
	
	<h3 class="fadeInLeft">Help Others To Help Yourself</h3>
	
				<!-- Content of this place have deleted by ANUP   --_ANUP-->
	
	
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		
					
					<?php
					$q = "SELECT * FROM `slider`";
					$sql = @mysqli_query($connection,$q);
					while($row = mysqli_fetch_array($sql))
					{
					?>
					 <li>
			          	 <div style="background: url(<?php echo "admin/".$row['images']; ?>); background-repeat: round;" class="banner">
			           		
			          	</div>
			         </li>
					 
					 <?php
						}
					 ?>
			      </ul>
			  </div>
			</div>
		</div>
	</div>
	 
	<!--header-bottom-->
	
		<!-- Content of this place have deleted by ANUP   --_ANUP-->
	
			<!--//-->
	<!--//header-bottom-->
<?php
		include('home.php');
?>
			
	
	
	
<!--//header-->
<!--content-->
<div class="content">
	
		<div class="content-bottom" style="padding-top: 0.5em;">
			<div class="container">
				<!-- <h3 style="color: #27da93;">" What our clients say "</h3>   --_ANUP-->
				<h3 style="color: #00d5fa;">" What our clients say "</h3>
					
					
					<div class="clearfix"> </div>
					
					<!--edit testimonials-->
					
					
<style>
		.carousel-indicators .active{ background: #31708f; } 
		.content{ margin-top:20px; } 
		.adjust1{ float:left; width:100%; margin-bottom:0; } 
		.adjust2{ margin:0; } 
		.carousel-indicators li{ border :1px solid #ccc; } 
		.carousel-control{ color:#31708f; width:5%; } 
		.carousel-control:hover, .carousel-control:focus{ color:#31708f; } 
		.carousel-control.left, .carousel-control.right { background-image: none; } 
		.media-object{ margin:auto; margin-top:15%; }
		@media screen and (max-width: 768px) { .media-object{ margin-top:0; } }
	</style>
	<div class="container content"> 
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
		<!-- Indicators --
		<ol class="carousel-indicators"> 
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li> 
		<li data-target="#carousel-example-generic" data-slide-to="2"></li> 
		</ol> <!-- Wrapper for slides --> <div class="carousel-inner"> 
	<?php
		$q = "SELECT * FROM `testimonials`";
							$sql = @mysqli_query($connection,$q);
							$i=0;
							while($row = mysqli_fetch_array($sql))
							{
								$i=$i+1;
	?>
		<div class="item <?php if($i==1) echo 'active'; ?>"> 
		<div class="row"> 
		<div class="col-xs-12"> 
		<div class="thumbnail adjust1"> 
		<div class="col-md-2 col-sm-2 col-xs-12"> 
		<img class="media-object img-rounded img-responsive" src="<?php echo "admin/".$row['image']; ?>" style="width:100px; height:100px"> 
		</div> 
		<div class="col-md-10 col-sm-10 col-xs-12"> 
		<div class=""> 
		<p class="text-info lead adjust2"><?php echo $row['heading'] ?></p> 
		<p><span class="glyphicon glyphicon-thumbs-up"></span> <?php echo $row['comment'] ?> </p> 
		<blockquote class="adjust2" style="border-left: 5px solid #eee !important;"> <p><?php echo $row['name'] ?></p> <small><cite title="Source Title"><i class="glyphicon glyphicon-globe"></i> <?php echo $row['position'] ?></cite></small> </blockquote> 
		</div> 
		</div> 
		</div> 
		</div> 
		</div> 
		</div> 
	<?php
		}
	?>
		</div> 
		<!-- Controls --> 
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> 
		<span class="glyphicon glyphicon-chevron-left"></span> 
		</a> 
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> 
		<span class="glyphicon glyphicon-chevron-right"></span> 
		</a> 
		</div> 
		</div>
				
					
					<!--edut testimonials-->
					
			</div>
		</div>		
<!--//test-->	

	</div>
	
	
	
	
	
	
<!--footer-->
<?php
		include('footer.php');
?>
<!--//footer-->

    <script>
    $(function() {
        function split( val ) {
            return val.split( /,\s*/ );
        }
        function extractLast( term ) {
            return split( term ).pop();
        }
        
        $( "#skills" ).bind( "keydown", function( event ) {
            if ( event.keyCode === $.ui.keyCode.TAB &&
                $( this ).autocomplete( "instance" ).menu.active ) {
                event.preventDefault();
            }
        })
        .autocomplete({
            minLength: 1,
            source: function( request, response ) {
                // delegate back to autocomplete, but extract the last term
                $.getJSON("locality.php", { term : extractLast( request.term )},response);
            },
            focus: function() {
                // prevent value inserted on focus
                return false;
            },
            select: function( event, ui ) {
                var terms = split( this.value );
                // remove the current input
                terms.pop();
                // add the selected item
                terms.push( ui.item.value );
                // add placeholder to get the comma-and-space at the end
                terms.push( "" );
                this.value = terms.join( ", " );
                return false;
            }
        });
    });
    </script>

</body>
</html>