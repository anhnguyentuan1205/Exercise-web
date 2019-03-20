<?php
class Bill_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertBill($bill)
    {
        $this->db->insert('hoadon',$bill);
    }

    public function insertBillDetail($detail)
    {
        $this->db->insert('chitiethoadon',$detail);
    }
}