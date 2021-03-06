<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', 'passwordConfirm', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'recipes', '' . "\0" . 'App\\Entity\\User' . "\0" . 'likes', '' . "\0" . 'App\\Entity\\User' . "\0" . 'save', '' . "\0" . 'App\\Entity\\User' . "\0" . 'commentUser', '' . "\0" . 'App\\Entity\\User' . "\0" . 'facebook', '' . "\0" . 'App\\Entity\\User' . "\0" . 'instagram', '' . "\0" . 'App\\Entity\\User' . "\0" . 'pinterest', '' . "\0" . 'App\\Entity\\User' . "\0" . 'snapchat', '' . "\0" . 'App\\Entity\\User' . "\0" . 'regime', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userRoles', 'rgpd'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', 'passwordConfirm', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'recipes', '' . "\0" . 'App\\Entity\\User' . "\0" . 'likes', '' . "\0" . 'App\\Entity\\User' . "\0" . 'save', '' . "\0" . 'App\\Entity\\User' . "\0" . 'commentUser', '' . "\0" . 'App\\Entity\\User' . "\0" . 'facebook', '' . "\0" . 'App\\Entity\\User' . "\0" . 'instagram', '' . "\0" . 'App\\Entity\\User' . "\0" . 'pinterest', '' . "\0" . 'App\\Entity\\User' . "\0" . 'snapchat', '' . "\0" . 'App\\Entity\\User' . "\0" . 'regime', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userRoles', 'rgpd'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
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
    public function addRecipe(\App\Entity\Recipe $recipe): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRecipe', [$recipe]);

        return parent::addRecipe($recipe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRecipe(\App\Entity\Recipe $recipe): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRecipe', [$recipe]);

        return parent::removeRecipe($recipe);
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
    public function addLike(\App\Entity\RecipeLike $like): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLike', [$like]);

        return parent::addLike($like);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLike(\App\Entity\RecipeLike $like): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLike', [$like]);

        return parent::removeLike($like);
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
    public function addSave(\App\Entity\RecipeSave $save): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSave', [$save]);

        return parent::addSave($save);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSave(\App\Entity\RecipeSave $save): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSave', [$save]);

        return parent::removeSave($save);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentUser(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentUser', []);

        return parent::getCommentUser();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommentUser(\App\Entity\RecipeComment $commentUser): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentUser', [$commentUser]);

        return parent::addCommentUser($commentUser);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommentUser(\App\Entity\RecipeComment $commentUser): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommentUser', [$commentUser]);

        return parent::removeCommentUser($commentUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacebook(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebook', []);

        return parent::getFacebook();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebook(?string $facebook): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebook', [$facebook]);

        return parent::setFacebook($facebook);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstagram(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstagram', []);

        return parent::getInstagram();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstagram(?string $instagram): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstagram', [$instagram]);

        return parent::setInstagram($instagram);
    }

    /**
     * {@inheritDoc}
     */
    public function getPinterest(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPinterest', []);

        return parent::getPinterest();
    }

    /**
     * {@inheritDoc}
     */
    public function setPinterest(?string $pinterest): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPinterest', [$pinterest]);

        return parent::setPinterest($pinterest);
    }

    /**
     * {@inheritDoc}
     */
    public function getSnapchat(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSnapchat', []);

        return parent::getSnapchat();
    }

    /**
     * {@inheritDoc}
     */
    public function setSnapchat(?string $snapchat): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSnapchat', [$snapchat]);

        return parent::setSnapchat($snapchat);
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
    public function setRegime(?string $regime): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegime', [$regime]);

        return parent::setRegime($regime);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRoles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRoles', []);

        return parent::getUserRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function addUserRole(\App\Entity\Role $userRole): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUserRole', [$userRole]);

        return parent::addUserRole($userRole);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUserRole(\App\Entity\Role $userRole): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUserRole', [$userRole]);

        return parent::removeUserRole($userRole);
    }

}
