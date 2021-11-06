

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
                    <h3 class="section-title">Modificar Estudiante </h3>
                    <div class="section-intro">Sea Responsable  </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="app-card app-card-settings shadow-sm p-4">
                
                <div class="app-card-body">


 

      
<?php

foreach ($infoestudiante->result() as $row)
  {
  
   
  
   echo form_open_multipart('estudiantes/modificarbd');
  ?>


 <input type="hidden" name="idestudiante" value="<?php echo $row->idestudiante; ?>">


                

                   <div class="mb-3">


                   <label class="form-label">Nombre</label>

                    <input type="text" class="form-control" name="nombre"                 required=""value="<?php echo $row->nombre; ?>" >
    
                  </div>



<div >
    <label class="text-muted" >Apellido Paterno</label>
    <input type="text" class="form-control" name="primerApellido"    required="" value="<?php echo $row->primerApellido; ?>"  >
    
  </div>
  <div >
    <label class="text-muted">Apellido Materno</label>
    <input type="text" class="form-control" name="segundoApellido"     required=""   value="<?php echo $row->segundoApellido; ?>" >
    
  </div>



  <div class="mb-3">
    <label class="text-muted">CI</label>
    <input type="text" class="form-control" name="ci"   required="" value="<?php echo $row->ci; ?>" >
      <p ><code><?php echo $mensaje;?></code></p> 
  </div>

   <div class="mb-3">
  
    <label class="text-muted">hombre</label>
    <input type="radio"  name="sexo"  checked  value="H">
    <label class="text-muted">Mujer</label>
    <input type="radio"  name="sexo"  value="M" >
    
    
  </div>



    <div class="mb-3">
    <label class="text-muted">curso</label>

      <select  class="form-control"  name="curso"   required="" value="<?php echo $row->curso; ?>">


                      <option>1 A</option>
                      <option>1 B</option>
                       <option>1 C</option>
                           <option>2 A</option>
                      <option>2 B</option>
                       <option>2 C</option>
                       
                      
                    </select>
    
  












                  


                
                  <button type="submit" class="btn  app-btn-primary">Modificar</button>









            <?php 
  echo form_close();
  }

  ?>
                </div><!--//app-card-body-->
                
            </div><!--//app-card-->
                  </div>
                </div><!--//row-->



                <hr class="my-4">
               
              
               
                


               












         
        </div><!--//container-fluid-->
      </div><!--//app-content-->
      
      <footer class="app-footer">
        <div class="container text-center py-3">
            
         
           
        </div>
      </footer><!--//app-footer-->
      
    </div><!--//app-wrapper-->    
  
  

