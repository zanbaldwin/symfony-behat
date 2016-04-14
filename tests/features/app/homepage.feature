Feature: Symfony's Default Homepage

    Scenario: Ensure that the text on Symfony's default homepage is correct.
        Given I am on the homepage
        Then I should see "Welcome to Symfony"
