<?php
/**
 * Created by PhpStorm.
 * User: Marejean
 * Date: 8/20/16
 * Time: 1:18 PM
 */
session_start();

include_once "DatabaseConnector.php";
class ServerFunctions extends DatabaseConnector {
    function search($filter, $keyWord) {
        $this->open_connection();

        if($filter == "fullname") {
            $sql = $this->dbHolder->prepare("SELECT * FROM students WHERE ".$filter." LIKE ? ORDER BY ".$filter." ASC, program ASC,  std_id ASC;");
            $sql->execute(array("%".$keyWord."%"));

        } else if($filter == "program" OR $filter == "description") {
            $sql = $this->dbHolder->prepare("SELECT * FROM students WHERE ".$filter." LIKE ? ORDER BY ".$filter." ASC, std_id ASC, fullname ASC;");
            $sql->execute(array("%".$keyWord."%"));
        } else {
            $sql = $this->dbHolder->prepare("SELECT * FROM students WHERE ".$filter." LIKE ? ORDER BY ".$filter." ASC, program ASC, fullname ASC;");
            $sql->execute(array("%".$keyWord."%"));
        }

        $data = "";
        $count = 1;
        while($content = $sql->fetch()) {
            $data .= "<tr style='padding: 8px !important; border-bottom: 1px solid darkblue !important;'>
                        <td>".$count."</td>
                        <td>".$content[1]."</td>
                        <td>".$content[2]."</td>
                        <td>".$content[3]."</td>
                      </tr>";
                $count++;
        }

        if($data != "") {
            $data = "<tr>
                        <th style='padding: 8px;'>No.</th>
                        <th style='padding: 8px;'>ID</th>
                        <th style='padding: 8px;'>Full Name</th>
                        <th style='padding: 8px;'>Program</th>
                     </tr>".$data;
        } else {
            $data = "<tr><td>No result found;</td></tr>";
        }

        echo $data;

        $this->close_connection();
    }

    function loginUser($phoneNumber) {
        $this->open_connection();

        $sql = $this->dbHolder->prepare("SELECT * FROM users WHERE phoneNumber = ?;");
        $sql->execute(array($phoneNumber));

        $data = $sql->fetch();

        if($data[1] != "") {
            if($data[3] == 1) {
                $_SESSION["userId"] = $data[0];
                $_SESSION["phoneNumber"] = $data[1];
                echo "valid";
            } else {
                echo "Your phone number isn't verified yet. Please enter verification code below";
            }
        } else {
            echo "Your phone number isn't verified yet. Please submit it as register to receive a verifications code.";
        }



        $this->close_connection();
    }
} 