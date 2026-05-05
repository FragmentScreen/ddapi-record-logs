<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\datadeposition\fieldHandlers\JSONHandler;

use FAE\logging\logger;

/**
 * Field handler for LOGS Dataset content.
 */
class LOGSDatasetHandler extends LOGSJSONHandler
{
  public function type(): string
  {
    return parent::type() . '_Dataset';
  }

  public function description(): string 
  {
    return "Logs Dataset format for EM metadata in JSON format";
  }
}
