<?php
class MyAccountController extends AbstractController {

    public function render(): void {
        if (isset($_SESSION['id'])) {
            $this->renderHeader();
            echo $this->getListViews()['moncompte']->displayView();
            $this->renderFooter();
        } else {
            header('location:/taskPOO/');
            exit;
        }
    }
}
