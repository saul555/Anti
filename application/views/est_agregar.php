

	<div class="container">
    
 


<div class="container">
  <div class="row">
    <div class="col-md-12">






<?php


  
   echo form_open_multipart('estudiante/agregarbd');
  ?>

  

  <div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Escribir" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="segundoApellido" placeholder="Escribir"  >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Escribir"  >
    
  </div>



 
  <button type="submit" class="btn btn-primary">Agregar</button>


  <?php 
  echo form_close();
  

  ?>




<form>
  
</form>























  </tbody>
</table>


    </div>
  </div>
</div>
