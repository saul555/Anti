
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
                    <h3 class="section-title">Categorizacion</h3>
                    <div class="section-intro">Sea Responsable  </div>
                    <br>
                     <div class="section-intro">Puede colocar una nueva categoria al sistema </div>

       
<?php

 
  
   echo form_open_multipart('material/agregarCategoria');
  ?>

   <div class="mb-3">
                  
                    <p ><code><?php echo $mensaje;?></code></p> 
      
                    <input type="text" class="form-control" name="categoria"                 required="" >
    
                  </div>
                  <button type="submit " class="btn btn-primary mb-3">Agregar Categoria</button>
                  

        <?php 
  echo form_close();
  

  ?>
        


            </div><!--//app-card-->
                  </div>
                </div><!--//row-->



                <hr class="my-4">
               
              
               
                


                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th class="cell" scope="col">#</th>
                        <th class="cell" scope="col">Categorias</th>
                        
                         
                         <th class="cell"scope="col">Modificar</th>
                         <th class="cell"scope="col">Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                 

<?php
$indice=1;

foreach ($cate->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->categoria; ?></td>
      

      
     
     

    
      

   
      <td>
        <?php 
         echo form_open_multipart('material/modificarCate');
         ?>
        <input type="hidden" name="idcategorizacion" value="<?php echo $row->idcategorizacion; ?>">
       
         <button type="submit " class="btn btn-success btn-xs">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>



      <td>
        <?php 
         echo form_open_multipart('material/EliminarbdCate');
         ?>
        <input type="hidden" name="idcategorizacion" value="<?php echo $row->idcategorizacion; ?>">
        <button type="submit " class="btn btn-danger btn-xs">Eliminar</button>
        <?php 
          echo form_close();

         ?>
      </td>
    </tr>
  <?php

  $indice++;
}

?>
              
                
                 
                  </tfoot>
                </table>
              </div>


  











         
        </div><!--//container-fluid-->
      </div><!--//app-content-->
      
      <footer class="app-footer">
        <div class="container text-center py-3">
            
         
           
        </div>
      </footer><!--//app-footer-->
      
    </div><!--//app-wrapper-->    
  
  

