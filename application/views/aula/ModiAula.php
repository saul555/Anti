

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
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">          
         
         
                <div class="row g-4 settings-section">
                  <div class="col-12 col-md-2">
                    <h3 class="section-title">Modificar Aulas  </h3>
                    <div class="section-intro">Sea Responsable  </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="app-card app-card-settings shadow-sm p-4">
                
                <div class="app-card-body">


 

      
<?php

foreach ($infoAula->result() as $row)
  {
  
   
  
   echo form_open_multipart('aulas/modificarbd');
  ?>


 <input type="hidden" name="idaulas" value="<?php echo $row->idaulas; ?>">


 <div>
    <label class="text-muted" >Cantidad</label>
    <input type="text" class="form-control" name="capacidad"  required="" value="<?php echo $row->capacidad; ?>"  >
    
  </div>      

 <div class="mb-3">


<label class="form-label">Nombre</label>

   <select  class="form-control"  name="nombre"   required="">
<?php


foreach ($c->result() as $row) 

{
?>                 
                  <option><?php echo $row->nombre;?>                         
                  </option>                
<?php
}
?>

   </select>


</div>  





  



  <div class="mb-3">
  <?php


foreach ($l->result() as $row) 

{
?>                 

<div >
    
<input type="hidden" class="form-control" name="limiteCovid" min="1" max="99"  value="<?php echo $row->limteCovid;?>"  >
    
  </div>

<?php
}
?>
  </div>

   



    












                  


                
  <button type="submit " class="btn btn-primary mb-3">Modificar  </button>









            <?php 
  echo form_close();
  }

  ?>
               
                
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
  
  

