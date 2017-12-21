<?php
/**
 * Created by PhpStorm.
 * User: nduvi
 * Date: 20/12/2017
 * Time: 17:54
 */

namespace App\Services;

use App\Entity\Contact;

class Mailer
{
    private $mailer;
    private $twig;

    public function __construct(\Swift_Mailer $Mailer, \Twig_Environment $Twig) {
        $this->mailer=$Mailer;
        $this->twig=$Twig;
    }

    public function sendMailContact(Contact $contact) {

        $mailer=$this->mailer;
        $message = (new \Swift_Message('Demande de contact'))
            ->setFrom(array('admin@loiseau-rare.e-naumad.fr' => 'Site NAO'))
            ->setTo('admin@loiseau-rare.e-naumad.fr')
            ->setBody(
                $this->twig->render(
                    'Mail/mail.html.twig',
                    array('contact' => $contact)
                ),
                'text/html')
        ;
        $mailer->send($message);
    }
}