




    
    <div class="content-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">          
         
         
                <div class="row g-4 settings-section">
                  <div class="col-12 col-md-2">
                    <h3 class="section-title">Modificar Registro </h3>
                    <div class="section-intro">Sea Responsable  </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="app-card app-card-settings shadow-sm p-4">
                
                <div class="app-card-body">


      
<?php

foreach ($info->result() as $row)
  {
  
   
  
   echo form_open_multipart('registroD/modificarbd');
  ?>


 <input type="hidden" name="idregistro" value="<?php echo $row->idregistro; ?>">


                

                   <div class="mb-3">
                    <h5> fecha Desinfeccion</h5>
                        
                   <label class="form-label"><?php echo $row->fechaDesinfeccion; ?></label>

                   
    
                  </div>
 

            <div class="mb-3">
                        <h5> temperatura</h5>
                         
                   <label class="form-label"><?php echo $row->temperatura; ?></label>

                   
    
                  </div>
                  <div class="mb-3">
                        <h5> codigo</h5>
                         
                   <label class="form-label"><?php echo $row->codigo; ?></label>

                   
    
                  </div>




         
                  <div class="mb-3">


                   <label class="form-label">Estado de Aula</label>

                    <input type="text" class="form-control" name="estadoAula"                 required=""value="<?php echo $row->estadoAula; ?>" >
    
                  </div>






 




    

   
  












                  


                
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
  
  

