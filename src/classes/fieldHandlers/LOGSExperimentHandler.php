<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\datadeposition\fieldInterfaces\Experiment;

/**
 * Field handler for LOGS Experiment content.
 */
class LOGSExperimentHandler extends LOGSJSONHandler implements Experiment
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
