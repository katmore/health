# healthsvc
phpdox documentation

Generated Tue Dec 11 19:31:54 PST 2018

Generated using 'healthsvc/phpdox.sh' - Copyright (c) 2018, Doug Bird. All Rights Reserved.

Generated using phpDox 0.11.2 - Copyright (C) 2010 - 2018 by Arne Blankerts

Generated using html2markdown 2018.1.9

# Namespaces

## Namespaces

Name | Interfaces | Classes | Traits  
---|---|---|---  
\ |  1 |  2 | 0  
\Healthsvc |  9 |  20 |  3  
  
and Contributors

# Classes

## \

Name | Description |  
---|---|---  
Exception |  No description available | EMPTY  
RuntimeException |  No description available | EMPTY  
  
## \Healthsvc

Name | Description |  
---|---|---  
CommandErrorInfoItem |  No description available | EMPTY  
CommandInfoItem |  No description available | EMPTY  
ConfigController |  No description available | EMPTY  
ErrorInfoItem |  No description available | EMPTY  
HostSanityBinDirNotExistException |  No description available | EMPTY  
HostSanityConfig |  No description available | EMPTY  
HostSanityController |  No description available | EMPTY  
HostSanityRequest |  No description available | EMPTY  
HostSanityRequestResponseController |  No description available | EMPTY  
HostSanityResponse |  No description available | EMPTY  
HostSanityStatusData |  No description available | EMPTY  
InfoItem |  No description available | EMPTY  
Request |  No description available | EMPTY  
RequestMethodNotAllowedException |  No description available | EMPTY  
RequestResponseController |  No description available | EMPTY  
Response |  No description available | EMPTY  
ResponseDataInvalidException |  No description available | EMPTY  
ResponseException |  No description available | EMPTY  
SerializableData |  No description available | EMPTY  
StatusData |  No description available | EMPTY  
  
and Contributors

# Interfaces

## \

Name | Description  
---|---  
JsonSerializable |  No description available  
  
## \Healthsvc

Name | Description  
---|---  
BuildableExecExitStatusDataInterface |  No description available  
BuildableMessageDataInterface |  No description available  
BuildableResponseDataInterface |  No description available  
ConsumableExecExitStatusDataInterface |  No description available  
ConsumableMessageDataInterface |  No description available  
ConsumableResponseDataInterface |  No description available  
ResponseBodyPrinterInterface |  No description available  
ResponseInterface |  No description available  
StatusDataProviderInterface |  No description available  
  
and Contributors

# Traits

## \Healthsvc

Name | Description  
---|---  
ConfigFileReaderTrait |  No description available  
RequestBodyParserTrait |  No description available  
ResponseDataRefreshMessageTrait |  No description available  
  
and Contributors

# Healthsvc\ConfigFileReaderTrait::setConfigFile

####

## Signature

`protected function setConfigFile([string $config_file = NULL] ) `

## Parameters

`$config_file` — string

    

and Contributors

# Healthsvc\ConfigFileReaderTrait::getConfig

####

## Signature

`protected function getConfig() `

and Contributors

# Healthsvc\ResponseDataRefreshMessageTrait::refreshMessage

####

## Signature

`protected function refreshMessage() `

and Contributors

# Healthsvc\RequestBodyParserTrait

####

## Synopsis

trait RequestBodyParserTrait {  

}  

## Hierarchy

#### Used by

## Members

#### private

## Methods

#### protected

#### public

and Contributors

# Healthsvc\RequestBodyParserTrait::setRequestBody

####

## Signature

`protected function setRequestBody([string $request_body = NULL, [string
$content_type = NULL]] ) `

## Parameters

`$request_body` — string

    
`$content_type` — string

    

and Contributors

# Healthsvc\RequestBodyParserTrait::getContentType

####

## Signature

`public function getContentType() `

and Contributors

# Healthsvc\RequestBodyParserTrait::getRequestData

####

## Signature

`protected function getRequestData() `

and Contributors

# Healthsvc\RequestBodyParserTrait::getRequestBody

####

## Signature

`public function getRequestBody() `

and Contributors

# Healthsvc\ResponseDataRefreshMessageTrait

####

## Synopsis

trait ResponseDataRefreshMessageTrait {  

}  

## Hierarchy

#### Used by

## Members

#### protected

## Methods

#### protected

and Contributors

# Healthsvc\ConfigFileReaderTrait

####

## Synopsis

trait ConfigFileReaderTrait {  

}  

## Hierarchy

#### Used by

## Members

#### private

## Methods

#### protected

and Contributors

# Healthsvc\HostSanityRequestResponseController

####

## Synopsis

class HostSanityRequestResponseController extends RequestResponseController {  

}  

## Hierarchy

#### Extends

## Members

#### private

## Methods

#### public

### Inherited from Healthsvc\RequestResponseController

