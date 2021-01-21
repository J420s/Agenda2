<?php

class Form{

    public function __construct($inputs){
        $this->inputs = $inputs;
    }


    public function build_form(){
        
        $row1 = $this->create_input_group(array($inputs[0],$inputs[1],$inputs[2]));
        $row2 = $this->create_input_group(array($inputs[3],$inputs[4],$inputs[5],$inputs[6]));
        $row3 = $this->create_input_group(array($inputs[7],$inputs[8]));
        $row4 = $this->create_input_group(array($inputs[9],$inputs[10]));
    }
    
    private function create_input_group($inputs){
        $row = '<div class="row">';
        $rowEnd = '</div>';
        $html .= $row;
        foreach($inputs as $input){$html .= $input;}
        $html .= $rowEnd;
        return $html;
    }

    private function create_input($label,$type,$enable){
        $html = '<div class="form-group col">
                    <label>'. $label .'</label>
                    <input type="'. $type .'" class="form-control" '. $enable .'>
                </div>';
        return $html;
    }

    private function create_button($b4_color,$text){
        $html = '<div class="col-md-2 ">
                    <button type="button" class="btn btn-'. $b4_color .'">'. $text .'</button>
                </div>';
        return $html;
    }

    private function open_form(){
        $html = '<div class="row justify-content-center">
                    <div class="col-md-6 align-self-center">
                        <form action="" class="bg-dark p-4  color-white" style="border-radius:10px">';
        return $html;
    }

    private function close_form(){
        return '</form></div></div>';
    }

    
}