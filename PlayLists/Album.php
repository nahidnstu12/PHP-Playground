<?php
require_once './Song.php';

class Album{
    private $name;
    private $artist;
    
    function __construct($name="",$artist="",Song $song)
    {
        $this->name = $name;
        $this->artist = $artist;
        $this->title = $song->title;
        $this->duration = $song->duration;
    }
    function addSong($title,$duration){
        // if(findSong($title) == null){

        // }
    }
    // private function findSong($title){

    // }
}


?>