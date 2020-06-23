<?php

function getAllStudents() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM leerlingen";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}


function getStudent($id){
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM leerlingen WHERE id = :id");
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