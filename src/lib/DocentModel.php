<?php

function getAllTeachers() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM docenten";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}


function getTeacher($id){
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM docent WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
 }