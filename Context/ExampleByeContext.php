<?php
namespace Peteradennis\Behat\Context;

use Behat\Behat\Context\Context;

class ExampleByeContext implements Context {
  /**
   * Say good bye
   *
   * @Given /^I say good bye$/
   */
  public function iSayGoodBye() {
    throw new \Exception('I did not hear "Good bye"');
  }
}
