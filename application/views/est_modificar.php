

	<div class="container">
    
 


<div class="container">
  <div class="row">
    <div class="col-md-12">






<?php

foreach ($infoestudiante->result() as $row)
  {
   echo form_open_multipart('estudiante/modificarbd');
  ?>


  

   <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante; ?>">

  <div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="primerApellido" value="<?php echo $row->PrimerApellido;  ?>" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="segundoApellido" value="<?php echo $row->SegundoApellido;  ?>" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $row->Nombre;  ?>" >
    
  </div>



 
  <button type="submit" class="btn btn-primary">Modificar</button>


  <?php 
  echo form_close();
  }

  ?>




<form>
  
</form>



 

























  </tbody>
</table>


    </div>
  </div>
</div>