#### public

### Inherited from Healthsvc\ConfigFileReaderTrait

#### protected

and Contributors

# Healthsvc\Response

####

## Synopsis

class Response implements ResponseInterface {  

}  

## Hierarchy

#### Implements

## Constants

Name | Value  
---|---  
JSON_CONTENT_TYPE | 'application/json'  
  
## Members

#### private

## Methods

#### protected

#### public

and Contributors

# Healthsvc\ResponseDataInvalidException

####

## Synopsis

class ResponseDataInvalidException extends RuntimeException {  

}  

## Hierarchy

#### Extends

## Members

#### private

#### protected

The exception code

The exception code

The filename where the exception was created

The filename where the exception was created

The line where the exception was created

The line where the exception was created

The exception message

The exception message

## Methods

#### public

### Inherited from RuntimeException

#### public

### Inherited from Exception

#### public

and Contributors

# \Exception

####

## Synopsis

class Exception {  

}  

## Members

#### protected

The exception code

The filename where the exception was created

The line where the exception was created

The exception message

## Methods

#### public

and Contributors

# Healthsvc\HostSanityConfig

####

## Synopsis

class HostSanityConfig extends ConfigController {  

}  

## Hierarchy

#### Extends

## Constants

Name | Value  
---|---  
DEFAULT_BIN_DIR | __DIR__ . '/../bin/host-sanity'  
  
## Methods

#### public

### Inherited from Healthsvc\ConfigController

#### protected

and Contributors

# Healthsvc\RequestResponseController

####

## Synopsis

class RequestResponseController implements ResponseBodyPrinterInterface {  

}  

## Hierarchy

#### Uses

#### Implements

## Methods

#### public

### Inherited from Healthsvc\ConfigFileReaderTrait

#### protected

and Contributors

# Healthsvc\ConfigController

####

## Synopsis

class ConfigController {  

}  

## Members

#### private

## Methods

#### protected

and Contributors

# Healthsvc\CommandInfoItem

####

## Synopsis

class CommandInfoItem extends InfoItem {  

}  

## Hierarchy

#### Extends

## Constants

Name | Value  
---|---  
PROPERTIES_TO_SNAKE_CASE | true  
  
## Members

#### protected

## Methods

#### public

### Inherited from Healthsvc\SerializableData

#### protected

#### public

and Contributors

# Healthsvc\Request

####

## Synopsis

class Request {  

}  

## Hierarchy

#### Uses

## Members

#### private

## Methods

#### public

### Inherited from Healthsvc\RequestBodyParserTrait

#### protected

#### public

and Contributors

# Healthsvc\RequestResponseController::getRequest

####

## Signature

`public function getRequest() `

and Contributors

# Healthsvc\RequestResponseController::__construct

####

## Signature

`public function __construct([string $config_file = NULL] ) `

## Parameters

`$config_file` — string

    

and Contributors

# Healthsvc\RequestResponseController::getResponse

####

## Signature

`public function getResponse() `

and Contributors

# Healthsvc\HostSanityBinDirNotExistException

####

## Synopsis

class HostSanityBinDirNotExistException extends RuntimeException {  

}  

## Hierarchy

#### Extends

## Members

#### private

#### protected

The exception code

The exception code

The filename where the exception was created

The filename where the exception was created

The line where the exception was created

The line where the exception was created

The exception message

The exception message

## Methods

#### public

### Inherited from RuntimeException

#### public

### Inherited from Exception

#### public

and Contributors

# Healthsvc\CommandErrorInfoItem::getStderr

####

## Signature

`public function getStderr() `

and Contributors

# Healthsvc\CommandErrorInfoItem::__construct

####

## Signature

`public function __construct(string $stdout, string $stderr ) `

## Parameters

`$stdout` — string

    
`$stderr` — string

    

and Contributors

# Healthsvc\InfoItem

####

## Synopsis

class InfoItem extends SerializableData {  

}  

## Hierarchy

#### Extends

## Constants

Name | Value  
---|---  
PROPERTIES_TO_SNAKE_CASE | true  
  
## Methods

### Inherited from Healthsvc\SerializableData

#### protected

#### public

and Contributors

# Healthsvc\Request::__construct

####

## Signature

`public function __construct([string $request_method = NULL, [array
$request_query = NULL, [string $request_body = NULL, [string $content_type =
NULL]]]] ) `

## Parameters

`$request_method` — string

    
`$request_query` — array

    
`$request_body` — string

    
`$content_type` — string

    

## Errors/Exceptions

` RequestMethodNotAllowedException `

    

and Contributors

# Healthsvc\Request::isRequestMethodAllowed

####

## Signature

`public function isRequestMethodAllowed() `

and Contributors

# Healthsvc\Request::getRequestMethod

####

## Signature

`public function getRequestMethod() `

and Contributors

