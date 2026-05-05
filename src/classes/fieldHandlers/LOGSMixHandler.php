<?php

namespace Fragmentscreen\LOGS\fieldHandlers;

/**
 * Field handler for LOGS Mix content.
 */
class LOGSMixHandler extends LOGSJSONHandler
{
  public function type(): string
  {
    return parent::type() . '_Mix';
  }

  public function description(): string 
  {
    return "Logs Mix format for EM metadata in JSON format";
  }
}
