<?php



class Alunos_model extends CI_Model {

	
	function cadastraUsuario($data){
		$this->db->insert('usuarios', $data);
	    return $this->db->insert_id();
	}
	
	function getAlunoById($id){

		$this->db->select('*');
		$this->db->from('alunos');
		$this->db->where('id',$id);
		$resultado = $this->db->get()->result_array();
		return  reset($resultado);
	}
	
	
	function listaAlunos(){
		
		$this->db->select('*');
		$this->db->from('alunos');
		return  $this->db->get();
	}


}










