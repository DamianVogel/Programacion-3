<html>


<body>


                                                    <form method="post" name="fecha">
                                                        
                                                        Elija como desea mostrar la fecha:<Br> 
                                                        1-<Br> 
                                                        2-<Br>
                                                        3-<Br>
                                                        <input type="text" name="fname">
                                                        <input type="submit">




                                        <?php 
if(isset($_POST['fname']))
  {
    $dia = getdate(date('U'));
    echo var_dump($dia);
  switch ($_POST['fname']) {
                              case '1':    
                                          ?>
                                                      <Br> <input type="text" name="muestra1" value="<?php echo "Hoy es ".$dia['mday']." / ".$dia['mon']." / ".$dia['year']."y son las "; ?>" readonly>  
                                          <?php
                                              
                              break;                          
                              case'2':
                                          ?>
                                                      <Br> <input type="text" name="muestra2" value="Entro en el case 2" readonly> 
                                                  
                                          <?php  
                              break;
                              case '3':
                                          ?>
                                                      <Br> <input type="text" name="muestra3" value="Entro en el case 3" readonly>
                                          <?php
                              default:
                              break;
                             }  

    

  }                         
                                        ?>
                                          
                                                    </form>




</body>
</html>