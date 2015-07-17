<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CamorannsCook</title>
	<link rel="stylesheet" type="text/css" href="bower_components\bootstrap\dist\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="fonts\Fontello\css\fontello.css">
	<link rel="stylesheet" href="css\awesome-bootstrap-checkbox.css" media="screen" title="no title" charset="utf-8">
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<!-- NOTE:  -->
	<script src="js/bootstrap-tagsinput.js" charset="utf-8"></script>
	<link rel="stylesheet" href="css/bootstrap-tagsinput.css" media="screen" title="no title" charset="utf-8">

	<!-- include summernote css/js-->


	<script src="js/bootstrap-wysiwyg.js" charset="utf-8"></script>

	<script src="js/jquery.nicescroll.js"></script>


</head>
<body ng-controller="MainCtrl">


@include('sections.header')
  <br>


<!-- Start Container -->
<div class="container-fluid cretion-panel">
<div class="col-md-12">


	<!--  -->

	<div class="col-md-3">

	<select class="form-control input-create" name="valor">
	<option>Música</option>
	<option>Cocina</option>
	<option>Escritos</option>
	<option>Diseño</option>
	<option>Arquitectura</option>
	<option>Codigo</option>
	</select>

	</select>
	</div>
	<!--  -->

	<div class="col-md-3">

		<select class="form-control input-create" name="valor">
			<option>Artista</option>
		<option>Artista</option>
		</select>


	</div>
	<div class="col-md-6">
		<div class="col-md-6">
		<button type="button" class="btn btn-default"><i class="icon-cogs"></i> Generar</button>
		</div>

		<span class="col-md-6">
			<h4 class="pull-right"><i class="icon-right-open-big"></i> Publicacion / </i><i class="icon-music-1"></i>Música / Artista  </h4>
		</span>
	</div>

	</div>

<!-- NOTE: INICIO IZQUIERDA -->
<div class="col-md-6">

	<!--  -->

	<div class="container-fluid">


	<hr>
	<div class="col-md-12">

		<div class="form-group col-md-6"><label class="col-sm-2 control-label">ID</label>
		<div class="col-sm-10"><input type="text" class="form-control"></div>
		</div>
		<div class="col-md-6 pull-right">
			<button type="button" class="btn btn-default btn-basic">
			  <span class="icon-upload-cloud-outline"></span>
			</button>

			<button type="button" class="btn btn-default btn-basic">
				<span class="icon-trash-3"></span>
			</button>

		</div>

	<div class="separador col-md-12"><hr></div>

		<div class="form-group col-md-12"><label class="col-sm-2 control-label">Título</label>
		<div class="col-sm-10"><input type="text" class="form-control neutro"></div>
		</div>
		<div class="separador"><hr></div>
		<div class="form-group col-md-12"><label class="col-sm-2 control-label">Reseña</label>
		<div class="col-sm-10"><textarea class="form-control neutro" rows="3"></textarea></div>
		</div>


	<div class="col-md-12">
		<label class="col-sm-2 control-label">Distribución</label>
	<span class="col-md-6">
		<div class="radio">
		<input class="neutro" type="radio" name="radio1" id="radio1" value="option1" checked="">
		<label for="radio1">
		Privado
		</label>
	</span>
	<span class="col-md-6">
		<input class="neutro" type="radio" name="radio1" id="radio2" value="option2">
		<label for="radio2">
		Publico
		</label>
	</span>
		</div>

	</div>
	<div class="col-md-12">
		<div class="form-group"><label class="col-sm-2 control-label">Tags</label>
	<input type="text" class="tags-input col-md-8 neutro" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" />
		</div>
	</div>

	<div class="separador col-md-12"><hr></div>




	</div>



	</div>


</div>

<!-- NOTE: FIN IZQUIERDA -->

<!-- NOTE: INICIO DERECHA -->
<div class="col-md-6">
	<hr>

<p class="f-500 c-black m-b-20">Basic Example</p>
<div class="html-editor"></div>

</div>
<!-- NOTE: FIN DERECHA -->
</div>

<br>

<!-- End Container -->

@include('sections.footer')

<script type="text/javascript">$(document).ready(function() {$("html").niceScroll();});</script>
<script type="text/javascript" src="grid/Grid-A-Licious-master/jquery.grid-a-licious.js"></script>
<script type="text/javascript">$('[data-toggle="popover"]').popover();$("#example2").gridalicious({  gutter: 6,  width: 240});</script>
<script type="text/javascript">
$('#editor').wysiwyg({
hotKeys: {
	'ctrl+b meta+b': 'bold',
	'ctrl+i meta+i': 'italic',
	'ctrl+u meta+u': 'underline',
	'ctrl+z meta+z': 'undo',
	'ctrl+y meta+y meta+shift+z': 'redo'
}
});
</script>

</body>
</html>
