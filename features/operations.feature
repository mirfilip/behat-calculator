Feature: Arithmetic operations
  In order to perform arithmetics
  As a user
  I need to be able to use arithmetic functions/operators

  Notes:
  The calculator is very basic (MVP), so supported operations are:
  - addition
  - subtraction
  - division
  - multiplication

  Remember about the edge cases (division by zero)

  Scenario: Addition of two positive numbers
    Given there is no input
    When I add 1 and 2
    Then I should get 3

  Scenario: Addition of two negative numbers
    Given there is no input
    When I add -5 and -5
    Then I should get -10

  Scenario: Addition of one positive and one negative number
    Given there is no input
    When I add 1 and -2
    Then I should get -1

  Scenario: Subtraction of two positive numbers
    Given there is no input
    When I subtract 1 and 1
    Then I should get 0

  Scenario: Subtraction of two negative numbers
    Given there is no input
    When I subtract -4 and -3
    Then I should get -1

  Scenario: Subtraction of one negative number and one positive number
    Given there is no input
    When I subtract -4 and 5
    Then I should get -9

  Scenario Outline: Division of two numbers
    Given there is no input
    When I divide <first> and <second>
    Then I should get <expected>

    Examples:
      | first | second | expected |
      | 2     | 2      | 1        |
      | 3     | 2      | 1.5      |
      | -10   | 2      | -5       |
      | 10    | -2     | -5       |

  Scenario: Division by zero is not allowed
    Given there is no input
    When I divide 10 and 0
    Then I should get an error

  @wip
  Scenario: Multiplication of two positive numbers
  @wip
  Scenario: Multiplication of two negative numbers
  @wip
  Scenario: Multiplication of one positive and one negative number
  @wip
  Scenario: Multiplication of one negative and one positive number
