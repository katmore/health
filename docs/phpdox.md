# healthsvc PHP docs
Automatically generated PHP documentation

----

# Namespaces

## Namespaces

Name       | Interfaces | Classes | Traits 
-----------|------------|---------|--------
\          |  1         |  2      | 0      
\Healthsvc |  9         |  20     |  3     

# Classes

## \

Name             | Description               | -    
-----------------|---------------------------|-------
Exception        |  No description available | EMPTY 
RuntimeException |  No description available | EMPTY 

## \Healthsvc

Name                                | Description               | -    
------------------------------------|---------------------------|-------
CommandErrorInfoItem                |  No description available | EMPTY 
CommandInfoItem                     |  No description available | EMPTY 
ConfigController                    |  No description available | EMPTY 
ErrorInfoItem                       |  No description available | EMPTY 
HostSanityBinDirNotExistException   |  No description available | EMPTY 
HostSanityConfig                    |  No description available | EMPTY 
HostSanityController                |  No description available | EMPTY 
HostSanityRequest                   |  No description available | EMPTY 
HostSanityRequestResponseController |  No description available | EMPTY 
HostSanityResponse                  |  No description available | EMPTY 
HostSanityStatusData                |  No description available | EMPTY 
InfoItem                            |  No description available | EMPTY 
Request                             |  No description available | EMPTY 
RequestMethodNotAllowedException    |  No description available | EMPTY 
RequestResponseController           |  No description available | EMPTY 
Response                            |  No description available | EMPTY 
ResponseDataInvalidException        |  No description available | EMPTY 
ResponseException                   |  No description available | EMPTY 
SerializableData                    |  No description available | EMPTY 
StatusData                          |  No description available | EMPTY 

# Interfaces

## \

Name             | Description               
-----------------|---------------------------
JsonSerializable |  No description available 

## \Healthsvc

Name                                  | Description               
--------------------------------------|---------------------------
BuildableExecExitStatusDataInterface  |  No description available 
BuildableMessageDataInterface         |  No description available 
BuildableResponseDataInterface        |  No description available 
ConsumableExecExitStatusDataInterface |  No description available 
ConsumableMessageDataInterface        |  No description available 
ConsumableResponseDataInterface       |  No description available 
ResponseBodyPrinterInterface          |  No description available 
ResponseInterface                     |  No description available 
StatusDataProviderInterface           |  No description available 

# Traits

## \Healthsvc

Name                            | Description               
--------------------------------|---------------------------
ConfigFileReaderTrait           |  No description available 
RequestBodyParserTrait          |  No description available 
ResponseDataRefreshMessageTrait |  No description available 

# Healthsvc\ConfigFileReaderTrait::setConfigFile

#### 

## Signature

`protected function setConfigFile([string $config_file = NULL] ) `

## Parameters

`$config_file` — string
    

# Healthsvc\ConfigFileReaderTrait::getConfig

#### 

## Signature

`protected function getConfig() `

# Healthsvc\ResponseDataRefreshMessageTrait::refreshMessage

#### 

## Signature

`protected function refreshMessage() `

# Healthsvc\RequestBodyParserTrait

#### 

## Synopsis

trait RequestBodyParserTrait {  

  * // members
  * private string $requestBody = ''; 
  * private string $contentType = ''; 
  * private array $requestData = ; 

  * // methods
  * public string getRequestBody() 
  * public string getContentType() 
  * protected array getRequestData() 
  * protected void setRequestBody() 

}  

## Hierarchy

#### Used by

  * Healthsvc\Request
  * Healthsvc\HostSanityRequest

## Members

#### private

  * __$contentType__
  * __$requestBody__
  * __$requestData__

## Methods

#### protected

  * getRequestData()
  * setRequestBody()

#### public

  * getContentType()
  * getRequestBody()

# Healthsvc\RequestBodyParserTrait::setRequestBody

#### 

## Signature

`protected function setRequestBody([string $request_body = NULL, [string $content_type = NULL]] ) `

## Parameters

`$request_body` — string
    
`$content_type` — string
    

# Healthsvc\RequestBodyParserTrait::getContentType

#### 

## Signature

`public function getContentType() `

# Healthsvc\RequestBodyParserTrait::getRequestData

#### 

## Signature

`protected function getRequestData() `

# Healthsvc\RequestBodyParserTrait::getRequestBody

#### 

## Signature

`public function getRequestBody() `

# Healthsvc\ResponseDataRefreshMessageTrait

#### 

## Synopsis

trait ResponseDataRefreshMessageTrait {  

  * // members
  * protected $message; 
  * protected array $healthInfo = ; 
  * protected array $healthSuccess = ; 
  * protected array $healthWarn = ; 
  * protected array $healthFailure = ; 

  * // methods
  * protected void refreshMessage() 

}  

## Hierarchy

#### Used by

  * Healthsvc\HostSanityStatusData
  * Healthsvc\StatusData

## Members

#### protected

  * __$healthFailure__ — array
  * __$healthInfo__ — array
  * __$healthSuccess__ — array
  * __$healthWarn__ — array
  * __$message__ — string

## Methods

#### protected

  * refreshMessage()

# Healthsvc\ConfigFileReaderTrait

#### 

## Synopsis

trait ConfigFileReaderTrait {  

  * // members
  * private array $config = ; 

  * // methods
  * protected array getConfig() 
  * protected void setConfigFile() 

}  

## Hierarchy

#### Used by

  * Healthsvc\HostSanityRequestResponseController
  * Healthsvc\RequestResponseController

## Members

#### private

  * __$config__

## Methods

#### protected

  * getConfig()
  * setConfigFile()

# Healthsvc\HostSanityRequestResponseController

#### 

## Synopsis

class HostSanityRequestResponseController extends RequestResponseController {  

  * // members
  * private HostSanityConfig $config; 
  * private $requestMethod; 
  * private $requestQuery; 
  * private $requestBody; 
  * private $contentType; 

  * // methods
  * public Request getRequest() 
  * public Response getResponse() 
  * public void printResponseBody() 
  * public void __construct() 

  * // Inherited methods from RequestResponseController
  * public void __construct() 
  * public abstract void getRequest() 
  * public abstract void getResponse() 

  * // Inherited methods from ConfigFileReaderTrait
  * protected void getConfig() 
  * protected void setConfigFile() 

}  

## Hierarchy

#### Extends

  * Healthsvc\RequestResponseController

## Members

#### private

  * __$config__ — \Healthsvc\HostSanityConfig
  * __$contentType__
  * __$requestBody__
  * __$requestMethod__
  * __$requestQuery__

## Methods

#### public

  * __construct()
  * getRequest()
  * getResponse()
  * printResponseBody()

### Inherited from Healthsvc\RequestResponseController

#### public

  * getRequest()
  * getResponse()

### Inherited from Healthsvc\ConfigFileReaderTrait

#### protected

  * getConfig()
  * setConfigFile()

# Healthsvc\Response

#### 

## Synopsis

class Response implements ResponseInterface {  

  * // constants
  * const JSON_CONTENT_TYPE = 'application/json';

  * // members
  * private bool $hasResponseData = true; 
  * private array $responseData = ; 
  * private $responseBody; 
  * private string $contentType = self::JSON_CONTENT_TYPE; 
  * private integer $responseCode = 200; 

  * // methods
  * public final int getResponseCode() 
  * public final bool hasResponseData() 
  * public final array getResponseData() 
  * public final string getContentType() 
  * public final string getResponseBody() 
  * public final void printResponseBody() 
  * protected final void setResponseBody() 
  * protected final void setResponseData() 

}  

## Hierarchy

#### Implements

  * Healthsvc\ResponseInterface

## Constants

Name              | Value              
------------------|--------------------
JSON_CONTENT_TYPE | 'application/json' 

## Members

