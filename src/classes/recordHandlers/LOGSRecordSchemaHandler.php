<?php

namespace Fragmentscreen\LOGS\recordHandlers;

/**
 * LOGS format. LOGS is a research data management platform that manages raw data from instruments and extracts and stores metadata (formally owned by SIGNALS GmBH, now SciY)
 * Details: https://logs.sciy.com/
 * E.g. used by GUF
 */
class LOGSRecordSchemaHandler extends recordSchemaHandler
{

  public function type(): string
  {
    return 'LOGS';
  }

  public function description(): string 
  {
    return "Metadata as extracted from the LOGS system";
  }

}
