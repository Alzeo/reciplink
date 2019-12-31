<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoveRepository")
 */
class Love
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $loves;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Recipe", inversedBy="love")
     */
    private $recipe;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="love")
     */
    private $users;

    public function __construct()
    {
        $this->recipe = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoves(): ?int
    {
        return $this->loves;
    }

    public function setLoves(?int $loves): self
    {
        $this->loves = $loves;

        return $this;
    }

    /**
     * @return Collection|Recipe[]
     */
    public function getRecipe(): Collection
    {
        return $this->recipe;
    }

    public function addRecipe(Recipe $recipe): self
    {
        if (!$this->recipe->contains($recipe)) {
            $this->recipe[] = $recipe;
        }

        return $this;
    }

    public function removeRecipe(Recipe $recipe): self
    {
        if ($this->recipe->contains($recipe)) {
            $this->recipe->removeElement($recipe);
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addLove($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeLove($this);
        }

        return $this;
    }
}
