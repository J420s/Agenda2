<?php

require_once("./lib/db.php");

class Navigator{

    public function __construct($numberOfPages,$page = 0, $order = 'id'){
        $this->page = isset($_REQUEST['page']) ? $_REQUEST['page'] : $page;
        $this->order = isset($_REQUEST['order']) ? $_REQUEST['order'] : $order;
        $this->numberOfPages = $numberOfPages;
    }

    public function build_nav(){

        $html = '<div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="row justify-content-center">';
        
        $html .= $this->button_start() . 
                $this->button_previous() . 
                $this->button_next() . 
                $this->button_last(); 

        $html .=       '</div>
                    </div>
                </div>';

        return $html;
    }

    private function button_start(){
        $html = '<div class="col-md-2">
                    <a href="index.php?page=0&order='. $this->order .'">
                        <button type="button" class="btn btn-secondary btn-sm">
                            <span class="glyphicon glyphicon-fast-backward"></span>
                        </button>
                    </a>
                </div>';
        return $html;
    }

    private function button_previous(){
        if($this->page > 0){
            $html = '<div class="col-md-2">
                        <a href="index.php?page='. ($this->page - 1) .'&order='. $this->order .'">
                            <button type="button" class="btn btn-secondary btn-sm">
                                <span class="glyphicon glyphicon-backward"></span>
                            </button>
                        </a>
                    </div>';
        }else{
            $html = null;
        }
        
        return $html;
    }

    private function button_next(){
        if($this->page < $this->numberOfPages - 1){
            $html = '<div class="col-md-2 ">
                        <a href="index.php?page='. ($this->page + 1) .'&order='. $this->order .'">
                            <button type="button" class="btn btn-secondary btn-sm">
                                <span class="glyphicon glyphicon-forward"></span>
                            </button>
                        </a>
                    </div>';
        }else{
            $html = null;
        }
        return $html;
    }

    function button_last(){
        $html = '<div class="col-md-2">
                    <a href="index.php?page='. ($this->numberOfPages - 1) .'&order='. $this->order .'">
                        <button type="button" class="btn btn-secondary btn-sm">
                            <span class="glyphicon glyphicon-fast-forward"></span>
                        </button>
                    </a>
                </div>';
        return $html;
    }
}
