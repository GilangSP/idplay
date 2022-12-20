<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'mm');
		$this->load->model('Management_user_model', 'mu');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['user'] = $this->mu->getUserRolePetugas();
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
		// $data['artikel'] = $this->mm->getArtikel();

		//pagination settings
		$config['base_url'] = site_url('pelayanan/artikel');
		$config['total_rows'] = $this->db->count_all('berita');
		$config['per_page'] = "6";
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '«';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '»';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// get books list
		$data['beritalist'] = $this->mm->get_beritas($config["per_page"], $data['page'], NULL);

		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/artikel', $data);
		$this->load->view('templates/frondendFooter');
	}

	function search()
	{
		$data['title'] = 'Artikel';
		// get search string
		$search = ($this->input->post("berita_name")) ? $this->input->post("berita_name") : "NIL";

		$search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

		// pagination settings
		$config = array();
		$config['base_url'] = site_url("pelayanan/search/$search");
		$config['total_rows'] = $this->mm->get_beritas_count($search);
		$config['per_page'] = "6";
		$config["uri_segment"] = 4;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '«';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '»';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		// get books list
		$data['beritalist'] = $this->mm->get_beritas($config['per_page'], $data['page'], $search);

		$data['pagination'] = $this->pagination->create_links();

		//load view
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/artikel', $data);
		$this->load->view('templates/frondendFooter');
	}

	public function detailArtikel($id)
	{
		$data['title'] = 'Artikel';
		$data['artikel'] = $this->mm->getArtikelDetail($id);

		//pagination settings
		$config['base_url'] = site_url('pelayanan/artikel');
		$config['total_rows'] = $this->db->count_all('berita');
		$config['per_page'] = "3";
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// integrate bootstrap pagination
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '«';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '»';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['beritalist'] = $this->mm->get_beritas($config["per_page"], 3, NULL);
		$this->load->view('templates/frondendHeader', $data);
		$this->load->view('pelayanan/artikel_detail', $data);
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
