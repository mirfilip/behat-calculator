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

  Background:
    Given there is no input

  @add
  Scenario: Addition of two positive numbers
    When I add 1 and 2
    Then I should get 3

  @add
  Scenario: Addition of two negative numbers
    When I add -5 and -5
    Then I should get -10

  @add
  Scenario: Addition of one positive and one negative number
    When I add 1 and -2
    Then I should get -1

  @sub
  Scenario: Subtraction of two positive numbers
    When I subtract 1 and 1
    Then I should get 0

  @sub
  Scenario: Subtraction of two negative numbers
    When I subtract -4 and -3
    Then I should get -1

  @sub
  Scenario: Subtraction of one negative number and one positive number
    When I subtract -4 and 5
    Then I should get -9

  @div
  Scenario Outline: Division of two numbers
    When I divide <first> and <second>
    Then I should get <expected>

    Examples:
      | first | second | expected |
      | 2     | 2      | 1        |
      | 3     | 2      | 1.5      |
      | -10   | 2      | -5       |
      | 10    | -2     | -5       |

  @div
  Scenario: Division by zero is not allowed
    When I divide 10 and 0
    Then I should get an error "Division by zero"

  @wip
  Scenario: Multiplication of two positive numbers
  @wip
  Scenario: Multiplication of two negative numbers
  @wip
  Scenario: Multiplication of one positive and one negative number
  @wip
  Scenario: Multiplication of one negative and one positive number
