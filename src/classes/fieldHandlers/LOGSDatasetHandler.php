<?php

namespace Fragmentscreen\LOGS\fieldHandlers;
use FAE\datadeposition\fieldHandlers\JSONHandler;

use FAE\logging\logger;

/**
 * Field handler for LOGS Dataset content.
 */
class LOGSDatasetHandler extends JSONHandler
{
  protected function validate($content): bool
  {
    parent::validate($content);
  }

  public function type(): string
  {
    return parent::type() . '_LOGS_Dataset';
  }

  public function doOutput(): mixed
  {

    return $this->getField()['content'];
  }

  public function description(): string 
  {
    return "Logs Dataset format for EM metadata in JSON format";
  }
}
