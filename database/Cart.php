<?php

//Cart Class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function InsertIntoCart($param = null, $table = "cart")
    {
        if ($this->db->con != null){
            if ($param != null){

                //Tables columns
                $columns = implode(",",array_keys($param));

                $values = implode(",",array_values($param));


                //Query insert
                $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)",$table,$columns,$values);

                $result = $this->db->con->query($query_string);

                return $result;
            }
        }
    }

    //User_id and Item_id
    public function addToCart($userid, $itemid)
    {
        if (isset($userid) && isset($itemid)){

            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            //insert into cart
            $result = $this->InsertIntoCart($params);
            if ($result){
                header("location:" .$_SERVER['PHP_SELF']);
                exit();
            }
        }
    }

    //Delete cart Item Item_id
    public function deleteCart($item_id = null, $table = 'cart')
    {
        if ($item_id != null){

            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");

            if ($result){
                header("location:" .$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    //Get item_id From Cart
    public function getCartId($cartArray = null, $key = 'item_id')
    {
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use ($key) {
                return $value[$key];
            },$cartArray);
            return $cart_id;
        }
    }


    //Calculate Sub Products
    public function getSum($arr)
    {
        if (isset($arr)){

            $sum = 0;

            foreach($arr as $item){

                $sum += floatval($item[0]);
            }

            return sprintf('%.2f', $sum);
        }
    }

    //Save the Item
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart")
    {
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id}; ";


            // execute multiple query
            $result = $this->db->con->query($query);

            if($result){
                header("Location :" .$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

}
