<?php

class Api_model extends CI_Model
{

    public function getAllGames()
    {
        $this->db->order_by('id_pekerjaan', 'desc');
        return  $this->db->get('user_pekerjaan')->result_array();
    }

    public function getAllGamesJoin()
    {
         $this->db->select('*');
         $this->db->from('user_games');
         $this->db->join('testimonials','testimonials.id_games=user_games.id_games');
         $query = $this->db->get();
         return $query->result_array();
    }

    public function getAllApi()
    {
        $this->db->order_by('id', 'desc');
        return  $this->db->get('api')->result_array();

    }

    public function tambahApi($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

    public function getApiById($id)
    {
        return $this->db->get_where('api',['id' => $id])->row_array();
        
    }

    public function editApi($id)
    {
        $data['api'] = $this->db->get_where('api',['id' => $id])->row_array();
       
        
        // cek jika ada gambar yang di upload
        $upload_image = $_FILES['image'];

        if($upload_image) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '1048';
            $config['upload_path'] = './assets/img/api';
            $config['encrypt_name'] = TRUE;

           
          
            $this->load->library('upload', $config);
            
           if($this->upload->do_upload('image')) {
               $old_image = $data['api']['gambar'];
               $path = './assets/img/api/';

               if($old_image != 'default.jpeg') {
                   unlink(FCPATH.$path.$old_image);
               } 
               
               $new_image = $this->upload->data('file_name');
               $this->db->set('gambar',$new_image);

            } else {
                   $this->upload->display_errors();                
                   
               }
           }
           $data = [
                    "name" => $this->input->post('name', true),
                    "game" => $this->input->post('game',  true),
                    "kategori" => $this->input->post('kategori', true),
                    "status" => $this->input->post('status', true),
                    "tanggal" => $this->input->post('tanggal', true),
           ];
           $this->db->where('id', $this->input->post('id'));
           $this->db->update('api', $data);
    }

    public function deleteData($id)
    {
        $this->db->where($id);
        return $this->db->delete('api');
    }
}

   
