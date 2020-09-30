<?php
  class ValidatePasswordTest extends PHPUnit_Framework_TestCase {
  Public function TestValid Length(){
     $ValPass = new ValidatePassword();
	 $this->assertFalse($ValPass->ValidLangth('1234'));
	 
  }
  }
