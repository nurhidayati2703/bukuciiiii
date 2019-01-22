<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model
{
    public function getBuku()
    {
      //$query_str = "SELECT * FROM buku"; //hanya untuk query saja
      //$query =  $this->db->query($query_str)->result_array(); //$query untuk eksekusi

      //setelah ke model, harus kembali ke controller, maka di return

      $query = $this->db->get('buku')->result_array();
      return $query;
    }

    public function tambah_data($data)
    {
      $this->db->insert('buku', $data);
    }

    public function edit_data($where,$data)
    {
      $this->db->where($where);
      return $this->db->update('buku', $data);
    }

   public function getBukuId($id)
   {
     //get digunakan untuk mengambil semua datanya
     //sedangkan get_where digunakan untuk mengambil data dengan kondisi tertentu, pada ini hanya  baris saja
     $query = $this->db->get_where('buku', array('id_buku' => $id))->row_array();
     return $query;
   }
   public function hapus_data($where)
   {
     $this->db->where($where);
     $this->db->delete('buku');
     // $this->db->delete('buku', array('id_buku' => $id));
   }

   public function search($keyword)
   {
     //cara pertama
     // $query = $this->db->query('SELECT * FROM buku where judul like "%'.$keyword.'%"'.
     //                                                  'or penulis like "%'.$keyword.'%"'.
     //                                                  'or tahun_terbit like "%'.$keyword.'%"')->result_array();

      //cara kedua

      $this->db->like('judul', $keyword);
      $this->db->or_like('penulis', $keyword);
      $this->db->or_like('tahun_terbit', $keyword);

      $query = $this->db->get('buku')->result_array();

      return $query;
   }

   public function getBukuById($where)
   {
     $this->db->join('genre', 'buku.id_genre = genre.id_genre', 'left');

     $query = $this->db->get_where('buku', $where)->row_array();
     return $query;
   }

   public function getGenre()
   {
     $query = $this->db->get('genre')->result_array();
     return $query;
   }
}

 ?>
