<?php


class DBController
{
    //database connection
    protected $host = '127.0.0.1';
    protected $user = 'root';
    protected $pass = '';
    protected $database = 'shop';

    //connection property
    public $con = null;

    /**
     * @return null
     */

    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->database);
        if ($this->con->connect_error)
        {
            echo 'Fail'.$this->con->connect_error;
        }
    }

    public function __destruct()
    {
       $this->closeConnection();
    }

    //closing connection
    protected function closeConnection()
    {
        if ($this->con != null)
        {
            $this->con->close();
            $this->con = null;
        }
    }

}




