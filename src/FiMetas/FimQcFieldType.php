<?php

namespace Engtuncay\Phputils8\FiMetas;

// Php FiMeta Class Generation - v0.4 

use Engtuncay\Phputils8\FiDtos\FiMeta;

class FimQcFieldType
{

  public static function fdouble(): FiMeta
  {
    $fiMeta = new FiMeta("fdouble");
    $fiMeta->setTxValue("double");

    return $fiMeta;
  }

  public static function fnvarchar(): FiMeta
  {
    $fiMeta = new FiMeta("fnvarchar");
    $fiMeta->setTxValue("nvarchar");

    return $fiMeta;
  }

  public static function fvarchar(): FiMeta
  {
    $fiMeta = new FiMeta("fvarchar");
    $fiMeta->setTxValue("varchar");

    return $fiMeta;
  }

  public static function fint(): FiMeta
  {
    $fiMeta = new FiMeta("fint");
    $fiMeta->setTxValue("int");

    return $fiMeta;
  }

  public static function fdate(): FiMeta
  {
    $fiMeta = new FiMeta("fdate");
    $fiMeta->setTxValue("date");

    return $fiMeta;
  }

  public static function fbool(): FiMeta
  {
    $fiMeta = new FiMeta("fbool");
    $fiMeta->setTxValue("bool");

    return $fiMeta;
  }

  public static function fstring(): FiMeta
  {
    $fiMeta = new FiMeta("fstring");
    $fiMeta->setTxValue("string");

    return $fiMeta;
  }

  public static function fkb(): FiMeta
  {
    $fiMeta = new FiMeta("fkb");
    $fiMeta->setTxValue("fkb");

    return $fiMeta;
  }

  public static function fdr(): FiMeta
  {
    $fiMeta = new FiMeta("fdr");
    $fiMeta->setTxValue("fdr");

    return $fiMeta;
  }

  public static function fobject(): FiMeta
  {
    $fiMeta = new FiMeta("fobject");
    $fiMeta->setTxValue("object");

    return $fiMeta;
  }

  public static function meta(): FiMeta
  {
    $fiMeta = new FiMeta("meta");
    $fiMeta->setTxValue("meta");

    return $fiMeta;
  }

  public static function fdecimal(): FiMeta
  {
    $fiMeta = new FiMeta("fdecimal");
    $fiMeta->setTxValue("decimal");

    return $fiMeta;
  }

  public static function ftinyint(): FiMeta
  {
    $fiMeta = new FiMeta("ftinyint");
    $fiMeta->setTxValue("tinyint");

    return $fiMeta;
  }

  public static function ftext(): FiMeta
  {
    $fiMeta = new FiMeta("ftext");
    $fiMeta->setTxValue("text");

    return $fiMeta;
  }

  public static function flongtext(): FiMeta
  {
    $fiMeta = new FiMeta("flongtext");
    $fiMeta->setTxValue("longtext");

    return $fiMeta;
  }

  public static function fenum(): FiMeta
  {
    $fiMeta = new FiMeta("fenum");
    $fiMeta->setTxValue("enum");

    return $fiMeta;
  }

  public static function fjson(): FiMeta
  {
    $fiMeta = new FiMeta("fjson");
    $fiMeta->setTxValue("json");

    return $fiMeta;
  }

  public static function fcsv(): FiMeta
  {
    $fiMeta = new FiMeta("fcsv");
    $fiMeta->setTxValue("csv");

    return $fiMeta;
  }

  public static function fimage(): FiMeta
  {
    $fiMeta = new FiMeta("fimage");
    $fiMeta->setTxValue("image");

    return $fiMeta;
  }

  public static function findex_unique(): FiMeta
  {
    $fiMeta = new FiMeta("findex_unique");
    $fiMeta->setTxValue("index_unique");

    return $fiMeta;
  }

  public static function ftableName(): FiMeta
  {
    $fiMeta = new FiMeta("ftableName");
    $fiMeta->setTxValue("ftableName");

    return $fiMeta;
  }

  //sq_unique
  public static function sq_unique(): FiMeta
  {
    $fiMeta = new FiMeta("sq_unique");
    $fiMeta->setTxValue("sq_unique");

    return $fiMeta;
  }
}
