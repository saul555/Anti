<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aula_model extends CI_Model 
{



      public function lista()
	{
		$estado=true;
        
       
        	$this->db->select('*');
		$this->db->from('aulas');
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

	public function AgregarAula($data)
	{
				
		$this->db->insert('aulas',$data);
		
	}



	public function recuperarAula($idaula)
	{
		$this->db->select('*');
		$this->db->from('aulas');
		$this->db->where('idaulas',$idaula);
		return $this->db->get();
	}
	public function ModificarAula($idaula,$data)
	{
		
		$this->db->where('idaulas',$idaula);
		$this->db->update('aulas',$data);
		
	}
	
	







	public function eliminarAula($idaula,$data)
	{
		

		$this->db->where('idaulas',$idaula);
		$this->db->update('aulas',$data);
		
	}





	

	
	
	
}
