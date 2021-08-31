
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Subir logo </h1>



    <?php 
         echo form_open_multipart('estudiante/subir');
         ?>
        <input type="text" name="idEstudiante" value="<?php echo $idEstudiante; ?>">
        <input type="file" name="userfile">
        <button type="submit " class="btn btn-success btn-xs">Subir</button>
        <?php 
          echo form_close();

         ?>



 


          </div>
       </div>

       </div>
   
    </section>

    <!-- Main content -->
     
  </div>