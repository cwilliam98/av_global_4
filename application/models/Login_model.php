<?php

class Login_model extends CI_Model {


	function login($codigo,$senha){
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('codigo',$codigo);
		$this->db->where('senha',$senha);
		$resultado = $this->db->get()->result_array();
		return  reset($resultado);
	}
}










