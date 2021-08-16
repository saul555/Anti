<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroD_model extends CI_Model 
{

  public function lista()
	{
		$estado=1;
        
        
        	$this->db->select('*');
		$this->db->from('registrodesinfeccion');
		$this->db->where('estado',$estado);
		
        	  return $this->db->get();
		

	}

   

 
 






	public function AgregarAula($data)
	{
				
		$this->db->insert('aulas',$data);
		
	}



	public function recuperarRegistro($idregistro)
	{
		$this->db->select('*');
		$this->db->from('registrodesinfeccion');
		$this->db->where('idregistro',$idregistro);
		return $this->db->get();
	}
	public function ModificarRegistro($idregistro,$data)
	{
		
		$this->db->where('idregistro',$idregistro);
		$this->db->update('registrodesinfeccion',$data);
		
	}
	
	







	public function eliminarRegistro($idregistro,$data)
	{
		

		$this->db->where('idregistro',$idregistro);
		$this->db->update('registrodesinfeccion',$data);
		
	}





	

	
	
	
}
