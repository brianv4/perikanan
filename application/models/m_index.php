<?php 
 
class M_index extends CI_Model{
	function tampil_data(){
		return $this->db->get('products'); //memanggil database dengan tabel produk
	}
}