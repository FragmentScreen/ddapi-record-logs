<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\datadeposition\fieldHandlers\JSONHandler;

/**
 * Field handler for LOGS Sample content.
 */
class LOGSSampleHandler extends LOGSJSONHandler
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
