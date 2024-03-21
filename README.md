# Behat-API-Testing-and-Validation

### Acceptance Testing (Behavioral)

Ensuring that your system behaves '' correctly '' according to the customer, user or consumer.

#### Unit vs. Behavioral Testing : Scope

**Unit Tests**

- Small, discrete chucks of code usually functions or methods.
- Isolated from network, database, UI or the user
- Probably in the same machine/memory.

**Behavioral Tests**
- Collections of functions, methods, and components.
- End to End from the consumer's perspective.
- Need the underlying capabilities.

> In terms of (Shopping Cart) :  
>  Unit Testing            => Can I add something to my cart ?   
> Behavioral Testing => Can I make money from my store ? (overall process-all steps)

When used with BDD frameworks i.e.(Cucumber) [Gherkin](https://gist.github.com/AbdelrahmanElsheikh965/36e9d454ec853375a24074f3c00eb11f)  scenarios are translated to executable code . Making it easy to implement test automation and ensure that the software behaves exactly as expected.


This will configure of Behat & Github library for you and create vendor directory
```
composer.phar install
```

This will initialize setup and create the feature class for you.
```
vendor/bin/behat --init
```
#### 3 Steps of every test
1. Write the feature description.
2. Write the supporting code.
3. Refactor one or both while running the tests.

Finally you type your feature in gherkin syntax in features directory
in .feature extension files

Run the following command (make sure you are in the right pwd)
> vendor/bin/behat

Copy methods from the terminal & paste them into main FeatureContext.php Class  
Implement your functionality, test, refactor, test and refactor until you pass them all.

Consider testing your piece of software as it's very crucial skill to have.
