<?php

abstract class AbstractModel {
    // Attributs
    private InterfaceBDD $bdd;

    // Constructeur
    public function __construct(InterfaceBDD $bdd){
        $this->bdd = $bdd;
    }

    // Getter et setter
    public function getBDD(): InterfaceBDD {
        return $this->bdd;
    }
    public function setBDD(InterfaceBDD $bdd): void {
        $this->bdd = $bdd;
    }

    // Méthodes
    public abstract function add(): void;
    public abstract function update(): void;
    public abstract function delete(): void;
    public abstract function getAll(): array|null;
    public abstract function getById(): array|null;
}
