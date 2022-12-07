<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'mm');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/index', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function doUpload()
	{
		$upload_image = $_FILES['image_1']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|heic|heif';
			$config['max_size'] = '5048';
			$config['upload_path'] = './assets/img/keluhan/';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image_1')) {
				$new_image = $this->upload->data('file_name');
				$data = [
					'id_p' => $this->input->post('cid'),
					'keluhan' => $this->input->post('jp'),
					'gambar' => $new_image,
					'validasi' => 1,
				];
				$result = $this->db->insert('keluhan', $data);
				echo json_decode($result);
			} else {
				echo `
				<script type="text/javascript">
					alert("error2.");
				</script>`;
				echo $this->upload->display_errors();
			}
		} else {
			echo `
			<script type="text/javascript">
				alert("error1.");
			</script>`;
		}
	}


	public function getDPelangan()
	{
		$keyword = $_GET['query'];
		$data = $this->mm->getAutoSearch($keyword);
		$datane = [];
		foreach ($data as $d) {
			$row = array();
			$row['value'] = $d['cid'];
			$row['nama'] = $d['cid'];
			$row['name'] = $d['nama'];
			$row['alamat'] = $d['alamat'];
			$datane[] = $row;
		}
		$output = array(
			"suggestions" => $datane,
		);

		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function getChekDPelangan()
	{
		$keyword = $_POST['query'];
		$data = $this->mm->getAutoSearch($keyword);

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function keluhan()
	{
		$data['title'] = 'Keluhan';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/keluhan', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function informasi_keluhan()
	{
		$data['title'] = 'Informasi Keluhan';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/informasi_keluhan', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function artikel()
	{
		$data['title'] = 'Artikel';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/artikel', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function tentang_kami()
	{
		$data['title'] = 'Tentang Kami';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/tentang_kami', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function hubungi_kami()
	{
		$data['title'] = 'Hubungi Kami';
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/hubungi_kami', $data);
		$this->load->view('templates/frondendFooter');
	}
}
