<?php include('header.php');?>

<section id="page">

<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Acreditaciones y sus respectivas duraciones</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/acredita.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>



    <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
    		<thead>
    			<tr>
    				<th>Carrera</th>
            <th>Institución</th>
    				<th>Desde (Año)</th>
    				<th>Hasta (Año)</th>
    				<th>Documento</th>

    			</tr>
    		</thead>
    		<tbody>

    			<?php for($a = 0; $a < $total = count($csv); $a++){?>

    			<tr>
    				<td><?php echo($csv[$a]["carrera"])?></td>
    				<td><?php echo($csv[$a]["institucion"])?></td>
            <td><?php echo($csv[$a]["acreditada_desde"])?></td>
    				<td><?php echo($csv[$a]["acreditada_hasta"])?></td>
    					<td><a href="<?php echo($csv[$a]["Enlace"])?>" target="_blank"><i class="fa fa-file-text" aria-hidden="true"></i></a></td>

    			</tr>

    			<?php };?>

    		</tbody>
    	</table>

      <p><sub>Datos obtenidos desde la Comisión Nacional de Acreditación  <a href="https://www.cnachile.cl/"><i class="fa fa-external-link" aria-hidden="true"></i>
</a></sub></p>
  </div>

</div>
</div>
</section>

<?php include('footer.php');?>
