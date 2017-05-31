<?php

class Model {

	function __construct() {
		$this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
	}
        public function uploadSound() {
        $path = "sounds/";
        $file = time().$_FILES['sound']['name'];
        $fileServer=$path.$file;
        move_uploaded_file($_FILES['sound']['tmp_name'], $fileServer);
        return $fileServer;
        
    }
        public function catalog(){
        $sth=$this->db->prepare("SELECT * FROM catalog");
        $sth->execute();
        return $sth->fetchAll();
    }
}