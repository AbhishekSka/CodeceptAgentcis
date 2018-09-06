<?php


class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function loginCestTest(AcceptanceTester $I)
    {

        new \Step\Acceptance\StepLogin("sushan.amatya@email.com", "agentcis");

        //   $callingLoginEntries->loginEntries("sushan.amatya@email.com","agentcis");


//        $I->fillField(PageLogin::$username,'sushan.amatya@email.com');
//        $I->fillField(PageLogin::$password,"agentcis");
//        $I->click(PageLogin::$loginButton);
//        $I->loginEntries("sushan.amatya@email.com", "agentcis");


        //echo "test";
    }
}
