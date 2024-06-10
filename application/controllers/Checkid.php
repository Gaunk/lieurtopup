<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkid extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('curl');
        
    }

    public function get_users() {
        $id = $this->input->post('id');
        $zone = $this->input->post('zone');
        $url = 'https://api.isan.eu.org/nickname/ml?id=' . $id . '&zone=' . $zone;
        $response = $this->curl->simple_get($url);
        $data['users'] = json_decode($response, true);
        
        $this->load->view('users_view', $data);
    }

    public function get_user($id) {
        $url = 'https://api.example.com/user/' . $id;
        $response = $this->curl->simple_get($url);
        $data['user'] = json_decode($response, true);
        $this->load->view('user_view', $data);
    }

    public function create_user() {
        $url = 'https://api.example.com/user';
        $params = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $response = $this->curl->simple_post($url, $params);
        echo $response;
    }

    public function update_user($id) {
        $url = 'https://api.example.com/user/' . $id;
        $params = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $response = $this->curl->simple_put($url, $params);
        echo $response;
    }

    public function delete_user($id) {
        $url = 'https://api.example.com/user/' . $id;
        $response = $this->curl->simple_delete($url);
        echo $response;
    }
}