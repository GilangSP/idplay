<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	public function getSubMenu()
	{
		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
				  FROM `user_sub_menu` JOIN `user_menu`
				  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
				";
		return $this->db->query($query)->result_array();
	}

	// Data Menu
	public function deleteMenuById($id)
	{
		return $this->db->delete('user_menu', ['id' => $id]);
	}

	public function editMenuById($id, $data)
	{
		return $this->db->where('id', $id)->update('user_menu', $data);
	}

	// Data Sub Menu
	public function deleteSubMenuById($id)
	{
		return $this->db->delete('user_sub_menu', ['id' => $id]);
	}

	public function editSubMenuById($id, $data)
	{
		return $this->db->where('id', $id)->update('user_sub_menu', $data);
	}

	// Data Role
	public function deleteRoleById($id)
	{
		return $this->db->delete('user_role', ['id' => $id]);
	}

	public function editRoleById($id, $data)
	{
		return $this->db->where('id', $id)->update('user_role', $data);
	}

	// Data User
	public function editUserById($id, $data)
	{
		return $this->db->where('id', $id)->update('user', $data);
	}

	public function editPasswordUserById($id, $data)
	{
		return $this->db->where('id', $id)->update('user', $data);
	}

	public function getAutoSearch($keyword)
	{
		$query = "SELECT * FROM pelanggan WHERE cid LIKE '%" . $keyword . "%' ORDER BY cid LIMIT 10
		";
		return $this->db->query($query)->result_array();
	}

	// Data Sub Menu
	public function editPelangganById($id, $data)
	{
		return $this->db->where('cid', $id)->update('pelanggan', $data);
	}

	public function deletePelangganById($id)
	{
		return $this->db->delete('pelanggan', ['cid' => $id]);
	}

	public function KeluhanPelanggan(){
		$this->db->select('*');
		$this->db->from("keluhan k");
		$this->db->join('pelanggan p','k.id_p=p.cid','left');
		return $this->db->get();
	}

	public function getArtikel()
	{
		$query = "SELECT `berita`.*, `user_role`.`role`
		FROM `berita` JOIN `user_role`
		ON `berita`.`id_role` = `user_role`.`id`
		";
		return $this->db->query($query)->result_array();
	}

	//fetch books
	function get_beritas($limit, $start, $st = NULL)
	{
		if ($st == "NIL") $st = "";
		$sql = "SELECT `berita`.*, `user_role`.`role`
				FROM `berita` JOIN `user_role`
				ON `berita`.`id_role` = `user_role`.`id` WHERE judul LIKE '%$st%' ORDER BY
				`berita`.`id` DESC LIMIT " . $start . ", " . $limit;
		$query = $this->db->query($sql);
		return $query->result();
	}

	function get_beritas_count($st = NULL)
	{
		if ($st == "NIL") $st = "";
		$sql = "SELECT `berita`.*, `user_role`.`role`
				FROM `berita` JOIN `user_role`
				ON `berita`.`id_role` = `user_role`.`id` WHERE judul LIKE '%$st%'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	public function getArtikelDetail($id)
	{
		$query = "SELECT `berita`.*, `user_role`.`role`
		FROM `berita` JOIN `user_role`
		ON `berita`.`id_role` = `user_role`.`id` WHERE `berita`.`id` = '$id'
		";
		return $this->db->query($query)->row_array();
	}
}
