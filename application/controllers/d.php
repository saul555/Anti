

		

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D extends CI_Controller 
{
 
	public function index()
	{
		
      
     





     $lista1=$this->aula_model->lista("todos");
     $data['t']=$lista1;
  
      $lista2=$this->aula_model->lista("eliminados");
     $data['e']=$lista2;





    
    



  
        $this->load->view('1/cabeza.php');  
        $this->load->view('1/menuAdmin.php');      
        $this->load->view('aula/lista.php',$data); 
        
        $this->load->view('1/base.php'); 





	}




   public function agregar()

  {


    $data['msg']=$this->uri->segment(3);

    

   $this->load->view('aula/cabeza.php'); 
   $this->load->view('1/menuAdmin.php');      //archivos de 
    $this->load->view('aula/agreAula.php',$data); //contenido
       $this->load->view('aula/base.php');


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
           $data['nombre']=$_POST['nombre'];
       $data['capacidad']=$_POST['capacidad'];
       $data['capacidadPermitida']=$_POST['capacidadPermitida'];
       $data['limiteCovid']=$_POST['limiteCovid'];
  

         $this->aula_model->AgregarAula($data);
          redirect('aulas/index','refresh');

    //  }
      


       


       
     


  }




  public function modificar()
  {
    $data['msg']=$this->uri->segment(3);

    $idaula=$_POST['idaula'];
    $data['infoAula']=$this->aula_model->recuperarAula($idaula);
       $this->load->view('aula/cabeza.php'); 
       $this->load->view('1/menuAdmin.php');     
       $this->load->view('aula/ModiAula.php',$data); 
       $this->load->view('aula/base.php');

  }
  public function modificarbd ()
  {

       $idaula=$_POST['idaula'];
        $data['nombre']=$_POST['nombre'];
       $data['capacidad']=$_POST['capacidad'];
       $data['capacidadPermitida']=$_POST['capacidadPermitida'];
       $data['limiteCovid']=$_POST['limiteCovid'];





      // $ci=$_POST['ci'];

  //
    /// $consulta=$this->estudiante_model->validarci($ci); 
    

       $lista=$this->aula_model->ModificarAula($idaula,$data);
      redirect('aulas/index','refresh');      

        

      
      





  }
 
  public function Eliminarbd()
  {
     $estado=false;
     $idaula=$_POST['idaula'];
     $data['estado']= $estado;
  $this->aula_model->eliminarAula($idaula,$data);
        redirect('aulas/index','refresh');


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