# Healthsvc\Request::getRequestQuery

####

## Signature

`public function getRequestQuery() `

and Contributors

# Healthsvc\HostSanityStatusData::getHostname

####

## Signature

`public function getHostname() `

## Returns

string

    string reported hostname

and Contributors

# Healthsvc\HostSanityStatusData::__construct

####

## Signature

`public function __construct([integer $healthStatusTtl = 0, [string
$healthStatusTime = NULL, [string $hostname = ""]]] ) `

## Parameters

`$healthStatusTtl` — integer

    
`$healthStatusTime` — string

    
`$hostname` — string

    

and Contributors

# Healthsvc\HostSanityConfig::getBinDir

####

## Signature

`public function getBinDir() `

and Contributors

# Healthsvc\HostSanityConfig::getWarnExitStatus

####

## Signature

`public function getWarnExitStatus() `

and Contributors

# Healthsvc\HostSanityConfig::getBin

####

## Signature

`public function getBin() `

and Contributors

# Healthsvc\HostSanityConfig::getExec

####

## Signature

`public function getExec() `

and Contributors

# Healthsvc\RequestMethodNotAllowedException

####

## Synopsis

class RequestMethodNotAllowedException extends ResponseException {  

}  

## Hierarchy

#### Extends

## Constants

Name | Value  
---|---  
RESPONSE_CODE | 405  
CONTENT_TYPE | 'text/plain'  
  
## Members

#### private

#### protected

The exception code

The exception code

The filename where the exception was created

The filename where the exception was created

The line where the exception was created

The line where the exception was created

The exception message

The exception message

## Methods

#### public

### Inherited from Healthsvc\ResponseException

#### public

### Inherited from RuntimeException

#### public

### Inherited from Exception

#### public

and Contributors

# Healthsvc\ErrorInfoItem

####

## Synopsis

class ErrorInfoItem extends InfoItem {  

}  

## Hierarchy

#### Extends

## Constants

Name | Value  
---|---  
PROPERTIES_TO_SNAKE_CASE | true  
  
## Members

#### protected

## Methods

#### public

### Inherited from Healthsvc\SerializableData

#### protected

#### public

and Contributors

# Exception::getLine

#### Gets the line in which the exception was created

## Signature

`public function getLine() `

## Returns

int

    

and Contributors

# Exception::getTrace

#### Gets the stack trace

## Signature

`public function getTrace() `

## Returns

array

    

and Contributors

# Exception::__construct

#### Construct the exception

## Signature

`public function __construct(string $message, int $code,  $previous ) `

## Parameters

`$message` — string

    
`$code` — int

    
`$previous` —

    

## Returns

void

    

and Contributors

# Exception::__toString

#### String representation of the exception

## Signature

`public function __toString() `

## Returns

string

    

and Contributors

# Exception::getPrevious

#### Returns previous Exception

## Signature

`public function getPrevious() `

## Returns

Throwable

    

and Contributors

# Exception::getFile

#### Gets the file in which the exception was created

## Signature

`public function getFile() `

## Returns

string

    

and Contributors

# Exception::getTraceAsString

#### Gets the stack trace as a string

## Signature

`public function getTraceAsString() `

## Returns

string

    

and Contributors

# Exception::__clone

#### Clone the exception

## Signature

` function __clone() `

## Returns

void

    

and Contributors

# Exception::getMessage

#### Gets the Exception message

## Signature

`public function getMessage() `

## Returns

string

    

and Contributors

# Exception::getCode

#### Gets the Exception code

## Signature

`public function getCode() `

## Returns

mixed

    

and Contributors

# Healthsvc\HostSanityStatusData

####

## Synopsis

class HostSanityStatusData extends StatusData {  

}  

## Hierarchy

#### Extends

## Constants

Name | Value  
---|---  
PROPERTIES_TO_SNAKE_CASE | true  
  
## Members

#### protected

## Methods

#### public

### Inherited from Healthsvc\StatusData

#### public

### Inherited from Healthsvc\SerializableData

#### protected

#### public

### Inherited from Healthsvc\ResponseDataRefreshMessageTrait

#### protected

and Contributors

# Healthsvc\SerializableData

####

## Synopsis

class SerializableData implements JsonSerializable {  

}  

## Hierarchy

#### Implements

## Constants

Name | Value  
---|---  
PROPERTIES_TO_SNAKE_CASE | true  
  
## Methods

#### protected

#### public

and Contributors

# Healthsvc\HostSanityRequestResponseController::printResponseBody

####

## Signature

`public function printResponseBody([boolean $send_headers = true] ) `

## Parameters

`$send_headers` — boolean

    

## Defined by Interface

` ResponseBodyPrinterInterface `

and Contributors

# Healthsvc\HostSanityRequestResponseController::getRequest

####

## Signature

`public function getRequest() `

