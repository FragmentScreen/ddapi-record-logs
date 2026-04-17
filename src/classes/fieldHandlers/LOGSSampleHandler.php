<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\datadeposition\fieldHandlers\JSONHandler;

/**
 * Field handler for LOGS Sample content.
 */
class LOGSSampleHandler extends JSONHandler
{
  protected function validate($content): bool
  {
    return parent::validate($content);
  }

  public function type(): string
  {
    return parent::type() . '_LOGS_Sample';
  }

  public function doOutput(): mixed
  {

    return $this->getField()['content'];
  }

  public function description(): string 
  {
    return "Logs Sample format for EM metadata in JSON format";
  }
}
