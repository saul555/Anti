

		

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aulas extends CI_Controller 
{
 
	public function index()
	{
		
     $lista1=$this->aula_model->lista();
     $data['t']=$lista1;   



  
        $this->load->view('fondo/cabeza.php');  
       

     $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }


        $this->load->view('aula/lista.php',$data); 
        
        $this->load->view('1/base.php'); 



	}




   public function agregar()

  {
    $lista1=$this->cursos_model->lista();
    $data['c']=$lista1;
    $lista2=$this->cursos_model->LimiteC();
    $data['l']=$lista2;

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
       $this->load->view('aula/base.php');


  }

 public function Limite()

  {
    $lista1=$this->cursos_model->LimiteC();
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
    $this->load->view('aula/limiteCovid.php',$data); //contenido
       $this->load->view('aula/base.php');


  }
    public function modLim ()
  {

      
      
       $data['limteCovid']=$_POST['limiteCovid'];    

       $lista=$this->cursos_model->ModificarLimte($data);
      redirect('aulas/Limite','refresh');         

  }





  ///aks klasklfasjflkbsfbsldkfihsdblgkbasdigbkajsdgkjasdkg aisjdfgka ssgjsakjdflkasjdbfk sdkfjlsakdf



  public function agregarbd()
  {
    



         



    
           $data['nombre']=$_POST['nombre'];
      
       $data['capacidad']=$_POST['capacidad'];


       $data['limiteCovid']= limiteCovid(  $_POST['capacidad'] ,$_POST['limiteCovid']);


       $idUM= $this->session->userdata('idusuario'); 
       $data['idusuarioModifico']=$idUM; 

         $this->aula_model->AgregarAula($data);
          redirect('aulas/index','refresh');

    //  }
      


       


       
     


  }




  public function modificar()
  {
    $data['msg']=$this->uri->segment(3);
    $lista2=$this->cursos_model->LimiteC();
    $data['l']=$lista2;
    $lista1=$this->cursos_model->lista();
    $data['c']=$lista1;

    $idaulas=$_POST['idaulas'];
    $data['infoAula']=$this->aula_model->recuperarAula($idaulas);
       $this->load->view('fondo/cabeza.php'); 
     
      $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }  
       $this->load->view('aula/ModiAula.php',$data); 
       $this->load->view('aula/base.php');

  }
  public function modificarbd ()
  {

       $idaulas=$_POST['idaulas'];
        $data['nombre']=$_POST['nombre'];
       $data['capacidad']=$_POST['capacidad'];
      
       $data['limiteCovid']= limiteCovid(  $_POST['capacidad'] ,$_POST['limiteCovid']);




      // $ci=$_POST['ci'];

  //
    /// $consulta=$this->estudiante_model->validarci($ci); 
    

       $lista=$this->aula_model->ModificarAula($idaulas,$data);
      redirect('aulas/index','refresh');      

        

      
      





  }
 
  public function Eliminarbd()
  {
     $estado=false;
     $idaula=$_POST['idaulas'];
     $data['estado']= $estado;
  $this->aula_model->eliminarAula($idaula,$data);
        redirect('aulas/index','refresh');


  }
   public function Restaurar()
  {
     $estado=true;
     $idaula=$_POST['idaulas'];
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