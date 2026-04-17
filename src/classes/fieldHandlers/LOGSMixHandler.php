<?php

namespace Fragmentscreen\LOGS\fieldHandlers;
use FAE\datadeposition\fieldHandlers\JSONHandler;

/**
 * Field handler for LOGS Mix content.
 */
class LOGSMixHandler extends JSONHandler
{
  protected function validate($content): bool
  {
    parent::validate($content);
  }

  public function type(): string
  {
    return parent::type() . '_LOGS_Mix';
  }

  public function doOutput(): mixed
  {

    return $this->getField()['content'];
  }

  public function description(): string 
  {
    return "Logs Mix format for EM metadata in JSON format";
  }
}
