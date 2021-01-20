<?php

require_once("db.php");

class Navigator{

    public function __construct($tableID,$page = 0, $order = 'id'){
        $this->page = $_REQUEST['page'] ? $_REQUEST['page'] : $page;
        $this->order = $_REQUEST['order'] ? $_REQUEST['order'] : $order;
        $this->numberOfPages = number_of_pages($tableID);
    }

    public function build_nav(){

        $row = '<div class="row justify-content-center">';
        $rowEnd = '</div>';

        $html = $row;  
        $html .= $this->button_start();
        if($this->page > 0) $html .= $this->button_previous();
        if($this->page < $this->numberOfPages - 1) $html .= $this->button_next();
        $html .= $this->button_last(); 
        $html .= $rowEnd;

        return $html;
    }

    private function button_start(){
        $html = '<div class="col-md-2">
                    <a href="index.php?page=0&order='. $this->order .'">
                        <img class="img-fluid" src="./buttons/arrow-start.png">
                    </a>
                </div>';
        return $html;
    }

    private function button_previous(){
        $html = '<div class="col-md-2 ">
                    <a href="index.php?page='. ($this->page - 1) .'&order='. $this->order .'">
                        <img class="img-fluid" src="./buttons/arrow-left.png">
                    </a>
                </div>';
        return $html;
    }

    private function button_next(){
        $html = '<div class="col-md-2 ">
                    <a href="index.php?page='. ($this->page + 1) .'&order='. $this->order .'">
                        <img class="img-fluid" src="./buttons/arrow-right.png">
                    </a>
                </div>';
        return $html;
    }

    function button_last(){
        $html = '<div class="col-md-2 ">
                    <a href="index.php?page='. ($this->numberOfPages - 1) .'&order='. $this->order .'">
                        <img class="img-fluid" src="./buttons/arrow-end.png">
                    </a>
                </div>';
        return $html;
    }
}
