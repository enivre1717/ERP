<?php
    class CDb {
        private $host="localhost";
        private $username="root";    // specify the sever details for mysql
        private $password="angzy1717";
        private $database="erp_db";
        private $myconn;

        function connectToDatabase(){

            $conn= mysql_connect($this->host,$this->username,$this->password);

            if(!$conn){
                die ("Cannot connect to the database");
            }else{
                $this->myconn = $conn;
            }

            return $this->myconn;

        }//connectToDatabase

        function selectDatabase(){
            mysql_select_db($this->database);  //use php inbuild functions for select database

            if(mysql_error()){

                echo "Cannot find the database ".$this->database;

            }    
        }//selectDatabase

        function closeConnection(){
            mysql_close($this->myconn);
        }//closeConnection
}
?>

