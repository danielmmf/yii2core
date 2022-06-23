<?php

namespace Step\Acceptance;

class UserCreateSteps extends \AcceptanceTester
{
    /**
     * @Given I am unlogged user
     */
    public function iAmUnloggedUser()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am unlogged user` is not defined");
    }

    /**
     * @Given i fill my data with :arg1
     */
    public function iFillMyDataWith($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `i fill my data with :arg1` is not defined");
    }

    /**
     * @When I call save
     */
    public function iCallSave()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I call save` is not defined");
    }

    /**
     * @Then I should see my response is :arg1
     */
    public function iShouldSeeMyResponseIs($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see my response is :arg1` is not defined");
    }
}
