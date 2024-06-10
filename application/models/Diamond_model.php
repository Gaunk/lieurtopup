<?php

class Diamond_model extends CI_Model
{


    public function getAllDiamond()
    {
        $this->db->order_by('id', 'desc');
        return  $this->db->get('diamond')->result_array();

    }

    public function tambahDiamond($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

    public function getDiamondById($id)
    {
        return $this->db->get_where('diamond',['id' => $id])->row_array();
        
    }


    public function editDiamond($id)
    {
        $data['diamond'] = $this->db->get_where('diamond',['id' => $id])->row_array();
       
        
        // cek jika ada gambar yang di upload
        $upload_image = $_FILES['image'];

        if($upload_image) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '1048';
            $config['upload_path'] = './assets/img/diamond';
            $config['encrypt_name'] = TRUE;

           
          
            $this->load->library('upload', $config);
            
           if($this->upload->do_upload('image')) {
               $old_image = $data['diamond']['gambar'];
               $path = './assets/img/diamond/';

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
                    "event_diamond" => $this->input->post('event_diamond', true),
                    "kategori" => $this->input->post('kategori',  true),
                    "diamond" => $this->input->post('diamond', true),
                    "price" => $this->input->post('price', true),
           ];
           $this->db->where('id', $this->input->post('id'));
           $this->db->update('diamond', $data);
    }

    public function deleteData($id)
    {
        $this->db->where($id);
        return $this->db->delete('diamond');
    }
}

   
