<?php

class Pokemon
{
    private $id;
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaque_spe;
    private $defense_spe;
    private $vitesse;
    private $numero;
    private $types;

    public function __construct($id, $nom, $pv, $attaque, $defense, $attaque_spe, $defense_spe, $vitesse, $numero, $types = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->pv = $pv;
        $this->attaque = $attaque;
        $this->defense = $defense;
        $this->attaque_spe = $attaque_spe;
        $this->defense_spe = $defense_spe;
        $this->vitesse = $vitesse;
        $this->numero = $numero;
        $this->types = $types;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of pv
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     */
    public function setPv($pv): self
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of attaque
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     */
    public function setAttaque($attaque): self
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get the value of defense
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     */
    public function setDefense($defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of attaque_spe
     */
    public function getAttaqueSpe()
    {
        return $this->attaque_spe;
    }

    /**
     * Set the value of attaque_spe
     */
    public function setAttaqueSpe($attaque_spe): self
    {
        $this->attaque_spe = $attaque_spe;

        return $this;
    }

    /**
     * Get the value of defense_spe
     */
    public function getDefenseSpe()
    {
        return $this->defense_spe;
    }

    /**
     * Set the value of defense_spe
     */
    public function setDefenseSpe($defense_spe): self
    {
        $this->defense_spe = $defense_spe;

        return $this;
    }

    /**
     * Get the value of vitesse
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     */
    public function setVitesse($vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of types
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Set the value of types
     */
    public function setTypes($types): self
    {
        $this->types = $types;

        return $this;
    }
}