#### private

  * __$contentType__ — string
  * __$hasResponseData__ — Healthsvc\bool
  * __$responseBody__ — string
  * __$responseCode__ — int
  * __$responseData__ — array

## Methods

#### protected

  * setResponseBody()
  * setResponseData()

#### public

  * getContentType()
  * getResponseBody()
  * getResponseCode()
  * getResponseData()
  * hasResponseData()
  * printResponseBody() — Prints the response body. Additionaly sends the appropriate HTTP headers unless <b>$send_headers</b> is <i>false</i>.

# Healthsvc\ResponseDataInvalidException

#### 

## Synopsis

class ResponseDataInvalidException extends RuntimeException {  

  * // members
  * private $reason; 

  * // Inherited members from RuntimeException
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // Inherited members from Exception
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // methods
  * public string getReason() 
  * public void __construct() 

  * // Inherited methods from RuntimeException
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 

  * // Inherited methods from Exception
  * public void __construct() 
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 

}  

## Hierarchy

#### Extends

  * RuntimeException

## Members

#### private

  * __$reason__

#### protected

  * __$code__ — int  
The exception code
  * __$code__ — int  
The exception code
  * __$file__ — string  
The filename where the exception was created
  * __$file__ — string  
The filename where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$message__ — string  
The exception message
  * __$message__ — string  
The exception message

## Methods

#### public

  * __construct()
  * getReason()

### Inherited from RuntimeException

#### public

  * __toString()
  * getCode()
  * getFile()
  * getLine()
  * getMessage()
  * getPrevious()
  * getTrace()
  * getTraceAsString()

### Inherited from Exception

#### public

  * __toString() — String representation of the exception
  * getCode() — Gets the Exception code
  * getFile() — Gets the file in which the exception was created
  * getLine() — Gets the line in which the exception was created
  * getMessage() — Gets the Exception message
  * getPrevious() — Returns previous Exception
  * getTrace() — Gets the stack trace
  * getTraceAsString() — Gets the stack trace as a string

# \Exception

#### 

## Synopsis

class Exception {  

  * // members
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // methods
  * public void __construct() 
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 
  * final void __clone() 

}  

## Members

#### protected

  * __$code__ — int  
The exception code
  * __$file__ — string  
The filename where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$message__ — string  
The exception message

## Methods

#### public

  * __construct() — Construct the exception
  * __toString() — String representation of the exception
  * getCode() — Gets the Exception code
  * getFile() — Gets the file in which the exception was created
  * getLine() — Gets the line in which the exception was created
  * getMessage() — Gets the Exception message
  * getPrevious() — Returns previous Exception
  * getTrace() — Gets the stack trace
  * getTraceAsString() — Gets the stack trace as a string

# Healthsvc\HostSanityConfig

#### 

## Synopsis

class HostSanityConfig extends ConfigController {  

  * // constants
  * const DEFAULT_BIN_DIR = __DIR__ . '/../bin/host-sanity';

  * // methods
  * public array getExec() 
  * public array getWarnExitStatus() 
  * public array getBin() 
  * public string getBinDir() 

  * // Inherited methods from ConfigController
  * protected void getConfigVal() 
  * public final void __construct() 

}  

## Hierarchy

#### Extends

  * Healthsvc\ConfigController

## Constants

Name            | Value                           
----------------|---------------------------------
DEFAULT_BIN_DIR | __DIR__ . '/../bin/host-sanity' 

## Methods

#### public

  * getBin()
  * getBinDir()
  * getExec()
  * getWarnExitStatus()

### Inherited from Healthsvc\ConfigController

#### protected

  * getConfigVal()

# Healthsvc\RequestResponseController

#### 

## Synopsis

class RequestResponseController implements ResponseBodyPrinterInterface {  

  * // methods
  * public void __construct() 
  * public abstract Request getRequest() 
  * public abstract Response getResponse() 

  * // Inherited methods from ConfigFileReaderTrait
  * protected void getConfig() 
  * protected void setConfigFile() 

}  

## Hierarchy

#### Uses

  * Healthsvc\ConfigFileReaderTrait

#### Implements

  * Healthsvc\ResponseBodyPrinterInterface

## Methods

#### public

  * __construct()
  * getRequest()
  * getResponse()

### Inherited from Healthsvc\ConfigFileReaderTrait

#### protected

  * getConfig()
  * setConfigFile()

# Healthsvc\ConfigController

#### 

## Synopsis

class ConfigController {  

  * // members
  * private $config; 

  * // methods
  * protected void getConfigVal() 
  * public final void __construct() 

}  

## Members

#### private

  * __$config__ — array

## Methods

#### protected

  * getConfigVal()

# Healthsvc\CommandInfoItem

#### 

## Synopsis

class CommandInfoItem extends InfoItem {  

  * // Inherited constants from SerializableData
  * const PROPERTIES_TO_SNAKE_CASE = true;

  * // members
  * protected $stdout; 

  * // methods
  * public array getStdout() 
  * public void __construct() 

  * // Inherited methods from SerializableData
  * protected void getSerializableProperties() 
  * protected void getSerializableValues() 
  * protected final static void toSnakeCase() 
  * public void jsonSerialize() 
  * public void toSerializedArray() 
  * public array toArray() 

}  

## Hierarchy

#### Extends

  * Healthsvc\InfoItem

## Constants

Name                     | Value 
-------------------------|-------
PROPERTIES_TO_SNAKE_CASE | true  

## Members

#### protected

  * __$stdout__

## Methods

#### public

  * __construct()
  * getStdout()

### Inherited from Healthsvc\SerializableData

#### protected

  * getSerializableProperties()
  * getSerializableValues()
  * toSnakeCase()

#### public

  * jsonSerialize() — Part of the JsonSerializable interface
  * toArray() — Provides an assoc array corresponding to this response data item
  * toSerializedArray()

# Healthsvc\Request

#### 

## Synopsis

class Request {  

  * // members
  * private string $requestMethod = 'GET'; 
  * private array $requestQuery = ; 

  * // methods
  * public abstract bool isRequestMethodAllowed() 
  * public array getRequestQuery() 
  * public string getRequestMethod() 
  * public void __construct() 

  * // Inherited methods from RequestBodyParserTrait
  * public void getRequestBody() 
  * public void getContentType() 
  * protected void getRequestData() 
  * protected void setRequestBody() 

}  

## Hierarchy

#### Uses

  * Healthsvc\RequestBodyParserTrait

## Members

#### private

  * __$requestMethod__
  * __$requestQuery__

## Methods

#### public

  * __construct()
  * getRequestMethod()
  * getRequestQuery()
  * isRequestMethodAllowed()

### Inherited from Healthsvc\RequestBodyParserTrait

#### protected

  * getRequestData()
  * setRequestBody()

#### public

  * getContentType()
  * getRequestBody()

# Healthsvc\RequestResponseController::getRequest

#### 

## Signature

`public function getRequest() `

# Healthsvc\RequestResponseController::__construct

#### 

## Signature

`public function __construct([string $config_file = NULL] ) `

## Parameters

`$config_file` — string
    

# Healthsvc\RequestResponseController::getResponse

#### 

## Signature

`public function getResponse() `

# Healthsvc\HostSanityBinDirNotExistException

#### 

## Synopsis

class HostSanityBinDirNotExistException extends RuntimeException {  

  * // members
  * private $binDir; 

  * // Inherited members from RuntimeException
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // Inherited members from Exception
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // methods
  * public string getBinDir() 
  * public void __construct() 

  * // Inherited methods from RuntimeException
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 

  * // Inherited methods from Exception
  * public void __construct() 
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 

}  

## Hierarchy

#### Extends

  * RuntimeException

## Members

#### private

  * __$binDir__

#### protected

  * __$code__ — int  
The exception code
  * __$code__ — int  
The exception code
  * __$file__ — string  
The filename where the exception was created
  * __$file__ — string  
The filename where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$message__ — string  
The exception message
  * __$message__ — string  
