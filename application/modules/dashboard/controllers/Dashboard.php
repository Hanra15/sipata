<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

	public function index()
	{
		$token = $this->session->userdata['token'];
		$page_content["css"] = "";
		$page_content["js"] = "";
		$page_content["title"] = "Dashboard | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
		$page_content["head"] = "Dashboard";
		$page_content["breadcrumb"] = "Dashboard";
		$page_content["page"] = "dashboard/dashboard_view";

		$getNews = guzzle_request('GET', 'newspagenation?token=' . $token, []);
		$data['get_berita'] = $getNews['data'];

		$getCount = guzzle_request('GET', 'open/count_pelayanan', []);
		$data['getCount'] = $getCount['data'];

		$getCCTV = guzzle_request('GET', 'cctv?token=' . $token, []);
		$data['getCCTV'] = $getCCTV['data'];
		$data['getCountCCTV'] = $getCCTV['total_data'];

		$page_content["data"] = $data;
		// var_dump($page_content["data"]);
		// die;

		$this->templates->loadTemplate($page_content);
	}
	public function getCCTV()
	{
		$url = 'open/cctv';
		$getCCTV = guzzle_request('GET', $url, []);

		$getCCTV = $getCCTV['data'];

		$data = $getCCTV;


		echo json_encode($data);
	}
}
