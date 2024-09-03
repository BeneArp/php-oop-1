<?php

    class Movie {
        public $title;
        public $subtitle;
        public $duration;
        public $language;
        public $geners = [];
        public $actors = [];
        public $relaseYear;


        function __construct($_title, $_language, $_geners, $_relaseYear){
            $this->title = $_title;
            $this->language = $_language;
            $this->geners = $_geners;
            $this->relaseYear = $_relaseYear;
        }

        public function getGeners(){
        
            foreach($this->geners as $gener){
                echo "<li>$gener</li>";
            }
    
        }
    }