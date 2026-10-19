<?php

class Categorie
{
    public ?int $id;
    public ?string $nom;
    public ?string $image;

    public function afficher()
    {
        echo "ID : " . $this->id . "<br/>";
        echo "Nom : " . $this->nom . "<br/>";
        echo "Url image : " . $this->image . "<br/>";
    }
}
