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
    protected $dbh;
   public function __construct()
    {

        $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=test', 'root', '');
    }


    /**
     * @param $sql
     * @return bool
     * вставка данных
     */
    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();

        return $res;
    }

    /**
     * @param $sql
     * возращает данные
     */
    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {

            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);

        }
        return [];

    }
}
