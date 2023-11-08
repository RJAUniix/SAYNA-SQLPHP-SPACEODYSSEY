<?php

namespace Kernel;

class Model
{
    protected static string $table;

    public static function all()
    {
        $query = 'SELECT * FROM ' . self::getTable();
        return Connexion::query($query, get_called_class());
    }

    public static function find($id)
    {
        $query = 'select * from ' . self::getTable() . ' where id=:id';

        $result = Connexion::query($query, get_called_class(), ['id' => $id]);
        // test de result
        if (isset($result[0])) {
            return $result[0];
        } else {
            return null;
        }
    }

    public static function getTable()
    {
        $class = get_called_class();
        return $class::$table;
    }

    public function delete()
    {
        $query = "delete from " . $this->getTable() . ' where id=:id';
        Connexion::execute($query, ['id' => $this->id]);
    }
}
