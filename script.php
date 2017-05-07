<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
<!-- <script src="js/main.js"></script> -->
<script type="text/javascript" charset="utf-8" async defer>
	var boton = document.querySelector('.botonCopiar');
 
	boton.addEventListener('click', function(event) {
	  // seleccionar el texto de la dirección de email
	  var vision = document.querySelector('.vision');
	  var range = document.createRange();
	  range.selectNode(vision);
	  window.getSelection().addRange(range);
	 
	  try {
	    // intentar copiar el contenido seleccionado
	    var resultado = document.execCommand('copy');
	    console.log(resultado ? 'texto copiado' : 'error');
	    alert('Vision copiada');
	  } catch(err) {
	    console.log('ERROR al intentar copiar el texto');
	  }
	 
	  // eliminar el texto seleccionado
	  window.getSelection().removeAllRanges();
	  // cuando los navegadores lo soporten, habría
	  // que utilizar: removeRange(range)
	});
</script>