The exception message

## Methods

#### public

  * __construct()
  * getBinDir()

### Inherited from RuntimeException

#### public

  * __toString()
  * getCode()
  * getFile()
  * getLine()
  * getMessage()
  * getPrevious()
  * getTrace()
  * getTraceAsString()

### Inherited from Exception

#### public

  * __toString() — String representation of the exception
  * getCode() — Gets the Exception code
  * getFile() — Gets the file in which the exception was created
  * getLine() — Gets the line in which the exception was created
  * getMessage() — Gets the Exception message
  * getPrevious() — Returns previous Exception
  * getTrace() — Gets the stack trace
  * getTraceAsString() — Gets the stack trace as a string

# Healthsvc\CommandErrorInfoItem::getStderr

#### 

## Signature

`public function getStderr() `

# Healthsvc\CommandErrorInfoItem::__construct

#### 

## Signature

`public function __construct(string $stdout, string $stderr ) `

## Parameters

`$stdout` — string
    
`$stderr` — string
    

# Healthsvc\InfoItem

#### 

## Synopsis

class InfoItem extends SerializableData {  

  * // Inherited constants from SerializableData
  * const PROPERTIES_TO_SNAKE_CASE = true;

  * // Inherited methods from SerializableData
  * protected void getSerializableProperties() 
  * protected void getSerializableValues() 
  * protected final static void toSnakeCase() 
  * public void jsonSerialize() 
  * public void toSerializedArray() 
  * public array toArray() 

}  

## Hierarchy

#### Extends

  * Healthsvc\SerializableData

## Constants

Name                     | Value 
-------------------------|-------
PROPERTIES_TO_SNAKE_CASE | true  

## Methods

### Inherited from Healthsvc\SerializableData

#### protected

  * getSerializableProperties()
  * getSerializableValues()
  * toSnakeCase()

#### public

  * jsonSerialize() — Part of the JsonSerializable interface
  * toArray() — Provides an assoc array corresponding to this response data item
  * toSerializedArray()

# Healthsvc\Request::__construct

#### 

## Signature

`public function __construct([string $request_method = NULL, [array $request_query = NULL, [string $request_body = NULL, [string $content_type = NULL]]]] ) `

## Parameters

`$request_method` — string
    
`$request_query` — array
    
`$request_body` — string
    
`$content_type` — string
    

## Errors/Exceptions

` RequestMethodNotAllowedException `
    

# Healthsvc\Request::isRequestMethodAllowed

#### 

## Signature

`public function isRequestMethodAllowed() `

# Healthsvc\Request::getRequestMethod

#### 

## Signature

`public function getRequestMethod() `

# Healthsvc\Request::getRequestQuery

#### 

## Signature

`public function getRequestQuery() `

# Healthsvc\HostSanityStatusData::getHostname

#### 

## Signature

`public function getHostname() `

## Returns

string
    string reported hostname

# Healthsvc\HostSanityStatusData::__construct

#### 

## Signature

`public function __construct([integer $healthStatusTtl = 0, [string $healthStatusTime = NULL, [string $hostname = ""]]] ) `

## Parameters

`$healthStatusTtl` — integer
    
`$healthStatusTime` — string
    
`$hostname` — string
    

# Healthsvc\HostSanityConfig::getBinDir

#### 

## Signature

`public function getBinDir() `

# Healthsvc\HostSanityConfig::getWarnExitStatus

#### 

## Signature

`public function getWarnExitStatus() `

# Healthsvc\HostSanityConfig::getBin

#### 

## Signature

`public function getBin() `

# Healthsvc\HostSanityConfig::getExec

#### 

## Signature

`public function getExec() `

# Healthsvc\RequestMethodNotAllowedException

#### 

## Synopsis

class RequestMethodNotAllowedException extends ResponseException {  

  * // constants
  * const RESPONSE_CODE = 405;
  * const CONTENT_TYPE = 'text/plain';

  * // members
  * private $requestMethod; 

  * // Inherited members from RuntimeException
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // Inherited members from Exception
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // methods
  * public int getResponseCode() 
  * public string getContentType() 
  * public string getResponseBody() 
  * public string getRequestMethod() 
  * public void __construct() 

  * // Inherited methods from ResponseException
  * public final void printResponseBody() 

  * // Inherited methods from RuntimeException
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 

  * // Inherited methods from Exception
  * public void __construct() 
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 

}  

## Hierarchy

#### Extends

  * Healthsvc\ResponseException

## Constants

Name          | Value        
--------------|--------------
RESPONSE_CODE | 405          
CONTENT_TYPE  | 'text/plain' 

## Members

#### private

  * __$requestMethod__ — string

#### protected

  * __$code__ — int  
The exception code
  * __$code__ — int  
The exception code
  * __$file__ — string  
The filename where the exception was created
  * __$file__ — string  
The filename where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$message__ — string  
The exception message
  * __$message__ — string  
The exception message

## Methods

#### public

  * __construct()
  * getContentType()
  * getRequestMethod()
  * getResponseBody()
  * getResponseCode()

### Inherited from Healthsvc\ResponseException

#### public

  * printResponseBody()

### Inherited from RuntimeException

#### public

  * __toString()
  * getCode()
  * getFile()
  * getLine()
  * getMessage()
  * getPrevious()
  * getTrace()
  * getTraceAsString()

### Inherited from Exception

#### public

  * __toString() — String representation of the exception
  * getCode() — Gets the Exception code
  * getFile() — Gets the file in which the exception was created
  * getLine() — Gets the line in which the exception was created
  * getMessage() — Gets the Exception message
  * getPrevious() — Returns previous Exception
  * getTrace() — Gets the stack trace
  * getTraceAsString() — Gets the stack trace as a string

# Healthsvc\ErrorInfoItem

#### 

## Synopsis

class ErrorInfoItem extends InfoItem {  

  * // Inherited constants from SerializableData
  * const PROPERTIES_TO_SNAKE_CASE = true;

  * // members
  * protected $message; 

  * // methods
  * public string getMessage() 
  * public void __construct() 

  * // Inherited methods from SerializableData
  * protected void getSerializableProperties() 
  * protected void getSerializableValues() 
  * protected final static void toSnakeCase() 
  * public void jsonSerialize() 
  * public void toSerializedArray() 
  * public array toArray() 

}  

## Hierarchy

#### Extends

  * Healthsvc\InfoItem

## Constants

Name                     | Value 
-------------------------|-------
PROPERTIES_TO_SNAKE_CASE | true  

## Members

#### protected

  * __$message__

## Methods

#### public

  * __construct()
  * getMessage()

### Inherited from Healthsvc\SerializableData

#### protected

  * getSerializableProperties()
  * getSerializableValues()
  * toSnakeCase()

#### public

  * jsonSerialize() — Part of the JsonSerializable interface
  * toArray() — Provides an assoc array corresponding to this response data item
  * toSerializedArray()

# Exception::getLine

#### Gets the line in which the exception was created

## Signature

`public function getLine() `

## Returns

int
    

# Exception::getTrace

#### Gets the stack trace

## Signature

`public function getTrace() `

## Returns

array
    

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
    

# Exception::__toString

#### String representation of the exception

## Signature

`public function __toString() `

## Returns

string
    

# Exception::getPrevious

#### Returns previous Exception

## Signature

`public function getPrevious() `

## Returns

Throwable
    

# Exception::getFile

#### Gets the file in which the exception was created

## Signature

`public function getFile() `

## Returns

string
    

# Exception::getTraceAsString

#### Gets the stack trace as a string

## Signature

`public function getTraceAsString() `

## Returns

string
    

# Exception::__clone

#### Clone the exception

## Signature

` function __clone() `

## Returns

void
    

# Exception::getMessage

#### Gets the Exception message

## Signature

`public function getMessage() `

## Returns

string
    

# Exception::getCode

