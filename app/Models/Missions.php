<?php

namespace app\Models;

use Uniix\Model;

class Missions extends Model
{
    protected static string $table = "missions";

    public function save()
    {
        $query = "update missions set nom=:nom where id=:id";
        \Uniix\Connexion::execute($query, ['name' => $this->name, "id" => $this->id]);
    }

    public function add()
    {
        $query = "insert into missions set nom=:nom, duree=:duree, debut=:debut, statut=:statut, vaisseau=:vaisseau, planete=:planete, description=:description where id=:id";
        \Uniix\Connexion::execute($query, ['nom' => $this->nom, "id" => $this->id, "debut" => $this->debut, "statut" => $this->statut, "vaisseau" => $this->vaisseau, "planete" => $this->planete, "description" => $this->description]);
    }
}
