
 <?php 
 switch ($msg) {
   case '1':
     $mensaje="CI No se permite Repetido";
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




    
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">          
         
         
                <div class="row g-4 settings-section">
                  <div class="col-12 col-md-2">
                    <h3 class="section-title">Agregar Estudiante</h3>
                    <div class="section-intro">Sea Responsable  </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="app-card app-card-settings shadow-sm p-4">
                
                <div class="app-card-body">




       
<?php


  
   echo form_open_multipart('estudiantes/agregarbd');
  ?>





                 

                   <div class="mb-3">
                   <label class="form-label">Nombre</label>

                    <input type="text" class="form-control" name="nombre"                 required="" >
    
                  </div>



<div >
    <label class="text-muted" >Apellido Paterno</label>
    <input type="text" class="form-control" name="primerApellido"    required="">
      
  </div>
  <div >
    <label class="text-muted">Apellido Materno</label>
    <input type="text" class="form-control" name="segundoApellido"     required="">
    
  </div>

 

  <div class="mb-3">
    <label class="text-muted">CI</label>
    <input type="text" class="form-control" name="ci"   required="" >
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

      <select  class="form-control"  name="curso"   required="">


                      <option>1 A</option>
                      <option>1 B</option>
                       <option>1 C</option>
                    <option>2 A</option>
                      <option>2 B</option>
                       <option>2 C</option>
                        <option>3 A</option>
                      <option>3 B</option>
                       <option>3 C</option>
                        
                      
                    </select>

    
  
 </div><!--//app-card-body-->

 <div class="mb-3">
    

      

                     

           

    
  
 </div>
 












                  


                
                  <button type="submit" class="btn  app-btn-primary">Agregar</button>









            <?php 
  echo form_close();
  

  ?>
               
                </div>
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
  
  

