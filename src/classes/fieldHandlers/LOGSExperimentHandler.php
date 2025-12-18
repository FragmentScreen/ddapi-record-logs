<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\logging\logger;

/**
 * Field handler for LOGS Experiment content.
 */
class LOGSExperimentHandler extends fieldHandler
{
  protected function validate($content): bool
  {
    // Do some v. basic validation
    if (is_object($content)) {
      return true;
    }

    if (empty(json_decode($content))) {
      return false;
    }

    return true;
  }

  public function type(): string
  {
    return 'LOGSExperiment';
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
