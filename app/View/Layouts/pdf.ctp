<?php 
	$segundaPagina = "
	<html>
	    <head>
			<style>
				body{
					background-image: url('../webroot/img/certificado-fundo.png');
					background-repeat: no-repeat;
					background-size: 100%;
					position: absolute;
					left: 10px; top: 10px; right: 10px;  bottom: 10px;		
				}
				
			</style>
		</head>
    	<body>
    	</body>
	</html>
	";
	require_once APP . 'Vendor' . DS . 'dompdf-master' . DS . 'dompdf_config.inc.php';
	spl_autoload_register('DOMPDF_autoload');
	$dompdf = new DOMPDF();	
	$dompdf->set_paper("A4", "portrait");;
	$dompdf->load_html(utf8_decode($content_for_layout), Configure::read('App.encoding'));	
	$dompdf->render();
	$dompdf->stream("Certificado.pdf", array('Attachment'=>0));
?>