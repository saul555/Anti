






  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <?php 
 switch ($msg3) {
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
     $mensaje=$msg3;
     break;
 }



 ?>




  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modificar Usuario</h1>
          </div>

          
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                
                
                
          

              <?php

foreach ($infousuario->result() as $row)
  {
  
   echo form_open_multipart('usuarios/modificarbd');
  ?>
   <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">


   <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre"  value="<?php echo $row->nombre;  ?> "   required="">
    
  </div>

  <div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="primerApellido"  value="<?php echo $row->primerApellido;  ?>"  required="" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="segundoApellido"  value="<?php echo $row->segundoApellido;  ?>"   required="">
    
  </div>



  <div class="mb-3">
    <label class="form-label">CI</label>
    <input type="text" class="form-control" name="ci" placeholder="Escribir" value="<?php echo $row->ci;  ?>"   required="">
    
  </div>

   <div class="mb-3">
    <label class="form-label">Sexo</label>
    <input type="text" class="form-control" name="sexo" placeholder="Escribir" value="<?php echo $row->sexo;  ?>"   required="">
    
  </div>
 


    <div class="mb-3">
    <label class="form-label">rol</label>
    <input type="text" class="form-control" name="rol" placeholder="Escribir" value="<?php echo $row->rol;  ?>"   required="" >
    
  </div>

    <div class="mb-3">
    <label class="form-label">login</label>
    <input type="text" class="form-control" name="login" placeholder="Escribir" value="<?php echo $row->login;  ?>"   required="" >

    <p class="text-muted" ><?php echo $mensaje; ?></p>
    
  </div>

    <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Escribir"   required="" >
    
  </div>

 



 
  <button type="submit" class="btn btn-primary">Agregar</button>


  <?php 
  echo form_close();
  }

  ?>

                
                
                
                
                
                
                
                
                
                
                
                
                
                              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->