<?php
class Required implements validationrule
{
  public function check($name, $value)
  {
    if (empty($value)) {
      return "$name must be Required";
    }
    return false;
  }
}
