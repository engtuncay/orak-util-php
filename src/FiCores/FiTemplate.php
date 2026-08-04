<?php

namespace Engtuncay\Phputils8\FiCores;

use Engtuncay\Phputils8\FiDtos\Fkb;

class FiTemplate
{
  public static function replaceParams(string $template, Fkb $fkbParams): string
  {
    // Düzenli ifade
    $pattern = '/\{\{(.*?)\}\}/';

      $params = $fkbParams->getParamsNtn(); // Corrected method name

    // Değiştirme işlemi
    $result = preg_replace_callback($pattern, function ($matches) use ($params) {
      $key = $matches[1]; // {{key}} içindeki 'key' kısmını al
      if (isset($params[$key])) {
        $val = $params[$key];
        if (is_scalar($val) || $val === null) {
          return $val;
        } elseif (is_object($val) || is_array($val)) {
          // Nesne veya dizi ise json_encode ile string'e çevir
          return json_encode($val);
        } else {
          return (string)$val;
        }
      }
      return $matches[0]; // Eğer eşleşme yoksa orijinal {{key}}'i koru
    }, $template);

    return $result;
  }
}
