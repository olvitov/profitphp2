<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 21.07.2016
 * Time: 16:24
 */

namespace App;


abstract class Model
{
    const TABLE = '';
    public $id;


    public static function   findAll()
    {
        $db = Db::instance();

        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            [],
            static::class

        );
    }

    public static function findById($id) {

        $db =  Db::instance();
        return $db->query(
          'SELECT * FROM ' . static::TABLE . ' WHERE id=:id',
            [':id' => $id],
            static::class
        )[0];

    }

    public static function findOneByColumn($column, $value)
{


    $db = Db::instance();
    $db->setClassName(get_called_class());
    $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE ' . $column .'=:value';
    $res =  $db->query($sql, [':value' => $value],
        [],
        self::class
    );


    if (!empty($res)) {
        return $res[0];
    }
    return false;
}

    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];

        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
           $columns[] = $k;
            $values[':' .$k] = $v;

        }


        $sql = '
        INSERT INTO ' . static::TABLE . '
         (' .  implode(',', $columns) . ')
         VALUES
         (' . implode(', ' , array_keys($values)) . ')
         ';


        $db = Db::instance();
        $db->execute($sql, $values);

    }

    public function update() {
        $cols = [];
        $data = [];
        foreach ($this as $k => $v) {
            $data[':' . $k] = $v;
            if ('id' == $k) {
                continue;
            }
            $cols[] = $k . '=:' . $k;
        }
         var_dump($cols);
        var_dump($data);
        $sql = '
            UPDATE ' . static::TABLE . '
            SET ' . implode(', ', $cols) . '
            WHERE id=:id
        ';
        $db = Db::instance();
        $db->execute($sql, $data);
    }

    public function save() {
        if (!isset($this->id)) {
            $this->insert();
        } else{
            $this->update();
        }
    }

    public function delete()
    {


        $sql = '
            DELETE FROM ' . static::TABLE . '
            WHERE id = :id
        ';
        $db =  Db::instance();

        $db->execute($sql);
    }

}































