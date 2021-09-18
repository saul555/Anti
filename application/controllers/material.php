

		

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends CI_Controller {
 //funcional
	public function index()
	{
		
      
     


   

     $lista1=$this->material_model->lista_d("todos");
     $data['t']=$lista1;
  
      $lista2=$this->material_model->lista_d("eliminados");
     $data['e']=$lista2;


   $lista3=$this->material_model->listaCatego("todos");
     $data['cate']=$lista3;


    



  
     $this->load->view('fondo/cabeza.php');   
    $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }   
        $this->load->view('materiales/lista.php',$data); 
        
        $this->load->view('fondo/base.php'); 





	}

  public function asistencia()
  {
    
      
     




     $lista1=$this->material_model->lista_d("todos");
     $data['t']=$lista1;
  
      $lista2=$this->material_model->lista_d("eliminados");
     $data['e']=$lista2;


   $lista3=$this->material_model->listaCatego("todos");
     $data['cate']=$lista3;


    



  
     $this->load->view('fondo/cabeza.php');   
    $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }   
        $this->load->view('materiales/lista.php',$data); 
        
        $this->load->view('fondo/base.php'); 





  }

  public function listaCat()

  {


    $data['msg']=$this->uri->segment(3);

     $lista1=$this->material_model->listaCatego("todos");
     $data['cate']=$lista1;
  
    
     $this->load->view('fondo/cabeza.php');   
    $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }
    $this->load->view('materiales/Categoria.php',$data); //contenido
       $this->load->view('fondo/base.php');


  }


   public function agregar()

  {


    $data['msg']=$this->uri->segment(3);

     $lista1=$this->material_model->listaCatego("todos");
     $data['cate']=$lista1;
  
    
     $this->load->view('fondo/cabeza.php');   
    $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }
    $this->load->view('materiales/agreMaterial.php',$data); //contenido
       $this->load->view('fondo/base.php');


  }


  public function agregarbd()
  {
    

 



       $nombre=$_POST['categoriaNombre']; 



       $consulta=$this->material_model->encontrarId($nombre); 

     if ($consulta->num_rows()>0)
      {

        foreach ($consulta->result() as $row)
         {
        $dato=$row->idcategorizacion;
        
           }      

      }


         
            $data['nombre']=$_POST['nombre'];
              $data['cantidad']=$_POST['cantidad'];
                $data['unidadMedida']=$_POST['unidadMedida'];
           $data['idcategorizacion']=$dato;
     
          
      
        

         $this->material_model->AgregarMaterial($data);
          redirect('material/index','refresh');

     
      


       


       
     


  }
   public function agregarCategoria()
  {
    





       $categoria=$_POST['categoria'];

  
     $consul=$this->material_model->validarCategoria($categoria); 
     if ($consul->num_rows()>0)
      {
        
         redirect('material/agregar/1','refresh');

         

      }
      else
      {
        $user=$this->session->userdata('nombreUsuario');
       $data['idUsuaioModifico']=$user;
           $data['categoria']=$_POST['categoria'];
      

         $this->material_model->AgregarCategoria($data);
          redirect('material/listaCat','refresh');

      }
      


       


       
     


  }


 

  public function modificar()
  {
    $data['msg']=$this->uri->segment(3);

    $idmaterial=$_POST['idmaterial']; 
     


    
    $data['mate']=$this->material_model->recuperarMaterial($idmaterial);
     

       

       $lista1=$this->material_model->listaCatego("todos");
       $data['cate']=$lista1;
    
      
       $this->load->view('fondo/cabeza.php');   
      $rol=$this->session->userdata('rol');
       if ($rol=="administrador") {
         $this->load->view('1/menuAdmin.php');
       }
       else{
         $this->load->view('1/menuProfe.php');
  
       }
      $this->load->view('materiales/agreMaterial.php',$data); //contenido
         $this->load->view('fondo/base.php');
  

















  }

  public function modificarCate()
  {
    $data['msg']=$this->uri->segment(3);

    $idcategorizacion=$_POST['idcategorizacion'];
    $data['cate']=$this->material_model->recuperarCate($idcategorizacion);
     



    $this->load->view('fondo/cabeza.php');   
      
       $rol=$this->session->userdata('rol');
     if ($rol=="administrador") {
       $this->load->view('1/menuAdmin.php');
     }
     else{
       $this->load->view('1/menuProfe.php');

     }    
       $this->load->view('materiales/categoriaModi.php',$data); 
       $this->load->view('fondo/base.php');

  }
  public function categoriabd ()
  {

       $idcategorizacion=$_POST['idcategorizacion'];
       $data['categoria']=$_POST['categoria'];
       





       

   
  
    

      $this->material_model->modiCate($idcategorizacion,$data);
      redirect('material/listaCat','refresh');    

        

      
      





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



}