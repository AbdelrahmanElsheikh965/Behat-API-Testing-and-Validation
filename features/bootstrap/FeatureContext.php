<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected $carCount = 0;
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
     * @Given I have :arg1 cars
     */
    public function iHaveCars($arg1)
    {
        $this->carCount = intval($arg1);
    }

    /**
     * @When I get :arg1 more cars
     */
    public function iGetMoreCars($arg1)
    {
        $this->carCount += intval($arg1);
    }

    /**
     * @Then I should have :arg1 cars
     */
    public function iShouldHaveCars($arg1)
    {
        assert($this->carCount === intval($arg1), "Error/No.of cars is not as expected => $this->carCount");
    }

}
