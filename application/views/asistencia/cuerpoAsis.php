 <style type="text/css">
 
 .vertical{

  /* -webkit-writing-mode:vertical-lr;*/
  writing-mode: vertical-rl;
 }
 
 </style>


  <div class="content-wrapper">
 
 
    
   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
           
          

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Asistencia</h3>
              </div>
            
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th class="cell" scope="col">#</th>
                        <th class="cell" scope="col">Fecha Asistencia</th>


                      
                        <th class="cell"scope="col">Nombre </th>
                        <th class="cell"scope="col">curso </th>
                         <th class="cell"scope="col">temperatura </th>
                         <th class="cell"scope="col">Codigo Persona</th>
                            
                         

                          <th class="cell"scope="col">Observacion </th>
                         
                         
                    
                        
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
      <td><?php echo $row->fechaRegistro; ?></td>




      
      <?php  

 
foreach ($A->result() as $row2) 

{
  if($row->codigo==$row2->codigo  ){
    
  ?>

      <td><?php  
      
      echo $row2->nombre 
      
      ;
      
      ?></td>


<?php   
foreach ($t->result() as $row3) 
{
  if($row2->idestudiante==$row3->idestudiante  ){
    
  ?>
      <td><?php        
      echo $row3->curso;      
      ?></td>
      

       
      
      
     <?php  

}
}


?>
      

       
     
      
     <?php  

}
}


?>
 



     
       <td><?php echo $row->temperaturra." °C"; ?></td>
       
       <td><?php echo $row->codigo; ?></td>
      <td><?php echo $row->observaciones; ?></td>

     







      <td>
        <?php 
         echo form_open_multipart('Asistecia/Eliminarbd');
         ?>
        <input type="hidden" name="idasistencia" value="<?php echo $row->idasistencia; ?>">
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
                         <th class="cell" scope="col">Fecha Asistencia</th>
                        <th class="cell"scope="col">Nombre </th>
                        <th class="cell"scope="col">curso </th>
                         <th class="cell"scope="col">temperatura </th>
                         <th class="cell"scope="col">Codigo Persona</th>
                            
                         

                          <th class="cell"scope="col">Observacion </th>
                         
                         
                        
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

