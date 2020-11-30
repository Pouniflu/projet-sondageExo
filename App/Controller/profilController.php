<?php
namespace App\Controller;
use App\Model\profilModel;


class profilController {

    public function __construct()
    {
        $this->model = new profilModel();
    }

    public function renderIndex() {

        require ROOT."/App/View/profilView.php";
    }
}
