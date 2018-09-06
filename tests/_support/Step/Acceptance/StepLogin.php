<?php

namespace Step\Acceptance;

use Page\PageLogin;

class StepLogin extends \AcceptanceTester
{


/*    public $mail;
    public $pass;
    public function __construct($email, $password)
    {
        $this->mail=$email;
        $this->pass = $password;
    }*/

    public function loginEntries($email, $password)
    {
        $I = $this;
        $I->amOnPage(PageLogin::$URL);
        $I->fillField(PageLogin::$username, $email);
        $I->fillField(PageLogin::$password, $password);
        $I->click(PageLogin::$loginButton);

        // $I->see();

    }
}