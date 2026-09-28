<?php

namespace Engtuncay\Phputils8\FiCores;

use Engtuncay\Phputils8\FiDtos\Fkb;

class FiString
{

  public static function substitutor(string $template, Fkb $fkbParams): string
  {
    // Düzenli ifade
    $pattern = '/\{\{(.*?)\}\}/';

    $params = $fkbParams->params;

    // Değiştirme işlemi
    $result = preg_replace_callback($pattern, function ($matches) use ($params) {
      $key = $matches[1]; // {{key}} içindeki 'key' kısmını al
      return $params[$key] ?? $matches[0]; // Eğer eşleşme yoksa orijinal {{key}}'i koru
    }, $template);

    return $result;
  }

  /**
   * Verilen metin içinde küçük harf bulunup bulunmadığını kontrol eder.
   *
   * @param string $txValue Kontrol edilecek metin.
   * @return bool Küçük harf varsa true, yoksa false döner.
   */
  public static function hasLowercaseLetter(string $txValue): bool
  {
    // Küçük harfleri kontrol etmek için preg_match kullanıyoruz
    return preg_match('/[a-z]/', $txValue) === 1;
  }

  public static function orEmpty(mixed $objValue)
  {
    if ($objValue === null) return '';

    return $objValue;
  }

  /**
   * Trim is Applied
   *
   * @param mixed $objValue
   * @return true|void
   */
  public static function isEmpty(mixed $objValue): bool
  {
    if ($objValue === null) return true;
    if (trim($objValue) === '') return true;
    return false;
  }

  public static function toArray(string $txValue, string $txDelimiter = ',', bool $boTrim = false): array
  {
    if (FiString::isEmpty($txValue)) return [];
    $arr = explode($txDelimiter, $txValue);

    if ($boTrim) {
      $arr = array_map('trim', $arr);
    }

    return $arr;
  }

  public static function split(string $txValue, string $txDelimiter = ',', bool $boTrim = false): array
  {
    return FiString::toArray($txValue, $txDelimiter, $boTrim);
  }

  /**
   * Verilen $txValue değerinin, $arrValues içinde herhangi biriyle eşleşip eşleşmediğini kontrol eder.
   * 
   * @param string $txValue 
   * @param string ...$arrValues 
   * @return true|false 
   */
  public static function any(string $txValue, string ...$arrValues)
  {
    // txValue , $arrValues içinde herhangi biriyle eşleşiyor mu kontrol et
    foreach ($arrValues as $value) {
      if ($txValue === $value) {
        return true;
      }
    }
    return false;
  }

  /**
   * equals any value (ignores case)
   * 
   * çok baytlı karakterleri destekler (örneğin Türkçe karakterler)
   * 
   * @param string $fcTxFieldName 
   * @param mixed ...$arrValues 
   * @return bool 
   */
  public static function anyIc(string $fcTxFieldName, ...$arrValues): bool
  {
    foreach ($arrValues as $value) {
      if (mb_strtolower($fcTxFieldName) === mb_strtolower($value)) {
        return true;
      }
    }
    return false;
  }

  public static function textComma(): string
  {
    return ", ";
  }

  public static function textAndSpace(): string
  {
    return " AND ";
  }

  /**
   * 
   * @param string $txHayStack text will be controlled
   * @param string $txVal text will be checked
   * @return bool 
   */
  public static function startWith(string $txHayStack, string $txVal)
	{
    return str_starts_with($txHayStack,$txVal);
	}

}
