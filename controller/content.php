<?php
include '../model/db.php';
session_start();
    class SaveContent extends Connection{

        public function setMusic($artist,$album,$track,$lyrics){

            $sql = "INSERT INTO tracks(artist, album, track_title, lyrics) VALUES ('$artist','$album','$track','$lyrics')";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();
             

        }
        public function getMusic(){

            $sql ="SELECT * FROM tracks ";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();
            $rows = $stmt->fetchAll();
            // var_dump($rows);
            foreach($rows as $row){

                echo "<thead>
                <tr>
                  <th>".  $row['artist']; "</th>
                  <th>Album</th>
                  <th>Track</th>
                  <th>Lyrics</th>
                  
                </tr>
              </thead>";
            }

            // foreach($rows as $row){
            //     echo $row['artist'] ."<br>";
            // }
             

        }




    }


$obj = new SaveContent();

$obj->getMusic();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $track = $_POST['track'];
    $lyrics = $_POST['lyrics'];

    if(!empty($_POST['artist']) && !empty($_POST['album']) && !empty($_POST['track']) && !empty($_POST['lyrics'])){
        $obj->setMusic($artist,$album,$track,$lyrics);

    }
    else{
        echo"<script>alert('lllll');</script>";
    }

}



?>