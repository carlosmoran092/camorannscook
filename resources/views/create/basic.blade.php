<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CamorannsCook</title>
	<link rel="stylesheet" type="text/css" href="bower_components\bootstrap\dist\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="fonts\Fontello\css\fontello.css">
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.js"></script>

	<script src="js/jquery.nicescroll.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {$("html").niceScroll();});
	</script>
</head>
<body>


@include('sections.header')
  <br>


<!-- Start Container -->
<div class="container-fluid">

<div class="col-md-3">


<!-- -->

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><center><b><i class="icon-pencil-3"></i> PANEL DE CREACIÓN</b></div></center>
		<div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
			<li class="list-group-item"><i class="icon-music"></i> Música</li>
			<li class="list-group-item"><i class="icon-food"></i> Cocina</li>
			<li class="list-group-item"><i class="icon-doc-text-2"></i> Escritos</li>
			<li class="list-group-item"><i class="icon-coffee"></i> Diseño</li>
			<li class="list-group-item"><i class="icon-building"></i> Arquitectura</li>
			<li class="list-group-item"><i class="icon-code-3"></i> Codigo</li>
			</ul>
		</div>

<!--  -->

      </div>



<!--  -->

<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" >
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
	<center>







    </center><br>
</div>





</div>

<!--  -->




<!-- End Container -->

@include('sections.footer')

</div>
<script type="text/javascript" src="grid/Grid-A-Licious-master/jquery.grid-a-licious.js"></script>
<script type="text/javascript">
$('[data-toggle="popover"]').popover();
$("#example2").gridalicious({
  gutter: 6,
  width: 240
});
</script>

</body>
</html>
