<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given there is no input
     */
    public function thereIsNoInput()
    {
        throw new PendingException();
    }

    /**
     * @When I add :arg1 and :arg2
     */
    public function iAddAnd($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I should get :arg1
     */
    public function iShouldGet($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I subtract :arg1 and :arg2
     */
    public function iSubtractAnd($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I divide :arg1 and :arg2
     */
    public function iDivideAnd($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I should get an error
     */
    public function iShouldGetAnError()
    {
        throw new PendingException();
    }
}