## Errors/Exceptions

` RequestMethodNotAllowedException `

    

## Parent Implementation

and Contributors

# Healthsvc\HostSanityRequestResponseController::__construct

####

## Signature

`public function __construct([string $config_file = NULL, [string
$request_method = NULL, [array $request_query = NULL, [string $request_body =
NULL, [string $content_type = NULL]]]]] ) `

## Parameters

`$config_file` — string

    
`$request_method` — string

    
`$request_query` — array

    
`$request_body` — string

    
`$content_type` — string

    

and Contributors

# Healthsvc\HostSanityRequestResponseController::getResponse

####

## Signature

`public function getResponse() `

## Errors/Exceptions

` RequestMethodNotAllowedException `

    

## Parent Implementation

and Contributors

# Healthsvc\ResponseDataInvalidException::getReason

####

## Signature

`public function getReason() `

and Contributors

# Healthsvc\ResponseDataInvalidException::__construct

####

## Signature

`public function __construct(string $reason ) `

## Parameters

`$reason` — string

    

and Contributors

# Healthsvc\RequestMethodNotAllowedException::getResponseCode

####

## Signature

`public function getResponseCode() `

## Defined by Interface

` ResponseInterface `

and Contributors

# Healthsvc\RequestMethodNotAllowedException::__construct

####

## Signature

`public function __construct(string $request_method ) `

## Parameters

`$request_method` — string

    

and Contributors

# Healthsvc\RequestMethodNotAllowedException::getContentType

####

## Signature

`public function getContentType() `

## Defined by Interface

` ResponseInterface `

and Contributors

# Healthsvc\RequestMethodNotAllowedException::getRequestMethod

####

## Signature

`public function getRequestMethod() `

and Contributors

# Healthsvc\RequestMethodNotAllowedException::getResponseBody

####

## Signature

`public function getResponseBody() `

## Defined by Interface

` ResponseInterface `

and Contributors

# Healthsvc\StatusData::getHealthInfo

#### Provides any health info items that have been associated a test.

## Signature

`public function getHealthInfo() `

## Returns

array

    test info as assoc array of health info items, the element keys are the correspdoning test label  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::getExecExitStatus

#### Provides any exit status codes that are associated with tests.

## Signature

`public function getExecExitStatus() `

## Returns

array

    exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label  

## Defined by Interface

` ConsumableExecExitStatusDataInterface `

and Contributors

# Healthsvc\StatusData::setHealthWarn

#### Sets a test's outcome to "warn" status.

## Signature

`public function setHealthWarn(string $test_label, InfoItem $health_warn ) `

## Parameters

`$test_label` — string

    test label
`$health_warn` — \Healthsvc\InfoItem

    info item associated with this test outcome  
  
  

## Returns

void

      

## Defined by Interface

` BuildableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::getHealthSuccess

#### Provides an array of test labels in "success" status.

## Signature

`public function getHealthSuccess() `

## Returns

array

    array containing the label of every test having the "success" status  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::hasAnyTest

#### Determines if at least one test outcome has been set.

## Signature

`public function hasAnyTest() `

## Returns

bool

    <i>true</i> if at least one test outcome has been set, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::hasAllHealthSuccess

#### Determines if all tests have the "succcess" status.

## Signature

`public function hasAllHealthSuccess() `

## Returns

bool

    <i>true</i> if no tests have "warn" or "failure" status, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::getHealthWarn

#### Provides an assoc array of test info items in "warn" status.

## Signature

`public function getHealthWarn() `

## Returns

array

    element keys are the correspdoning test label  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::setHealthSuccess

#### Sets a test's outcome to "success" status.

## Signature

`public function setHealthSuccess(string $test_label, [InfoItem $success_info
= NULL] ) `

## Parameters

`$test_label` — string

    test label
`$success_info` — \Healthsvc\InfoItem

    info item associated with this test outcome  
  
  

## Returns

void

      

## Defined by Interface

` BuildableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::getHealthStatusTtl

#### Provides number of seconds the health status should be cached.

## Signature

`public function getHealthStatusTtl() `

## Returns

int

    health status time to live

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::moveHealthFailureToWarn

#### Moves a test from "failure" status to "warn" status.

## Signature

`public function moveHealthFailureToWarn(string $test_label ) `

## Parameters

`$test_label` — string

    test label

## Returns

bool

    <i>true</i> if the test was moved from "failure" to "warn" status,  
<b>bool</b> <i>false</i> if the test was already in "warn" status or did not
exist

## Defined by Interface

` BuildableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::getHealthFailure

#### Provides an assoc array of test info items in "failure" status.

## Signature

`public function getHealthFailure() `

## Returns

array

    element keys are the correspdoning test label  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::__construct

####

## Signature

`public function __construct([integer $health_staus_ttl = 0, [string
$health_status_time = NULL]] ) `

## Parameters

`$health_staus_ttl` — integer

    
`$health_status_time` — string

    

and Contributors

# Healthsvc\StatusData::hasAnyHealthFailure

#### Determines if any tests have the "failure" status.

## Signature

`public function hasAnyHealthFailure() `

## Returns

bool

    <i>true</i> if any test has the "failure" status, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::hasAnyHealthWarn

#### Determines if any tests have the "warn" status.

## Signature

`public function hasAnyHealthWarn() `

## Returns

bool

    <i>true</i> if any test has the "warn" status, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::setExecExitStatus

#### Associates an exec exit status with a test.

## Signature

`public function setExecExitStatus(string $test_label, int $exit_status ) `

## Parameters

`$test_label` — string

    test label
`$exit_status` — int

    exit status of test

## Returns

void

      

## Defined by Interface

` BuildableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::getHealthStatusTime

#### Provides an ISO 8601 timestamp of when the health status was determined.

## Signature

`public function getHealthStatusTime() `

## Returns

string

    ISO 8601 timestamp

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::hasHealthFailure

#### Determines if a test has the "failure" status.

## Signature

`public function hasHealthFailure(string $test_label ) `

## Parameters

`$test_label` — string

    test label

## Returns

bool

    <i>true</i> if the test has the "failure" status, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::getMessage

#### Provides message associated with this health status.

## Signature

`public function getMessage() `

## Returns

string

    message

## Defined by Interface

` ConsumableMessageDataInterface `

and Contributors

# Healthsvc\StatusData::hasExecExitStatus

#### Determines if a test has an associated exec exit status.

## Signature

`public function hasExecExitStatus(string $test_label ) `

## Parameters

`$test_label` — string

    test label

## Returns

bool

    <i>true</i> if the test has an associated exec exit status, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

and Contributors

# Healthsvc\StatusData::setHealthFailure

#### Sets a test's outcome to "failure" status.

## Signature

`public function setHealthFailure(string $test_label, InfoItem $health_failure
) `

## Parameters

`$test_label` — string

    test label
`$health_failure` — \Healthsvc\InfoItem

    info item associated with this test outcome  
  
  

## Returns

void

      

## Defined by Interface

` BuildableResponseDataInterface `

and Contributors

# Healthsvc\ResponseException

####

## Synopsis

class ResponseException extends RuntimeException implements ResponseInterface
{  

}  

## Hierarchy

#### Extends

#### Implements

## Members

#### protected

The exception code

The exception code

The filename where the exception was created

The filename where the exception was created

The line where the exception was created

The line where the exception was created

The exception message

The exception message

## Methods

#### public

### Inherited from RuntimeException

#### public

### Inherited from Exception

#### public

and Contributors

# Healthsvc\ResponseException::printResponseBody

####

## Signature

`public function printResponseBody([boolean $send_headers = true] ) `

## Parameters

`$send_headers` — boolean

    

and Contributors

# Healthsvc\HostSanityResponse::__construct

####

## Signature

`public function __construct(HostSanityStatusData $status ) `

## Parameters

`$status` —

    

and Contributors

# Healthsvc\HostSanityResponse

####

## Synopsis

class HostSanityResponse extends Response {  

}  

## Hierarchy

#### Extends

## Constants

Name | Value  
---|---  
RESPONSE_CODE_HAS_WARN_NO_FAILURE | 200  
RESPONSE_CODE_HAS_FAILURE | 500  
RESPONSE_CODE_HAS_NO_TESTS | 500  
RESPONSE_CODE_ALL_SUCCESS | 200  
JSON_CONTENT_TYPE | 'application/json'  
  
## Methods

### Inherited from Healthsvc\Response

#### protected

#### public

and Contributors

# Healthsvc\SerializableData::toArray

#### Provides an assoc array corresponding to this response data item

## Signature

`public function toArray() `

## Returns

array

    

and Contributors

# Healthsvc\SerializableData::toSerializedArray

####

## Signature

`public function toSerializedArray() `

and Contributors

# Healthsvc\SerializableData::toSnakeCase

####

## Signature

`protected function toSnakeCase(string $input ) `

## Parameters

`$input` — string

    

and Contributors

# Healthsvc\SerializableData::jsonSerialize

#### Part of the JsonSerializable interface

## Signature

`public function jsonSerialize() `

## Defined by Interface

` JsonSerializable `

and Contributors

# Healthsvc\SerializableData::getSerializableValues

####

## Signature

`protected function getSerializableValues() `

and Contributors

# Healthsvc\SerializableData::getSerializableProperties

####

## Signature

`protected function getSerializableProperties() `

and Contributors

# RuntimeException::getLine

####

## Signature

`public function getLine() `

## Returns

int

    

and Contributors

# RuntimeException::getTrace

####

## Signature

`public function getTrace() `

## Returns

