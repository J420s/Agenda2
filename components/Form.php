<?php

require_once "./lib/db.php";
require_once "./lib/utils.php";

class Form{


    public function __construct($id){
        $this->id = $id;
        $this->page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 0;
        $this->order = isset($_REQUEST['order']) ? $_REQUEST['order'] : 'id';
    }

    public function build_form($disable = null){
        $row = getRow($this->id);
        require_once "./components/form-html.php";
    }

    private function get_form_buttons(){
        require_once "./components/form-buttons.php";
    }
    

    
}