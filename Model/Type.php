<?php

class Type
{
    private $id;
    private $name;
    private $color;
    private $pokemons;

    public function __construct($id, $name, $color, $pokemons = null)
    {
       $this->id = $id;
       $this->name = $name; 
       $this->color = $color; 
       $this->pokemons = $pokemons;
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of pokemons
     */
    public function getPokemons()
    {
        return $this->pokemons;
    }

    /**
     * Set the value of pokemons
     */
    public function setPokemons($pokemons): self
    {
        $this->pokemons = $pokemons;

        return $this;
    }
}