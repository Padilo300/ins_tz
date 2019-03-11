<?php 
require_once( "config.php" );
/* суда будем обращатся ajax"ом */
class showPeople{
    public function index(){
        $j      = file_get_contents(FILE_DB)    ; // Открываем файл с сотрудниками
        echo $j;
    }
}
$json = new showPeople;
$json->index();