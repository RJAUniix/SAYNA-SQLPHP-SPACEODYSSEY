<?php

namespace app\Controllers;

class AstronautesController extends \Uniix\Controller
{
    public function index()
    {
        $Missions = \app\Models\Astronautes::all();
        return new \Uniix\View('Astronautes/index.php', ['Astronautes' => $Astronautes]);
    }

    public function edit()
    {
        $Astronautes = \app\Models\Astronautes::find($_GET['Astronautes']);
        return new \Uniix\View('Astronautes/form.php', ['Astronautes' => $Astronautes]);
    }

    public function update()
    {

        $Astronautes = \app\Models\Astronautes::find($_POST['Astronautes']);
        $Astronautes->name = $_POST['name'];
        $Astronautes->save();

        header('Location:.?controller=Astronautes&action=index');
    }

    public function delete()
    {
        $Astronautes = \app\Models\Astronautes::find($_GET['Astronautes']);
        return new \Uniix\View('Astronautes/confirmDelete.php', ['Astronautes' => $Astronautes]);
    }

    public function deleteConfirm()
    {
        $Astronautes = \app\Models\Astronautes::find($_POST['Astronautes']);
        $Astronautes->delete();

        header('Location:.?controller=Astronautes&action=index');
    }
}
