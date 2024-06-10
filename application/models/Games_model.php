<?php

class Games_model extends CI_Model
{
    // PAGINATION
    

    // BATAS

    // public function getAllPekerjaan()
    // {
    //     $this->db->order_by('id_pekerjaan', 'desc');
    //     return  $this->db->get('user_pekerjaan')->result_array();
    // }

    // public function getAllPekerjaanJoin()
    // {
    //      $this->db->select('*');
    //      $this->db->from('user_pekerjaan');
    //      $this->db->join('testimonials','testimonials.id_pekerjaan=user_pekerjaan.id_pekerjaan');
    //      $query = $this->db->get();
    //      return $query->result_array();
    // }

            public function get_data_by_id($id) {
                $query = $this->db->get_where('games', array('id_games' => $id));
                return $query->row();
            }



    public function getAllGames()
    {
        $this->db->order_by('id_games', 'desc');
        return  $this->db->get('games')->result_array();

    }

    public function tambahGames($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

    public function getGamesById($id)
    {
        return $this->db->get_where('games',['id_games' => $id])->row_array();
        
    }


    public function getGamesBySlug($name_games)
    {
        
         $query = $this->db->get_where('games', array('slug' => $name_games));
        return $query->row_array();

        



    }

    public function editGames($id)
    {
        $data['games'] = $this->db->get_where('games',['id_games' => $id])->row_array();
       
        
        // cek jika ada gambar yang di upload
        $upload_image = $_FILES['image'];

        if($upload_image) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '1048';
            $config['upload_path'] = './assets/img/games';
            $config['encrypt_name'] = TRUE;

           
          
            $this->load->library('upload', $config);
            
           if($this->upload->do_upload('image')) {
               $old_image = $data['games']['gambar'];
               $path = './assets/img/games/';

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
                    "name_games" => $this->input->post('name_games', true),
                    "slug" => $this->input->post('slug', true),
                    "kategori" => $this->input->post('kategori',  true),
                    "status" => $this->input->post('status', true),
                    "url" => $this->input->post('url', true),
           ];
           $this->db->where('id_games', $this->input->post('id_games'));
           $this->db->update('games', $data);
    }

    public function deleteData($id)
    {
        $this->db->where($id);
        return $this->db->delete('games');
    }
}

   