#### Gets the Exception code

## Signature

`public function getCode() `

## Returns

mixed
    

# Healthsvc\HostSanityStatusData

#### 

## Synopsis

class HostSanityStatusData extends StatusData {  

  * // Inherited constants from SerializableData
  * const PROPERTIES_TO_SNAKE_CASE = true;

  * // members
  * protected $hostname; 

  * // Inherited members from StatusData
  * protected array $execExitStatus; 
  * protected $healthStatusTime; 
  * protected $healthStatusTtl; 

  * // methods
  * public string getHostname() 
  * public void __construct() 

  * // Inherited methods from StatusData
  * public bool hasAnyTest() 
  * public string getHealthStatusTime() 
  * public int getHealthStatusTtl() 
  * public array getHealthInfo() 
  * public array getExecExitStatus() 
  * public array getHealthSuccess() 
  * public array getHealthWarn() 
  * public array getHealthFailure() 
  * public string getMessage() 
  * public void setExecExitStatus() 
  * public void setHealthFailure() 
  * public void setHealthWarn() 
  * public bool hasAllHealthSuccess() 
  * public bool hasAnyHealthFailure() 
  * public bool hasAnyHealthWarn() 
  * public bool hasExecExitStatus() 
  * public bool hasHealthFailure() 
  * public bool moveHealthFailureToWarn() 
  * public void setHealthSuccess() 
  * public void __construct() 

  * // Inherited methods from SerializableData
  * protected void getSerializableProperties() 
  * protected void getSerializableValues() 
  * protected final static void toSnakeCase() 
  * public void jsonSerialize() 
  * public void toSerializedArray() 
  * public array toArray() 

  * // Inherited methods from ResponseDataRefreshMessageTrait
  * protected void refreshMessage() 

}  

## Hierarchy

#### Extends

  * Healthsvc\StatusData

## Constants

Name                     | Value 
-------------------------|-------
PROPERTIES_TO_SNAKE_CASE | true  

## Members

#### protected

  * __$execExitStatus__ — array
  * __$healthFailure__ — array
  * __$healthInfo__ — array
  * __$healthStatusTime__ — string
  * __$healthStatusTtl__ — int
  * __$healthSuccess__ — array
  * __$healthWarn__ — array
  * __$hostname__ — string
  * __$message__ — string

## Methods

#### public

  * __construct()
  * getHostname()

### Inherited from Healthsvc\StatusData

#### public

  * getExecExitStatus() — Provides any exit status codes that are associated with tests.
  * getHealthFailure() — Provides an assoc array of test info items in "failure" status.
  * getHealthInfo() — Provides any health info items that have been associated a test.
  * getHealthStatusTime() — Provides an ISO 8601 timestamp of when the health status was determined.
  * getHealthStatusTtl() — Provides number of seconds the health status should be cached.
  * getHealthSuccess() — Provides an array of test labels in "success" status.
  * getHealthWarn() — Provides an assoc array of test info items in "warn" status.
  * getMessage() — Provides message associated with this health status.
  * hasAllHealthSuccess() — Determines if all tests have the "succcess" status.
  * hasAnyHealthFailure() — Determines if any tests have the "failure" status.
  * hasAnyHealthWarn() — Determines if any tests have the "warn" status.
  * hasAnyTest() — Determines if at least one test outcome has been set.
  * hasExecExitStatus() — Determines if a test has an associated exec exit status.
  * hasHealthFailure() — Determines if a test has the "failure" status.
  * moveHealthFailureToWarn() — Moves a test from "failure" status to "warn" status.
  * setExecExitStatus() — Associates an exec exit status with a test.
  * setHealthFailure() — Sets a test's outcome to "failure" status.
  * setHealthSuccess() — Sets a test's outcome to "success" status.
  * setHealthWarn() — Sets a test's outcome to "warn" status.

### Inherited from Healthsvc\SerializableData

#### protected

  * getSerializableProperties()
  * getSerializableValues()
  * toSnakeCase()

#### public

  * jsonSerialize() — Part of the JsonSerializable interface
  * toArray() — Provides an assoc array corresponding to this response data item
  * toSerializedArray()

### Inherited from Healthsvc\ResponseDataRefreshMessageTrait

#### protected

  * refreshMessage()

# Healthsvc\SerializableData

#### 

## Synopsis

class SerializableData implements JsonSerializable {  

  * // constants
  * const PROPERTIES_TO_SNAKE_CASE = true;

  * // methods
  * protected array getSerializableProperties() 
  * protected array getSerializableValues() 
  * protected final static string toSnakeCase() 
  * public void jsonSerialize() 
  * public array toSerializedArray() 
  * public array toArray() 

}  

## Hierarchy

#### Implements

  * JsonSerializable

## Constants

Name                     | Value 
-------------------------|-------
PROPERTIES_TO_SNAKE_CASE | true  

## Methods

#### protected

  * getSerializableProperties()
  * getSerializableValues()
  * toSnakeCase()

#### public

  * jsonSerialize() — Part of the JsonSerializable interface
  * toArray() — Provides an assoc array corresponding to this response data item
  * toSerializedArray()

# Healthsvc\HostSanityRequestResponseController::printResponseBody

#### 

## Signature

`public function printResponseBody([boolean $send_headers = true] ) `

## Parameters

`$send_headers` — boolean
    

## Defined by Interface

` ResponseBodyPrinterInterface `

# Healthsvc\HostSanityRequestResponseController::getRequest

#### 

## Signature

`public function getRequest() `

## Errors/Exceptions

` RequestMethodNotAllowedException `
    

## Parent Implementation

  * ` RequestResponseController `

# Healthsvc\HostSanityRequestResponseController::__construct

#### 

## Signature

`public function __construct([string $config_file = NULL, [string $request_method = NULL, [array $request_query = NULL, [string $request_body = NULL, [string $content_type = NULL]]]]] ) `

## Parameters

`$config_file` — string
    
`$request_method` — string
    
`$request_query` — array
    
`$request_body` — string
    
`$content_type` — string
    

# Healthsvc\HostSanityRequestResponseController::getResponse

#### 

## Signature

`public function getResponse() `

## Errors/Exceptions

` RequestMethodNotAllowedException `
    

## Parent Implementation

  * ` RequestResponseController `

# Healthsvc\ResponseDataInvalidException::getReason

#### 

## Signature

`public function getReason() `

# Healthsvc\ResponseDataInvalidException::__construct

#### 

## Signature

`public function __construct(string $reason ) `

## Parameters

`$reason` — string
    

# Healthsvc\RequestMethodNotAllowedException::getResponseCode

#### 

## Signature

`public function getResponseCode() `

## Defined by Interface

` ResponseInterface `

# Healthsvc\RequestMethodNotAllowedException::__construct

#### 

## Signature

`public function __construct(string $request_method ) `

## Parameters

`$request_method` — string
    

# Healthsvc\RequestMethodNotAllowedException::getContentType

#### 

## Signature

`public function getContentType() `

## Defined by Interface

` ResponseInterface `

# Healthsvc\RequestMethodNotAllowedException::getRequestMethod

#### 

## Signature

`public function getRequestMethod() `

# Healthsvc\RequestMethodNotAllowedException::getResponseBody

#### 

## Signature

`public function getResponseBody() `

## Defined by Interface

` ResponseInterface `

# Healthsvc\StatusData::getHealthInfo

#### Provides any health info items that have been associated a test.

## Signature

`public function getHealthInfo() `

## Returns

array
    test info as assoc array of health info items, the element keys are the correspdoning test label  

## Defined by Interface

` ConsumableResponseDataInterface `

# Healthsvc\StatusData::getExecExitStatus

#### Provides any exit status codes that are associated with tests.

## Signature

`public function getExecExitStatus() `

## Returns

array
    exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label  

## Defined by Interface

` ConsumableExecExitStatusDataInterface `

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

