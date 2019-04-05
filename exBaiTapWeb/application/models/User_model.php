<?php
/**
 * Created by PhpStorm.
 * User: Bon
 * Date: 3/7/2019
 * Time: 5:11 PM
 */
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertUser($user)
    {
        $this->db->insert('khachhang',$user);
    }

    public function getUser($id,$password)
    {
        $this->db->select();
        $this->db->where('email', $id);
        $this->db->where('Matkhau',$password);
        $query=$this->db->get("khachhang");
        return $query->result_array();
    }

    public function getUsers()
    {
        $query=$this->db->get("khachhang");
        return $query->result_array();
    }

}