

 <?php 
 switch ($msg2) {
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
    <div class="col-md-4">










<div  class="box2">


  

  



<?php


  
   echo form_open_multipart('usuarios/agregarbd');
  ?>

  

   <div >
    <p class="text-muted" >Nombre</p>
    <input type="text" class="form-control" name="nombre" placeholder="Escribir"   required="" >
    
  </div>

  <div >
    <label class="text-muted" >Primer Apellido</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Escribir"   required="">
    
  </div>
  <div >
    <label class="text-muted">Segundo Apellido</label>
    <input type="text" class="form-control" name="segundoApellido" placeholder="Escribir"    required="">
    
  </div>



  <div class="mb-3">
    <label class="text-muted">CI</label>
    <input type="text" class="form-control" name="ci" placeholder="Escribir"   required="" >
    
  </div>

   <div class="mb-3">
  
    <label class="text-muted">hombre</label>
    <input type="radio"  name="sexo"  checked  value="H">
    <label class="text-muted">Mujer</label>
    <input type="radio"  name="sexo"  value="M" >
    
    
  </div>



    <div class="mb-3">
    <label class="text-muted">rol</label>
    <input type="text" class="form-control" name="rol" placeholder="Escribir"   required="" >
    
  </div>

    <div class="mb-3">
    <label class="text-muted">login</label>
    <input type="text" class="form-control" name="login" placeholder="Escribir"   required="" >
        <p class="text-muted" ><?php echo $mensaje; ?></p>

     
    
  </div>

    <div class="mb-3">
    <label class="text-muted">Password</label>
    <input type="text" class="form-control" name="password" placeholder="Escribir"   required="" >
    
  </div>


    

 



 
  <button type="submit" class="btn btn-primary">Agregar</button>


  <?php 
  echo form_close();
  

  ?>

</div>





</div>
</div>
</div>




































    </div>
  </div>
</div>