# Healthsvc\StatusData::getHealthSuccess

#### Provides an array of test labels in "success" status.

## Signature

`public function getHealthSuccess() `

## Returns

array
    array containing the label of every test having the "success" status  

## Defined by Interface

` ConsumableResponseDataInterface `

# Healthsvc\StatusData::hasAnyTest

#### Determines if at least one test outcome has been set.

## Signature

`public function hasAnyTest() `

## Returns

bool
    <i>true</i> if at least one test outcome has been set, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

# Healthsvc\StatusData::hasAllHealthSuccess

#### Determines if all tests have the "succcess" status.

## Signature

`public function hasAllHealthSuccess() `

## Returns

bool
    <i>true</i> if no tests have "warn" or "failure" status, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

# Healthsvc\StatusData::getHealthWarn

#### Provides an assoc array of test info items in "warn" status.

## Signature

`public function getHealthWarn() `

## Returns

array
    element keys are the correspdoning test label  

## Defined by Interface

` ConsumableResponseDataInterface `

# Healthsvc\StatusData::setHealthSuccess

#### Sets a test's outcome to "success" status.

## Signature

`public function setHealthSuccess(string $test_label, [InfoItem $success_info = NULL] ) `

## Parameters

`$test_label` — string
    test label
`$success_info` — \Healthsvc\InfoItem
    info item associated with this test outcome  
  
  

## Returns

void
      

## Defined by Interface

` BuildableResponseDataInterface `

# Healthsvc\StatusData::getHealthStatusTtl

#### Provides number of seconds the health status should be cached.

## Signature

`public function getHealthStatusTtl() `

## Returns

int
    health status time to live

## Defined by Interface

` ConsumableResponseDataInterface `

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
<b>bool</b> <i>false</i> if the test was already in "warn" status or did not exist

## Defined by Interface

` BuildableResponseDataInterface `

# Healthsvc\StatusData::getHealthFailure

#### Provides an assoc array of test info items in "failure" status.

## Signature

`public function getHealthFailure() `

## Returns

array
    element keys are the correspdoning test label  

## Defined by Interface

` ConsumableResponseDataInterface `

# Healthsvc\StatusData::__construct

#### 

## Signature

`public function __construct([integer $health_staus_ttl = 0, [string $health_status_time = NULL]] ) `

## Parameters

`$health_staus_ttl` — integer
    
`$health_status_time` — string
    

# Healthsvc\StatusData::hasAnyHealthFailure

#### Determines if any tests have the "failure" status.

## Signature

`public function hasAnyHealthFailure() `

## Returns

bool
    <i>true</i> if any test has the "failure" status, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

# Healthsvc\StatusData::hasAnyHealthWarn

#### Determines if any tests have the "warn" status.

## Signature

`public function hasAnyHealthWarn() `

## Returns

bool
    <i>true</i> if any test has the "warn" status, <b>bool</b> <i>false</i> otherwise  

## Defined by Interface

` ConsumableResponseDataInterface `

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

# Healthsvc\StatusData::getHealthStatusTime

#### Provides an ISO 8601 timestamp of when the health status was determined.

## Signature

`public function getHealthStatusTime() `

## Returns

string
    ISO 8601 timestamp

## Defined by Interface

` ConsumableResponseDataInterface `

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

# Healthsvc\StatusData::getMessage

#### Provides message associated with this health status.

## Signature

`public function getMessage() `

## Returns

string
    message

## Defined by Interface

` ConsumableMessageDataInterface `

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

# Healthsvc\StatusData::setHealthFailure

#### Sets a test's outcome to "failure" status.

## Signature

`public function setHealthFailure(string $test_label, InfoItem $health_failure ) `

## Parameters

`$test_label` — string
    test label
`$health_failure` — \Healthsvc\InfoItem
    info item associated with this test outcome  
  
  

## Returns

void
      

## Defined by Interface

` BuildableResponseDataInterface `

# Healthsvc\ResponseException

#### 

## Synopsis

class ResponseException extends RuntimeException implements ResponseInterface {  

  * // Inherited members from RuntimeException
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // Inherited members from Exception
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // methods
  * public final void printResponseBody() 

  * // Inherited methods from RuntimeException
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 

  * // Inherited methods from Exception
  * public void __construct() 
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 

}  

## Hierarchy

#### Extends

  * RuntimeException

#### Implements

  * Healthsvc\ResponseInterface

## Members

#### protected

  * __$code__ — int  
The exception code
  * __$code__ — int  
The exception code
  * __$file__ — string  
The filename where the exception was created
  * __$file__ — string  
The filename where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$message__ — string  
The exception message
  * __$message__ — string  
The exception message

## Methods

#### public

  * printResponseBody()

### Inherited from RuntimeException

#### public

  * __toString()
  * getCode()
  * getFile()
  * getLine()
  * getMessage()
  * getPrevious()
  * getTrace()
  * getTraceAsString()

### Inherited from Exception

#### public

  * __toString() — String representation of the exception
  * getCode() — Gets the Exception code
  * getFile() — Gets the file in which the exception was created
  * getLine() — Gets the line in which the exception was created
  * getMessage() — Gets the Exception message
  * getPrevious() — Returns previous Exception
  * getTrace() — Gets the stack trace
  * getTraceAsString() — Gets the stack trace as a string

# Healthsvc\ResponseException::printResponseBody

#### 

## Signature

`public function printResponseBody([boolean $send_headers = true] ) `

## Parameters

`$send_headers` — boolean
    

# Healthsvc\HostSanityResponse::__construct

#### 

## Signature

`public function __construct(HostSanityStatusData $status ) `

## Parameters

`$status` — 
    

# Healthsvc\HostSanityResponse

#### 

## Synopsis

class HostSanityResponse extends Response {  

  * // constants
  * const RESPONSE_CODE_HAS_WARN_NO_FAILURE = 200;
  * const RESPONSE_CODE_HAS_FAILURE = 500;
  * const RESPONSE_CODE_HAS_NO_TESTS = 500;
  * const RESPONSE_CODE_ALL_SUCCESS = 200;

  * // Inherited constants from Response
  * const JSON_CONTENT_TYPE = 'application/json';

  * // methods
  * public void __construct() 

  * // Inherited methods from Response
  * public final int getResponseCode() 
  * public final bool hasResponseData() 
  * public final array getResponseData() 
  * public final string getContentType() 
  * public final string getResponseBody() 
  * public final void printResponseBody() 
  * protected final void setResponseBody() 
  * protected final void setResponseData() 

}  

## Hierarchy

#### Extends

  * Healthsvc\Response

## Constants

Name                              | Value              
----------------------------------|--------------------
RESPONSE_CODE_HAS_WARN_NO_FAILURE | 200                
RESPONSE_CODE_HAS_FAILURE         | 500                
RESPONSE_CODE_HAS_NO_TESTS        | 500                
RESPONSE_CODE_ALL_SUCCESS         | 200                
JSON_CONTENT_TYPE                 | 'application/json' 

## Methods

### Inherited from Healthsvc\Response

#### protected

  * setResponseBody()
  * setResponseData()

#### public

  * getContentType()
  * getResponseBody()
  * getResponseCode()
  * getResponseData()
  * hasResponseData()
  * printResponseBody() — Prints the response body. Additionaly sends the appropriate HTTP headers unless <b>$send_headers</b> is <i>false</i>.

# Healthsvc\SerializableData::toArray

#### Provides an assoc array corresponding to this response data item

## Signature

`public function toArray() `

## Returns

array
    

# Healthsvc\SerializableData::toSerializedArray

#### 

## Signature

`public function toSerializedArray() `

# Healthsvc\SerializableData::toSnakeCase

#### 

## Signature

`protected function toSnakeCase(string $input ) `

## Parameters

`$input` — string
    

# Healthsvc\SerializableData::jsonSerialize

