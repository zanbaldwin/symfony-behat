Feature: Login
    In order to view restricted pages
    As a user
    I need to be able to login

    Scenario: Ensure that I can log in
        Given I am on "/login"
        When I fill in the following:
            | username | admin  |
            | password | secret |
        And I press "Login"
        Then I should be on the homepage

    Scenario: Ensure I do not get logged in if the credentials are wrong
        Given I am on "/login"
        When I fill in the following:
            | username | admin          |
            | password | wrong_password |
        And I press "Login"
        Then I should not be on the homepage
        And I should see "Invalid credentials"
