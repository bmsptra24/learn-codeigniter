<?php

class Data_model extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('test')->result_array();
    }
}
