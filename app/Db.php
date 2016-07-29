<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 18.07.2016
 * Time: 22:23
 */

namespace App;


class Db

{
    use Singleton;
    protected $dbh;
    public $className = 'stdClass';
   protected function __construct()
    {

        $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=test', 'root', '');
    }

    public function setClassName($className)
    {
        $this->setClassName = $className;
    }


    /**
     * @param $sql
     * @return bool
     * вставка данных
     */
    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);

        return $res;
    }

    /**
     * @param $sql
     * возращает данные
     */
    public function query($sql, $params, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false !== $res) {

            return $sth->fetchAll(\PDO::FETCH_CLASS, $this->className);

        }
        return [];

    }
}
