<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbConnection
 *
 * @author aashgar
 */
class dbConnection {
    //put your code here
    private $connection;
    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "root", "university")
                or die("Error Connection ...");
    }
    public function verifyUser($userName,$password) {
  $rs = $this->connection->multi_query("Select * From Users Where userName="
                . "'$userName' and password='$password'");
        if (mysqli_num_rows($rs) != 0)
            return TRUE;
        else
            return FALSE;

//        $rs = $this->connection->prepare("Select * From Users Where userName="
//                . " ? and password=?");
//        $rs->bind_param("ss", $userName,$password);
//        $rs->execute();
//        if($rs->fetch() != 0)
//                return TRUE;
//        else
//            return FALSE;
    }
}
