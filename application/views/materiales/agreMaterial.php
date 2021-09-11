
 <?php 
 switch ($msg) {
   case '1':
     $mensaje="categoria Repetida";
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
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">          
         
         
                <div class="row g-4 settings-section">
                  <div class="col-12 col-md-5">
                    <h3 class="section-title">Agregar Material</h3>
                    <div class="section-intro">Sea Responsable  </div>
                    <br>
                     <div class="section-intro">Puede colocar una nueva categoria al sistema </div>

       

        


                  </div>
                  <div class="col-12 col-md-6">
                    <div class="app-card app-card-settings shadow-sm p-4">
                
                <div class="app-card-body">




       
<?php


  
   echo form_open_multipart('material/agregarbd');
  ?>


<div class="mb-3">


    <label class="form-label">catategorizacion</label>

       <select  class="form-control"  name="categoriaNombre"   required="">
<?php


foreach ($cate->result() as $row) 

{
  
  
  ?>

                     
                      <option><?php echo $row->categoria;?>     
                    
                           
                      </option>

                    
 <?php

  
}

?>


       </select>
    
  
 </div>


                 

                   <div class="mb-3">
                  
                    
                   <label class="form-label">Material</label>
                    <input type="text" class="form-control" name="nombre"                 required="" >
    
                  </div>
                   <div class="mb-3">
    <label class="form-label">cantidad</label>
    <input type="number" class="form-control" name="cantidad"   required="" >
      

  </div>

<div class="mb-3">
    <label  class="form-label">Unidad de medida</label>

      <select  class="form-control"  name="unidadMedida"   required="">


                      <option>unidades </option>
                      <option>litros </option>
                       <option>kilos </option>
                   
                        
                      
                    </select>



    
  
 </div>


  



 




    



 

 <div class="mb-3">
    

      

                     

           

    
  
 </div>
 












                  


                
 <button type="submit " class="btn btn-primary mb-3">Agregar</button>








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
  
  

