<?php
require_once 'common/database.php';
//require_once ("../../common/session_validator.php");

class CFiles {

    private $_dir = '';

    /**
     * constructor CFiles - System Core
     */
    public function __construct($upload_dir = '_uploaded') {
        $this->_dir=$upload_dir;
    }

    public function getFiles($files) { 
        $ret = array();
        $data=get_rows("SELECT id,file_name,file_label,file_type,file_extension FROM file WHERE files=:files", array(":files"=>$files));
        if($data!=NULL){
            foreach ($data as $row){
                $ret[$row['file_name']]['id']=$row['id'];
                $ret[$row['file_name']]['file_name']=$row['file_name'];
                $ret[$row['file_name']]['file_label']=$row['file_label'];
                $ret[$row['file_name']]['file_extension']=$row['file_extension'];
                $ret[$row['file_name']]['file_type']=str_replace("/", "_",$row['file_type']);
            }
        }
        return $ret;
    }

    function generateRandomString($length = 20,$hash_code=false) {     
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        do{
            $randomString = '';     
            for ($i = 0; $i < $length; $i++) {         
                $randomString .= $characters[rand(0, strlen($characters) - 1)];    
            }
            if($hash_code){
                $data= get_row("SELECT * FROM page p WHERE p.page_files=:random",array(":random"=>$randomString));
            }else{
                $data= get_row("SELECT * FROM file f WHERE f.file_name=:random",array(":random"=>$randomString));
            }
        }while($data!=NULL);  
        return $randomString; 
    }

    public function uploadFile($hash_code,$file_name,$file_label,$file_type,$file_extension,$user_id) {
        return insert("INSERT INTO file (files,file_name,file_label,file_type,file_extension,created_user_id) 
                VALUES (:hash, :file_name, :file_label, :file_type, :file_extension, :created_user_id)" 
                , array(
                    ":hash" => $hash_code,
                    ":file_name" => $file_name,
                    ":file_label" => $file_label,
                    ":file_type" => $file_type,
                    ":file_extension" => $file_extension,
                    ":created_user_id" => $user_id
                    )
        );
    }

    
    public function getMostDownloaded($limit=10){
        $sql = "SELECT * from file f JOIN (SELECT file_id FROM t_file_downloads GROUP BY file_id ORDER BY COUNT(*) DESC LIMIT ".$limit.") as d WHERE f.id=d.file_id";
        $data = get_rows($sql);
        if($data!=NULL){
            foreach ($data as $row){
                $ret[$row['file_name']]['id']=$row['id'];
                $ret[$row['file_name']]['file_name']=$row['file_name'];
                $ret[$row['file_name']]['file_label']=$row['file_label'];
                $ret[$row['file_name']]['file_type']=str_replace("/", "_",$row['file_type']);
                $ret[$row['file_name']]['file_extension']= $row['file_extension'];
                
            }
        }
        return $ret;
        
    }
    
    
    public function getFilesFromPage($page_id){
        $sql = "SELECT page_files FROM page WHERE id=:page_id";
        $data = get_row($sql,array(":page_id"=>$page_id));
        return $this->getFiles($data);
    }
}

?>
