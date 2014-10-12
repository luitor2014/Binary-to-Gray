<?php 
if(isset($_REQUEST['boton'])){
  $boton = $_REQUEST['boton'];
  switch ($boton) {

      case 'mostrar':
        # code...
       
       $directorio = "../doc/FLUJO DE CAJA/";
      
       // ALGORITMO PARA EXTRAER ARCHIVOS DE LA CARPETA ORDENADO POR FECHA

      if ($gestor = opendir($directorio))
      {
          # ponemos los valores en un array para poder ordenarlos
          $ars=array();
          $base = array("a1.", "a2.", "a3.", "a4.", "a5.", "a6.", "a7.", "a8.", "a9.");
          $reemplazos = array("a01.", "a02.", "a03.", "a04.", "a05.", "a06.", "a07.", "a08.", "a09.");
          while (false !== ($arch = readdir($gestor)))
          {
              if ($arch != "." && $arch != "..")
              {
                  // regresamos los nombres a su normalidad
                  $arch = str_replace($base, $reemplazos, $arch);
                  
                  $ars[]=$arch;


              }
          }		
      }
        // ordenamos por nombres
          sort($ars);
          $n_ars = count($ars);
          echo $n_ars."|.:;";
             for($i=0; $i<$n_ars; $i++){
                  $ars = str_replace($reemplazos, $base, $ars);
                  ?>
                  <div class="item">
                    <img src="doc/FLUJO DE CAJA/<?php echo $ars[$i]; ?>" alt="Second slide">
                    <!-- <div class="container">
                      <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div> -->
                  </div>
                  <?php
          }
          ?>
          <div class="item">
                    <img src="doc/fin_de_la_presentacion.jpg" alt="Second slide">
                    <!-- <div class="container">
                      <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div> -->
                  </div>
          <div class="item">
                    <img src="doc/fin_de_la_presentacion.jpg" alt="Second slide">
                    <!-- <div class="container">
                      <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div> -->
                  </div>
          <?php
          
      break;
  }
}
?>
