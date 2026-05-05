<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\datadeposition\fieldInterfaces\Sample;

/**
 * Field handler for LOGS Sample content.
 */
class LOGSSampleHandler extends LOGSJSONHandler implements Sample
{
  public function type(): string
  {
    return parent::type() . '_Sample';
  }

  public function description(): string 
  {
    return "Logs Sample format for EM metadata in JSON format";
  }
}
