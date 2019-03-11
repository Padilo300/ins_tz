<?php
require_once( "config.php" );
class addUser {
    public $db = FILE_DB;

    public function index($position,$firstName,$lastName,$patronymic,$birthday, $dateStart,$subdivision,$text){
        
        /* 
            тут делаем данные безопасными, заменяем html символы спецсимволами,
            ФИО приравниваем в нижнию строку и делаем первую букву заглавной 
            что бы избежать ПетРОва ИванА.
         */
        $position    = trim(urldecode(htmlspecialchars($position                         )))             ;
        $firstName   = mb_convert_case(mb_strtolower(trim(urldecode(htmlspecialchars($firstName  ))), 'UTF-8'), MB_CASE_TITLE, "UTF-8")  ;
        $lastName    = mb_convert_case(mb_strtolower(trim(urldecode(htmlspecialchars($lastName   ))), 'UTF-8'), MB_CASE_TITLE, "UTF-8")  ;
        $patronymic  = mb_convert_case(mb_strtolower(trim(urldecode(htmlspecialchars($patronymic ))), 'UTF-8'), MB_CASE_TITLE, "UTF-8")  ;
        $birthday    = trim(urldecode(htmlspecialchars($birthday                         )))             ;
        $dateStart   = trim(urldecode(htmlspecialchars($dateStart                        )))             ;
        $subdivision = trim(urldecode(htmlspecialchars($subdivision                      )))             ;
        $text        = trim(urldecode(htmlspecialchars($text                             )))             ;
        
        if (file_exists($this->db)) {
            $file       = file_get_contents($this->db);                 // Открыть файл
            $taskList   = json_decode($file,TRUE);                      // Декодировать в массив 
            unset($file);                                               // Очистить 
            $taskList[] = array(                                        // Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'
                                'position'          =>  $position   ,   // должность
                                'firstName'         =>  $firstName  ,   
                                'lastName'          =>  $lastName   ,
                                'patronymic'        =>  $patronymic ,
                                'birthday'          =>  $birthday   ,
                                'dateStart'         =>  $dateStart  ,       // когда начал работать
                                'subdivision'       =>  $subdivision,       // подразделение 
                                'text'              =>  $text,
                                );
            
            file_put_contents($this->db,json_encode($taskList, JSON_UNESCAPED_UNICODE));  // Перекодировать в формат и записать в файл. Флаг JSON_UNESCAPED_UNICODE для работы с кирилицей
            unset($taskList);    // очистить переменную
            echo "Сотрудник $firstName  $lastName успешно добавлен!";
        } else {
            echo "Ошибка.. Не удалось добавить сотрудника, не доступен файл $this->db";
        } 
    }
    public function add(){
        /* 
            Провереям пришли ли все необходимые данные
         */
        if(    isset($_POST['position'] )
            && isset($_POST['firstName'] )
            && isset($_POST['lastName'])
            && isset($_POST['patronymic'])
            && isset($_POST['birthday'])
            && isset($_POST['dateStart'])
            && isset($_POST['subdivision'])
            ){
                /* Запишем их в базу */
            $this->index(   $_POST['position'],
                            $_POST['firstName'],
                            $_POST['lastName'],
                            $_POST['patronymic'],
                            $_POST['birthday'],
                            $_POST['dateStart'],
                            $_POST['subdivision'],
                            $_POST['text']
                            );
        }else{
            echo "Ошибка... Кажется заполнены не все поля.";
        }
    }
}
$addUser = new addUser;
$addUser->add();