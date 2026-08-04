<?php

namespace Engtuncay\Phputils8\FiCores;

use Engtuncay\Phputils8\FiDtos\Fkb;

class FiCollection
{
  public static function isEmpty($objCollection): bool
  {
    if ($objCollection == null) return true;

    if (is_array($objCollection)) {
      return count($objCollection) == 0;
    }

    if ($objCollection instanceof Fkb) {
      return count($objCollection->params) == 0;
    }

    // count metodu varsa onu kullan
    if (method_exists($objCollection, 'count')) {
      return $objCollection->count() == 0;
    }

    return false;
  }

  public static function size($objCollection): int
  {
    if ($objCollection == null) return 0;

    if (is_array($objCollection)) {
      return count($objCollection);
    }

    if (method_exists($objCollection, 'count')) {
      return $objCollection->count();
    }

    return 0;
  }

  public static function toArrayn($objCollection, $keySelector): array
  {
    $map = [];

    if ($objCollection == null) return $map;

    if (is_array($objCollection)) {
      foreach ($objCollection as $item) {
        $key = $keySelector($item);
        if ($key !== null && $key !== "") {
          $map[$key] = $item;
        }
      }
    } else if ($objCollection instanceof Fkb) {
      foreach ($objCollection->params as $item) {
        $key = $keySelector($item);
        if ($key !== null && $key !== "") {
          $map[$key] = $item;
        }
      }
    } else if (method_exists($objCollection, 'getIterator')) {
      foreach ($objCollection->getIterator() as $item) {
        $key = $keySelector($item);
        if ($key !== null && $key !== "") {
          $map[$key] = $item;
        }
      }
    }

    return $map;
  }

  /**
   * keySelector fonksiyonuna göre key, object şeklinde Fkb objesi üretir
   * 
   * @param mixed $objCollection 
   * @param mixed $keySelector 
   * @return Fkb 
   */
  public static function toFkb($objCollection, $keySelector): Fkb
  {
    $result = self::toArrayn($objCollection, $keySelector);
    return new Fkb($result);
  }
}
