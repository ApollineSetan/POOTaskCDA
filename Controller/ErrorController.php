<?php
class ErrorController extends AbstractController {

    // Attributs
    private ViewError $viewError;

    // Constructeur pour initialiser la vue d'erreur
    public function __construct(ViewError $viewError) {
        $this->viewError = $viewError;
    }

    // Méthode de rendu qui affiche la vue d'erreur
    public function render(): void {
        // Appel de la vue d'erreur
        echo $this->viewError->displayView();
    }
}
