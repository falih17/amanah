<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_before_update extends CI_Model {

	public function t_media($id,$data)
	{
		// var_dump($data);
		$data_id = $id;
		$w = array(
			'id' => $data_id
		);
		$this->db->where($w);
		$t = $this->db->get('t_media');
		$t = $t->row();
		$file_exist_uploaded = $t->media_file;
		$lokasi_file = "./uploads/media/".$file_exist_uploaded;
		if(!empty($data['media_file'])){
			if(file_exists($lokasi_file)){
				unlink($lokasi_file);
			}
		}

		$file_exist_uploaded = $t->media_file2;
		$lokasi_file = "./uploads/media/".$file_exist_uploaded;
		if(!empty($data['media_file2'])){
			if(file_exists($lokasi_file)){
				unlink($lokasi_file);
			}
		}

		$file_exist_uploaded = $t->media_thumbnail;
		$lokasi_file = "./uploads/thumbnail/".$file_exist_uploaded;
		if(!empty($data['media_thumbnail'])){
			if(file_exists($lokasi_file)){
				unlink($lokasi_file);
			}
		}

		return $data;
	}

	// public function m_user($id,$data)
	// {
	// 	$w = array(
	// 		'user_id !=' => $id,
	// 		'm_staff_id' => $data['m_staff_id'],
	// 	);
	// 	$this->db->where($w);
	// 	$t= $this->db->get('m_user');

	// 	if ($t->num_rows()>0) {
	// 		$res['success'] = false;
 //            $res['message'] = 'Staff sudah ada';
 //            $this->output->set_content_type('application/json')->_display(json_encode($res));
 //            die();
	// 	}

	// 	$multi_site_arr = $this->input->post('user_siteid[]');
	// 	foreach ($multi_site_arr as $value) {
	// 		$data['siteid'] = $value;
	// 		break;
	// 	}

	// 	return $data;
	// }

}

/* End of file M_before_insert.php */
/* Location: ./application/modules/formx_custom/models.php/M_before_insert.php */
