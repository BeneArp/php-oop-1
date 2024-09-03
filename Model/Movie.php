<?php

    class Movie {
        public $title;
        public $subtitle;
        public $duration;
        public $lenguage;
        public $geners;
        public $actors;
        public $relaseYear;


        function __construct($_title, $_lenguage, $_geners, $_relaseYear){
            $this->title = $_title;
            $this->lenguage = $_lenguage;
            $this->geners = $_geners;
            $this->relaseYear = $_relaseYear;
        }
    }