<?php
require_once("./lib/db.php");

class Table{

    public function __construct($tableID,$columns,$page = 0, $order = 'id'){
        $this->page = isset($_REQUEST['page']) ? $_REQUEST['page'] : $page;
        $this->order = isset($_REQUEST['order']) ? $_REQUEST['order'] : $order;
        $this->tableID = $tableID;
        $this->columns = $columns;
    }

    public function build_table(){
        return $this->open_table() . $this->getTableContent() . $this->close_table();
    }

    private function open_table(){
        $html = '<div class="row">  
                    <table class="table table-dark text-center" style="border-radius:10px">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <a class="btn btn-gold" href="index.php?order=id" role="button">'.$this->columns[0].'</a>
                                </th>
                                <th scope="col">
                                    <a class="btn btn-gold" href="index.php?order=nom" role="button">'.$this->columns[1].'</a>
                                </th>
                                <th scope="col">
                                    <a class="btn btn-gold" href="index.php?order=cognoms" role="button">'.$this->columns[2].'</a>
                                </th>
                                <th scope="col">
                                </th>
                                <th scope="col">
                                </th>
                                <th scope="col">
                                </th>
                            </tr>
                        </thead>
                        <tbody>';
                
        return $html;
    }

    private function close_table(){
        return '</tbody></table></div>';
    }

    private function getTableContent(){
        $result = "";
        $query = getPage($this->tableID,$this->columns,$this->page,$this->order);
        while($row = $query->fetch_assoc()){
            
            $result .= " <tr>
                            <th scope='row'>".$row[$this->columns[0]]."</th>
                            <td>".$row[$this->columns[1]]."</td>
                            <td>".$row[$this->columns[2]]."</td>
                            <td><a href='form.php'><span class='glyphicon glyphicon-search color-white'></span></a></td>
                            <td><a href='form.php'><span class='glyphicon glyphicon-pencil color-white'></span></a></td>
                            <td><a href='form.php'><span class='glyphicon glyphicon-trash color-white'></span></a></td>
                        </tr>";
        }
        return $result;
    }
}