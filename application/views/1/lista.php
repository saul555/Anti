 




























   







        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">


             






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




<h2>Lista de Usuarios</h2>















         
          
          <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">



           

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
                        <th class="cell" scope="col">Nombre</th>
                        <th class="cell"scope="col">Primer Apelllido</th>
                         <th  class="cell"scope="col">Segundo Apellido</th>
                         <th class="cell"scope="col">CI</th>
                         <th class="cell"scope="col">Sexo</th>
                         <th class="cell"scope="col">Rol</th>
                      
                         <th class="cell"scope="col">Nombre Usuario</th>
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
      <td><?php echo $row->nombre; ?></td>
      <td><?php echo $row->primerApellido; ?></td>
      <td><?php echo $row->segundoApellido; ?></td>
       <td><?php echo $row->ci; ?></td>
      <td><?php echo $row->sexo; ?></td>
      <td><?php echo $row->rol; ?></td>

       <td><?php echo $row->login; ?></td>

    
      

   
      <td>
        <?php 
      $va=$this->session->userdata('rol');


      if($va==$va)
      {




      




         echo form_open_multipart('usuarios/modificar');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
       
         <button type="submit " class="btn btn-success btn-xs">Modificar</button>
        <?php 
          echo form_close();
        } 
         ?>
      </td>



      <td>
        <?php 
         echo form_open_multipart('usuarios/Eliminarbd');
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
                        <th class="cell" scope="col">Nombre</th>
                        <th class="cell"scope="col">Primer Apelllido</th>
                         <th  class="cell"scope="col">Segundo Apellido</th>
                         <th class="cell"scope="col">CI</th>
                         <th class="cell"scope="col">Sexo</th>
                         <th class="cell"scope="col">Rol</th>
                         <th class="cell"scope="col">Modificar</th>
                         <th class="cell"scope="col">Eliminar</th>
                      </tr>
                    </thead>

                    <tbody>



<?php
$indice=1;

foreach ($p->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombre; ?></td>
      <td><?php echo $row->primerApellido; ?></td>
      <td><?php echo $row->segundoApellido; ?></td>
       <td><?php echo $row->ci; ?></td>
      <td><?php echo $row->sexo; ?></td>
      <td><?php echo $row->rol; ?></td>

    
      

   
      <td>
        <?php 
         echo form_open_multipart('usuarios/modificar');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
       
         <button type="submit " class="btn btn-success btn-xs">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>



      <td>
        <?php 
         echo form_open_multipart('usuarios/Eliminarbd');
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
              
              <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
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
                         <th class="cell"scope="col">Rol</th>
                         <th class="cell"scope="col">Nombre Usuario</th>
                         <th class="cell"scope="col">Modificar</th>
                         <th class="cell"scope="col">Eliminar</th>
                      </tr>
                    </thead>

                    <tbody>



<?php
$indice=1;


foreach ($a->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombre; ?></td>
      <td><?php echo $row->primerApellido; ?></td>
      <td><?php echo $row->segundoApellido; ?></td>
       <td><?php echo $row->ci; ?></td>
      <td><?php echo $row->sexo; ?></td>
      <td><?php echo $row->rol; ?></td>
       <td><?php echo $row->login; ?></td>

    
      

   
      <td>
        <?php 
         echo form_open_multipart('usuarios/modificar');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
       
         <button type="submit " class="btn btn-success btn-xs">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>



      <td>
        <?php 
         echo form_open_multipart('usuarios/Eliminarbd');
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
                         <th class="cell"scope="col">Rol</th>
                          <th class="cell"scope="col">Estado</th>
                          <th class="cell"scope="col">Nombre Usuario</th>
                         
                         <th class="cell"scope="col">Eliminar</th>
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
      <td><?php echo $row->nombre; ?></td>
      <td><?php echo $row->primerApellido; ?></td>
      <td><?php echo $row->segundoApellido; ?></td>
       <td><?php echo $row->ci; ?></td>
      <td><?php echo $row->sexo; ?></td>
      <td><?php echo $row->rol; ?></td>

       <td><?php echo $row->estado; ?></td>
       <td><?php echo $row->login; ?></td>

    
      

   
      



      <td>
        <?php 
         echo form_open_multipart('usuarios/Restaurar');
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