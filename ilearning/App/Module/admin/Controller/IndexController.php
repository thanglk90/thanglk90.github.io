<?php
class IndexController extends Controller
{
 
    function indexAction(){
        echo "<h1 style='color: red; font-size: 15px;'>" . __METHOD__ . "</h1>";
     
        $this->_viewObj->items = $this->_modelObj->listItems();
        if(count($this->_viewObj->items) < 1){
            echo "items no elements";
        }
        $this->_viewObj->title = "<title>admin - index/index </title>";
        $this->_viewObj->render('index/index');
    }
}
