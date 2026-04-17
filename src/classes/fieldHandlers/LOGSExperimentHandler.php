<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\datadeposition\fieldHandlers\JSONHandler;

use FAE\logging\logger;

/**
 * Field handler for LOGS Experiment content.
 */
class LOGSExperimentHandler extends JSONHandler
{
  protected function validate($content): bool
  {
    return parent::validate($content);
  }

  public function type(): string
  {
    return parent::type() . '_LOGS_Experiment';
  }

  public function doOutput(): mixed
  {

    return $this->getField()['content'];
  }

  public function description(): string 
  {
    return "Logs Experiment format for EM metadata in JSON format";
  }
}