#### Part of the JsonSerializable interface

## Signature

`public function jsonSerialize() `

## Defined by Interface

` JsonSerializable `

# Healthsvc\SerializableData::getSerializableValues

#### 

## Signature

`protected function getSerializableValues() `

# Healthsvc\SerializableData::getSerializableProperties

#### 

## Signature

`protected function getSerializableProperties() `

# RuntimeException::getLine

#### 

## Signature

`public function getLine() `

## Returns

int
    

# RuntimeException::getTrace

#### 

## Signature

`public function getTrace() `

## Returns

array
    

# RuntimeException::__toString

#### 

## Signature

`public function __toString() `

## Returns

string
    

# RuntimeException::getPrevious

#### 

## Signature

`public function getPrevious() `

## Returns

Throwable
    

# RuntimeException::getFile

#### 

## Signature

`public function getFile() `

## Returns

string
    

# RuntimeException::getTraceAsString

#### 

## Signature

`public function getTraceAsString() `

## Returns

string
    

# RuntimeException::__clone

#### 

## Signature

` function __clone() `

## Returns

void
    

# RuntimeException::getMessage

#### 

## Signature

`public function getMessage() `

## Returns

string
    

# RuntimeException::getCode

#### 

## Signature

`public function getCode() `

## Returns

mixed
    

# Healthsvc\HostSanityBinDirNotExistException::getBinDir

#### 

## Signature

`public function getBinDir() `

# Healthsvc\HostSanityBinDirNotExistException::__construct

#### 

## Signature

`public function __construct(string $bin_dir ) `

## Parameters

`$bin_dir` — string
    

# Healthsvc\ConfigController::__construct

#### 

## Signature

`public function __construct([array $config = NULL] ) `

## Parameters

`$config` — array
    

# Healthsvc\ConfigController::getConfigVal

#### 

## Signature

`protected function getConfigVal(string $key ) `

## Parameters

`$key` — string
    

# Healthsvc\HostSanityRequest

#### 

## Synopsis

class HostSanityRequest extends Request {  

  * // constants
  * const ALLOWED_METHODS = ;

  * // methods
  * public bool isRequestMethodAllowed() 

  * // Inherited methods from Request
  * public abstract void isRequestMethodAllowed() 
  * public void getRequestQuery() 
  * public void getRequestMethod() 
  * public void __construct() 

  * // Inherited methods from RequestBodyParserTrait
  * public void getRequestBody() 
  * public void getContentType() 
  * protected void getRequestData() 
  * protected void setRequestBody() 

}  

## Hierarchy

#### Extends

  * Healthsvc\Request

## Constants

Name            | Value 
----------------|-------
ALLOWED_METHODS | -    

## Methods

#### public

  * isRequestMethodAllowed()

### Inherited from Healthsvc\Request

#### public

  * getRequestMethod()
  * getRequestQuery()
  * isRequestMethodAllowed()

### Inherited from Healthsvc\RequestBodyParserTrait

#### protected

  * getRequestData()
  * setRequestBody()

#### public

  * getContentType()
  * getRequestBody()

# Healthsvc\StatusData

#### 

## Synopsis

class StatusData extends SerializableData implements ConsumableResponseDataInterface,BuildableResponseDataInterface,BuildableExecExitStatusDataInterface,ConsumableExecExitStatusDataInterface,ConsumableMessageDataInterface {  

  * // Inherited constants from SerializableData
  * const PROPERTIES_TO_SNAKE_CASE = true;

  * // members
  * protected array $execExitStatus = ; 
  * protected $healthStatusTime; 
  * protected $healthStatusTtl; 

  * // methods
  * public bool hasAnyTest() 
  * public string getHealthStatusTime() 
  * public int getHealthStatusTtl() 
  * public array getHealthInfo() 
  * public array getExecExitStatus() 
  * public array getHealthSuccess() 
  * public array getHealthWarn() 
  * public array getHealthFailure() 
  * public string getMessage() 
  * public void setExecExitStatus() 
  * public void setHealthFailure() 
  * public void setHealthWarn() 
  * public bool hasAllHealthSuccess() 
  * public bool hasAnyHealthFailure() 
  * public bool hasAnyHealthWarn() 
  * public bool hasExecExitStatus() 
  * public bool hasHealthFailure() 
  * public bool moveHealthFailureToWarn() 
  * public void setHealthSuccess() 
  * public void __construct() 

  * // Inherited methods from SerializableData
  * protected void getSerializableProperties() 
  * protected void getSerializableValues() 
  * protected final static void toSnakeCase() 
  * public void jsonSerialize() 
  * public void toSerializedArray() 
  * public array toArray() 

  * // Inherited methods from ResponseDataRefreshMessageTrait
  * protected void refreshMessage() 

}  

## Hierarchy

#### Extends

  * Healthsvc\SerializableData

#### Uses

  * Healthsvc\ResponseDataRefreshMessageTrait

#### Implements

  * Healthsvc\ConsumableResponseDataInterface
  * Healthsvc\BuildableResponseDataInterface
  * Healthsvc\BuildableExecExitStatusDataInterface
  * Healthsvc\ConsumableExecExitStatusDataInterface
  * Healthsvc\ConsumableMessageDataInterface

## Constants

Name                     | Value 
-------------------------|-------
PROPERTIES_TO_SNAKE_CASE | true  

## Members

#### protected

  * __$execExitStatus__ — array
  * __$healthFailure__ — array
  * __$healthInfo__ — array
  * __$healthStatusTime__ — string
  * __$healthStatusTtl__ — int
  * __$healthSuccess__ — array
  * __$healthWarn__ — array
  * __$message__ — string

## Methods

#### public

  * __construct()
  * getExecExitStatus() — Provides any exit status codes that are associated with tests.
  * getHealthFailure() — Provides an assoc array of test info items in "failure" status.
  * getHealthInfo() — Provides any health info items that have been associated a test.
  * getHealthStatusTime() — Provides an ISO 8601 timestamp of when the health status was determined.
  * getHealthStatusTtl() — Provides number of seconds the health status should be cached.
  * getHealthSuccess() — Provides an array of test labels in "success" status.
  * getHealthWarn() — Provides an assoc array of test info items in "warn" status.
  * getMessage() — Provides message associated with this health status.
  * hasAllHealthSuccess() — Determines if all tests have the "succcess" status.
  * hasAnyHealthFailure() — Determines if any tests have the "failure" status.
  * hasAnyHealthWarn() — Determines if any tests have the "warn" status.
  * hasAnyTest() — Determines if at least one test outcome has been set.
  * hasExecExitStatus() — Determines if a test has an associated exec exit status.
  * hasHealthFailure() — Determines if a test has the "failure" status.
  * moveHealthFailureToWarn() — Moves a test from "failure" status to "warn" status.
  * setExecExitStatus() — Associates an exec exit status with a test.
  * setHealthFailure() — Sets a test's outcome to "failure" status.
  * setHealthSuccess() — Sets a test's outcome to "success" status.
  * setHealthWarn() — Sets a test's outcome to "warn" status.

### Inherited from Healthsvc\SerializableData

#### protected

  * getSerializableProperties()
  * getSerializableValues()
  * toSnakeCase()

#### public

  * jsonSerialize() — Part of the JsonSerializable interface
  * toArray() — Provides an assoc array corresponding to this response data item
  * toSerializedArray()

### Inherited from Healthsvc\ResponseDataRefreshMessageTrait

#### protected

  * refreshMessage()

# Healthsvc\HostSanityRequest::isRequestMethodAllowed

#### 

## Signature

`public function isRequestMethodAllowed() `

## Parent Implementation

  * ` Request `

# Healthsvc\HostSanityController::getStatusData

#### 

## Signature

`public function getStatusData() `

## Returns

HostSanityStatusData
      

# Healthsvc\HostSanityController::__construct

#### 

## Signature

