Feature: Create User
  In order to insert user follow the business rules
  As an unregister user
  I need to be able to insert my data
Scenario Outline: Insert User
    Given I am unlogged user
    And i fill my data with "<data>"
    When I call save
    Then I should see my response is "<response>"

    Examples:
      | data                                                                                                              | response                         |
      | auth_key=email@gmail.com                                                                                          | user.name_not_null               |
      | username=meunome                                                                                                  | user.email_not_null              |
      | username=meunome2&email=email2@gmail.com                                                                          | user.password_not_null           |
      | username=meunome3&email=email3@gmail.com&password=abc123                                                     | user.accepted_terms              |
      | username=meunome4&email=email4@gmail.com&password=abc123&terms=1&government_id=12345678910                   | user.invalid_document            |
      | username=meunome5&email=email5@gmail.com&password=abc123&terms=1&government_id=225.801.638-08&auth_key=131   | 1                               |
