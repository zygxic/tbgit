<?php

class User extends CI_Controller{
	
	/*
	public function indexx()
	{
		$this->load->library('form_validation');


		$this->form_validation->set_rules('username', 'Username', 'required|valid_email|min_length[5]');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

		if($this->form_validation->run() === true){
			echo 'Nice job';
		} else {
			echo 'Bad job';
		}

		$this->load->view('login_view');
	}


	public function test(){
		$this->load->helper('date');

		echo mdate('%Y-%M-%d', time());	
	}

	public function url(){
		$this->load->helper('url');

		echo base_url();
	}

	public function userlist(){
		$this->load->model('users_model');
	

		$users = $this->users_model->get_users();

		$this->load->view('userlist_view', ['users' => $users,
		]);
	} */

	public function userinfo(){
		$this->load->view('register_view');
		//$name = $this->input->post("name");
		//$lastname = $this->input->post("lastname");		
		//$email = $this->input->post("email");
		//$password = $this->input->post("password");

		$this->load->library("form_validation");

		$this->form_validation->set_rules('firstname', 'Username', 'required|min_length[3]');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');

		if($this->form_validation->run() === true){
			echo 'good good <br>';
				$user = $this->input->post();
		
				$this->useradd($user);
		} else {
			echo 'not good';
		}
	}

	public function useradd($para){
		$this->load->model('users_model');
		$this->users_model->set_user($para);
		echo "You have now been registered, Thank you!";
	}



	public function userlogin(){
		
		$this->load->view('login_view');
		$this->load->helper('url');
		$this->load->library("form_validation");
		//$this->load->library('session');

		$this->form_validation->set_rules('username', 'Username');
		$this->form_validation->set_rules('password', 'Password');		


			$username = $this->input->get("username");
			$password = $this->input->get("password");

			echo 'testing: ' . $username . '<br>';
			echo 'testing: ' . $password;

			$this->load->model('users_model');
			$resultrow = $this->users_model->user_login($username, $password);
			if($resultrow === true){
				//$sessiondata = $this->input->get();
				//$this->load->view('random_view', $sessiondata);
				echo '<br> Wellcome username: ' . $username;
				$this->load->helper('url');

				//also select all news from news table
				$this->load->view('index_view');
			} else {
				echo '<br> Please login.';
			}

		/*echo 'something ';
		if($this->form_validation->run() === true){
			echo 'inside if <br>';
			$firstname = $this->input->get("firstname");
			$password = $this->input->get("password");

			$this->load->model('users_model');
			$resultrow = $this->user_login($firstname, $password);
			echo $resultrow;
		} else {
			echo 'not good';
		}*/


		//$this->users_model->user_login();
	}


	public function adminlogin(){

		$this->load->view('adminlogin_view');
		$this->load->helper('url');
		$this->load->library("form_validation");
		//$this->load->library('session');

		$this->form_validation->set_rules('username', 'Username');
		$this->form_validation->set_rules('password', 'Password');
		$this->form_validation->set_rules('uid', 'Userid');		


			$username = $this->input->get("username");
			$password = $this->input->get("password");
			$uid 	  = $this->input->get("uid");

			//echo $username . '<br>';
			//echo $password . '<br>';
			//echo $uid;

			$this->load->model('users_model');
			$resultrow = $this->users_model->user_login($username, $password, $uid);
			if($resultrow === true){
				//$sessiondata = $this->input->get();
				//$this->load->view('random_view', $sessiondata);
				echo '<br> Wellcome admin: ' . $username;
				$this->load->helper('url');
				$this->load->view('register_view');
			} else {
				echo '<br> Admin please login';
			}

	}








}



