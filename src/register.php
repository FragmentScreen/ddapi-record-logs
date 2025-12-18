<?php

use FAE\datadeposition\recordHandlers\recordSchemaHandler;
use Fragmentscreen\LOGS\recordHandlers\LOGSRecordSchemaHandler;

use FAE\datadeposition\fieldHandlers\fieldHandler;
use Fragmentscreen\LOGS\fieldHandlers\LOGSDatasetHandler;
use Fragmentscreen\LOGS\fieldHandlers\LOGSExperimentHandler;
use Fragmentscreen\LOGS\fieldHandlers\LOGSMixHandler;
use Fragmentscreen\LOGS\fieldHandlers\LOGSSampleHandler;

recordSchemaHandler::registerHandler(LOGSRecordSchemaHandler::class);
fieldHandler::registerHandler(LOGSDatasetHandler::class);
fieldHandler::registerHandler(LOGSExperimentHandler::class);
fieldHandler::registerHandler(LOGSMixHandler::class);
fieldHandler::registerHandler(LOGSSampleHandler::class);
