

		

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {
 
	public function index()
	{
		
    $lista=$this->tarjeta_model->listatarjeta("todos");
    $data2['ta']=$lista;

     $lista1=$this->estudiante_model->lista_rol("todos");
     $data['t']=$lista1;     
     $lista1=$this->estudiante_model->lista_rol("todos");
     $data['t']=$lista1;  
  
      $lista2=$this->estudiante_model->lista_rol("eliminados");
     $data['e']=$lista2;

    
     $lista3=$this->usuario_model->lista_rol("administrador");
     $data['a']=$lista3;
    

/*



     $this->load->view('fondo/cabeza.php');   
     $this->load->view('fondo/menu.php');        
     $this->load->view('fondo/cuerpo.php',$data);       
     $this->load->view('fondo/base.php'); 

*/
  
        $this->load->view('fondo/cabeza.php',$data2);   
       
        $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
      
       
     }
     else{
       $this->load->view('1/menuProfe.php');
    
     }    
    
     $this->load->view('fondo/cuerpo.php',$data); 
        
     $this->load->view('fondo/base.php'); 
       




	}




   public function agregar()

  {

    $lista1=$this->cursos_model->lista();
    $data['c']=$lista1;

    $data['msg']=$this->uri->segment(3);

    

   $this->load->view('fondo/cabeza.php'); 
  
   $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }
   // $this->load->view('estudiantes/agreEstudiante.php',$data); //contenido
    $this->load->view('estudiantes/Agregar.php',$data); //contenido
       $this->load->view('estudiantes/base.php');


  }


  public function agregarbd()
  {
    





       $ci=$_POST['ci'];

  
     $consul=$this->estudiante_model->validarci($ci); 
     if ($consul->num_rows()>0)
      {
        
         redirect('estudiantes/agregar/1','refresh');

         

      }
      else
      {

       
       
           $data['nombre']=$_POST['nombre'];
       $data['primerApellido']=$_POST['primerApellido'];
       $data['segundoApellido']=$_POST['segundoApellido'];
       $data['ci']=$_POST['ci'];
       $data['sexo']=$_POST['sexo'];     
      $data['curso']=$_POST['curso'];
      $idUM= $this->session->userdata('idusuario'); 
      $data['idusuarioModifico']=$idUM; 

         $this->estudiante_model->AgregarEstudiante($data);
          redirect('estudiantes/index','refresh');

      }
      


 
  }

  public function tarjeta()
  {
    $data['msg']=$this->uri->segment(3);

    $idestudiante=$_POST['idestudiante'];
    $data['infoestudiante']=$this->estudiante_model->recuperarEstudiante($idestudiante);
    $data5['estudiantes']=$this->estudiante_model->lista();
 
 
    $lista1=$this->tarjeta_model->listatarjeta2("estudiante");
    $data2['t']=$lista1;

    $this->load->view('fondo/cabeza.php',$data5);   
    
     $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php',$data2);
     }
     else{
       $this->load->view('1/menuProfe.php');

     }   
       $this->load->view('estudiantes/ModiTarjeta.php',$data); 
      
       $this->load->view('fondo/base2.php');
  } 

  public function Eliminarbdtarjeta()
  {
     $idestudiante=$_POST['idestudiante'];
     $idtarjeta=$_POST['idtarjeta'];
     $data2['idtarjeta']= $idtarjeta;
     $data['nombre']= $_POST['nombre'];
     
     $data['idestudiante']= $idestudiante;
  $this->tarjeta_model->eliminarT($idtarjeta,$data);
  $lista=$this->estudiante_model->ModificarEstudiante($idestudiante,$data2);
  
        redirect('estudiantes/index','refresh');


  }



  public function modificar()
  {
    $data['msg']=$this->uri->segment(3);

    $idestudiante=$_POST['idestudiante'];
    $data['infoestudiante']=$this->estudiante_model->recuperarEstudiante($idestudiante);
    $this->load->view('fondo/cabeza.php');   
    
     $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }   
       $this->load->view('estudiantes/ModiEstudiante.php',$data); 
       $this->load->view('fondo/base.php');

  }
  public function modificarbd ()
  {

       $idestudiante=$_POST['idestudiante'];
       $data['nombre']=$_POST['nombre'];
       $data['primerApellido']=$_POST['primerApellido'];
       $data['segundoApellido']=$_POST['segundoApellido'];
       $data['ci']=$_POST['ci'];
       $data['sexo']=$_POST['sexo'];     
      $data['curso']=$_POST['curso'];
      $idUM= $this->session->userdata('idusuario'); 
      $data['idusuarioModifico']=$idUM; 




       $ci=$_POST['ci'];

  
     $consulta=$this->estudiante_model->validarci($ci); 
    

       $lista=$this->estudiante_model->ModificarEstudiante($idestudiante,$data);
      redirect('estudiantes/index','refresh');      

        

      
      





  }
 
  public function Eliminarbd()
  {
     $estado=false;
     $idestudiante=$_POST['idestudiante'];
     $data['estado']= $estado;
  $this->estudiante_model->eliminarEstudiante($idestudiante,$data);
        redirect('estudiantes/index','refresh');


  }
   public function Restaurar()
  {
     $estado=true;
     $idestudiante=$_POST['idestudiante'];
     $data['estado']= $estado;
  $this->estudiante_model->eliminarEstudiante($idestudiante,$data);
        redirect('estudiantes/index','refresh');


  }



  public function vistaUsuarios()
  {
    $lista=$this->usuario_model->lista();
    $data['usuario']=$lista;


    $this->load->view('inc_head.php');    //archivos de cabecera
 
    $this->load->view('pUsuario.php',$data); //contenido
    $this->load->view('inc_footer.php');  //archivos del footer
  }



































	public function validarusuario()
	{
		
     $login=$_POST['login'];
     $password=md5($_POST['password']);
     $consulta=$this->usuario_model->validar($login,$password); 
     if ($consulta->num_rows()>0)
      {
      	foreach ($consulta->result() as $row)
      	 {
      	 	$this->session->set_userdata('idusuario',$row->idusuario);
      	 	$this->session->set_userdata('login',$row->login);
      	 	$this->session->set_userdata('rol',$row->rol);
      		redirect('usuarios/panel','refresh');
      	 }
      }
	  else
	  {
	  	redirect('usuarios/index/1','refresh');


	  }
	}



  














	 public function panel()
	 {
	 	
	 	 if ($this->session->userdata('login')) 
      {
      
        redirect('usuarios/listaUsuarios','refresh');
      }
      else
      {
      	redirect('usuarios/index/2','refresh'); 
       }



	 }
	 public function logout()
	 {
       $this->session->sess_destroy();
       redirect('usuarios/index/3','refresh');

	 }



}