<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			// $this->lang->load('app_lang', 'english');
            $this->load->model('M_t_media_category');
	}

    public function index()
    {
        // $this->load->model('M_t_media_category');
        $q = "SELECT * FROM t_media_category ORDER BY order ASC";
        $category = $this->db->query($q);
        $v_data['category'] = $category;

        $this->load->view('v_front',$v_data);
    }

    public function media_category($id){
        $q = "SELECT * FROM t_media WHERE media_category='".$id."'";
        $media = $this->db->query($q);
        $v_data['media'] = $media;

        $this->load->view('v_media',$v_data);
    }

    public function show_search(){
        $keyword = $this->input->post('s_keyword');
        $q = "SELECT * FROM t_media WHERE media_title LIKE '%".$keyword."%'";
        $media = $this->db->query($q);
        $v_data['media'] = $media;

        $this->load->view('v_media',$v_data);
    }

    public function media_search(){
        $keyword = $this->input->get('term');
        $q = "SELECT * FROM t_media WHERE media_title LIKE '%".$keyword."%' ";
        $media = $this->db->query($q);

        $suggestions = [];
        foreach ($media->result() as $r) {
            $suggestions[] = $r->media_title;
        }

        echo json_encode($suggestions);
    }

    public function showplayer($id){
        $q = "SELECT * FROM t_media WHERE media_id='".$id."'";
        $media = $this->db->query($q);
        $v_data['media'] = $media;

        $this->load->view('v_player2',$v_data);
    }

}

/* End of file Dashboard */
/* Location: ./application/modules/wahana/controllers/Dashboard */
