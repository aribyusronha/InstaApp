<?php

namespace App\Controllers;

use App\Models\Feed;

class Home extends BaseController
{
	protected $feedModel;
	protected $userModel;
	protected $komenModel;


	public function __construct()
	{
		$this->feedModel = new \App\Models\Feed();
		$this->userModel = new \App\Models\User();
		$this->komenModel = new \App\Models\Comment();
	}

	public function index()
	{
		$feed = $this->feedModel->join('users', 'users.id=feed.id')->findAll();
		$id = user_id();
		$data = [
			'id_user' => $id,
			'title' => 'Home',
			'feed' => $feed
		];

		return view('user/home', $data);
	}

	public function soon()
	{
		$data = [
			'title' => 'Coming Soon'
		];

		return view('soon', $data);
	}

	public function unggah()
	{
		$id = user_id();
		$data = [
			'id' => $id,
			'title' => 'Unggah',
		];

		return view('user/unggah', $data);
	}

	public function upload()
	{
		$gambar = $this->request->getFile('gambar');
		$caption = $this->request->getVar('caption');
		$gambar->move('img');
		$id = $this->request->getVar('id');
		$nama = $gambar->getName();

		$data = [
			'id' => $id,
			'gambar' => $nama,
			'caption' => $caption
		];

		$this->feedModel->insert($data);
		return redirect()->to(base_url('home/unggah'));
	}

	public function profil($id_user)
	{
		$feed = $this->feedModel->where('id', $id_user)->findAll();
		$data = [
			'title' => 'Profil',
			'feed'	=> $feed
		];

		return view('user/profil', $data);
	}

	public function komen()
	{
		$id_feed = $this->request->getVar('id_feed');
		$id_user = user_id();
		$komen = $this->request->getVar('komen');
		$data = [
			'id_feed' => $id_feed,
			'id_user' => $id_user,
			'komentar' => $komen
		];

		$this->komenModel->insert($data);
		return redirect()->to(base_url('home'));
	}
}
