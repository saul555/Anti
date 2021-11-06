


  <div class="content-wrapper">
 
 
    
   
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
                        <th class="cell" scope="col">Fecha desinfeccion</th>
                        
                         <th class="cell"scope="col">temperatura </th>
                         <th class="cell"scope="col">Codigo Persona</th>
                         <th class="cell"scope="col">Estado Aula</th>
                         

                          <th class="cell"scope="col">Aula </th>
                         
                         
                    
                         <th class="cell"scope="col">Modificar</th>
                         <th class="cell"scope="col">Eliminar</th>

                  </tr>
                  </thead>
                  <tbody>
                 


                  <?php
$indice=1;

foreach ($r->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->fechaDesinfeccion; ?></td>
    
       <td><?php echo $row->temperatura." °C"; ?></td>
       
       <td><?php echo $row->codigo; ?></td>
      <td><?php echo $row->estadoAula; ?></td>



      <?php  


foreach ($A->result() as $row2) 

{
  if($row2->idaulas==$row->idaulas){
    
  ?>
 
      <td><?php  
      
      echo $row2->nombre;
      
      
      ?></td>
     

       
     
      
     <?php  

}
}

?>
 

    
      
      

   
      <td>

 
        <?php 
         echo form_open_multipart('registroD/modificar');
         ?>
        <input type="hidden" name="idregistro" value="<?php echo $row->idregistro; ?>">
       
         <button type="submit " class="btn btn-success btn-xs">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>




      <td>
        <?php 
         echo form_open_multipart('registroD/Eliminarbd');
         ?>
        <input type="hidden" name="idregistro" value="<?php echo $row->idregistro; ?>">
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
                        <th class="cell" scope="col">Fecha desinfeccion</th>
                        
                         <th class="cell"scope="col">temperatura </th>
                         <th class="cell"scope="col">Codigo Persona</th>
                         <th class="cell"scope="col">Estado Aula</th>
                         

                          <th class="cell"scope="col">Aula </th>
                         
                          
                    
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
 