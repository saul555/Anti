

		

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroD extends CI_Controller 
{
 
	public function index()
	{
    $Aula=$this->aula_model->lista();
    $data2['A']=$Aula;
 
   
     $lista1=$this->registroD_model->lista();
     $data['r']=$lista1;

  
 $lista2=$this->registroD_model->lista();
     $data['e']=$lista2;


 
  
     $this->load->view('fondo/cabeza.php',$data2);    
     
      $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }      
       
     $this->load->view('registroDef/rDef.php',$data); 
    // $this->load->view('registroDef/lista.php',$data); 
        
        $this->load->view('fondo/base2.php'); 





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
    $this->load->view('aula/agreAula.php',$data); //contenido
       $this->load->view('fondo/base.php');


  }


  public function agregarbd()
  {
    





     //  $ci=$_POST['ci'];

  
    // $consul=$this->estudiante_model->validarci($ci); 
     //if ($consul->num_rows()>0)
     // {
        
        // redirect('estudiantes/agregar/1','refresh');

         

   //   }
   //   else
   //   {
    $user=$this->session->userdata('nombreUsuario');
    $data['idUsuaioModifico']=$user;
           $data['nombre']=$_POST['nombre'];
       $data['capacidad']=$_POST['capacidad'];
      
       $data['limiteCovid']=$_POST['limiteCovid'];
  

         $this->aula_model->AgregarAula($data);
          redirect('aulas/index','refresh');

    //  }
      


       


       
     


  }




  public function modificar()
  {
   

    $idregistro=$_POST['idregistro'];
    $data['info']=$this->registroD_model->recuperarRegistro($idregistro);
    $this->load->view('fondo/cabeza.php');   
       $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }    
       $this->load->view('registroDef/modiRegistro.php',$data); 
       $this->load->view('fondo/base.php');

  }
  public function modificarbd ()
  {

       $idregistro=$_POST['idregistro'];
        $data['estadoAula']=$_POST['estadoAula'];
      





      // $ci=$_POST['ci'];

  //
    /// $consulta=$this->estudiante_model->validarci($ci); 
    

       $lista=$this->registroD_model->ModificarRegistro($idregistro,$data);
      redirect('registroD/index','refresh');      

        

      
      





  }
 
  public function Eliminarbd()
  {
     $estado=false;
     $idregistro=$_POST['idregistro'];
     $data['estado']= $estado;
  $this->registroD_model->eliminarRegistro($idregistro,$data);
        redirect('registroD/index','refresh');


  }
   public function Restaurar()
  {
     $estado=true;
     $idaula=$_POST['idaula'];
     $data['estado']= $estado;
  $this->aula_model->eliminarAula($idaula,$data);
        redirect('aulas/index','refresh');


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