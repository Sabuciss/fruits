<?php
if(!class_exists('Database')){
class Database {
    public $pdo; 
//destruktors un konstruktors
//konstrktors  izpildās vienu reizi, kad objekts uztaisīts
    public function __construct($config){//lai efektivak, lai nav jaraksta daudzas reizes, tikai 1reizi
        
        // data source name
        $dsn = "mysql: " . http_build_query($config, "",";");
        //PDO - php Data object
        $this->pdo = new PDO($dsn); // ta ir class ar objekts    objekts kas pieder pdo klasei
        //
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

     }


    public function query($sql, $params){
        //3.1. sagatavot vaicājumu(statement)
        $statement = $this->pdo->prepare($sql);  //prepare if funkcijas metode
        //3.2. izpildīt statement
        $statement->execute($params);
        return $statement;
    }

  }
}