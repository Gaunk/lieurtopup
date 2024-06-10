<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model', 'menu');
        $this->load->library('form_validation', 'url');
        $this->load->helper('text');
        global $slug;
        is_logged_in();
    }

	public function index()
	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['title'] = 'Lieur TopUp - Administrator';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin', $data);
		$this->load->view('admin/footer',);
	}

	public function role()
    {
    	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $data['title'] = 'Lieur TopUp - Role';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('role', $data);
		$this->load->view('admin/footer',);
    }


    public function roleAccess($role_id)
    {
        $this->load->model('Menu_model', 'menu');
        $data['title'] = 'Lieur TopUp - Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('roleakses', $data);
		$this->load->view('admin/footer',);
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('pesan', '<div class="text-center alert alert-success" role="alert">Access Changed!</div>');
    }

//////////////////////////////////////////////////////////
    // BLOCK API BELEKOK
//////////////////////////////////////////////////////////

    public function api()
    {
        $data['title'] = 'Lieur TopUp - Api';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['api'] = $this->db->get('user_api')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('api', $data);
        $this->load->view('admin/footer',);
    }
//////////////////////////////////////////////////////////
    // BLOCK TOPUP
//////////////////////////////////////////////////////////

public function topup()
    {
        $this->load->model('Diamond_model', 'diamond');
        $data['title'] = 'Lieur TopUp - Diamond';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['diamond'] = $this->diamond->getAllDiamond();

          $this->form_validation->set_rules('name_games','Nama games', 'required');
          $this->form_validation->set_rules('event_diamond','Event Diamond', 'required');
          $this->form_validation->set_rules('diamond','Diamond', 'required');
          $this->form_validation->set_rules('price','Harga', 'required');
         

          if($this->form_validation->run() == false) {
             $this->load->view('admin/header', $data);
             $this->load->view('admin/navbar', $data);
             $this->load->view('topup', $data);
             $this->load->view('admin/footer',);

          } else {
            $gambar = $_FILES['gambar']['name'];

            if ($gambar = '') {
            } else {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '1000';
                $config['upload_path'] = './assets/img/diamond/';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $this->session->set_flashdata('pesan', '
                        <div class="alert alert-danger text-center" role="alert">
                         Diamond gagal ditambahkan, mohon cek kembali!!
                         </div>
                        ');
                    redirect('admin/topup');
                } else {
                    $gambar = $this->upload->data('file_name', true);
                    $data = [
                        "name_games" => $this->input->post('name_games', true),
                        "event_diamond" => $this->input->post('event_diamond', true),
                        "diamond" => $this->input->post('diamond', true),
                        "price" => $this->input->post('price', true),
                        "gambar" => $gambar
                    ];
                }
                $this->diamond->tambahDiamond($data, 'diamond');
                $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                  <strong>Diamond!</strong> Sukses ditambahkan!!.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ');
                redirect('admin/topup');

          }
      }

        
    }
//////////////////////////////////////////////////////////
    // BLOCK GAMES
//////////////////////////////////////////////////////////

// public function games()
//     {
//         $data['title'] = 'Lieur TopUp - Games';
//         $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


//         $data['games'] = $this->db->get('user_games')->result_array();
//         $this->load->view('admin/header', $data);
//         $this->load->view('admin/navbar', $data);
//         $this->load->view('games', $data);
//         $this->load->view('admin/footer',);
//     }

public function games()
    {
        $this->load->model('Games_model', 'games');
        $data['title'] = 'Lieur TopUp - Games';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['games'] = $this->games->getAllGames();

          $this->form_validation->set_rules('name_games','Nama games', 'required');
          $this->form_validation->set_rules('slug','Slug', 'required');
          $this->form_validation->set_rules('kategori','Kategori games', 'required');
          $this->form_validation->set_rules('status','Status', 'required');
          $this->form_validation->set_rules('url','Url', 'required');
         

          if($this->form_validation->run() == false) {
             $this->load->view('admin/header', $data);
             $this->load->view('admin/navbar', $data);
             $this->load->view('games', $data);
             $this->load->view('admin/footer',);

          } else {
            $gambar = $_FILES['gambar']['name'];

            if ($gambar = '') {
            } else {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $config['upload_path'] = './assets/img/games/';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $this->session->set_flashdata('pesan', '
                        <div class="alert alert-danger text-center" role="alert">
                         Games gagal ditambahkan, cek kembali ukuran gambar dan tipe file gambar!
                         </div>
                        ');
                    redirect('admin/games');
                } else {
                    $gambar = $this->upload->data('file_name', true);
                    $slug = url_title($this->input->post('slug'), 'dash' , TRUE);
                    $data = [
                        "name_games" => $this->input->post('name_games', true),
                        "slug" => $slug,
                        "kategori" => $this->input->post('kategori', true),
                        "status" => $this->input->post('status', true),
                        "url" => $this->input->post('url', true),
                        "gambar" => $gambar
                    ];
                }
                $this->games->tambahGames($data, 'games');
                $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                  <strong>games!</strong> Sukses ditambahkan!!.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ');
                redirect('admin/games');

          }
      }

    }


    
//////////////////////////////////////////////////////////
    // BLOCK PROFILE
//////////////////////////////////////////////////////////

    public function profile()
    {
        $data['title'] = 'Lieur TopUp - Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
        $this->load->view('admin/header', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('profile', $data);
        $this->load->view('admin/footer',);
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '10000';
                $config['upload_path'] = './assets/_temp/assets/images/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/_temp/assets/images/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('pesan', '
                        <div class="alert alert-danger text-center" role="alert">
                         Profile gagal Upload, cek kembali ukuran gambar dan tipe file gambar!
                         </div>
                        ');
                    redirect('admin/profile');
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
            redirect('admin/profile');
        }
    }


//////////////////////////////////////////////////////////
    // BLOCK CHANGE PASSWORD
//////////////////////////////////////////////////////////

    public function changePassword()
    {
        $data['title'] = 'Lieur TopUp - Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Beranda - Layanan Topup Official';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('profile', $data);
        $this->load->view('admin/footer',);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('admin/profile');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('admin/profile');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('admin/profile');
                }
            }
        }
    }


//////////////////////////////////////////////////////////
    // BLOCK MENU
//////////////////////////////////////////////////////////
    public function menu()
    {
        $data['title'] = 'Lieur TopUp - Menu';
         $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('menu', $data);
            $this->load->view('admin/footer',);
        }else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Menu baru ditambahkan!</div>');
            redirect('admin/menu');
        }
    
        
    }

    public function hapusMenu($id)
    {
        $this->load->model('Menu_model', 'user_menu');
        $id = [
            'id' => $id
        ];
        $this->user_menu->deleteDataMenu($id);
        redirect('admin/menu');
    }
//////////////////////////////////////////////////////////
    // BLOCK SUBMENU
//////////////////////////////////////////////////////////

    public function submenu()
    {
        $this->load->model('Menu_model', 'menu');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['title'] = 'Lieur TopUp - Submenu';
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/navbar', $data);
            $this->load->view('submenu', $data);
            $this->load->view('admin/footer',);
        }else{
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            redirect('admin/submenu');
        }
        
    }

    public function hapusSubMenu($id)
    {
        $this->load->model('Menu_model', 'user_sub_menu');
        $id = [
            'id' => $id
        ];
        $this->user_sub_menu->deleteDatasubMenu($id);
        redirect('admin/submenu');
    }

//////////////////////////////////////////////////////////
    // BLOCK PRODUK
//////////////////////////////////////////////////////////

    public function produk()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Lieur TopUp - Produk';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('produk', $data);
        $this->load->view('admin/footer',);
    }
}
