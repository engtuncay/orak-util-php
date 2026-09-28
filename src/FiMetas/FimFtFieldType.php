<?php

namespace Engtuncay\Phputils8\FiMetas;

// Php FiMeta Class Generation - v0.4 
use Engtuncay\Phputils8\FiDtos\FiMeta;

class FimFtFieldType
{


  public static function fDouble(): FiMeta
  {
    $fiMeta = new FiMeta("fDouble");
    $fiMeta->setTxValue("double");

    return $fiMeta;
  }

  public static function fNvarchar(): FiMeta
  {
    $fiMeta = new FiMeta("fNvarchar");
    $fiMeta->setTxValue("nvarchar");

    return $fiMeta;
  }

  public static function fVarchar(): FiMeta
  {
    $fiMeta = new FiMeta("fVarchar");
    $fiMeta->setTxValue("varchar");

    return $fiMeta;
  }

  public static function fInt(): FiMeta
  {
    $fiMeta = new FiMeta("fInt");
    $fiMeta->setTxValue("int");

    return $fiMeta;
  }

  public static function fDate(): FiMeta
  {
    $fiMeta = new FiMeta("fDate");
    $fiMeta->setTxValue("date");

    return $fiMeta;
  }

  public static function fBool(): FiMeta
  {
    $fiMeta = new FiMeta("fBool");
    $fiMeta->setTxValue("bool");

    return $fiMeta;
  }

  public static function fString(): FiMeta
  {
    $fiMeta = new FiMeta("fString");
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

  public static function fObject(): FiMeta
  {
    $fiMeta = new FiMeta("fObject");
    $fiMeta->setTxValue("object");

    return $fiMeta;
  }

  public static function meta(): FiMeta
  {
    $fiMeta = new FiMeta("meta");
    $fiMeta->setTxValue("meta");

    return $fiMeta;
  }

  public static function fDecimal(): FiMeta
  {
    $fiMeta = new FiMeta("fDecimal");
    $fiMeta->setTxValue("decimal");

    return $fiMeta;
  }

  public static function fTinyint(): FiMeta
  {
    $fiMeta = new FiMeta("fTinyint");
    $fiMeta->setTxValue("tinyint");

    return $fiMeta;
  }

  public static function fText(): FiMeta
  {
    $fiMeta = new FiMeta("fText");
    $fiMeta->setTxValue("text");

    return $fiMeta;
  }

  public static function fLongtext(): FiMeta
  {
    $fiMeta = new FiMeta("fLongtext");
    $fiMeta->setTxValue("longtext");

    return $fiMeta;
  }

  public static function fEnum(): FiMeta
  {
    $fiMeta = new FiMeta("fEnum");
    $fiMeta->setTxValue("enum");

    return $fiMeta;
  }

  public static function fJson(): FiMeta
  {
    $fiMeta = new FiMeta("fJson");
    $fiMeta->setTxValue("json");

    return $fiMeta;
  }

  public static function fCsv(): FiMeta
  {
    $fiMeta = new FiMeta("fCsv");
    $fiMeta->setTxValue("csv");

    return $fiMeta;
  }

  public static function fImage(): FiMeta
  {
    $fiMeta = new FiMeta("fImage");
    $fiMeta->setTxValue("image");

    return $fiMeta;
  }

  public static function index_unique(): FiMeta
  {
    $fiMeta = new FiMeta("index_unique");
    $fiMeta->setTxValue("index_unique");

    return $fiMeta;
  }

  public static function fTableName(): FiMeta
  {
    $fiMeta = new FiMeta("fTableName");
    $fiMeta->setTxValue("ftableName");

    return $fiMeta;
  }

  public static function sq_unique(): FiMeta
  {
    $fiMeta = new FiMeta("sq_unique");
    $fiMeta->setTxValue("sq_unique");

    return $fiMeta;
  }

  public static function tfcTxCodeComm(): FiMeta
  {
    $fiMeta = new FiMeta("tfcTxCodeComm");
    $fiMeta->setTxValue("tfcTxCodeComm");

    return $fiMeta;
  }


}
