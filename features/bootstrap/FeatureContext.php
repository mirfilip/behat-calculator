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
     * @var Calculator
     */
    private $calc;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->calc = new Calculator();
    }

    /**
     * @Given there is no input
     */
    public function thereIsNoInput()
    {
        $this->calc->reset();
    }

    /**
     * @When /^I add (-?\d+) and (-?\d+)$/
     */
    public function iAddAnd($in1, $in2)
    {
        $this->calc->add($in1, $in2);
    }

    /**
     * @Then /^I should get (-?\d+)$/
     */
    public function iShouldGet($expected)
    {
        // TODO: What if errors occurred?
        $this->calc->getResult();
    }

    /**
     * @When /^I subtract (-?\d+) and (-?\d+)$/
     */
    public function iSubtractAnd($in1, $in2)
    {
        $this->calc->subtract($in1, $in2);
    }

    /**
     * @When /^I divide (-?\d+) and (-?\d+)$/
     */
    public function iDivideAnd($in1, $in2)
    {
        $this->calc->divide($in1, $in2);
    }

    /**
     * @Then I should get an error
     */
    public function iShouldGetAnError()
    {
        $this->calc->getError();
    }
}
