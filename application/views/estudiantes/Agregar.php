






  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <?php 
 switch ($msg) {
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
     $mensaje=$msg;
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
            <h1>Listas de Estudiantes</h1>
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


  
echo form_open_multipart('estudiantes/agregarbd');
?>





              

                <div class="mb-3">
                <label class="form-label">Nombre</label>

                 <input type="text" class="form-control" name="nombre"                 required="" >
 
               </div>



<div >
 <label class="text-muted" >Apellido Paterno</label>
 <input type="text" class="form-control" name="primerApellido"    required="">
 
</div>
<div >
 <label class="text-muted">Apellido Materno</label>
 <input type="text" class="form-control" name="segundoApellido"     required="">
 
</div>



<div class="mb-3">
 <label class="text-muted">CI</label>
 <input type="text" class="form-control" name="ci"   required="" >
   <p ><code><?php echo $mensaje;?></code></p> 
</div>

<div class="mb-3">

 <label class="text-muted">hombre</label>
 <input type="radio"  name="sexo"  checked  value="H">
 <label class="text-muted">Mujer</label>
 <input type="radio"  name="sexo"  value="M" >
 
 
</div>



<div class="mb-3">


<label class="form-label">cursos</label>

   <select  class="form-control"  name="curso"   required="">
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
 

   

                  

        

 

</div>




<button type="submit " class="btn btn-primary mb-3">Agregar  </button>








               


             
              









         <?php 
echo form_close();


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