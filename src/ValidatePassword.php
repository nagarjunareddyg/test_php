<?php
class ValidatePassword{
const MIN_LENGHT = 6;
const MAX_LENGHT = 20;

public function validlength($password){
$PassLength = strlen($password);
return $PassLength >= self::MIN_LENGHT && $PassLength <= self::MAX_LENGHT;
}
}
