<?php


class LoginCest
{
    const EMAIL = "sushan.amatya@email.com";
    const PASSWORD = "agentcis";

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function loginCestTest(\Step\Acceptance\StepLogin $stepLogin)
    {
        $stepLogin->loginEntries(self::EMAIL, self::PASSWORD);
        //
//        new \Step\Acceptance\StepLogin("sushan.amatya@email.com", "agentcis");

        //   $callingLoginEntries->loginEntries("sushan.amatya@email.com","agentcis");


       /* $I->fillField("//*[@id=\"email\"]",'sushan.amatya@email.com');
        $I->fillField(,"agentcis");
        $I->click(PageLogin::$loginButton);
        $I->loginEntries("sushan.amatya@email.com", "agentcis");*/


        //echo "test";
    }
}
