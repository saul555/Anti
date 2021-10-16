


  <div class="content-wrapper">
 
 
    
               

  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <div class="card-header">
                <h3>Lista de Tarjeta</h3>
              </div>
            
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th class="cell" scope="col">#</th>
                        <th class="cell" scope="col">codigo</th>
                        
                         <th class="cell"scope="col">Tipo </th>
                         
                         
                         
                         <th class="cell"scope="col">Asignar</th>
                    
                         <th class="cell"scope="col">Modificar</th>
                         <th class="cell"scope="col">Eliminar</th>

                  </tr>
                  </thead>
                  <tbody>                


                  <?php  
$indice=1;

foreach ($t->result() as $row) 

{
   
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->codigo; ?></td>
    
       <td><?php echo $row->nombre; ?></td>
       
     



       <?php 

       if($row->nombre=="sin Asignar"){
       

        
       ?>


             

              <td>
        <?php 
         echo form_open_multipart('registroD/modificar');
         ?>
        <input type="hidden" name="idtarjeta" value="<?php echo $row->idtarjeta; ?>">
       
         <button type="submit " class="btn btn-success btn-xs">Asignar</button>
        <?php 
          echo form_close();

         ?>
      </td>


       <?php 
       }
       else{    
       ?>

<td>   </td>


       <?php 

       }
         ?>
      
      

      

      <?php 
      
       
         ?>



      <td>
        <?php 
         echo form_open_multipart('registroD/modificar');
         ?>
        <input type="hidden" name="idtarjeta" value="<?php echo $row->idtarjeta; ?>">
       
         <button type="submit " class="btn btn-success btn-xs">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>
 






      <td>
        <?php 
         echo form_open_multipart('registroD/Eliminarbd');
         ?>
        <input type="hidden" name="idtarjeta" value="<?php echo $row->idtarjeta; ?>">
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


                  </tbody>
                  <tfoot>
                  <tr>
                        
                         <th class="cell" scope="col">#</th>
                         <th class="cell" scope="col">codigo</th>
                        
                        <th class="cell"scope="col">nombre </th>
                        
                        
                        
                   
                        <th class="cell"scope="col">Modificar</th>
                        <th class="cell"scope="col">Eliminar</th>
                      </tr>
                  </tfoot>
                </table>
              </div>
            
            </div>
          
          </div>
        
        </div>
      
      </div>
   
    </section>


