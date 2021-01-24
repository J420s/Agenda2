<?php

require_once "./lib/db.php";


class Form{

    public function __construct($id = null){
        $this->id = $id;
        $this->page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 0;
        $this->order = isset($_REQUEST['order']) ? $_REQUEST['order'] : 'id';
    }

    public function build_form($disable = null){
        $formFields = $this->id ? getRow($this->id) : null;
        require_once "./components/form-html.php";
    }

    private function get_form_buttons(){
        $html = '<div class="row">
                    <div class="col-md-2 ">
                        <a class="btn btn-secondary" href="index.php?page='.$this->page.'&order='.$this->order.'">Cerrar</a>
                    </div>
                    <div class="col-md-3 offset-7 text-right">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>';
        return $html;
    }  
}