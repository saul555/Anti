<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos_model extends CI_Model 
{



      public function lista()
	{
		
        
       
        	$this->db->select('*');
		$this->db->from('curso');
	
		
		     return $this->db->get();
        	
        

        


	}
	public function LimiteC()
	{
		
       
        	$this->db->select('*');
		$this->db->from('configuracion');
		
		     return $this->db->get();  	

	}
	public function ModificarLimte($data)
	{
		
		$this->db->where('idConfi',1);
		$this->db->update('configuracion',$data);
		
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
