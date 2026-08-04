<?php

namespace Engtuncay\Phputils8\FiCores;

class FiStrbui
{
  /**
   * fkb is used as array, so it initialized.
   *
   * @var array $arrStr
   */
  public array $arrStr = [];

  public function append(string $str): FiStrbui
  {
    $this->arrStr[] = $str;
    return $this;
  }

  public function __toString(): string
  {
    return implode('', $this->arrStr);
  }

  public function toString(): string
  {
    return $this->__toString();
  }

  /**
   * Başına string ekler
   * @param string $str 
   * @return FiStrbui 
   */
  public function prepend(string $str): FiStrbui
  {
    array_unshift($this->arrStr, $str);
    return $this;
  }

  public static function empty(): FiStrbui
  {
    return new FiStrbui();
  }

}
