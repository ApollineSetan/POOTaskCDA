<?php
abstract class AbstractController {
    // Attributs
    private ?array $listModels;
    private ?array $listViews;

    // Constructeur
    public function __construct(?array $listModels, ?array $listViews){
        $this->listModels = $listModels;
        $this->listViews = $listViews;
    }

    // Getter et Setter
    public function getListModels(): ?array { return $this->listModels; }
    public function setListModels(?array $listModels): self { $this->listModels = $listModels; return $this; }

    public function getListViews(): ?array { return $this->listViews; }
    public function setListViews(?array $listViews): self { $this->listViews = $listViews; return $this; }

    // Méthodes
    public abstract function render(): void;

    public function renderHeader(): void {
        if (isset($_SESSION['id'])) {
            $this->getListViews()['header']->setNav('<a href="/taskPOO/moncompte">Mon Compte</a> <a href="/taskPOO/deconnexion">Se Déconnecter</a>');
        }
        echo $this->getListViews()['header']->displayView();
    }

    public function renderFooter(): void {
        echo $this->getListViews()['footer']->displayView();
    }
}
