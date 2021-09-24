<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarjeta_model extends CI_Model 
{



      public function listatarjeta($nonbre)
	{
		$estado=true;
        
		


        $this->db->select('*');
		$this->db->from('tarjeta');
		//$this->db->where('idestudiante',null);
		
		return $this->db->get();
	}
	public function listatarjeta2($nonbre)
	{
		$estado=true;
        
		


        $this->db->select('*');
		$this->db->from('tarjeta');
		$this->db->where('idestudiante',null);
		
		return $this->db->get();
	}
	
	public function eliminarT($idtarjeta,$data)
	{
		

		$this->db->where('idtarjeta',$idtarjeta);
		$this->db->update('tarjeta',$data);
		
	}


 




	 public function lista($nonbre)
	{
		$estado=true;
        
        if ($rol=="todos") 

        {
        	$this->db->select('*');
		$this->db->from('tarjeta');
		$this->db->where('nombre',$nonbre);
		
		     return $this->db->get();
        	
        }


        if ($rol=="eliminados") 

        {
        	$this->db->select('*');
			$this->db->from('estudiante');
			$this->db->where('estado',false);

		
		     return $this->db->get();
        	
        }

         if ($rol=="administrador") 

        {
        	$this->db->select('*');
			$this->db->from('usuario');
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

	public function AgregarEstudiante($data)
	{
				
		$this->db->insert('estudiante',$data);
		
	}

 

	public function recuperarEstudiante($idestudiante)
	{
		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->where('idestudiante',$idestudiante);
		return $this->db->get();
	}
	public function ModificarEstudiante($idestudiante,$data)
	{
		
		$this->db->where('idestudiante',$idestudiante);
		$this->db->update('estudiante',$data);
		
	}
	
	







	public function eliminarEstudiante($idestudiante,$data)
	{
		

		$this->db->where('idestudiante',$idestudiante);
		$this->db->update('estudiante',$data);
		
	}





	public function validar($login,$password)
	{


		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('login',$login);
		$this->db->where('password',$password);
		$this->db->where('estado',true);
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
