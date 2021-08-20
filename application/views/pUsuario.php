  <div class="container">
<div class="container">
  <div class="row">
    <div class="col-md-12">

  <?php 
         echo form_open_multipart('usuarios/agregar');
         ?>
        
        <button type="submit " class="btn btn-success btn-xs">AgregarUsuario</button>
        <?php 
          echo form_close();

         ?>

         <br>




               <?php 
         echo form_open_multipart('usuarios/logout');
         ?>
        
        <button   class="btn btn-danger btn-xs"  type="submit " >Salir</button>
        <?php 
          echo form_close();

         ?>



           <div class="col-sm-6">
            
              
              <h2 >
                 <?php echo "Bienvenido : ".$this->session->userdata('login'); ?> 
               </h2>

                 <br>

                 <h3>
                 <?php echo "tu rol es:  ".$this->session->userdata('rol'); ?> </h3>


           
          </div>








<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Primer Apelllido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">CI</th>
      <th scope="col">Sexo</th>
      <th scope="col">Rol</th>
    




      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>


<?php
$indice=1;

foreach ($usuario->result() as $row) 

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

 </div>


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


    </div>
  </div>
</div>
