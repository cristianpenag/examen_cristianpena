<?php include('header.php');?>

<section id="page">

<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Aranceles y duración de las carreras de diseño nacionales</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/arancel.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>
                        <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
                      		<thead>
                      			<tr>
                      				<th>Carrera</th>
                      				<th>Institución</th>
                              <th>Duración formal</th>

                      				<th>Arancel anual</th>
                      				<th>Arancel total formal</th>

                      			</tr>
                      		</thead>
                      		<tbody>

                      			<?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                  			<tr>
                      				<td><?php echo($csv[$a]["carrera"])?></td>
                      				<td><?php echo($csv[$a]["escuela"])?></td>
                              <td><?php echo($csv[$a]["duracion_formal"])?></td>
                      				
                      				<td>$<?php echo($csv[$a]["arancel"]);?></td>
                      				<td>$<?php echo(($csv[$a]["duracion_formal"]*$csv[$a]["arancel"])/2);?></td>

                      			</tr>

                      			<?php };?>

                      		</tbody>
                      	</table>

                        <p><sub>Datos recopilados de distintas fuentes como MINEDUC <a href="https://www.mineduc.cl/"><i class="fa fa-external-link" aria-hidden="true"></i>
                  </a> MiFuturo <a href="https://www.mifuturo.cl/"><i class="fa fa-external-link" aria-hidden="true"></i>
            </a>y estadísticas de cada plantel educacional.</sub></p>
  </div>
</div>
</div>

</section>

<?php include('footer.php');?>
