<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecipeRepository")
 * @Vich\Uploadable
 */
class Recipe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dificulty;

    /**
     * @ORM\Column(type="integer")
     */
    private $time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $timeUnity;

    /**
     * @ORM\Column(type="integer")
     */
    private $part;

    /**
     * @ORM\Column(type="text")
     */
    private $description;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $protein;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $glucide;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lipide;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $calorie;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="recipe_image", fileNameProperty="filename")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tags", inversedBy="recipe")
     */
    private $tags;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Food", inversedBy="recipes", cascade={"persist"})
     */
    private $foods;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="recipes")
     */
    private $user;

    /**
     * @ORM\Column(type="boolean")
     */
    private $publish;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $regime;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecipeLike", mappedBy="recipe")
     */
    private $likes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecipeSave", mappedBy="recipe")
     */
    private $save;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecipeComment", mappedBy="recipe")
     */
    private $commentRecipe;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;


    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->foods = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->save = new ArrayCollection();
        $this->commentRecipe = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDificulty(): ?string
    {
        return $this->dificulty;
    }

    public function setDificulty(string $dificulty): self
    {
        $this->dificulty = $dificulty;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getTimeUnity(): ?string
    {
        return $this->timeUnity;
    }

    public function setTimeUnity(string $timeUnity): self
    {
        $this->timeUnity = $timeUnity;

        return $this;
    }

    public function getPart(): ?int
    {
        return $this->part;
    }

    public function setPart(int $part): self
    {
        $this->part = $part;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getProtein(): ?int
    {
        return $this->protein;
    }

    public function setProtein(?int $protein): self
    {
        $this->protein = $protein;

        return $this;
    }

    public function getGlucide(): ?int
    {
        return $this->glucide;
    }

    public function setGlucide(?int $glucide): self
    {
        $this->glucide = $glucide;

        return $this;
    }

    public function getLipide(): ?int
    {
        return $this->lipide;
    }

    public function setLipide(?int $lipide): self
    {
        $this->lipide = $lipide;

        return $this;
    }

    public function getCalorie(): ?int
    {
        return $this->calorie;
    }

    public function setCalorie(?int $calorie): self
    {
        $this->calorie = $calorie;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return Collection|Tags[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tags $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $tag->addRecipe($this);
        }

        return $this;
    }

    public function removeTag(Tags $tag): self
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
            $tag->removeRecipe($this);
        }

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getRecipes(): Collection
    {
        return $this->recipes;
    }

    public function addRecipe(self $recipe): self
    {
        if (!$this->recipes->contains($recipe)) {
            $this->recipes[] = $recipe;
            $recipe->addFood($this);
        }

        return $this;
    }

    public function removeRecipe(self $recipe): self
    {
        if ($this->recipes->contains($recipe)) {
            $this->recipes->removeElement($recipe);
            $recipe->removeFood($this);
        }

        return $this;
    }

    /**
     * @return Collection|Food[]
     */
    public function getFoods(): Collection
    {
        return $this->foods;
    }

    public function addFood(Food $food): self
    {
        if (!$this->foods->contains($food)) {
            $this->foods[] = $food;
            $food->addRecipe($this);
        }

        return $this;
    }

    public function removeFood(Food $food): self
    {
        if ($this->foods->contains($food)) {
            $this->foods->removeElement($food);
            $food->removeRecipe($this);
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string|null $filename
     * @return Recipe
     */
    public function setFilename(?string $filename): Recipe
    {
        $this->filename = $filename;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPublish(): ?bool
    {
        return $this->publish;
    }

    public function setPublish(bool $publish): self
    {
        $this->publish = $publish;

        return $this;
    }

    public function getRegime(): ?string
    {
        return $this->regime;
    }

    public function setRegime(string $regime): self
    {
        $this->regime = $regime;

        return $this;
    }

    /**
     * @return Collection|RecipeLike[]
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(RecipeLike $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
            $like->setRecipe($this);
        }

        return $this;
    }

    public function removeLike(RecipeLike $like): self
    {
        if ($this->likes->contains($like)) {
            $this->likes->removeElement($like);
            // set the owning side to null (unless already changed)
            if ($like->getRecipe() === $this) {
                $like->setRecipe(null);
            }
        }

        return $this;
    }

    public function isLikeByUser(User $user) : bool {
        foreach ($this->likes as $like) {
            if($like->getUser() === $user) return true;
        }

        return false;
    }

    public function isSaveByUser(User $user) : bool {
        foreach ($this->save as $save) {
            if($save->getUser() === $user) return true;
        }

        return false;
    }

    /**
     * @return Collection|RecipeSave[]
     */
    public function getSave(): Collection
    {
        return $this->save;
    }

    public function addSave(RecipeSave $save): self
    {
        if (!$this->save->contains($save)) {
            $this->save[] = $save;
            $save->setRecipe($this);
        }

        return $this;
    }

    public function removeSave(RecipeSave $save): self
    {
        if ($this->save->contains($save)) {
            $this->save->removeElement($save);
            // set the owning side to null (unless already changed)
            if ($save->getRecipe() === $this) {
                $save->setRecipe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RecipeComment[]
     */
    public function getCommentRecipe(): Collection
    {
        return $this->commentRecipe;
    }

    public function addCommentRecipe(RecipeComment $commentRecipe): self
    {
        if (!$this->commentRecipe->contains($commentRecipe)) {
            $this->commentRecipe[] = $commentRecipe;
            $commentRecipe->setRecipe($this);
        }

        return $this;
    }

    public function removeCommentRecipe(RecipeComment $commentRecipe): self
    {
        if ($this->commentRecipe->contains($commentRecipe)) {
            $this->commentRecipe->removeElement($commentRecipe);
            // set the owning side to null (unless already changed)
            if ($commentRecipe->getRecipe() === $this) {
                $commentRecipe->setRecipe(null);
            }
        }

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }



}
