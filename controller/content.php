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
            return $rows;

        }

        public function deleteMusic($id){

            $sql = "DELETE  FROM tracks WHERE id= '$id' ";
            $stmt = $this->conn->prepare($sql);
            $stmt -> execute();



        }

        public function updateMusic($id,$artist,$album,$track,$lyrics){
           
                if(isset($artist)){

                    echo $artist;
                }

            $sql = "UPDATE tracks SET artist='$artist',album='$album',track_title='$track',lyrics='$lyrics'  WHERE id='$id' ";
            $stmt = $this->conn->prepare($sql);
            
            // $stmt->bindValue(':value1', $newValue1);
            // $stmt->bindValue(':value2', $newValue2);
            // $stmt->bindValue(':id', $id);

            $stmt -> execute();

        }
    }


$obj = new SaveContent();

$obj->getMusic();

    if(!empty($_POST['artist']) && !empty($_POST['album']) && !empty($_POST['track']) && !empty($_POST['lyrics'])){
        
        $artist = $_POST['artist'];
        $album = $_POST['album'];
        $track = $_POST['track'];
        $lyrics = $_POST['lyrics'];


            $obj -> setMusic($artist,$album,$track,$lyrics);

        }
        else{
        $_SESSION['form'] = 'complet the form'; //modal form validation must be done 
    }



    if(isset($_POST['delete'])){
        // if(isset($_POST['delete'])){

            $id = $_POST['id'];
            $obj->deleteMusic($id);

        }

        
    if(!empty($_POST['u_artist']) && !empty($_POST['u_album']) && !empty($_POST['u_track']) && !empty($_POST['u_lyrics'])){
           
        
            $id = $_POST['id'];
            $u_artist = $_POST['u_artist'];
            $u_album = $_POST['u_album'];
            $u_track = $_POST['u_track'];
            $u_lyrics = $_POST['u_lyrics'];
            $obj -> updateMusic($id,$u_artist,$u_album,$u_track,$u_lyrics);



    }





?>