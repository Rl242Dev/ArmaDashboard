<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Mysqli;

class Query extends AbstractController
{
    public function number(): Response
    {
        $server_name = "PyrosLife";

        $servername = "127.0.0.1";
        $username = "rl242";
        $password = "31#Nigi2";
        $dbname = "ArmaPanel";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM ArmaPanel.ArmaData LIMIT 0,1;";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $gang = $row['gang'];
            $bank = $row['bank'];
            $weapon = $row['weapon'];
          }
        } else {
          $name = $row['null'];
          $gang = $row['null'];
          $bank = $row['null'];
          $weapon = $row['null'];
        }

        $sql = "SELECT * FROM ArmaPanel.ArmaData LIMIT 1,1;";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $name2 = $row['name'];
            $gang2 = $row['gang'];
            $bank2 = $row['bank'];
            $weapon2 = $row['weapon'];
          }
        } else {
          $name2 = $row['null'];
          $gang2 = $row['null'];
          $bank2 = $row['null'];
          $weapon2 = $row['null'];
        }

        $sql = "SELECT * FROM ArmaPanel.ArmaData LIMIT 7,1;";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $name3 = $row['name'];
            $gang3 = $row['gang'];
            $bank3 = $row['bank'];
            $weapon3 = $row['weapon'];
          }
        } else {
          $name3 = $row['null'];
          $gang3 = $row['null'];
          $bank3 = $row['null'];
          $weapon3 = $row['null'];
        }
        $conn->close();


        return $this->render('base.html.twig', [
          'server_name' => $server_name,
          'name1' => $name,
          'gang1' => $gang,
          'bank1' => $bank,
          'weapon1' => $weapon,
          'name2' => $name2,
          'gang2' => $gang2,
          'bank2' => $bank2,
          'weapon2' => $weapon2,
          'name3' => $name3,
          'gang3' => $gang3,
          'bank3' => $bank3,
          'weapon3' => $weapon3,
        ]);
        
    }
}