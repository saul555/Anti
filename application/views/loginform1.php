
<?php 
 switch ($msg) {
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






<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
              

 <p class="text-muted" ><?php echo $mensaje; ?></p>

               
      <?php 
      echo form_open_multipart('usuarios/validarusuario');

       ?>





                <div  class="box">
                    <h1>Login</h1>

                   




                    

               <label class="text-muted" >Losgin</label>
                    
                      <input type="text" name="login"  placeholder="">



                   


                  <label  class="text-muted">Password</label>
                    <input type="password" name="password" placeholder="">



                    <input type="submit" name="" value="Ingresar" href="#">
                    



                </div>


<?php 
echo form_close();

 ?>





            </div>
        </div>
    </div>
</div>

























