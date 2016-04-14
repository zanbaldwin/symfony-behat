<?php

namespace AppBundleTests\Context;

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

class AppContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * The MinkContext provides the step "I should be on the homepage", but not a step for "I should not be on the
     * homepage". Create that step here and change "addressEquals" to "addressNotEquals". To see the original step
     * this was copied from, see the method "Behat\MinkExtension\Context\MinkContext::assertHomepage" from the
     * "behat/mink-extension" package.
     *
     * @Then I should be on the homepage
     */
    public function assertNotHomepage()
    {
        $this->assertSession()->addressNotEquals($this->locatePath('/'));
    }
    
    /**
     * Simple example (Behat notation):
     * @When I request :url using Guzzle
     * This would match: `When I request "http://google.com" using Guzzle` (defaults to GET and version 6).
     * 
     * Advanced example (RegEx notation):
     * @When /^I (?P<>GET|POST|PUT|PATCH|DELETE)(?: to)? (?P<url>[^"]) using Guzzle(?P<version>\d+)?$/
     * This would match:
     *     - When I GET "http://google.com" using Guzzle
     *     - When I POST to "http://google.com" using Guzzle5
     *       """
     *       {"id":123,"message":"Example data to send with the POST request (called the body)."}
     *       """
     */
    public function stepDefinitionExample($url, $method = 'GET', $version = 6, TableNode $body = null)
    {
        // Do the thing!
    }
}