array

    

and Contributors

# RuntimeException::__toString

####

## Signature

`public function __toString() `

## Returns

string

    

and Contributors

# RuntimeException::getPrevious

####

## Signature

`public function getPrevious() `

## Returns

Throwable

    

and Contributors

# RuntimeException::getFile

####

## Signature

`public function getFile() `

## Returns

string

    

and Contributors

# RuntimeException::getTraceAsString

####

## Signature

`public function getTraceAsString() `

## Returns

string

    

and Contributors

# RuntimeException::__clone

####

## Signature

` function __clone() `

## Returns

void

    

and Contributors

# RuntimeException::getMessage

####

## Signature

`public function getMessage() `

## Returns

string

    

and Contributors

# RuntimeException::getCode

####

## Signature

`public function getCode() `

## Returns

mixed

    

and Contributors

# Healthsvc\HostSanityBinDirNotExistException::getBinDir

####

## Signature

`public function getBinDir() `

and Contributors

# Healthsvc\HostSanityBinDirNotExistException::__construct

####

## Signature

`public function __construct(string $bin_dir ) `

## Parameters

`$bin_dir` — string

    

and Contributors

# Healthsvc\ConfigController::__construct

####

## Signature

`public function __construct([array $config = NULL] ) `

## Parameters

`$config` — array

    

and Contributors

# Healthsvc\ConfigController::getConfigVal

####

## Signature

`protected function getConfigVal(string $key ) `

## Parameters

`$key` — string

    

and Contributors

# Healthsvc\HostSanityRequest

####

## Synopsis

class HostSanityRequest extends Request {  

}  

## Hierarchy

#### Extends

## Constants

Name | Value  
---|---  
ALLOWED_METHODS |  
  
## Methods

#### public

### Inherited from Healthsvc\Request

#### public

### Inherited from Healthsvc\RequestBodyParserTrait

#### protected

#### public

and Contributors

# Healthsvc\StatusData

####

## Synopsis

class StatusData extends SerializableData implements
ConsumableResponseDataInterface,BuildableResponseDataInterface,BuildableExecExitStatusDataInterface,ConsumableExecExitStatusDataInterface,ConsumableMessageDataInterface
{  

}  

## Hierarchy

#### Extends

#### Uses

#### Implements

## Constants

Name | Value  
---|---  
PROPERTIES_TO_SNAKE_CASE | true  
  
## Members

#### protected

## Methods

#### public

### Inherited from Healthsvc\SerializableData

#### protected

#### public

### Inherited from Healthsvc\ResponseDataRefreshMessageTrait

#### protected

and Contributors

# Healthsvc\HostSanityRequest::isRequestMethodAllowed

####

## Signature

`public function isRequestMethodAllowed() `

## Parent Implementation

and Contributors

# Healthsvc\HostSanityController::getStatusData

####

## Signature

`public function getStatusData() `

## Returns

HostSanityStatusData

      

and Contributors

# Healthsvc\HostSanityController::__construct

####

## Signature

`public function __construct(array $exec, array $warn_exit_status, array $bin,
string $bin_dir ) `

## Parameters

`$exec` — array

    
`$warn_exit_status` — array

    
`$bin` — array

    
`$bin_dir` — string

    

and Contributors

# Healthsvc\HostSanityController::exec

####

## Signature

`protected function exec(string $cmd, [string& $stdout = "", [string& $stderr
= ""]] ) `

## Parameters

`$cmd` — string

    
`$stdout` — string

    
`$stderr` — string

    

and Contributors

# Healthsvc\HostSanityController

####

## Synopsis

class HostSanityController {  

}  

## Members

#### private

## Methods

#### protected

#### public

and Contributors

# Healthsvc\CommandInfoItem::getStdout

####

## Signature

`public function getStdout() `

and Contributors

# Healthsvc\CommandInfoItem::__construct

####

## Signature

`public function __construct(string $stdout ) `

## Parameters

`$stdout` — string

    

and Contributors

# \RuntimeException

####

## Synopsis

class RuntimeException extends Exception {  

}  

## Hierarchy

#### Extends

## Members

#### protected

The exception code

The filename where the exception was created

The line where the exception was created

The exception message

## Methods

#### public

and Contributors

# Healthsvc\CommandErrorInfoItem

####

## Synopsis

class CommandErrorInfoItem extends CommandInfoItem {  

}  

## Hierarchy

#### Extends

## Constants

Name | Value  
---|---  
PROPERTIES_TO_SNAKE_CASE | true  
  
## Members

#### protected

## Methods

#### public

### Inherited from Healthsvc\CommandInfoItem

#### public

### Inherited from Healthsvc\SerializableData

#### protected

#### public

and Contributors

# Healthsvc\Response::printResponseBody

#### Prints the response body. Additionaly sends the appropriate HTTP headers
unless <b>$send_headers</b> is <i>false</i>.