`public function __construct(array $exec, array $warn_exit_status, array $bin, string $bin_dir ) `

## Parameters

`$exec` — array
    
`$warn_exit_status` — array
    
`$bin` — array
    
`$bin_dir` — string
    

# Healthsvc\HostSanityController::exec

#### 

## Signature

`protected function exec(string $cmd, [string& $stdout = "", [string& $stderr = ""]] ) `

## Parameters

`$cmd` — string
    
`$stdout` — string
    
`$stderr` — string
    

# Healthsvc\HostSanityController

#### 

## Synopsis

class HostSanityController {  

  * // members
  * private HostSanityStatusData $statusData; 

  * // methods
  * protected final static int exec() 
  * public HostSanityStatusData getStatusData() 
  * public void __construct() 

}  

## Members

#### private

  * __$statusData__ — \Healthsvc\HostSanityStatusData

## Methods

#### protected

  * exec()

#### public

  * __construct()
  * getStatusData()

# Healthsvc\CommandInfoItem::getStdout

#### 

## Signature

`public function getStdout() `

# Healthsvc\CommandInfoItem::__construct

#### 

## Signature

`public function __construct(string $stdout ) `

## Parameters

`$stdout` — string
    

# \RuntimeException

#### 

## Synopsis

class RuntimeException extends Exception {  

  * // members
  * protected $message; 
  * protected $code; 
  * protected $file; 
  * protected $line; 

  * // methods
  * public final string getMessage() 
  * public final Throwable getPrevious() 
  * public final mixed getCode() 
  * public final string getFile() 
  * public final int getLine() 
  * public final array getTrace() 
  * public final string getTraceAsString() 
  * public string __toString() 
  * final void __clone() 

}  

## Hierarchy

#### Extends

  * Exception

## Members

#### protected

  * __$code__ — int  
The exception code
  * __$file__ — string  
The filename where the exception was created
  * __$line__ — int  
The line where the exception was created
  * __$message__ — string  
The exception message

## Methods

#### public

  * __toString()
  * getCode()
  * getFile()
  * getLine()
  * getMessage()
  * getPrevious()
  * getTrace()
  * getTraceAsString()

# Healthsvc\CommandErrorInfoItem

#### 

## Synopsis

class CommandErrorInfoItem extends CommandInfoItem {  

  * // Inherited constants from SerializableData
  * const PROPERTIES_TO_SNAKE_CASE = true;

  * // members
  * protected $stderr; 

  * // Inherited members from CommandInfoItem
  * protected $stdout; 

  * // methods
  * public array getStderr() 
  * public void __construct() 

  * // Inherited methods from CommandInfoItem
  * public void getStdout() 
  * public void __construct() 

  * // Inherited methods from SerializableData
  * protected void getSerializableProperties() 
  * protected void getSerializableValues() 
  * protected final static void toSnakeCase() 
  * public void jsonSerialize() 
  * public void toSerializedArray() 
  * public array toArray() 

}  

## Hierarchy

#### Extends

  * Healthsvc\CommandInfoItem

## Constants

Name                     | Value 
-------------------------|-------
PROPERTIES_TO_SNAKE_CASE | true  

## Members

#### protected

  * __$stderr__
  * __$stdout__

## Methods

#### public

  * __construct()
  * getStderr()

### Inherited from Healthsvc\CommandInfoItem

#### public

  * getStdout()

### Inherited from Healthsvc\SerializableData

#### protected

  * getSerializableProperties()
  * getSerializableValues()
  * toSnakeCase()

#### public

  * jsonSerialize() — Part of the JsonSerializable interface
  * toArray() — Provides an assoc array corresponding to this response data item
  * toSerializedArray()

# Healthsvc\Response::printResponseBody

#### Prints the response body. Additionaly sends the appropriate HTTP headers unless <b>$send_headers</b> is <i>false</i>.

## Signature

`public function printResponseBody([boolean $send_headers = true] ) `

## Parameters

`$send_headers` — boolean
    Optionally set to <i>false</i> to suppress sending HTTP headers.  
  
  

## Returns

void
      

# Healthsvc\Response::getResponseCode

#### 

## Signature

`public function getResponseCode() `

## Returns

int
    HTTP response code

## Defined by Interface

` ResponseInterface `

# Healthsvc\Response::setResponseData

#### 

## Signature

`protected function setResponseData(array $response_data, [integer $response_code = 200] ) `

## Parameters

`$response_data` — array
    
`$response_code` — integer
    

# Healthsvc\Response::setResponseBody

#### 

## Signature

`protected function setResponseBody(string $response_body, string $content_type, [integer $response_code = 200] ) `

## Parameters

`$response_body` — string
    
`$content_type` — string
    
`$response_code` — integer
    

# Healthsvc\Response::getResponseData

#### 

## Signature

`public function getResponseData() `

## Returns

array
    response data corresponding to the response body

# Healthsvc\Response::getContentType

#### 

## Signature

`public function getContentType() `

## Returns

string
    response content type

## Defined by Interface

` ResponseInterface `

# Healthsvc\Response::hasResponseData

#### 

## Signature

`private function hasResponseData() `

## Returns

bool
    true if the response body corresponds to response data, otherwise <b>bool</b> false  

# Healthsvc\Response::getResponseBody

#### 

## Signature

`public function getResponseBody() `

## Returns

string
    response body

## Defined by Interface

` ResponseInterface `

# Healthsvc\ErrorInfoItem::__construct

#### 

## Signature

`public function __construct(string $message ) `

## Parameters

`$message` — string
    

# Healthsvc\ErrorInfoItem::getMessage

#### 

## Signature

`public function getMessage() `

# Healthsvc\StatusDataProviderInterface

#### 

## Synopsis

interface StatusDataProviderInterface {  

  * // methods
  * public StatusData getStatusData() 

}  

## Methods

#### public

  * getStatusData()

# Healthsvc\ConsumableResponseDataInterface::getHealthInfo

#### Provides any health info items that have been associated a test.

## Signature

`public function getHealthInfo() `

## Returns

array
    test info as assoc array of health info items, the element keys are the correspdoning test label  

# Healthsvc\ConsumableResponseDataInterface::getHealthSuccess

#### Provides an array of test labels in "success" status.

## Signature

`public function getHealthSuccess() `

## Returns

array
    array containing the label of every test having the "success" status  

# Healthsvc\ConsumableResponseDataInterface::hasAnyTest

#### Determines if at least one test outcome has been set.

## Signature

`public function hasAnyTest() `

## Returns

bool
    <i>true</i> if at least one test outcome has been set, <b>bool</b> <i>false</i> otherwise  

# Healthsvc\ConsumableResponseDataInterface::hasAllHealthSuccess

#### 

## Signature

`public function hasAllHealthSuccess() `

# Healthsvc\ConsumableResponseDataInterface::getHealthWarn

#### Provides an assoc array of test info items in "warn" status.

## Signature

`public function getHealthWarn() `

## Returns

array
    element keys are the correspdoning test label  

# Healthsvc\ConsumableResponseDataInterface::getHealthStatusTtl

#### Provides number of seconds the health status should be cached.

## Signature

`public function getHealthStatusTtl() `

## Returns

int
    health status time to live

# Healthsvc\ConsumableResponseDataInterface::getHealthFailure

#### Provides an assoc array of test info items in "failure" status.

## Signature

`public function getHealthFailure() `

## Returns

array
    element keys are the correspdoning test label  

# Healthsvc\ConsumableResponseDataInterface::hasAnyHealthFailure

#### 

## Signature

`public function hasAnyHealthFailure() `

# Healthsvc\ConsumableResponseDataInterface::hasAnyHealthWarn

#### 

## Signature

`public function hasAnyHealthWarn() `

# Healthsvc\ConsumableResponseDataInterface::getHealthStatusTime

#### Provides an ISO 8601 timestamp of when the health status was determined.

