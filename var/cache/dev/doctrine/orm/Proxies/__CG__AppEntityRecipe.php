<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Recipe extends \App\Entity\Recipe implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'dificulty', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'time', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'timeUnity', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'part', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'protein', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'glucide', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'lipide', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'calorie', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'tags', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'foods', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'publish', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'regime', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'likes', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'save', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'commentRecipe'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'dificulty', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'time', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'timeUnity', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'part', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'protein', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'glucide', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'lipide', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'calorie', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'tags', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'foods', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'publish', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'regime', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'likes', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'save', '' . "\0" . 'App\\Entity\\Recipe' . "\0" . 'commentRecipe'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Recipe $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getDificulty(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDificulty', []);

        return parent::getDificulty();
    }

    /**
     * {@inheritDoc}
     */
    public function setDificulty(string $dificulty): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDificulty', [$dificulty]);

        return parent::setDificulty($dificulty);
    }

    /**
     * {@inheritDoc}
     */
    public function getTime(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTime', []);

        return parent::getTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setTime(int $time): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTime', [$time]);

        return parent::setTime($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeUnity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeUnity', []);

        return parent::getTimeUnity();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeUnity(string $timeUnity): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeUnity', [$timeUnity]);

        return parent::setTimeUnity($timeUnity);
    }

    /**
     * {@inheritDoc}
     */
    public function getPart(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPart', []);

        return parent::getPart();
    }

    /**
     * {@inheritDoc}
     */
    public function setPart(int $part): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPart', [$part]);

        return parent::setPart($part);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getProtein(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProtein', []);

        return parent::getProtein();
    }

    /**
     * {@inheritDoc}
     */
    public function setProtein(?int $protein): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProtein', [$protein]);

        return parent::setProtein($protein);
    }

    /**
     * {@inheritDoc}
     */
    public function getGlucide(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGlucide', []);

        return parent::getGlucide();
    }

    /**
     * {@inheritDoc}
     */
    public function setGlucide(?int $glucide): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGlucide', [$glucide]);

        return parent::setGlucide($glucide);
    }

    /**
     * {@inheritDoc}
     */
    public function getLipide(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLipide', []);

        return parent::getLipide();
    }

    /**
     * {@inheritDoc}
     */
    public function setLipide(?int $lipide): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLipide', [$lipide]);

        return parent::setLipide($lipide);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalorie(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalorie', []);

        return parent::getCalorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalorie(?int $calorie): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalorie', [$calorie]);

        return parent::setCalorie($calorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture(?string $picture): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\App\Entity\Tags $tag): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', [$tag]);

        return parent::addTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\App\Entity\Tags $tag): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', [$tag]);

        return parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecipes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecipes', []);

        return parent::getRecipes();
    }

    /**
     * {@inheritDoc}
     */
    public function addRecipe(\App\Entity\Recipe $recipe): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRecipe', [$recipe]);

        return parent::addRecipe($recipe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRecipe(\App\Entity\Recipe $recipe): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRecipe', [$recipe]);

        return parent::removeRecipe($recipe);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoods(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoods', []);

        return parent::getFoods();
    }

    /**
     * {@inheritDoc}
     */
    public function addFood(\App\Entity\Food $food): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFood', [$food]);

        return parent::addFood($food);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFood(\App\Entity\Food $food): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFood', [$food]);

        return parent::removeFood($food);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilename(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', []);

        return parent::getFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilename(?string $filename): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', [$filename]);

        return parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublish(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublish', []);

        return parent::getPublish();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublish(bool $publish): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublish', [$publish]);

        return parent::setPublish($publish);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegime(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegime', []);

        return parent::getRegime();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegime(string $regime): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegime', [$regime]);

        return parent::setRegime($regime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLikes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLikes', []);

        return parent::getLikes();
    }

    /**
     * {@inheritDoc}
     */
    public function addLike(\App\Entity\RecipeLike $like): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLike', [$like]);

        return parent::addLike($like);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLike(\App\Entity\RecipeLike $like): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLike', [$like]);

        return parent::removeLike($like);
    }

    /**
     * {@inheritDoc}
     */
    public function isLikeByUser(\App\Entity\User $user): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLikeByUser', [$user]);

        return parent::isLikeByUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function isSaveByUser(\App\Entity\User $user): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSaveByUser', [$user]);

        return parent::isSaveByUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getSave(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSave', []);

        return parent::getSave();
    }

    /**
     * {@inheritDoc}
     */
    public function addSave(\App\Entity\RecipeSave $save): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSave', [$save]);

        return parent::addSave($save);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSave(\App\Entity\RecipeSave $save): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSave', [$save]);

        return parent::removeSave($save);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentRecipe(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentRecipe', []);

        return parent::getCommentRecipe();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommentRecipe(\App\Entity\RecipeComment $commentRecipe): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentRecipe', [$commentRecipe]);

        return parent::addCommentRecipe($commentRecipe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommentRecipe(\App\Entity\RecipeComment $commentRecipe): \App\Entity\Recipe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommentRecipe', [$commentRecipe]);

        return parent::removeCommentRecipe($commentRecipe);
    }

}
