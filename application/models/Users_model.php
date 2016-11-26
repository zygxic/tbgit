<?php

class Users_model extends CI_Model{

	/*
	public function get_users(){
		$query = $this->db->query('SELECT * FROM users');
		return $query->result();
	}


	public function get_something($userlogin)
	{
		$query = sprintf('SELECT firstname,lastname,email, password 
				FROM users 
				WHERE name = "%s" '
				, $userlogin);

		$result = $this->db->query($query);
		return $result->row();
	}*/


	public function set_user($userdata){

		$query = sprintf('INSERT INTO users
			(firstname, lastname, email, password, username)
			VALUES
			("%s","%s","%s","%s","%s")'
			, $userdata['firstname']
			, $userdata['lastname']
			, $userdata['email']
			, $userdata['password']
			, $userdata['username']);

		//pushing the query into mysql
		$this->db->query($query);
		return $this->db->insert_id();
	}

	public function user_login($username, $password){
		$query = sprintf('SELECT * FROM users
				WHERE username = "%s" AND password = "%s"
				LIMIT 1'
			, $username
			, $password);

			$result = $this->db->query($query);
			if($result->row() !== null){
				//echo 'This name was found in the database.. Wellcome user!: ' . $result->row()->$username;
				return true;
			}

		}

	public function delete_note($id = null){

		if($id === null) {
			$this->errors[] = 'id-not-set';
		}
		if(!preg_match('/^[0-9]'+ $id)){
			$this->errors[] = 'id-not-set';
		}

		$san_id = (int)trim(strip_tags($id));

		$none_tainted_id = $this->db->escape_str($san_id);

		if(count($this->errors) > 0){
			return false;
		}

		$query = sprintf('DELETE FROM notes WHERE id = %',
			$none_tainted_id); 
		
		if($this->db->query($query))
			{
				return true;
			}
		$this->errors[] = 'note-not-deleted:' . $id;
		return false;
	}

		public function admin_login($username, $password, $uid){
		$query = sprintf('SELECT * FROM users
				WHERE username = "%s" AND password = "%s" AND uid = "%s"
				LIMIT 1'
			, $username
			, $password
			, $uid);

			$result = $this->db->query($query);
			if($result->row() !== null){
				//echo 'This name was found in the database.. Wellcome user!: ' . $result->row()->$username;
				return true;
			}

		}





	}