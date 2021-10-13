 

    <div class="content-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
      
     <div class="container-xl">


  
   <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
               
               
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        
                      
                    </ol>

                      <ol class="breadcrumb">
                        
                       
                        
                        <li class="breadcrumb-item active" aria-current="page">
                            
                          
                        </li>
                    </ol>
                
                </nav>
            </div>
        </div>

        
        


    </div>




<h2>Lista de Registro de Desinfección   </h2>


  <!-- Meta 
     <?php 
            echo form_open_multipart('registro/agregar');
                             ?>

           <button type="submit " class="btn btn-primary mb-3">Agregar Registro </button>
       <?php 
          echo form_close();

          ?>


-->









         
          
          <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">



            <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">registro</a>

  <!-- Meta 
            <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Inavilitados</a>
-->



        </nav>


 


        
        
        <div class="tab-content" id="orders-table-tab-content">


              <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
              <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">

                  <div class="table-responsive">










                      <table class="table app-table-hover mb-0 text-left">


                    <thead>
                      <tr>
                        
                         <th class="cell" scope="col">#</th>
                        <th class="cell" scope="col">Fecha desinfección</th>
                        
                         <th class="cell"scope="col">temperatura </th>
                         <th class="cell"scope="col">Código Persona</th>
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
    
       <td><?php echo $row->temperatura; ?></td>
       
       <td><?php echo $row->codigo; ?></td>
      <td><?php echo $row->estadoAula; ?></td>



      <td><?php  
      
      
      
      
      foreach ($A->result() as $row1) 

{
                


    if($row->idaulas== $row1->idaulas){

    echo $row1->nombre;
    }else{

     
    }

    
  


}
      
      
      
echo "1A";
      
      
      
      ?></td>
     

       
     
      
     
 

    
      
      

   
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















                  </table>




                    </div><!--//table-responsive-->
                   
                </div><!--//app-card-body-->    
            </div><!--//app-card-->












            <nav class="app-pagination">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav><!--//app-pagination-->


            
              </div><!--//tab-pane-->









              
              <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
              <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                  <div class="table-responsive">

                    
                      <table class="table mb-0 text-left">





                                     <thead>
                      <tr>
                        
                        <th class="cell" scope="col">#</th>
                        <th class="cell" scope="col">Inicio</th>
                        
                         <th class="cell"scope="col">Fin </th>
                         <th class="cell"scope="col">Obserbasiones</th>
                          
                         
                         <th class="cell"scope="col">estado</th>
                         
                      
                       
                         
                         <th class="cell"scope="col">Restaurar</th>
                      </tr>
                    </thead>

                    <tbody>



<?php
$indice=1;

foreach ($e->result() as $row) 

{
  
  
  ?>
    <tr>
      
   <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->inicio; ?></td>
    
       <td><?php echo $row->fin; ?></td>
      <td><?php echo $row->observaciones; ?></td>
    

      
      <td><?php echo $row->estado; ?></td>

    
      

   
     



      <td>
        <?php 
         echo form_open_multipart('estudiantes/Restaurar');
         ?>
        <input type="hidden" name="idregistro" value="<?php echo $row->idregistro; ?>">
        <button type="submit " class="btn btn-danger btn-xs">Restaurar</button>
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









    
                   

                  </table>
                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->    
            </div><!--//app-card-->
              </div><!--//tab-pane-->
              
              <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
              <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                  <div class="table-responsive">



                      <table class="table mb-0 text-left">




                                     <thead>
                      <tr>
                        
                       
                      </tr>
                    </thead>

                    <tbody>



<?php
$indice=1;


foreach ($r->result() as $row) 

{
  
  
  ?>
    <tr>
      
     

    
      

   
      <td>
        <?php 
         echo form_open_multipart('estudiates/modificar');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
       
         <button type="submit " class="btn btn-success btn-xs">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>



      <td>
        <?php 
         echo form_open_multipart('estudiates/Eliminarbd');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
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
                    






                  </table>


                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->    
            </div><!--//app-card-->
              </div><!--//tab-pane-->
              <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
              <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                  <div class="table-responsive">





                      <table class="table mb-0 text-left">




             <thead>
                      <tr>
                        
                         <th class="cell" scope="col">#</th>
                        <th class="cell" scope="col">Nombre</th>
                        <th class="cell"scope="col">Primer Apelllido</th>
                         <th  class="cell"scope="col">Segundo Apellido</th>
                         <th class="cell"scope="col">CI</th>
                         <th class="cell"scope="col">Sexo</th>
                        
                          <th class="cell"scope="col">Estado</th>
                          
                         
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
      <td><?php echo $row->nombre; ?></td>
      <td><?php echo $row->primerApellido; ?></td>
      <td><?php echo $row->segundoApellido; ?></td>
       <td><?php echo $row->ci; ?></td>
      <td><?php echo $row->sexo; ?></td>
     

       <td><?php echo $row->estado; ?></td>
      

    
      

   
      



      <td>
        <?php 
         echo form_open_multipart('estudiates/Restaurar');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
        <button type="submit " class="btn btn-danger btn-xs">Restaurar</button>
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







                    
                  </table>




                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->    
            </div><!--//app-card-->
              </div><!--//tab-pane-->














           

           </div><!--//tab-content-->        
        
          
        </div><!--//container-fluid-->


      </div><!--//app-content-->

      
   
      
    </div><!--//app-wrapper-->        