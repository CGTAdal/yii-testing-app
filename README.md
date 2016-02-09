# yii-testing-app

yii-testing-app integration for unit and functional automation testing.

To install all the dependencies and test the unit and functional test case follow these commands:
To install all dependencies:
  - composer install

To run the unit test:
  - cd protected/tests
  - ../../vendor/bin/phpunit unit
 
To run the functiona test:
  - cd selenium
  - java -jar selenium-server-standalone-2.49.0.jar
  - Open another tab in terminal
  - cd protected/tests
  - ../../vendor/bin/phpunit functional

To Generate coverage report for unit test cases:
  - cd protected/tests
  - ../../vendor/bin/phpunit --coverage-html ./report unit

### Version
1.0

### Tech

We have some usefull references:

* [Yii Reference] - Yii framwork official site to demonstrate configuration!
* [phpunit selenium] - phpunit selenium sample code.


### Todos

 - Write further testing Tests Cases

License
----

MIT


**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen.)


   [Yii reference]: <http://www.yiiframework.com/doc/guide/1.1/en/test.overview>
   [phpunit selenium]: <http://apigen.juzna.cz/doc/sebastianbergmann/phpunit-selenium/package-PHPUnit.Selenium.html>


