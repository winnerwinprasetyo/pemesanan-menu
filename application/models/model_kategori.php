<?php 

class Model_kategori extends CI_Model{
    public function data_makanan(){
       return $this->db->get_where("tb_menu",array('kategori' =>'makanan'));
    }

    public function data_minuman(){
        return $this->db->get_where("tb_menu",array('kategori' =>'minuman'));
     }
}

?>