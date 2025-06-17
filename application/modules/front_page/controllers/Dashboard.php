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
        $q = "SELECT * FROM t_media_category";
        $category = $this->db->query($q);
        $v_data['category'] = $category;

        $this->load->view('v_front',$v_data);
    }

}

/* End of file Dashboard */
/* Location: ./application/modules/wahana/controllers/Dashboard */
