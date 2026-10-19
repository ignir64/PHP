<?php

// TODO
class Recette
{
    private ?int $id;
    private ?string $nom;
    private ?string $description;
    private ?string $image;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
                
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
                    
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function afficherRecette()
    {
        echo "ID : " . $this->getId() . "<br>";
        echo "Recette : " . $this->getNom() . "<br>";
        echo "Description : " . $this->getDescription() . "<br>";
        echo "Image : " . $this->getImage() . "<br>";
    }
}

?>