<html>
        <div class="CajaInicio animated bouncheInRight "> 
<head>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="stylesheet" type="text/css" href="animacion.css">

</head>


<body>


                                                    <form method="post" name="fecha">
                                                        
                                                        Elija como desea mostrar la fecha segun las siguientes opciones:<Br> 
                                                        1-Una frase que indique el dia/mes/año y la hora/minutos/segundos. <Br> 
                                                        2-Solamente el dia / mes / año. <Br> 
                                                        3-Solamente la hora. <Br> 
                                                        
                                                        <input type="text" name="fname">
                                                        <input type="submit">




                                        <?php 
if(isset($_POST['fname']))
  {
    $dia = getdate(date('U'));
    
    //echo var_dump($dia);
  switch ($_POST['fname']) {
                              case '1':    
                                           
                                          ?>
                                                      <Br> <input type="text" name="muestra1" value="<?php echo "Hoy es ".$dia['mday']."/".$dia['mon']."/".$dia['year']." y son las ".$dia['hours'].":".$dia['minutes'].":".$dia['seconds']; ?>" readonly>  
                                          <?php
                                              
                              break;                          
                              case'2':
                                          ?>
                                                      <Br> <input type="text" name="muestra2" value="<?php echo "Today is ".$dia['weekday']." ".$dia['mday'].", ".$dia['month']." of the ".$dia['year']; ?>" readonly> 
                                                  
                                          <?php  
                              break;
                              case '3':
                                          ?>
                                                      <Br> <input type="text" name="muestra1" value="<?php echo "Son las ".$dia['hours'].":".$dia['minutes'].":".$dia['seconds']; ?>" readonly>
                                          <?php
                              default:
                              break;
                             }  

    

  }                         
                                        ?>
                                          
                                                    </form>




</body>
</html>