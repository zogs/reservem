<?php

namespace Zogs\ContactBundle\Mailer;

use Symfony\Component\Templating\EngineInterface;

class Mailer
{
    protected $mailer;
    protected $templating;
    protected $recipients;

    public function __construct(\Swift_Mailer $mailer, EngineInterface $templating, $emails)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->recipients = $emails;
    }

    public function sendTestMessage()
    {
        $this->sendMessage('reservem@u-bourgogne.fr', $this->recipients, 'test mailer', '<html><body><strong>Hello world</strong></body></html>');;
    }

    public function sendContactMessage($contact)
    {

        $from = $contact->getEmail();

        $subject = $contact->getTitle();

        $body = $this->templating->render('ZogsContactBundle:Email:contact.html.twig', array('contact' => $contact));

        return $this->sendMessage($from, $this->recipients, $subject, $body);
    }

    protected function sendMessage($from, $to, $subject, $body)
    {
        $mail = \Swift_Message::newInstance();

        $mail
            ->setFrom($from)
            ->setTo($to)
            ->setSubject($subject)
            ->setBody($body)
            ->setContentType('text/html');

        return $this->mailer->send($mail);
    }

    public function registerPlugin(\Swift_Events_EventListener $plugin)
    {
        $this->mailer->registerPlugin($plugin);
    }
}