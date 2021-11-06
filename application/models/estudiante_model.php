<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model 
{



      public function lista()
	{
		$estado=true;
        
		


		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->where('estado',$estado);
		
		return $this->db->get();
	}

 




	 public function lista_rol($rol)
	{
		$estado=true;
        
        if ($rol=="todos") 

        {
        	$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->where('estado',$estado);
		
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
