<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\datadeposition\fieldHandlers\JSONHandler;

use FAE\logging\logger;

/**
 * Field handler for LOGS Experiment content.
 */
class LOGSExperimentHandler extends LOGSJSONHandler
{
  public function type(): string
  {
    return parent::type() . '_Experiment';
  }

  public function description(): string 
  {
    return "Logs Experiment format for EM metadata in JSON format";
  }
}
