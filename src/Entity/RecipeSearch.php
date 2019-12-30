<?php
namespace App\Entity;

class RecipeSearch {

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $regime;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return RecipeSearch
     */
    public function setType(string $type): RecipeSearch
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegime(): ?string
    {
        return $this->regime;
    }

    /**
     * @param string|null $regime
     * @return RecipeSearch
     */
    public function setRegime(string $regime): RecipeSearch
    {
        $this->regime = $regime;
        return $this;
    }


}