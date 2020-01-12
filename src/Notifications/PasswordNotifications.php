<?php

namespace App\Notifications;

use App\Entity\resetPassword;
use Twig\Environment;

class PasswordNotifications {

    /**
     * @var \Swift_Mailer
     */
    private $mailer;
    /**
     * @var Environment
     */
    private $environment;

    public function __construct(\Swift_Mailer $mailer, Environment $environment)
    {
        $this->mailer = $mailer;
        $this->environment = $environment;
    }

    public function notify(resetPassword $resetPassword){
        $message = (new \Swift_Message('Réintialiser votre mot de passe.'))
            ->setFrom('test@dev.fr')
            ->setTo($resetPassword->getEmail())
            ->setReplyTo($resetPassword->getEmail())
            ->setBody($this->environment->render('emails/resetPassword.html.twig', [
                'text/html'
            ]));

        dump($this->mailer->send($message));
    }
}
