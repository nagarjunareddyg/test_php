<?php
class ValidatePassword{
const MIN_LENGHT = 6;
const MAX_LENGHT = 20;

public function validLength($password){
$passLength = strlen($password);
return $passLength >= self::MIN_LENGHT && $passLength <= self::MAX_LENGHT;
}
}
