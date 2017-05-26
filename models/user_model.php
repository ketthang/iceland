<?php

class User_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function userList()
	{
		$sth = $this->db->prepare('SELECT id, login, role FROM user');
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function userSingleList($id)
	{
		$sth = $this->db->prepare('SELECT id, login, role FROM user WHERE id = :id');
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
	}
	
	public function create($data)
	{
		$this->db->insert('user', array(
			'login' => $data['login'],
			'password' => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		));
	}
	
	public function editSave($data)
	{
		$postData = array(
			'login' => $data['login'],
			'password' => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		);
		
		$this->db->update('user', $postData, "`id` = {$data['id']}");
	}
	
	public function delete($id)
	{
            
            $sth = $this->db->prepare('SELECT role FROM user WHERE id = :id');
		$sth->execute(array(
			':id' => $id
		));
                $role= $sth->fetch();
                if ($role['role']=='owner') {
                    return FALSE;
                } 
		$sth = $this->db->prepare('DELETE FROM user WHERE id = :id');
		$sth->execute(array(
			':id' => $id
		));
	}
}