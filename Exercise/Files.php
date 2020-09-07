<?php

class Files {
    public $fileHandler;
    public $fileName;
    public $fileSize;
    public $fileFound;

    function __construct($fileName="")
    {
        $this->fileHandler = null;
        $this->fileFound = false;

        // ck if file exist
        if(file_exists($fileName)){
            if(is_file($fileName)){
                $this->fileFound=true;
            }
        }
        if($this->fileFound){
            $this->fileHandler = fopen($fileName,"r");
            $this->fileSize = filesize($fileName);
        }
        // $this->displayContent();
    }

    function displayContent(){
        
        echo "Calling-> ".$this->fileHandler." ".$this->fileSize." ".PHP_EOL;
    }
    function getContent(){
        if($this->fileFound){
            $content = fread($this->fileHandler,$this->fileSize);
            return $content;
        }else{
            return "No File Found";
        }
    }
    function __destruct()
    {
        if($this->fileFound){
            fclose($this->fileHandler);
            echo "file closed";
        }
    }
}

$file1 = new Files("test.php");
// $file1->displayContent();
echo $file1->getContent()

?>