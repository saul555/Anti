
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




    
    <div class="content-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">          
         
         
                <div class="row g-4 settings-section">
                  <div class="col-12 col-md-2">
                    <h3 class="section-title">Cambiar Limite Covid</h3>
                    <div class="section-intro">....  </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="app-card app-card-settings shadow-sm p-4">
                
                <div class="app-card-body">





       
<?php


  
   echo form_open_multipart('aulas/modLim');
  ?>





                 

                 
<?php


foreach ($c->result() as $row) 

{
?>                 
                                   
                                 











  <div class="mb-3">
    <label class="text-muted">Limite Covid</label>
    <input type="number" class="form-control" name="limiteCovid" min="1" max="99"  value="<?php echo $row->limteCovid;?>"  >

  </div>

   
  <?php
}
?>


  









                  


                
<button type="submit " class="btn btn-primary mb-3">Cambiar</button>









            <?php 
  echo form_close();
  

  ?>














                <!--//app-card-body-->
                
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
  


