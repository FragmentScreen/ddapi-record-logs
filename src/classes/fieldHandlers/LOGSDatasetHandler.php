<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\datadeposition\fieldInterfaces\Dataset;

/**
 * Field handler for LOGS Dataset content.
 */
class LOGSDatasetHandler extends LOGSJSONHandler implements Dataset
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
