<?php include('header.php');?>

<section id="page">

<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Ubicación de las escuelas de diseño en chile</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/contacta.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>

                        <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
                          <thead>
                            <tr>
                              <th>Carrera</th>
                              <th>Escuela</th>
                              <th>Dirección</th>
                              <th>Mapa</th>
                              <th>Website</th>


                            </tr>
                          </thead>
                          <tbody>

                            <?php for($a = 0; $a < $total = count($csv); $a++){?>

                            <tr>
                              <td><?php echo($csv[$a]["carrera"])?></td>
                              <td><?php echo($csv[$a]["escuela"])?></td>
                              <td><?php echo($csv[$a]["direccion"]);?> </td>
                              <td><a href="<?php echo($csv[$a]["maps"])?>" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a></td>
                              <td><a href="<?php echo($csv[$a]["pagina_web"])?>" target="_blank"><i class="fa fa-external-link-square" aria-hidden="true"></i>
</a></td>
                            
                            </tr>

                            <?php };?>

                          </tbody>
                        </table>


  </div>
</div>
</div>
</section>

<?php include('footer.php');?>
