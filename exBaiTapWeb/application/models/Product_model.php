<?php
class Product_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getProducts()
    {
        $this->db->select();
        $result= $this->db->get("hang");
        return $result->result_array();
    }

    public function searchProduct($id)
    {
        $this->db->where('mahang',$id);
        return $this->db->get('hang')->result_array();
    }

    public function getLimitProducts($from, $to)
    {
        return $this->db->get('hang', $from, $to)->result_array();
    }

    public function deleteProduct($id)
    {
        $this->db->where('mahang',$id);
        $this->db->delete('hang');
    }

    public function insertProduct($product)
    {
        $this->db->insert('hang',$product);
    }

    public function searchProductByName($name)
    {
        $this->db->like('tenhang', $name);
        $result = $this->db->get('hang');
        return $result->result_array();
    }

    public function edit($product, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('hang', $product);
    }
}