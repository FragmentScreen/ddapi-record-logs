<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

use FAE\datadeposition\fieldHandlers\JSONHandler;

/**
 * Field handler for LOGS Dataset content.
 */
class LOGSJSONHandler extends JSONHandler
{
  protected function validate($content): bool
  {

    // TODO: Validate we're using LOGS record schema?

    return parent::validate($content);
  }

  public function type(): string
  {
    return parent::type() . '_LOGS';
  }

  public function doOutput(): mixed
  {
    return $this->getField()['content'];
  }

  public function description(): string 
  {
    return "Logs format for EM metadata in JSON format";
  }
}
