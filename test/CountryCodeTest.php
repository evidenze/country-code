<?php
 
use Evidenze\CountryCode\CountryCode;
 
class CountryCodeTest extends PHPUnit_Framework_TestCase {
 
  public function testNachHasCheese()
  {
    $countryCode = new CountryCode;
    $this->assertTrue($nacho->hasCheese());
  }
 
}