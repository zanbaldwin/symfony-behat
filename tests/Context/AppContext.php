<?php

namespace AppBundleTests\Context;

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

class AppContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @Then /^(?:|I )should not be on (?:|the )homepage$/
     */
    public function assertNotHomepage()
    {
        // The MinkContext provides the step "I should be on the homepage", but not a step for "I should not be on the
        // homepage". Create that step here and change "addressEquals" to "addressNotEquals". To see the original step
        // this was copied from, see the method "Behat\MinkExtension\Context\MinkContext::assertHomepage".
        $this->assertSession()->addressNotEquals($this->locatePath('/'));
    }
}
