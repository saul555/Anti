 <?php 
 switch ($msg3) {
   case '1':
     $mensaje="Error de ingreso";
     break;
     case '2':
     $mensaje="Acceso no valido";
     break;
     case '3':
     $mensaje="Gracias por usar el sistema";
     break;
   
   default:
     $mensaje="Ingrese sus datos";
     break;
 }
 

 ?>

	<div class="content-wrapper">
    
 


<div class="container">
  <div class="row">
    <div class="col-md-12">



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
    <input type="text" class="form-control" name="password" placeholder="Escribir"   required="" >
    
  </div>

 



 
  <button type="submit" class="btn btn-primary">Agregar</button>

 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>



 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>


 
  <button type="submit" class="btn btn-primary">Agregar</button>




  <?php 
  echo form_close();
  }

  ?>




<form>
  
</form>























 

    </div>
  </div>
</div>
</div>