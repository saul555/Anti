
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTablesa</h1>
            




                <?php 
         echo form_open_multipart('usuarios/logout');
         ?>
        
        <button  class="nav-link"  type="submit " >Salir</button>
        <?php 
          echo form_close();

         ?>
          </div>



          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">
                 <?php echo "Hola ".$this->session->userdata('login'); ?> </li>
                 <li class="breadcrumb-item active">
                 <?php echo "Tu tipo es  ".$this->session->userdata('tipo'); ?> </li>


            </ol>
          </div>



        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                         <?php 
         echo form_open_multipart('estudiante/agregar');
         ?>
        
        <button  class="nav-link"  type="submit " >AgregarEstudiante</button>
        <?php 
          echo form_close();

         ?>

            
          

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sistema de Temperatura   </h3>
                <br>




          
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>SEgundo Apellido</th> 
                    <th>Temperatura</th>
                     <th>Modificar</th>
                     <th>Eliminar</th>
                     <th>Logo</th>
                        <th>subir logo</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
$indice=1;
foreach ($estudiantes->result() as $row) {
  
  
  ?>



                  <tr>
                    <td><?php echo $indice;?></td>
                     <td><?php echo $row->Nombre; ?></td>
                      <td><?php echo $row->PrimerApellido; ?></td>
                     <td><?php echo $row->SegundoApellido; ?></td>
                    <td><?php echo $row->Temperatura; ?></td>
                    <td>
        <?php 
         echo form_open_multipart('estudiante/modificar');
         ?>
        <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante; ?>">
        <button type="submit " class="btn btn-success btn-xs">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>
      <td>
        <?php 
         echo form_open_multipart('estudiante/Eliminarbd');
         ?>
        <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante; ?>">
        <button type="submit " class="btn btn-danger btn-xs">Eliminar</button>
        <?php 
          echo form_close();

         ?>
      </td>

      <td> 
        <?php 

      $foto=$row->foto;


      if ($foto=="") 
      {
         ?> 
         <img width="100" src="<?php echo base_url(); ?>/archivos/estudiantes/perfil.jpg">

         <?php          

      }
      else
      {
      ?>
      <img width="100" src="<?php echo base_url(); ?>/archivos/estudiantes/<?php echo $foto; ?>">

      <?php  

      }
      ?>



      </td>

      <td>
        <?php 
         echo form_open_multipart('estudiante/subirdato');
         ?>
        <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante; ?>">
        <button type="submit " class="btn btn-primary btn-xs">subir logo </button>
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
                      <th>#</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>SEgundo Apellido</th>
                    <th>Temperatura</th>
                    <th>Modificar</th>
                     <th>Eliminar</th>
                      <th>Logo </th>
                   <th>subir </th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>