# yii-testing-app
yii-testing-app integration for unit and functional automation testing

To install all the dependencies and test the unit and functional test case follow these commands:

To install all dependencies:
1. composer install

To run the unit test:
1. cd protected/tests
2. ../../vendor/bin/phpunit unit

To run the functiona test:
1. cd selenium
2. java -jar selenium-server-standalone-2.49.0.jar
3. Open another tab in terminal
4. cd protected/tests
5. ../../vendor/bin/phpunit functional

To Generate coverage report for unit test cases:
1. cd protected/tests
2. ../../vendor/bin/phpunit --coverage-html ./report unit
