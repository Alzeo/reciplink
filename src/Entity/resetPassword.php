<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class resetPassword {

    /**
     * @var string|null
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return resetPassword
     */
    public function setEmail(?string $email): resetPassword
    {
        $this->email = $email;
        return $this;
    }

}
