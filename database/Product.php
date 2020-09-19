<?php

//fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con))return null;

        $this->db = $db;
    }

    //Fetch Product Data
    public function getData($table = "product")
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        //Fetch All The Data From Product
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    //Get Id
    public function getProduct($item_id = null, $table = 'product')
    {
        if (isset($item_id)){

            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            //Fetch All The Data From Product
            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
}