## Signature

`public function printResponseBody([boolean $send_headers = true] ) `

## Parameters

`$send_headers` — boolean

    Optionally set to <i>false</i> to suppress sending HTTP headers.  
  
  

## Returns

void

      

and Contributors

# Healthsvc\Response::getResponseCode

####

## Signature

`public function getResponseCode() `

## Returns

int

    HTTP response code

## Defined by Interface

` ResponseInterface `

and Contributors

# Healthsvc\Response::setResponseData

####

## Signature

`protected function setResponseData(array $response_data, [integer
$response_code = 200] ) `

## Parameters

`$response_data` — array

    
`$response_code` — integer

    

and Contributors

# Healthsvc\Response::setResponseBody

####

## Signature

`protected function setResponseBody(string $response_body, string
$content_type, [integer $response_code = 200] ) `

## Parameters

`$response_body` — string

    
`$content_type` — string

    
`$response_code` — integer

    

and Contributors

# Healthsvc\Response::getResponseData

####

## Signature

`public function getResponseData() `

## Returns

array

    response data corresponding to the response body

and Contributors

# Healthsvc\Response::getContentType

####

## Signature

`public function getContentType() `

## Returns

string

    response content type

## Defined by Interface

` ResponseInterface `

and Contributors

# Healthsvc\Response::hasResponseData

####

## Signature

`private function hasResponseData() `

## Returns

bool

    true if the response body corresponds to response data, otherwise <b>bool</b> false  

and Contributors

# Healthsvc\Response::getResponseBody

####

## Signature

`public function getResponseBody() `

## Returns

string

    response body

## Defined by Interface

` ResponseInterface `

and Contributors

# Healthsvc\ErrorInfoItem::__construct

####

## Signature

`public function __construct(string $message ) `

## Parameters

`$message` — string

    

and Contributors

# Healthsvc\ErrorInfoItem::getMessage

####

## Signature

`public function getMessage() `

and Contributors

# Healthsvc\StatusDataProviderInterface

####

## Synopsis

interface StatusDataProviderInterface {  

}  

## Methods

#### public

and Contributors

# Healthsvc\ConsumableResponseDataInterface::getHealthInfo

#### Provides any health info items that have been associated a test.

## Signature

`public function getHealthInfo() `

## Returns

array

    test info as assoc array of health info items, the element keys are the correspdoning test label  

and Contributors

# Healthsvc\ConsumableResponseDataInterface::getHealthSuccess

#### Provides an array of test labels in "success" status.

## Signature

`public function getHealthSuccess() `

## Returns

array

    array containing the label of every test having the "success" status  

and Contributors

# Healthsvc\ConsumableResponseDataInterface::hasAnyTest

#### Determines if at least one test outcome has been set.

## Signature

`public function hasAnyTest() `

## Returns

bool

    <i>true</i> if at least one test outcome has been set, <b>bool</b> <i>false</i> otherwise  

and Contributors

# Healthsvc\ConsumableResponseDataInterface::hasAllHealthSuccess

####

## Signature

`public function hasAllHealthSuccess() `

and Contributors

# Healthsvc\ConsumableResponseDataInterface::getHealthWarn

#### Provides an assoc array of test info items in "warn" status.

## Signature

`public function getHealthWarn() `

## Returns

array

    element keys are the correspdoning test label  

and Contributors

# Healthsvc\ConsumableResponseDataInterface::getHealthStatusTtl

#### Provides number of seconds the health status should be cached.

## Signature

`public function getHealthStatusTtl() `

## Returns

int

    health status time to live

and Contributors

# Healthsvc\ConsumableResponseDataInterface::getHealthFailure

#### Provides an assoc array of test info items in "failure" status.

## Signature

`public function getHealthFailure() `

## Returns

array

    element keys are the correspdoning test label  

and Contributors

# Healthsvc\ConsumableResponseDataInterface::hasAnyHealthFailure

####

## Signature

`public function hasAnyHealthFailure() `

and Contributors

# Healthsvc\ConsumableResponseDataInterface::hasAnyHealthWarn

####

## Signature

`public function hasAnyHealthWarn() `

and Contributors

# Healthsvc\ConsumableResponseDataInterface::getHealthStatusTime

#### Provides an ISO 8601 timestamp of when the health status was determined.

## Signature

`public function getHealthStatusTime() `

## Returns

string

    ISO 8601 timestamp

and Contributors

# Healthsvc\ConsumableResponseDataInterface::hasHealthFailure

####

## Signature

`public function hasHealthFailure(string $label ) `

## Parameters

`$label` — string

    

and Contributors

# Healthsvc\ConsumableResponseDataInterface::hasExecExitStatus

####

## Signature

`public function hasExecExitStatus(string $label ) `

## Parameters

`$label` — string

    

