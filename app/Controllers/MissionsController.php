<?php

namespace app\Controllers;

class MissionsController extends \Uniix\Controller
{
    public function index()
    {
        $Missions = \app\Models\Missions::all();
        return new \Uniix\View('Missions/index.php', ['Missions' => $Missions]);
    }

    public function edit()
    {
        $Missions = \app\Models\Missions::find($_GET['Missions']);
        return new \Uniix\View('Missions/form.php', ['Missions' => $Missions]);
    }

    public function update()
    {

        $Missions = \app\Models\Missions::find($_POST['Missions']);
        $Missions->name = $_POST['name'];
        $Missions->save();

        header('Location:.?controller=Missions&action=index');
    }

    public function delete()
    {
        $Missions = \app\Models\Missions::find($_GET['Missions']);
        return new \Uniix\View('Missions/confirmDelete.php', ['Missions' => $Missions]);
    }

    public function deleteConfirm()
    {
        $Missions = \app\Models\Missions::find($_POST['Missions']);
        $Missions->delete();

        header('Location:.?controller=Missions&action=index');
    }
}
