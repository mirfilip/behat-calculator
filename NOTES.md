1. Clone project
2. Gherkin intro
    - `Context-Action-Outcome` a.k.a `When-Given-Then`
    - All stakeholder write a "spec" during first discussion about the project
    - Plain english (or any other lang)
    - New language - not bound to any programming lang
    - Using domain language when writing
    - This can be a documentation only, automated testing or both
3. Writing first `.feature` file
    - `Feature` header
    -  Notes section (optional)
    - `Scenario`, `Steps`, `Tags`
    - `Scenario outline`
4. Behat
    - This is a **RUNNER** of Gherkin features
    - Heavily based on `Cucumber` project from Ruby
    - Easy
    - `Context`
4. Behat initialization
    - Interactive mode
        - `--append-snipets`
        - it should fail all the time
    - First implementation should be a dummy
    - We are prototyping while implementing test
        - This is a main benefit of that approach
5. Implementation
    - Problem with scenario description: minus signs
    - Scenario description can be a normal sentence (limited) or regex
    - We switch to regex
    - Scenarios implemented but Calculator is missing
    - By default, `features/bootstrap` is PSR-0 autoloaded
    - For MVP, Calculator class goes to `feature/bootstrap`
    - Very naive implementation first
    - `@wip` scenarios - return to tags concept
    
Later:
Behat support in IDE (PHPStorm)
