<?php defined('BASEPATH') OR exit('No direct script access allowed');


class AuthModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();

    }

    public function fetch($where)
    {
        $this->db->select('*');
        $this->db->where($where);
        $result=$this->db->get('user')->result_array();
        return $result;
    }
}

?>