<?php

namespace App\Notifications;

use App\Entity\resetPassword;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
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

    public function notify(resetPassword $resetPassword, FlashBag $flashBag){
        $message = (new \Swift_Message('Réintialiser votre mot de passe.'))
            ->setFrom('test@dev.fr')
            ->setTo($resetPassword->getEmail())
            ->setReplyTo($resetPassword->getEmail())
            ->setBody($this->environment->render('emails/resetPassword.html.twig', [
                'text/html'
            ]));
        if ($this->mailer->send($message) == 0) {
            $flashBag->add('warning', "Erreur lors de l'envoi du mail");
        } else {
            $flashBag->add('success', "Un mail vient d'etre envoye !");
        }

        dump($this->mailer->send($message));
    }
}