## Signature

`public function getHealthStatusTime() `

## Returns

string
    ISO 8601 timestamp

# Healthsvc\ConsumableResponseDataInterface::hasHealthFailure

#### 

## Signature

`public function hasHealthFailure(string $label ) `

## Parameters

`$label` — string
    

# Healthsvc\ConsumableResponseDataInterface::hasExecExitStatus

#### 

## Signature

`public function hasExecExitStatus(string $label ) `

## Parameters

`$label` — string
    

# Healthsvc\ResponseBodyPrinterInterface::printResponseBody

#### 

## Signature

`public function printResponseBody([boolean $send_headers = true] ) `

## Parameters

`$send_headers` — boolean
    

# Healthsvc\ConsumableExecExitStatusDataInterface::getExecExitStatus

#### 

## Signature

`public function getExecExitStatus() `

## Returns

array
    exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label  

# JsonSerializable::jsonSerialize

#### Specify data which should be serialized to JSON

## Signature

`public function jsonSerialize() `

## Returns

mixed
    

# Healthsvc\ConsumableMessageDataInterface

#### 

## Synopsis

interface ConsumableMessageDataInterface {  

  * // methods
  * public string getMessage() 

}  

## Methods

#### public

  * getMessage() — Provides message associated with this health status.

# Healthsvc\BuildableExecExitStatusDataInterface

#### 

## Synopsis

interface BuildableExecExitStatusDataInterface {  

  * // methods
  * public void setExecExitStatus() 

}  

## Methods

#### public

  * setExecExitStatus()

# Healthsvc\ConsumableResponseDataInterface

#### 

## Synopsis

interface ConsumableResponseDataInterface {  

  * // methods
  * public bool hasAnyTest() 
  * public string getHealthStatusTime() 
  * public int getHealthStatusTtl() 
  * public array getHealthInfo() 
  * public array getHealthSuccess() 
  * public array getHealthWarn() 
  * public array getHealthFailure() 
  * public bool hasAllHealthSuccess() 
  * public bool hasAnyHealthFailure() 
  * public bool hasAnyHealthWarn() 
  * public bool hasExecExitStatus() 
  * public bool hasHealthFailure() 

}  

## Methods

#### public

  * getHealthFailure() — Provides an assoc array of test info items in "failure" status.
  * getHealthInfo() — Provides any health info items that have been associated a test.
  * getHealthStatusTime() — Provides an ISO 8601 timestamp of when the health status was determined.
  * getHealthStatusTtl() — Provides number of seconds the health status should be cached.
  * getHealthSuccess() — Provides an array of test labels in "success" status.
  * getHealthWarn() — Provides an assoc array of test info items in "warn" status.
  * hasAllHealthSuccess()
  * hasAnyHealthFailure()
  * hasAnyHealthWarn()
  * hasAnyTest() — Determines if at least one test outcome has been set.
  * hasExecExitStatus()
  * hasHealthFailure()

# Healthsvc\StatusDataProviderInterface::getStatusData

#### 

## Signature

`public function getStatusData() `

# Healthsvc\BuildableMessageDataInterface::setMessage

#### 

## Signature

`public function setMessage(string $message ) `

## Parameters

`$message` — string
    

# Healthsvc\BuildableMessageDataInterface

#### 

## Synopsis

interface BuildableMessageDataInterface {  

  * // methods
  * public void setMessage() 

}  

## Methods

#### public

  * setMessage()

# Healthsvc\BuildableResponseDataInterface

#### 

## Synopsis

interface BuildableResponseDataInterface {  

  * // methods
  * public void setExecExitStatus() 
  * public void setHealthFailure() 
  * public void setHealthWarn() 
  * public bool moveHealthFailureToWarn() 
  * public void setHealthSuccess() 
  * public void __construct() 

}  

## Methods

#### public

  * __construct()
  * moveHealthFailureToWarn()
  * setExecExitStatus()
  * setHealthFailure()
  * setHealthSuccess()
  * setHealthWarn()

# Healthsvc\BuildableResponseDataInterface::setHealthWarn

#### 

## Signature

`public function setHealthWarn(string $label, InfoItem $health_warn ) `

## Parameters

`$label` — string
    
`$health_warn` — 
    

# Healthsvc\BuildableResponseDataInterface::setHealthSuccess

#### 

## Signature

`public function setHealthSuccess(string $label, [InfoItem $success_info = NULL] ) `

## Parameters

`$label` — string
    
`$success_info` — 
    

# Healthsvc\BuildableResponseDataInterface::moveHealthFailureToWarn

#### 

## Signature

`public function moveHealthFailureToWarn(string $label ) `

## Parameters

`$label` — string
    

# Healthsvc\BuildableResponseDataInterface::__construct

#### 

## Signature

`public function __construct([integer $health_staus_ttl = 0, [string $health_status_time = NULL]] ) `

## Parameters

`$health_staus_ttl` — integer
    
`$health_status_time` — string
    

# Healthsvc\BuildableResponseDataInterface::setExecExitStatus

#### 

## Signature

`public function setExecExitStatus(string $label, int $exit_status ) `

## Parameters

`$label` — string
    
`$exit_status` — int
    

# Healthsvc\BuildableResponseDataInterface::setHealthFailure

#### 

## Signature

`public function setHealthFailure(string $label, InfoItem $health_failure ) `

## Parameters

`$label` — string
    
`$health_failure` — 
    

# Healthsvc\ResponseInterface::getResponseCode

#### 

## Signature

`public function getResponseCode() `

# Healthsvc\ResponseInterface::getContentType

#### 

## Signature

`public function getContentType() `

# Healthsvc\ResponseInterface::getResponseBody

#### 

## Signature

`public function getResponseBody() `

# Healthsvc\BuildableExecExitStatusDataInterface::setExecExitStatus

#### 

## Signature

`public function setExecExitStatus(string $label, int $exit_status ) `

## Parameters

`$label` — string
    
`$exit_status` — int
    

# Healthsvc\ConsumableExecExitStatusDataInterface

#### 

## Synopsis

interface ConsumableExecExitStatusDataInterface {  

  * // methods
  * public array getExecExitStatus() 

}  

## Methods

#### public

  * getExecExitStatus()

# Healthsvc\ConsumableMessageDataInterface::getMessage

#### Provides message associated with this health status.

## Signature

`public function getMessage() `

## Returns

string
    message

# \JsonSerializable

#### 

## Synopsis

interface JsonSerializable {  

  * // methods
  * public mixed jsonSerialize() 

}  

## Methods

#### public

  * jsonSerialize() — Specify data which should be serialized to JSON

# Healthsvc\ResponseInterface

#### 

## Synopsis

interface ResponseInterface extends ResponseBodyPrinterInterface {  

  * // methods
  * public int getResponseCode() 
  * public string getContentType() 
  * public string getResponseBody() 

  * // Inherited methods from ResponseBodyPrinterInterface
  * public void printResponseBody() 

}  

## Hierarchy

#### Extends

  * Healthsvc\ResponseBodyPrinterInterface

## Methods

#### public

  * getContentType()
  * getResponseBody()
  * getResponseCode()

### Inherited from Healthsvc\ResponseBodyPrinterInterface

#### public

  * printResponseBody()

# Healthsvc\ResponseBodyPrinterInterface

#### 

## Synopsis

interface ResponseBodyPrinterInterface {  

  * // methods
  * public void printResponseBody() 

}  

## Methods

#### public

  * printResponseBody()


----
# Legal
Copyright (c) 2018, Doug Bird. All Rights Reserved.

healthsvc is copyrighted free software and is distributed under the terms of the MIT license or the GPLv3 license.

This document was automatically generated by the following:
 * healthsvc/phpdox.sh
 * html2markdown 2018.1.9
 * phpDox 0.11.2 - Copyright (C) 2010 - 2018 by Arne Blankerts and Contributors

