<?php
require_once("./lib/db.php");

class Table{

    public function __construct($tableID,$page = 0, $order = 'id'){
        $this->page = isset($_REQUEST['page']) ? $_REQUEST['page'] : $page;
        $this->order = isset($_REQUEST['order']) ? $_REQUEST['order'] : $order;
        $this->tableID = $tableID;
        $this->numberOfPages = number_of_pages($tableID);
    }

    public function build_table(){
        $html = '<div class="row">  
                    <table class="table table-dark text-center" style="border-radius:10px">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <a class="btn btn-gold" href="index.php?order=id" role="button">Id</a>
                                </th>
                                <th scope="col">
                                    <a class="btn btn-gold" href="index.php?order=nom" role="button">Nom</a>
                                </th>
                                <th scope="col">
                                    <a class="btn btn-gold" href="index.php?order=cognoms" role="button">Cognoms</a>
                                </th>
                                <th scope="col">
                                </th>
                                <th scope="col">
                                </th>
                                <th scope="col">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        '. $this->getTableContent() .'
                        </tbody>
                    </table>
                </div>';
                
        return $html;
    }

    private function getTableContent(){
        $html = "";
        $query = getPage($this->tableID,$this->page,$this->order);
        while($row = $query->fetch_assoc()){
            
            $html .= " <tr>
                            <th scope='row'>".$row['id']."</th>
                            <td>".$row['nom']."</td>
                            <td>".$row['cognoms']."</td>
                            <td>
                                <a href='ver.php?id=". $row['id'] ."&page=". $this->page ."&order=". $this->order ."'>
                                    <span class='glyphicon glyphicon-search color-white'></span>
                                </a>
                            </td>
                            <td><a href='form.php'><span class='glyphicon glyphicon-pencil color-white'></span></a></td>
                            <td><a href='form.php'><span class='glyphicon glyphicon-trash color-white'></span></a></td>
                        </tr>";
        }
        return $html;
    }

}