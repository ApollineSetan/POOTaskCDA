<?php
class DecoController extends AbstractController {

    public function deconnexion(): void {
        session_start();
        session_destroy();
        header('location:/taskPOO/');
        exit;
    }

    public function render(): void {
    }
}
