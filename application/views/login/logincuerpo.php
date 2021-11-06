
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



<body class="app app-login p-0"> 

    <div class="row g-0 app-auth-wrapper">

	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">

		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <br> <br> <br> <br> <br> <br>


					<h2 class="auth-heading text-center mb-5">Login</h2>
			        <div class="auth-form-container text-start">



 <?php 
      echo form_open_multipart('usuarios/validarusuario');

       ?>


						        
							<div class="login mb-3">
								<label class="sr-only" for="signin-login">Email</label>
								<input id="signin-email" name="login" type="text-center" class="form-control signin-email" placeholder="Usuario" required="required">
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" name="password" type="password" class="form-control signin-password" placeholder="Password" required="required">
								<div class="extra mt-3 row justify-content-between">
									
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>




						<?php 
echo form_close();

 ?>
						
					
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->








            












		    
			    <footer class="app-auth-footer">
				  
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->  






















	    </div><!--//auth-main-col-->


	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				   
				   
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
