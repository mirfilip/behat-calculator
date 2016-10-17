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
     * @Transform /^(-?\d+(?:\.\d+)?)$/
     */
    public function castStringToFloat($string)
    {
        return floatval($string);
    }


    /**
     * @Given there is no input
     */
    public function thereIsNoInput()
    {
        $this->calc->reset();
    }

    /**
     * @When I add :in1 and :in2
     */
    public function iAddAnd($in1, $in2)
    {
        $this->calc->add($in1, $in2);
    }

    /**
     * @Then I should get :expected
     */
    public function iShouldGet($expected)
    {
        // TODO: What if errors occurred?
        $result = $this->calc->getResult();

        assert($result == $expected, "$expected is not equal to $result");
    }

    /**
     * @When I subtract :in1 and :in2
     */
    public function iSubtractAnd($in1, $in2)
    {
        $this->calc->subtract($in1, $in2);
    }

    /**
     * @When I divide :in1 and :in2
     */
    public function iDivideAnd($in1, $in2)
    {
        $this->calc->divide($in1, $in2);
    }

    /**
     * @Then I should get an error :errorMsg
     */
    public function iShouldGetAnError($expectedError)
    {
        $actualError = $this->calc->getError();

        assert($actualError === $expectedError, "Expected error '$expectedError' is not actual '$actualError'");
    }
}
