<?php
class ViewHeader implements interfaceView{
    // Attributs
    private ?string $nav = '';

    // Getter et Setter
    public function getNav(): ?string { return $this->nav; }
    public function setNav(?string $nav): self { $this->nav = $nav; return $this; }

    // Méthodes
    public function displayView():string{
        ob_start();
?>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ajouter une categorie</title>
        </head>
        <body>
            <header>
                <nav>
                    <a href="/taskPOO/">Accueil</a>
                    <?php echo $this->getNav() ?>
                </nav>
                
            </header>
<?php
        return ob_get_clean();
    }
}