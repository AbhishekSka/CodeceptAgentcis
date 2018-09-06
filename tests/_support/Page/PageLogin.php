<?php
namespace Page;

class PageLogin
{
    // include url of current page
    public static $URL = '/';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */

    public static $username='.//input[@id="email"]';
    public static $password = './/input[@id="password"]';
    public static $loginButton = './/button[@name="Login"]';

/*
    public $tester;
    public function __construct()
    {
        die("dead");
    }*/

    public static function route($param)
    {
        return static::$URL.$param;
    }

    /*public function loginEntries($email,$password){

        $I = new \AcceptanceTester();
        $I->amOnPage(self::$URL);
        $I->fillField(self::$username,$email);
        $I->fillField(self::$password,$password);
        $I->click(self::$loginButton);
       // $I->see();

    }*/


}
