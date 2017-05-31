<?php

class Admin_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function xhrInsert() {
        $txtVietnam = $_POST['txtVietnam'];
        $txtIceland = $_POST['txtIceland'];
        $this->db->insert('data', array('vietnam' => $txtVietnam, 'iceland' => $txtIceland));

//		$data = array('text' => $text, 'id' => $this->db->lastInsertId());
//		echo json_encode($data);
    }



    public function xhrGetListings() {
        $result = $this->db->select("SELECT * FROM data");
        echo json_encode($result);
    }

    public function create($data) {

        $this->db->insert('hurt', array(
            'vietnam' => $data['vietnam'],
            'iceland' => $data['iceland'],
            'image' => $data['image'],
            'sound'=>$data['sound']
        ));
    }
    public function catalogAdd($data){
        $this->db->insert('catalog', array('nameIS'=>$data['nameIS'],
                                           'nameVN'=>$data['nameVN'],
                                           'image'=>$data['image'],
                                           'link'=>$data['link']));
    }

    public function uploadSound() {
        $path = "sounds/";
        $file = time().$_FILES['sound']['name'];
        $fileServer=$path.$file;
        move_uploaded_file($_FILES['sound']['tmp_name'], $fileServer);
        return $fileServer;
        
    }

    public function uploadImage() {
        // Ấn định  dung lượng file ảnh upload
        define("MAX_SIZE", "100");

// hàm này đọc phần mở rộng của file. Nó được dùng để kiểm tra nếu
// file này có phải là file hình hay không .
        function getExtension($str) {
            $i = strrpos($str, ".");
            if (!$i) {
                return "";
            }
            $l = strlen($str) - $i;
            $ext = substr($str, $i + 1, $l);
            return $ext;
        }

//This variable is used as a flag. The value is initialized with 0 (meaning no
// error  found)
//and it will be changed to 1 if an errro occures.
//If the error occures the file will not be uploaded.
        $errors = 0;
//checks if the form has been submitted
// lấy tên file upload
        $image = $_FILES['image']['name'];
// Nếu nó không rỗng
        if ($image) {
// Lấy tên gốc của file
            $filename = stripslashes($_FILES['image']['name']);
//Lấy phần mở rộng của file
            $extension = getExtension($filename);
            $extension = strtolower($extension);
// Nếu nó không phải là file hình thì sẽ thông báo lỗi
            if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
// xuất lỗi ra màn hình
                echo '<h1>Đây không phải là file hình!</h1>';
                $errors = 1;
            } else {
//Lấy dung lượng của file upload
                $size = filesize($_FILES['image']['tmp_name']);
                if ($size > MAX_SIZE * 1024) {
                    echo '<h1>Vượt quá dung lượng cho phép!</h1>';
                    $errors = 1;
                }

// đặt tên mới cho file hình up lên
                $image_name = time() . '.' . $extension;
// gán thêm cho file này đường dẫn
                $newname = "images/" . $image_name;
// kiểm tra xem file hình này đã upload lên trước đó chưa
                $copied = copy($_FILES['image']['tmp_name'], $newname);
                if (!$copied) {
                    echo '<h1> File hình này đã tồn tại </h1>';
                    $errors = 1;
                }
                return $newname;
            }
        }


        if (!$errors) {
            echo "<h1>File hình đã được Upload thành công </h1>";
        }
    }

    public function xhrDeleteListing() {
        $id = (int) $_POST['id'];
        $this->db->delete('data', "id = '$id'");
    }

}
