<?php
	class Pages extends Controller{
		public function __construct(){

		}

		public function about(){
			$data = [
				'title' => 'about us'
				
			];
			$this->view('about', $data);
		}

		public function index(){
			$data = [
				'title' => 'Welcome'
				
			];
			$this->view('index',$data);
		}
	}