and Contributors

# Healthsvc\ResponseBodyPrinterInterface::printResponseBody

####

## Signature

`public function printResponseBody([boolean $send_headers = true] ) `

## Parameters

`$send_headers` — boolean

    

and Contributors

# Healthsvc\ConsumableExecExitStatusDataInterface::getExecExitStatus

####

## Signature

`public function getExecExitStatus() `

## Returns

array

    exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label  

and Contributors

# JsonSerializable::jsonSerialize

#### Specify data which should be serialized to JSON

## Signature

`public function jsonSerialize() `

## Returns

mixed

    

and Contributors

# Healthsvc\ConsumableMessageDataInterface

####

## Synopsis

interface ConsumableMessageDataInterface {  

}  

## Methods

#### public

and Contributors

# Healthsvc\BuildableExecExitStatusDataInterface

####

## Synopsis

interface BuildableExecExitStatusDataInterface {  

}  

## Methods

#### public

and Contributors

# Healthsvc\ConsumableResponseDataInterface

####

## Synopsis

interface ConsumableResponseDataInterface {  

}  

## Methods

#### public

and Contributors

# Healthsvc\StatusDataProviderInterface::getStatusData

####

## Signature

`public function getStatusData() `

and Contributors

# Healthsvc\BuildableMessageDataInterface::setMessage

####

## Signature

`public function setMessage(string $message ) `

## Parameters

`$message` — string

    

and Contributors

# Healthsvc\BuildableMessageDataInterface

####

## Synopsis

interface BuildableMessageDataInterface {  

}  

## Methods

#### public

and Contributors

# Healthsvc\BuildableResponseDataInterface

####

## Synopsis

interface BuildableResponseDataInterface {  

}  

## Methods

#### public

and Contributors

# Healthsvc\BuildableResponseDataInterface::setHealthWarn

####

## Signature

`public function setHealthWarn(string $label, InfoItem $health_warn ) `

## Parameters

`$label` — string

    
`$health_warn` —

    

and Contributors

# Healthsvc\BuildableResponseDataInterface::setHealthSuccess

####

## Signature

`public function setHealthSuccess(string $label, [InfoItem $success_info =
NULL] ) `

## Parameters

`$label` — string

    
`$success_info` —

    

and Contributors

# Healthsvc\BuildableResponseDataInterface::moveHealthFailureToWarn

####

## Signature

`public function moveHealthFailureToWarn(string $label ) `

## Parameters

`$label` — string

    

and Contributors

# Healthsvc\BuildableResponseDataInterface::__construct

####

## Signature

`public function __construct([integer $health_staus_ttl = 0, [string
$health_status_time = NULL]] ) `

## Parameters

`$health_staus_ttl` — integer

    
`$health_status_time` — string

    

and Contributors

# Healthsvc\BuildableResponseDataInterface::setExecExitStatus

####

## Signature

`public function setExecExitStatus(string $label, int $exit_status ) `

## Parameters

`$label` — string

    
`$exit_status` — int

    

and Contributors

# Healthsvc\BuildableResponseDataInterface::setHealthFailure

####

## Signature

`public function setHealthFailure(string $label, InfoItem $health_failure ) `

## Parameters

`$label` — string

    
`$health_failure` —

    

and Contributors

# Healthsvc\ResponseInterface::getResponseCode

####

## Signature

`public function getResponseCode() `

and Contributors

# Healthsvc\ResponseInterface::getContentType

####

## Signature

`public function getContentType() `

and Contributors

# Healthsvc\ResponseInterface::getResponseBody

####

## Signature

`public function getResponseBody() `

and Contributors

# Healthsvc\BuildableExecExitStatusDataInterface::setExecExitStatus

####

## Signature

`public function setExecExitStatus(string $label, int $exit_status ) `

## Parameters

`$label` — string

    
`$exit_status` — int

    

and Contributors

# Healthsvc\ConsumableExecExitStatusDataInterface

####

## Synopsis

interface ConsumableExecExitStatusDataInterface {  

}  

## Methods

#### public

and Contributors

# Healthsvc\ConsumableMessageDataInterface::getMessage

#### Provides message associated with this health status.

## Signature

`public function getMessage() `

## Returns

string

    message

and Contributors

# \JsonSerializable

####

## Synopsis

interface JsonSerializable {  

}  

## Methods

#### public

and Contributors

# Healthsvc\ResponseInterface

####

## Synopsis

interface ResponseInterface extends ResponseBodyPrinterInterface {  

}  

## Hierarchy

#### Extends

## Methods

#### public

### Inherited from Healthsvc\ResponseBodyPrinterInterface

#### public

and Contributors

# Healthsvc\ResponseBodyPrinterInterface

####

## Synopsis

interface ResponseBodyPrinterInterface {  

}  

## Methods

#### public

and Contributors

