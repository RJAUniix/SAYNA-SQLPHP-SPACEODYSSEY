<?php

namespace app\Models;

use Uniix\Model;

class Pays extends Model
{
    protected static string $table = "planete";

    public function save()
    {
        $query = "update planete set name=:name where id=:id";
        \Uniix\Connexion::execute($query, ['name' => $this->name, "id" => $this->id]);
    }
}
