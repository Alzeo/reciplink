<?php
namespace App\Entity;


class RecipeSearchPlat {

    /**
     * @var string|null
     */
    private $type;


    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return string
     */
    public function setType(string $type): string
    {
        $this->type = $type;
        return $this->type;
    }


}