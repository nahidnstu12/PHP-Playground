<?php 

class Song{
    private $title;
    private $duration;

    /**
     * Class constructor.
     */
    public function __construct($title,$duration)
    {
        $this->title = $title;
        $this->duration = $duration;
    }
    function getTitle(){
        return $this->title;
    }
    function toString(){
        return "$this->title: $this->duration";
    }
}

?>