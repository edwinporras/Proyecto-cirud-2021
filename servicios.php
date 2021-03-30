
<?php 
    include_once "php/header.php";
    if (!isset($_COOKIE['accept-cookies'])){
       
    
      ?> 
    <!-- <div class="cookie-banner">
      <div class="container-cookie">
        <p>Nosotros utilizamos cookies en este sitio. para utilizar este sitio web, nosotros asumimos su consentimiento <a href="/cookies" target="_blank">Leer mas...</a></p>
        <a href="?accept-cookies" class="button">Ok, Continuar</a>
      </div>
    </div> -->
    <?php 
      }
    ?>    
<head>
    <link rel="stylesheet" href="css/template-style.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/responsee.css">
</head>
    
    <div class="tarjetas_servicios">

      <?php 
        $host="localhost";
        $user="root";
        $pass="";
        $db="cirud_formulario";
        $con=mysqli_connect($host,$user,$pass,$db);
        $consulta="SELECT * FROM list_servicios;";
        $resultado=mysqli_query($con,$consulta);     
        
        while ($row=mysqli_fetch_assoc($resultado)) {
        
      ?>
          <!-- colocar select de id para cambiar la ruta -->
      <div id="<?php echo $row['nombre']; ?>_ver" class="s-12 m-6 l-4">
          <div id="info_ver" class="s-12 m-6 l-4">

          <div class="tarjeta_main s-12 m-6 l-4">
            <h4 class="nombre_tittle"><?php echo $row['titulo']; ?></h4>
            <p class="descrip_parr">
              <?php echo $row['descripcion']; ?>
            </p>
            
        </div>

      </div>
    </div>

    
    <!-- <div class="tarjetas_servicios"> -->

      
    <!-- </div>  -->
        
    <?php 
        }
    ?>
    </div> 
    <section class="ftco-section" >
    	<div class="container">
    		<div class=" row">
          
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                 
          </div>
          
        </div>
    	</div>
    </section>

  <?php 
    include_once "php/footer.php";
  ?>