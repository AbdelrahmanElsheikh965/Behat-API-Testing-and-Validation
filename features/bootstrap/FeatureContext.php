<?php

use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected $carCount = 0;

    protected $client = null;
    protected $issues = null;
    protected $results = null;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->client = new \Github\Client();
    }

    /**
     * @Given I am an anonymous user
     */
    public function iAmAnAnonymousUser()
    {
        // Nothing here as this client is anonymous by default.
    }

    /**
     * @When I request a list of issues for the Symfony repository from user Symfony
     */
    public function iRequestAListOfIssuesForTheSymfonyRepositoryFromUserSymfony()
    {
        $this->results = $this->client->issues()->all('Symfony', 'Symfony');
    }

    /**
     * @Then I should find at least :arg1 result
     */
    public function iShouldFindAtLeastOneResult($arg1)
    {
        if (count($this->results) < $arg1) {
            throw
            new Exception("Expected at least 1 result but found " . $arg1);
        }
    }



    # ===================================================================================

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
