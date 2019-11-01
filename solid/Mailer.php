<?php

//Hint - Dependency Inversion Principle

abstract class Sendler
{
    abstract public function send();
}

class SendWelcomeMessage extends Sendler
{
    public function send()
    {
        echo 'Welcome Message';
    }
}

class SendWelcomeGoogle extends Sendler
{
    public function send()
    {
        echo 'Welcome Google';
    }

}

class SendWelcomeSendgrid extends Sendler
{
    public function send()
    {
        echo 'Welcome Sendgrid';
    }

}

class SendWelcomeMailchimp extends  Sendler
{
    public function send()
    {
        echo 'Welcome Mailchimp';
    }

}

class Mailer
{
    private $mailer;

    public function __construct(Sendler $mailer)
    {
        $this->mailer = $mailer;
    }
}

