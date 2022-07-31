<?php
include('../config/config.php');
include('../config/Database.php');

class user{
    public $conn;

    function __construct(){
        $db= new Database();
        $this->conn = $db->connectToDatabase();
    }

    function save($params){
        $firstName = $params['firstName'];
        $lastName = $params['lastName'];
        $sessionDate = $params['sessionDate'];
        $profession = $params['profession'];
        $career = $params['career'];
        $email = $params['email'];
        $comments = $params['comments'];

        $insert = " INSERT INTO informacion VALUES (NULL, '$firstName', '$lastName', '$sessionDate', '$profession', '$career', '$email', '$comments')";
        return mysqli_query($this->conn, $insert);
    }

    function getAll(){
        $sql = " SELECT * FROM informacion ORDER BY sessionDate ASC";
        return mysqli_query($this->conn, $sql);
    }

    function getOne($id){
        $sql = "SELECT * FROM informacion WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }

    function update($params){
        $firstName = $params['firstName'];
        $lastName = $params['lastName'];
        $sessionDate = $params['sessionDate'];
        $profession = $params['profession'];
        $career = $params['career'];
        $email = $params['email'];
        $comments = $params['comments'];

        $update = "UPDATE informacion SET firstName='$firstName', lastName='$lastName', sessionDate='$sessionDate', profession='$profession', career='$career', email='$email', comments='$comments'";
        return mysqli_query($this->conn, $update);
    }

    function remove($id){
        $remove = "DELETE FROM informacion WHERE id = $id";
        return mysqli_query($this->conn, $remove);
    }
}
?>