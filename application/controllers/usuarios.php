

		  
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
 
	public function index()
	{
		
      $data['msg']=$this->uri->segment(3);

      if ($this->session->userdata('login')) 
      {
      	redirect('usuarios/panel','refresh');
      }
      
     
    
        else
      {
        $this->load->view('login/cabeza.php');        
        $this->load->view('login/logincuerpo.php',$data); 
        $this->load->view('login/base.php'); 
       }

/*
       else
       {
         $this->load->view('fondo/cabeza.php');       
         $this->load->view('fondo/cuerpo.php');       
         $this->load->view('fondo/base.php');        
          
        }*/





	}


   

  public function listaUsuarios()
  {
   $lista=$this->usuario_model->lista();
    $data['usuarios']=$lista;  




     $lista1=$this->usuario_model->lista_rol("todos");
     $data['t']=$lista1;
   
      $lista2=$this->usuario_model->lista_rol("profes");
     $data['p']=$lista2;
    
     $lista3=$this->usuario_model->lista_rol("administrador");
     $data['a']=$lista3;
    
     $lista4=$this->usuario_model->lista_rol("eliminados");
     $data['e']=$lista4;



  
        $this->load->view('fondo/cabeza.php'); 


        $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }

             
        $this->load->view('1/lista.php',$data); 
        
        $this->load->view('fondo/base.php'); 

    
  }

   public function tablas()
  {
     
   

   
      $lista1=$this->usuario_model->lista_rol("todos");
     $data['t']=$lista1;
   
      $lista2=$this->usuario_model->lista_rol("profes");
     $data['p']=$lista2;
    
     $lista3=$this->usuario_model->lista_rol("administrador");
     $data['a']=$lista3;
    
     $lista4=$this->usuario_model->lista_rol("administrador");
     $data['e']=$lista4;
    


    
    return $data;


  }





   public function agregar()

  {


    $data['msg']=$this->uri->segment(3);

    

   $this->load->view('fondo/cabeza.php'); 
  $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }
    $this->load->view('1/agreUsuario.php',$data); //contenido
       $this->load->view('fondo/base.php');


  }


  public function agregarbd()
  {
    





       $ci=$_POST['ci'];

  
     $consul=$this->usuario_model->validarUser($ci); 
     if ($consul->num_rows()>0)
      {
        
         redirect('usuarios/agregar/1','refresh');

         

      }
      else
      {
        $CI=$_POST['ci'];
        $N=$_POST['nombre'];

           $data['nombre']=$_POST['nombre'];
       $data['primerApellido']=$_POST['primerApellido'];
       $data['segundoApellido']=$_POST['segundoApellido'];
       $data['ci']=$_POST['ci'];
       $data['sexo']=$_POST['sexo'];
       $data['rol']=$_POST['rol'];
       $data['login']=login($N,$CI);
       $data['password']=md5($_POST['ci']);
       $user=$this->session->userdata('idusuario');
       $data['idusuarioModifico']=$user;

         $this->usuario_model->AgregarUsuario($data);
          redirect('usuarios/listaUsuarios','refresh');

      }
      


       


       
     


  }



  public function modificar()
  {
    $data['msg3']=$this->uri->segment(3);

    $idusuario=$_POST['idusuario'];
    $data['infousuario']=$this->usuario_model->recuperarUsuario($idusuario);
    $this->load->view('fondo/cabeza.php');   //archivos de 
   


    $rol=$this->session->userdata('rol');
    if ($rol=="administrador") {
      $this->load->view('1/menuAdmin.php');
    }
    else{
      $this->load->view('1/menuProfe.php');

    }



    $this->load->view('mdUsuario.php',$data); //contenido
    $this->load->view('1/base');  //archivos del footer

  }
  public function modificarbd ()
  {





    $ci=$_POST['ci'];

  
    $consul=$this->usuario_model->validarUser($ci); 
    if ($consul->num_rows()>1)
     {
       
        redirect('usuarios/modificar/1','refresh');

        

     }
     else
     {

       $idusuario=$_POST['idusuario'];
       $data['nombre']=$_POST['nombre'];
       $data['primerApellido']=$_POST['primerApellido'];
       $data['segundoApellido']=$_POST['segundoApellido'];
       $data['ci']=$_POST['ci'];
       $data['sexo']=$_POST['sexo'];
       $data['rol']=$_POST['rol'];
       $data['login']=$_POST['login'];
       $data['password']=md5($_POST['password']);


     }


   










        

   
       $lista=$this->usuario_model->ModificarUsuario($idusuario,$data);
      redirect('estudiantes/index','refresh');      

        





  }
 
  public function Eliminarbd()
  {
     $estado=false;
     $idusuario=$_POST['idusuario'];
     $data['estado']= $estado;
  $this->usuario_model->eliminarUsuario($idusuario,$data);
        redirect('usuarios/listaUsuarios','refresh');


  }
   public function Restaurar()
  {
     $estado=true;
     $idusuario=$_POST['idusuario'];
     $data['estado']= $estado;
  $this->usuario_model->eliminarUsuario($idusuario,$data);
        redirect('usuarios/listaUsuarios','refresh');


  }



  public function vistaUsuarios()
  {
    $lista=$this->usuario_model->lista();
    $data['usuario']=$lista;


    $this->load->view('fondo/cabeza.php');    //archivos de cabecera
 
    $this->load->view('estudiante/lista.php',$data); //contenido
    $this->load->view('fondo/base.php');  //archivos del footer
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
      
        redirect('estudiantes/index','refresh');
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