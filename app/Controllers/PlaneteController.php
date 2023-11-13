<?php

namespace app\Controllers;

class MissionsController extends \Uniix\Controller
{
    public function index()
    {
        $Missions = \app\Models\Missions::all();
        return new \Uniix\View('Planete/index.php', ['Planete' => $Planete]);
    }

    public function edit()
    {
        $Planete = \app\Models\Planete::find($_GET['Planete']);
        return new \Uniix\View('Planete/form.php', ['Planete' => $Planete]);
    }

    public function update()
    {

        $Planete = \app\Models\Planete::find($_POST['Planete']);
        $Planete->name = $_POST['name'];
        $Planete->save();

        header('Location:.?controller=Planete&action=index');
    }

    public function delete()
    {
        $Planete = \app\Models\Planete::find($_GET['Planete']);
        return new \Uniix\View('Planete/confirmDelete.php', ['Planete' => $Planete]);
    }

    public function deleteConfirm()
    {
        $Planete = \app\Models\Planete::find($_POST['Planete']);
        $Planete->delete();

        header('Location:.?controller=Planete&action=index');
    }
}
