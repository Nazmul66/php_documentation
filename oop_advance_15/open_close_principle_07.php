<?php

// principle structure way to code dependency injection

class FileDisplay {
    function display(fileInterface $files) {
        $files->display();
    }
}

interface fileInterface{
    function display();
}

class AudioPlayer implements fileInterface {
    function display(){
        echo "AudioPlayer \n";
    }
}

class VideoPlayer implements fileInterface {
    function display(){
        echo "VideoPlayer \n";
    }
}

class ImageFile implements fileInterface {
    function display(){
        echo "ImageFile \n";
    }
}

$audioPlayer = new AudioPlayer();
$videoPlayer = new VideoPlayer();
$imageFile = new ImageFile();

$mainFile = new FileDisplay();

$mainFile->display($audioPlayer);
$mainFile->display($videoPlayer);
$mainFile->display($imageFile);

?>