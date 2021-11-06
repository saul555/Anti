<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material_model extends CI_Model 
{
 

      public function listaCatego()
	{
		$estado=true;
        
		


		$this->db->select('*');
		$this->db->from('catategorizacion');
		$this->db->where('estado',$estado);
		
		return $this->db->get();
	}

 




	 public function lista_d($rol)
	{
		$estado=true;
        
        if ($rol=="todos") 

        {
        	$this->db->select('*');
		$this->db->from('materialdesinfeccion');
		$this->db->where('estado',$estado);
		
		     return $this->db->get();
        	
        }


        if ($rol=="eliminados") 

        {
        	$this->db->select('*');
			$this->db->from('materialdesinfeccion');
			$this->db->where('estado',false);

		
		     return $this->db->get();
        	
        }

         if ($rol=="administrador") 

        {
        	$this->db->select('*');
			$this->db->from('materialdesinfeccion');
			$this->db->where('rol',"admin");
		
		     return $this->db->get();
        	
        } 
         if ($rol=="eliminados") 

        {
        	$this->db->select('*');
			$this->db->from('usuario');
			$this->db->where('estado',false);
		
		     return $this->db->get();
        	
        }


		
	}

	public function AgregarCategoria($data)
	{
				
		$this->db->insert('catategorizacion',$data);
		
	}
	public function AgregarMaterial($data)
	{
				
		$this->db->insert('materialdesinfeccion',$data);
		
	}
	public function recuperarCate($idcategorizacion)
	{
		$this->db->select('*');
		$this->db->from('catategorizacion');
		$this->db->where('idcategorizacion',$idcategorizacion);
		return $this->db->get();
	}


	public function encontrarId($nombre)
	{


		$this->db->select('*');
		$this->db->from('catategorizacion');
		$this->db->where('categoria',$nombre);
		
		return $this->db->get();
		
	}



	public function recuperarMaterial($idmaterial)
	{
		$this->db->select('*');
		$this->db->from('materialdesinfeccion');
		$this->db->where('idmaterial',$idmaterial);
		return $this->db->get();
	}
	public function modiCate($idcategorizacion,$data)
	{
		
		$this->db->where('idcategorizacion',$idcategorizacion);
		$this->db->update('catategorizacion',$data);
		
	}
	
	







	public function eliminarEstudiante($idestudiante,$data)
	{
		

		$this->db->where('idestudiante',$idestudiante);
		$this->db->update('estudiante',$data);
		
	}





	public function validarCategoria($categoria)
	{


		$this->db->select('*');
		$this->db->from('catategorizacion');
		$this->db->where('categoria',$categoria);
		
		return $this->db->get();
		
	}

	public function validarci($ci)
	{


		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->where('ci',$ci);
		
		return $this->db->get();
		
	}

	
	
	
}
