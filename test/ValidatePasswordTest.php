<?php
  class ValidatePasswordTest extends PHPUnit_Framework_TestCase {
  Public function testValidLength(){
     $valPass = new ValidatePassword();
	 $this->assertFalse($valPass->validLangth('1234'));
	 
  }
  }
