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
    public function sendMailContact(Contact $contact) {

        $mailer = new \Swift_Mailer();
        $message = (new \Swift_Message('Demande de contact'))
            ->setFrom(array('admin@loiseau-rare.e-naumad.fr' => 'Formulaire de contact'))
            ->setTo('admin@loiseau-rare.e-naumad.fr')
            ->setBody(
                $this->renderView(
                    'Mail/mail.html.twig',
                    array('contact' => $contact)
                ),
                'text/html')
        ;
        $mailer->send($message);
    }
}