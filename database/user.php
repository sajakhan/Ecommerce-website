<?php

// Use to fetch product data
class user
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'user'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($id = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $id;
        }

        return $resultArray;
    }
        
    
//    public function deleteProduct($item_id = null, $table = 'product'){
//        if($item_id != null){
//            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
//            if($result){
//                header("Location:" . $_SERVER['PHP_SELF']);
//            }
//            return $result;
//        }
//    }

    // get product using item id
    public function getuser($user_id = null, $table= 'user'){
        if (isset($user_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id={$user_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($id = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $id;
            }

            return $resultArray;
        }
    }

}