

 <?php 
 switch ($msg) {
   case '1':
     $mensaje="Usuario no valido elija otro";
     break;
     case '2':
     $mensaje="Acceso no valido";
     break;
     case '3':
     $mensaje="Gracias por usar el sistema";
     break;
   
   default:
     $mensaje=$msg;
     break;
 }



 ?>




    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
                  <div class="col-12 col-md-2">
                    <h3 class="section-title">Asignar Tarjeta </h3>
               
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="app-card app-card-settings shadow-sm p-4">
                
                <div class="app-card-body">


 







<?php

foreach ($infoestudiante->result() as $row4)
  {
  
   
  
   echo form_open_multipart('estudiantes/modificarbd');
  ?>


 <input type="hidden" name="idestudiante" value="<?php echo $row4->idestudiante; ?>">


                


                   <div class="mb-3">


                   <label class="form-label">Nombrhe</label>

                    <input type="hidden" class="form-control" name="nombre"                 required=""value="<?php echo $row4->nombre." ".$row4->primerApellido." ".$row4->segundoApellido; ?>" >
    
                    <h4><?php echo $row4->nombre." ".$row4->primerApellido." ".$row4->segundoApellido; ?></h4>
                  </div>







 




 
  
    


                
     
                  <button type="submit " class="btn btn-primary mb-3">Agregar</button>



               



            <?php 
  echo form_close();
  

  ?>



                </div><!--//app-card-body-->
                
            </div><!--//app-card-->
                  </div>
                </div><!--//row-->



                <hr class="my-4">
               
              
               
                


               




               

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
           
          

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Refistro Desinfecciòn</h3>
              </div>
            
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th class="cell" scope="col">#</th>
                        <th class="cell" scope="col">codigo</th>
                        
                         
                         
                         
                         
                    
                         <th class="cell"scope="col">Modificar</th>
                       

                  </tr>
                  </thead>
                  <tbody>
                 


                  <?php  
$indice=1;

foreach ($t->result() as $row) 

{
  $id1=$row->idestudiante;
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->codigo; ?></td>





<?php  //echo $row2->nombre." ".$row2->primerApellido." ".$row2->segundoApellido;


?>


<?php  

?>

<?php  

?>
<?php  

?>
<?php  

?>

 
   </td>    
   
      <td>
        <?php 
         echo form_open_multipart('estudiantes/Eliminarbdtarjeta');
         ?>
        <input type="hidden" name="nombre" value="<?php echo $row4->nombre." ".$row4->primerApellido." ".$row4->segundoApellido;?>">
        <input type="hidden" name="idestudiante" value="<?php echo $row4->idestudiante;  ?>">
        <input type="hidden" name="idtarjeta" value="<?php echo $row->idtarjeta;  ?>">
         <button type="submit " class="btn btn-success btn-xs">Asignar Tarjeta</button>
        <?php 
          echo form_close();

         ?>
      </td>




  

    </tr>
  <?php

  $indice++;
}

?>


                  </tbody>
                  <tfoot>
                  <tr>
                        
                         <th class="cell" scope="col">#</th>
                         <th class="cell" scope="col">codigo</th>
                        
                
                        
                        
                        
                   
                        <th class="cell"scope="col">Modificar</th>
                    
                      </tr>
                  </tfoot>
                </table>
              </div>
            
            </div>
          
          </div>
        
        </div>
      
      </div>
   
    </section>




    <?php  
  }
?>







         
        </div><!--//container-fluid-->
      </div><!--//app-content-->
      
     
      
    </div><!--//app-wrapper-->    
  
  
