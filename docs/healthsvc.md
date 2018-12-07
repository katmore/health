__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\

# \Healthsvc

## Traits

ConfigFileReaderTrait | __  
---|---  
RequestBodyParserTrait | __  
  
## Interfaces

ResponseBodyPrinterInterface | __  
---|---  
ResponseInterface | __  
StatusDataProviderInterface | __  
  
## Classes

CommandErrorInfoItem | __  
---|---  
CommandInfoItem | __  
ConfigController | __  
ErrorInfoItem | __  
HostSanityBinDirNotExistException | __  
HostSanityConfig | __  
HostSanityController | __  
HostSanityRequest | __  
HostSanityRequestResponseController | __  
HostSanityResponse | __  
HostSanityStatusData | __  
InfoItem | __  
Request | __  
RequestMethodNotAllowedException | __  
RequestResponseController | __  
Response | __  
ResponseDataInvalidException | __  
ResponseException | __  
SerializableData | __  
StatusData | __  
  
Namespace hierarchy

    

\

\Healthsvc

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

# \

## Namespaces

Healthsvc  
---  
  
Namespace hierarchy

    

\

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcCommandErrorInfoItem

__

## Summary

Methods Properties Constants getStdout()  
__construct()  
jsonSerialize()  
toSerializedArray()  
toArray()  
getStderr()  
_No public properties found_ PROPERTIES_TO_SNAKE_CASE  
getSerializableProperties()  
getSerializableValues()  
toSnakeCase()  
$stdout  
$stderr  
_N/A_ _No private methods found_ _No private properties found_ _N/A_

File

    

CommandErrorInfoItem.php

Package

    

Default

Class hierarchy

    

\Healthsvc\SerializableData

\Healthsvc\InfoItem

\Healthsvc\CommandInfoItem

\Healthsvc\CommandErrorInfoItem

## Tags

_None found_  
---  
  
## Constants

### PROPERTIES_TO_SNAKE_CASE

[code]

    PROPERTIES_TO_SNAKE_CASE
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $stdout

[code]

    $stdout : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\CommandInfoItem

## Tags

_None found_  
---  
  
### $stderr

[code]

    $stderr : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getStdout()

__

[code]

    getStdout() 
[/code]

__

# __

Inherited from

    

\Healthsvc\CommandInfoItem

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\string   $stdout, \Healthsvc\string  $stderr) 
[/code]

__

#### Parameters

\Healthsvc\string | $stdout  |  
---|---|---  
\Healthsvc\string | $stderr  |  
  
# __

## Tags

_None found_  
---  
  
### jsonSerialize()

__

[code]

    jsonSerialize() 
[/code]

_Part of the JsonSerializable interface_

# __

Inherited from

    

\Healthsvc\SerializableData

See also

    \JsonSerializable

## Tags

_None found_  
---  
  
### toSerializedArray()

__

[code]

    toSerializedArray() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

[code]

    toArray() : array
[/code]

_Provides an assoc array corresponding to this response data item_

#### Returns

array

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getStderr()

__

[code]

    getStderr() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

[code]

    getSerializableProperties() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

[code]

    getSerializableValues() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

[code]

    toSnakeCase(\Healthsvc\string   $input) 
[/code]

__

#### Parameters

\Healthsvc\string | $input  |  
---|---|---  
  
# __

static final

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
×

### CommandErrorInfoItem.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcCommandInfoItem

__

## Summary

Methods Properties Constants jsonSerialize()  
toSerializedArray()  
toArray()  
getStdout()  
__construct()  
_No public properties found_ PROPERTIES_TO_SNAKE_CASE  
getSerializableProperties()  
getSerializableValues()  
toSnakeCase()  
$stdout  
_N/A_ _No private methods found_ _No private properties found_ _N/A_

File

    

CommandInfoItem.php

Package

    

Default

Class hierarchy

    

\Healthsvc\SerializableData

\Healthsvc\InfoItem

\Healthsvc\CommandInfoItem

## Tags

_None found_  
---  
  
## Constants

### PROPERTIES_TO_SNAKE_CASE

[code]

    PROPERTIES_TO_SNAKE_CASE
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $stdout

[code]

    $stdout : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### jsonSerialize()

__

[code]

    jsonSerialize() 
[/code]

_Part of the JsonSerializable interface_

# __

Inherited from

    

\Healthsvc\SerializableData

See also

    \JsonSerializable

## Tags

_None found_  
---  
  
### toSerializedArray()

__

[code]

    toSerializedArray() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

[code]

    toArray() : array
[/code]

_Provides an assoc array corresponding to this response data item_

#### Returns

array

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getStdout()

__

[code]

    getStdout() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\string   $stdout) 
[/code]

__

#### Parameters

\Healthsvc\string | $stdout  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

[code]

    getSerializableProperties() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

[code]

    getSerializableValues() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

[code]

    toSnakeCase(\Healthsvc\string   $input) 
[/code]

__

#### Parameters

\Healthsvc\string | $input  |  
---|---|---  
  
# __

static final

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
×

### CommandInfoItem.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcConfigController

__

## Summary

Methods Properties Constants __construct()  
_No public properties found_ _No constants found_ getConfigVal()  
_No protected properties found_ _N/A_ _No private methods found_ $config  
_N/A_

abstract

File

    

ConfigController.php

Package

    

Default

Class hierarchy

    

\Healthsvc\ConfigController

## Tags

_None found_  
---  
  
## Properties

### $config

[code]

    $config : array
[/code]

__

#### Type

array

# __

## Tags

private  |  
---|---  
  
## Methods

### __construct()

__

[code]

    __construct(array   $config = null) 
[/code]

__

#### Parameters

array | $config  |  
---|---|---  
  
# __

final

## Tags

_None found_  
---  
  
### getConfigVal()

__

[code]

    getConfigVal(\Healthsvc\string   $key) 
[/code]

__

#### Parameters

\Healthsvc\string | $key  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
×

### ConfigController.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcConfigFileReaderTrait

__

## Summary

Methods Properties Constants _No public methods found_ _No public properties
found_ _No constants found_ getConfig()  
setConfigFile()  
_No protected properties found_ _N/A_ _No private methods found_ $config  
_N/A_

File

    

ConfigFileReaderTrait.php

Package

    

Default

Class hierarchy

    

\Healthsvc\ConfigFileReaderTrait

## Tags

_None found_  
---  
  
## Properties

### $config

[code]

    $config : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getConfig()

__

[code]

    getConfig() 
[/code]

__

# __

File

    

ConfigFileReaderTrait.php

## Tags

_None found_  
---  
  
### setConfigFile()

__

[code]

    setConfigFile(\Healthsvc\string   $config_file = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $config_file  |  
---|---|---  
  
# __

File

    

ConfigFileReaderTrait.php

## Tags

_None found_  
---  
  
×

### ConfigFileReaderTrait.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcErrorInfoItem

__

## Summary

Methods Properties Constants jsonSerialize()  
toSerializedArray()  
toArray()  
getMessage()  
__construct()  
_No public properties found_ PROPERTIES_TO_SNAKE_CASE  
getSerializableProperties()  
getSerializableValues()  
toSnakeCase()  
$message  
_N/A_ _No private methods found_ _No private properties found_ _N/A_

File

    

ErrorInfoItem.php

Package

    

Default

Class hierarchy

    

\Healthsvc\SerializableData

\Healthsvc\InfoItem

\Healthsvc\ErrorInfoItem

## Tags

_None found_  
---  
  
## Constants

### PROPERTIES_TO_SNAKE_CASE

[code]

    PROPERTIES_TO_SNAKE_CASE
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $message

[code]

    $message : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### jsonSerialize()

__

[code]

    jsonSerialize() 
[/code]

_Part of the JsonSerializable interface_

# __

Inherited from

    

\Healthsvc\SerializableData

See also

    \JsonSerializable

## Tags

_None found_  
---  
  
### toSerializedArray()

__

[code]

    toSerializedArray() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

[code]

    toArray() : array
[/code]

_Provides an assoc array corresponding to this response data item_

#### Returns

array

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getMessage()

__

[code]

    getMessage() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\string   $message) 
[/code]

__

#### Parameters

\Healthsvc\string | $message  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

[code]

    getSerializableProperties() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

[code]

    getSerializableValues() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

[code]

    toSnakeCase(\Healthsvc\string   $input) 
[/code]

__

#### Parameters

\Healthsvc\string | $input  |  
---|---|---  
  
# __

static final

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
×

### ErrorInfoItem.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcHostSanityBinDirNotExistException

__

## Summary

Methods Properties Constants getBinDir()  
__construct()  
_No public properties found_ _No constants found_ _No protected methods found_
_No protected properties found_ _N/A_ _No private methods found_ $binDir  
_N/A_

File

    

HostSanityBinDirNotExistException.php

Package

    

Default

Class hierarchy

    

\RuntimeException

\Healthsvc\HostSanityBinDirNotExistException

## Tags

_None found_  
---  
  
## Properties

### $binDir

[code]

    $binDir : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getBinDir()

__

[code]

    getBinDir() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\string   $bin_dir) 
[/code]

__

#### Parameters

\Healthsvc\string | $bin_dir  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
×

### HostSanityBinDirNotExistException.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcHostSanityConfig

__

## Summary

Methods Properties Constants __construct()  
getExec()  
getWarnExitStatus()  
getBin()  
getBinDir()  
_No public properties found_ DEFAULT_BIN_DIR  
getConfigVal()  
_No protected properties found_ _N/A_ _No private methods found_ $config  
_N/A_

File

    

HostSanityConfig.php

Package

    

Default

Class hierarchy

    

\Healthsvc\ConfigController

\Healthsvc\HostSanityConfig

## Tags

_None found_  
---  
  
## Constants

### DEFAULT_BIN_DIR

[code]

    DEFAULT_BIN_DIR
[/code]

__

# __

## Tags

_None found_  
---  
  
## Properties

### $config

[code]

    $config : array
[/code]

__

#### Type

array

# __

Inherited from

    

\Healthsvc\ConfigController

## Tags

private  |  
---|---  
  
## Methods

### __construct()

__

[code]

    __construct(array   $config = null) 
[/code]

__

#### Parameters

array | $config  |  
---|---|---  
  
# __

final

Inherited from

    

\Healthsvc\ConfigController

## Tags

_None found_  
---  
  
### getExec()

__

[code]

    getExec() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getWarnExitStatus()

__

[code]

    getWarnExitStatus() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getBin()

__

[code]

    getBin() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getBinDir()

__

[code]

    getBinDir() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getConfigVal()

__

[code]

    getConfigVal(\Healthsvc\string   $key) 
[/code]

__

#### Parameters

\Healthsvc\string | $key  |  
---|---|---  
  
# __

Inherited from

    

\Healthsvc\ConfigController

## Tags

_None found_  
---  
  
×

### HostSanityConfig.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcHostSanityController

__

## Summary

Methods Properties Constants getStatusData()  
__construct()  
_No public properties found_ _No constants found_ exec()  
_No protected properties found_ _N/A_ _No private methods found_ $statusData  
_N/A_

File

    

HostSanityController.php

Package

    

Default

Class hierarchy

    

\Healthsvc\HostSanityController

## Tags

_None found_  
---  
  
## Properties

### $statusData

[code]

    $statusData : \Healthsvc\HostSanityStatusData
[/code]

__

#### Type

\Healthsvc\HostSanityStatusData

# __

## Tags

private  |  
---|---  
  
## Methods

### getStatusData()

__

[code]

    getStatusData() : \Healthsvc\HostSanityStatusData
[/code]

__

#### Returns

\Healthsvc\HostSanityStatusData

# __

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(array   $exec, array  $warn_exit_status, array  $bin, \Healthsvc\string  $bin_dir) 
[/code]

__

#### Parameters

array | $exec  |  
---|---|---  
array | $warn_exit_status  |  
array | $bin  |  
\Healthsvc\string | $bin_dir  |  
  
# __

## Tags

_None found_  
---  
  
### exec()

__

[code]

    exec(\Healthsvc\string   $cmd,   $stdout = "",   $stderr = "") 
[/code]

__

#### Parameters

\Healthsvc\string | $cmd  |  
---|---|---  
| $stdout  |  
| $stderr  |  
  
# __

static final

## Tags

_None found_  
---  
  
×

### HostSanityController.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcHostSanityRequest

__

## Summary

Methods Properties Constants isRequestMethodAllowed()  
getRequestQuery()  
getRequestMethod()  
__construct()  
getRequestBody()  
getContentType()  
_No public properties found_ ALLOWED_METHODS  
getRequestData()  
setRequestBody()  
_No protected properties found_ _N/A_ _No private methods found_
$requestMethod  
$requestQuery  
$requestBody  
$contentType  
$requestData  
_N/A_

File

    

HostSanityRequest.php

Package

    

Default

Class hierarchy

    

\Healthsvc\Request

\Healthsvc\HostSanityRequest

## Tags

_None found_  
---  
  
## Constants

### ALLOWED_METHODS

[code]

    ALLOWED_METHODS
[/code]

__

# __

## Tags

_None found_  
---  
  
## Properties

### $requestMethod

[code]

    $requestMethod : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\Request

## Tags

_None found_  
---  
  
### $requestQuery

[code]

    $requestQuery : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\Request

## Tags

_None found_  
---  
  
### $requestBody

[code]

    $requestBody : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $contentType

[code]

    $contentType : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $requestData

[code]

    $requestData : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
## Methods

### isRequestMethodAllowed()

__

[code]

    isRequestMethodAllowed() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getRequestQuery()

__

[code]

    getRequestQuery() 
[/code]

__

# __

Inherited from

    

\Healthsvc\Request

## Tags

_None found_  
---  
  
### getRequestMethod()

__

[code]

    getRequestMethod() 
[/code]

__

# __

Inherited from

    

\Healthsvc\Request

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\string   $request_method = null, array  $request_query = null, \Healthsvc\string  $request_body = null, \Healthsvc\string  $content_type = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $request_method  |  
---|---|---  
array | $request_query  |  
\Healthsvc\string | $request_body  |  
\Healthsvc\string | $content_type  |  
  
#### Throws

\Healthsvc\RequestMethodNotAllowedException

    

# __

Inherited from

    

\Healthsvc\Request

## Tags

_None found_  
---  
  
### getRequestBody()

__

[code]

    getRequestBody() 
[/code]

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### getContentType()

__

[code]

    getContentType() 
[/code]

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### getRequestData()

__

[code]

    getRequestData() 
[/code]

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### setRequestBody()

__

[code]

    setRequestBody(\Healthsvc\string   $request_body = null, \Healthsvc\string  $content_type = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $request_body  |  
---|---|---  
\Healthsvc\string | $content_type  |  
  
# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
×

### HostSanityRequest.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcHostSanityRequestResponseController

__

## Summary

Methods Properties Constants __construct()  
getRequest()  
getResponse()  
printResponseBody()  
_No public properties found_ _No constants found_ getConfig()  
setConfigFile()  
_No protected properties found_ _N/A_ _No private methods found_ $config  
$requestMethod  
$requestQuery  
$requestBody  
$contentType  
_N/A_

File

    

HostSanityRequestResponseController.php

Package

    

Default

Class hierarchy

    

\Healthsvc\RequestResponseController

\Healthsvc\HostSanityRequestResponseController

## Tags

_None found_  
---  
  
## Properties

### $config

[code]

    $config : \Healthsvc\HostSanityConfig
[/code]

__

#### Type

\Healthsvc\HostSanityConfig

# __

## Tags

_None found_  
---  
  
### $requestMethod

[code]

    $requestMethod : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
### $requestQuery

[code]

    $requestQuery : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
### $requestBody

[code]

    $requestBody : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
### $contentType

[code]

    $contentType : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### __construct()

__

[code]

    __construct(\Healthsvc\string   $config_file = null, \Healthsvc\string  $request_method = null, array  $request_query = null, \Healthsvc\string  $request_body = null, \Healthsvc\string  $content_type = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $config_file  |  
---|---|---  
\Healthsvc\string | $request_method  |  
array | $request_query  |  
\Healthsvc\string | $request_body  |  
\Healthsvc\string | $content_type  |  
  
# __

## Tags

_None found_  
---  
  
### getRequest()

__

[code]

    getRequest() 
[/code]

__

#### Throws

\Healthsvc\RequestMethodNotAllowedException

    

# __

## Tags

_None found_  
---  
  
### getResponse()

__

[code]

    getResponse() 
[/code]

__

#### Throws

\Healthsvc\RequestMethodNotAllowedException

    

# __

## Tags

_None found_  
---  
  
### printResponseBody()

__

[code]

    printResponseBody(\Healthsvc\bool   $send_headers = true) 
[/code]

__

#### Parameters

\Healthsvc\bool | $send_headers  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
### getConfig()

__

[code]

    getConfig() 
[/code]

__

# __

Inherited from

    

\Healthsvc\ConfigFileReaderTrait

## Tags

_None found_  
---  
  
### setConfigFile()

__

[code]

    setConfigFile(\Healthsvc\string   $config_file = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $config_file  |  
---|---|---  
  
# __

Inherited from

    

\Healthsvc\ConfigFileReaderTrait

## Tags

_None found_  
---  
  
×

### HostSanityRequestResponseController.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcHostSanityResponse

__

## Summary

Methods Properties Constants getResponseCode()  
hasResponseData()  
getResponseData()  
getContentType()  
getResponseBody()  
printResponseBody()  
__construct()  
_No public properties found_ JSON_CONTENT_TYPE  
RESPONSE_CODE_HAS_WARN_NO_FAILURE  
RESPONSE_CODE_HAS_FAILURE  
RESPONSE_CODE_HAS_NO_TESTS  
RESPONSE_CODE_ALL_SUCCESS  
setResponseBody()  
setResponseData()  
_No protected properties found_ _N/A_ _No private methods found_
$hasResponseData  
$responseData  
$responseBody  
$contentType  
$responseCode  
_N/A_

File

    

HostSanityResponse.php

Package

    

Default

Class hierarchy

    

\Healthsvc\Response

\Healthsvc\HostSanityResponse

## Tags

_None found_  
---  
  
## Constants

### JSON_CONTENT_TYPE

[code]

    JSON_CONTENT_TYPE
[/code]

__

# __

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
### RESPONSE_CODE_HAS_WARN_NO_FAILURE

[code]

    RESPONSE_CODE_HAS_WARN_NO_FAILURE
[/code]

__

# __

## Tags

_None found_  
---  
  
### RESPONSE_CODE_HAS_FAILURE

[code]

    RESPONSE_CODE_HAS_FAILURE
[/code]

__

# __

## Tags

_None found_  
---  
  
### RESPONSE_CODE_HAS_NO_TESTS

[code]

    RESPONSE_CODE_HAS_NO_TESTS
[/code]

__

# __

## Tags

_None found_  
---  
  
### RESPONSE_CODE_ALL_SUCCESS

[code]

    RESPONSE_CODE_ALL_SUCCESS
[/code]

__

# __

## Tags

_None found_  
---  
  
## Properties

### $hasResponseData

[code]

    $hasResponseData : boolean
[/code]

__

#### Type

boolean -- true if the response body corresponds to response data, otherwise
<b>bool</b> false

# __

Inherited from

    

\Healthsvc\Response

## Tags

private  |  
---|---  
  
### $responseData

[code]

    $responseData : array
[/code]

__

#### Type

array -- response data corresponding to the response body

# __

Inherited from

    

\Healthsvc\Response

## Tags

private  |  
---|---  
  
### $responseBody

[code]

    $responseBody : string
[/code]

__

#### Type

string -- response body

# __

Inherited from

    

\Healthsvc\Response

## Tags

private  |  
---|---  
  
### $contentType

[code]

    $contentType : string
[/code]

__

#### Type

string -- response content type

# __

Inherited from

    

\Healthsvc\Response

## Tags

private  |  
---|---  
  
### $responseCode

[code]

    $responseCode : integer
[/code]

__

#### Type

integer -- HTTP response code

# __

Inherited from

    

\Healthsvc\Response

## Tags

private  |  
---|---  
  
## Methods

### getResponseCode()

__

[code]

    getResponseCode() : integer
[/code]

__

#### Returns

integer --

HTTP response code

# __

final

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
### hasResponseData()

__

[code]

    hasResponseData() : boolean
[/code]

__

#### Returns

boolean --

true if the response body corresponds to response data, otherwise **bool**
false

# __

final

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
### getResponseData()

__

[code]

    getResponseData() : array
[/code]

__

#### Returns

array --

response data corresponding to the response body

# __

final

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
### getContentType()

__

[code]

    getContentType() : string
[/code]

__

#### Returns

string --

response content type

# __

final

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
### getResponseBody()

__

[code]

    getResponseBody() : string
[/code]

__

#### Returns

string --

response body

# __

final

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
### printResponseBody()

__

[code]

    printResponseBody(boolean   $send_headers = true) : void
[/code]

_Prints the response body. Additionaly sends the appropriate HTTP headers
unless <b>$send_headers</b> is <i>false</i>._

#### Parameters

boolean | $send_headers  |

Optionally set to _false_ to suppress sending HTTP headers.  
  
---|---|---  
  
# __

final

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\HostSanityStatusData   $status) 
[/code]

__

#### Parameters

\Healthsvc\HostSanityStatusData |  $status  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
### setResponseBody()

__

[code]

    setResponseBody(\Healthsvc\string   $response_body, \Healthsvc\string  $content_type, \Healthsvc\int  $response_code = 200) 
[/code]

__

#### Parameters

\Healthsvc\string | $response_body  |  
---|---|---  
\Healthsvc\string | $content_type  |  
\Healthsvc\int | $response_code  |  
  
# __

final

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
### setResponseData()

__

[code]

    setResponseData(array   $response_data, \Healthsvc\int  $response_code = 200) 
[/code]

__

#### Parameters

array | $response_data  |  
---|---|---  
\Healthsvc\int | $response_code  |  
  
# __

final

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
×

### HostSanityResponse.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcHostSanityStatusData

__

## Summary

Methods Properties Constants hasNoTests()  
hasAnyTest()  
getHealthStatusTime()  
getHealthStatusTtl()  
getHealthInfo()  
getExecExitStatus()  
getHealthSuccess()  
getHealthWarn()  
getHealthFailure()  
getMessage()  
setExecExitStatus()  
setHealthFailure()  
setHealthWarn()  
hasAllHealthSuccess()  
hasAnyHealthFailure()  
hasAnyHealthWarn()  
hasExecExitStatus()  
hasHealthFailure()  
moveHealthFailureToWarn()  
setHealthSuccess()  
__construct()  
jsonSerialize()  
toSerializedArray()  
toArray()  
getHostname()  
_No public properties found_ PROPERTIES_TO_SNAKE_CASE  
refreshMessage()  
getSerializableProperties()  
getSerializableValues()  
toSnakeCase()  
$message  
$healthStatusTime  
$healthStatusTtl  
$healthInfo  
$execExitStatus  
$healthSuccess  
$healthWarn  
$healthFailure  
$hostname  
_N/A_ _No private methods found_ _No private properties found_ _N/A_

File

    

HostSanityStatusData.php

Package

    

Default

Class hierarchy

    

\Healthsvc\SerializableData

\Healthsvc\StatusData

\Healthsvc\HostSanityStatusData

## Tags

_None found_  
---  
  
## Constants

### PROPERTIES_TO_SNAKE_CASE

[code]

    PROPERTIES_TO_SNAKE_CASE
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $message

[code]

    $message : string
[/code]

__

#### Type

string -- response message

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

private  |  
---|---  
  
### $healthStatusTime

[code]

    $healthStatusTime : string
[/code]

__

#### Type

string -- ISO 8601 timestamp of when health status generated

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

private  |  
---|---  
  
### $healthStatusTtl

[code]

    $healthStatusTtl : integer
[/code]

__

#### Type

integer -- health status time to live

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

private  |  
---|---  
  
### $healthInfo

[code]

    $healthInfo : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Type

array<mixed,\Healthsvc\InfoItem> -- test info as assoc array of health info
items, the element keys are the correspdoning test label

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

private  |  
---|---  
  
### $execExitStatus

[code]

    $execExitStatus : array<mixed,integer>
[/code]

__

#### Type

array<mixed,integer> -- exit status codes as assoc array of exit status codes,
the element keys are the correspdoning test label

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

private  |  
---|---  
  
### $healthSuccess

[code]

    $healthSuccess : array<mixed,string>
[/code]

__

#### Type

array<mixed,string> -- array containing the label of every successful test

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

private  |  
---|---  
  
### $healthWarn

[code]

    $healthWarn : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Type

array<mixed,\Healthsvc\InfoItem> -- health warnings as assoc array of health
info items, the element keys are the correspdoning test label

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

private  |  
---|---  
  
### $healthFailure

[code]

    $healthFailure : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Type

array<mixed,\Healthsvc\InfoItem> -- health failures as assoc array of health
info items, the element keys are the correspdoning test label

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

private  |  
---|---  
  
### $hostname

[code]

    $hostname : string
[/code]

__

#### Type

string -- string reported hostname

# __

## Tags

private  |  
---|---  
  
## Methods

### hasNoTests()

__

[code]

    hasNoTests() 
[/code]

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasAnyTest()

__

[code]

    hasAnyTest() 
[/code]

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getHealthStatusTime()

__

[code]

    getHealthStatusTime() : string
[/code]

__

#### Returns

string --

ISO 8601 timestamp of when health status generated

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getHealthStatusTtl()

__

[code]

    getHealthStatusTtl() : integer
[/code]

__

#### Returns

integer --

health status time to live

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getHealthInfo()

__

[code]

    getHealthInfo() : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Returns

array<mixed,\Healthsvc\InfoItem> --

test info as assoc array of health info items, the element keys are the
correspdoning test label

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getExecExitStatus()

__

[code]

    getExecExitStatus() : array<mixed,integer>
[/code]

__

#### Returns

array<mixed,integer> --

exit status codes as assoc array of exit status codes, the element keys are
the correspdoning test label

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getHealthSuccess()

__

[code]

    getHealthSuccess() : array<mixed,string>
[/code]

__

#### Returns

array<mixed,string> --

array containing the label of every successful test

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getHealthWarn()

__

[code]

    getHealthWarn() : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Returns

array<mixed,\Healthsvc\InfoItem> --

health warnings as assoc array of health info items, the element keys are the
correspdoning test label

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getHealthFailure()

__

[code]

    getHealthFailure() : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Returns

array<mixed,\Healthsvc\InfoItem> --

health failures as assoc array of health info items, the element keys are the
correspdoning test label

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getMessage()

__

[code]

    getMessage() : string
[/code]

__

#### Returns

string --

response message

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### setExecExitStatus()

__

[code]

    setExecExitStatus(\Healthsvc\string   $label, \Healthsvc\int  $exit_status) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
\Healthsvc\int | $exit_status  |  
  
# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### setHealthFailure()

__

[code]

    setHealthFailure(\Healthsvc\string   $label, \Healthsvc\InfoItem  $health_failure) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
\Healthsvc\InfoItem | $health_failure  |  
  
# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### setHealthWarn()

__

[code]

    setHealthWarn(\Healthsvc\string   $label, \Healthsvc\InfoItem  $health_warn) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
\Healthsvc\InfoItem | $health_warn  |  
  
# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasAllHealthSuccess()

__

[code]

    hasAllHealthSuccess() 
[/code]

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasAnyHealthFailure()

__

[code]

    hasAnyHealthFailure() 
[/code]

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasAnyHealthWarn()

__

[code]

    hasAnyHealthWarn() 
[/code]

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasExecExitStatus()

__

[code]

    hasExecExitStatus(\Healthsvc\string   $label) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
  
# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasHealthFailure()

__

[code]

    hasHealthFailure(\Healthsvc\string   $label) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
  
# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### moveHealthFailureToWarn()

__

[code]

    moveHealthFailureToWarn(\Healthsvc\string   $label) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
  
# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### setHealthSuccess()

__

[code]

    setHealthSuccess(\Healthsvc\string   $label, \Healthsvc\InfoItem  $success_info = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
\Healthsvc\InfoItem | $success_info  |  
  
# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\int   $healthStatusTtl, \Healthsvc\string  $healthStatusTime = null, \Healthsvc\string  $hostname = "") 
[/code]

__

#### Parameters

\Healthsvc\int | $healthStatusTtl  |  
---|---|---  
\Healthsvc\string | $healthStatusTime  |  
\Healthsvc\string | $hostname  |  
  
# __

## Tags

_None found_  
---  
  
### jsonSerialize()

__

[code]

    jsonSerialize() 
[/code]

_Part of the JsonSerializable interface_

# __

Inherited from

    

\Healthsvc\SerializableData

See also

    \JsonSerializable

## Tags

_None found_  
---  
  
### toSerializedArray()

__

[code]

    toSerializedArray() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

[code]

    toArray() : array
[/code]

_Provides an assoc array corresponding to this response data item_

#### Returns

array

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getHostname()

__

[code]

    getHostname() : string
[/code]

__

#### Returns

string --

string reported hostname

# __

## Tags

_None found_  
---  
  
### refreshMessage()

__

[code]

    refreshMessage() 
[/code]

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

[code]

    getSerializableProperties() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

[code]

    getSerializableValues() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

[code]

    toSnakeCase(\Healthsvc\string   $input) 
[/code]

__

#### Parameters

\Healthsvc\string | $input  |  
---|---|---  
  
# __

static final

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
×

### HostSanityStatusData.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcInfoItem

__

## Summary

Methods Properties Constants jsonSerialize()  
toSerializedArray()  
toArray()  
_No public properties found_ PROPERTIES_TO_SNAKE_CASE  
getSerializableProperties()  
getSerializableValues()  
toSnakeCase()  
_No protected properties found_ _N/A_ _No private methods found_ _No private
properties found_ _N/A_

abstract

File

    

InfoItem.php

Package

    

Default

Class hierarchy

    

\Healthsvc\SerializableData

\Healthsvc\InfoItem

## Tags

_None found_  
---  
  
## Constants

### PROPERTIES_TO_SNAKE_CASE

[code]

    PROPERTIES_TO_SNAKE_CASE
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Methods

### jsonSerialize()

__

[code]

    jsonSerialize() 
[/code]

_Part of the JsonSerializable interface_

# __

Inherited from

    

\Healthsvc\SerializableData

See also

    \JsonSerializable

## Tags

_None found_  
---  
  
### toSerializedArray()

__

[code]

    toSerializedArray() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

[code]

    toArray() : array
[/code]

_Provides an assoc array corresponding to this response data item_

#### Returns

array

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

[code]

    getSerializableProperties() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

[code]

    getSerializableValues() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

[code]

    toSnakeCase(\Healthsvc\string   $input) 
[/code]

__

#### Parameters

\Healthsvc\string | $input  |  
---|---|---  
  
# __

static final

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
×

### InfoItem.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcRequest

__

## Summary

Methods Properties Constants getRequestBody()  
getContentType()  
isRequestMethodAllowed()  
getRequestQuery()  
getRequestMethod()  
__construct()  
_No public properties found_ _No constants found_ getRequestData()  
setRequestBody()  
_No protected properties found_ _N/A_ _No private methods found_ $requestBody  
$contentType  
$requestData  
$requestMethod  
$requestQuery  
_N/A_

abstract

File

    

Request.php

Package

    

Default

Class hierarchy

    

\Healthsvc\Request

Uses traits

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
## Properties

### $requestBody

[code]

    $requestBody : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $contentType

[code]

    $contentType : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $requestData

[code]

    $requestData : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $requestMethod

[code]

    $requestMethod : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
### $requestQuery

[code]

    $requestQuery : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getRequestBody()

__

[code]

    getRequestBody() 
[/code]

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### getContentType()

__

[code]

    getContentType() 
[/code]

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### isRequestMethodAllowed()

__

[code]

    isRequestMethodAllowed() 
[/code]

__

# __

abstract

## Tags

_None found_  
---  
  
### getRequestQuery()

__

[code]

    getRequestQuery() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getRequestMethod()

__

[code]

    getRequestMethod() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\string   $request_method = null, array  $request_query = null, \Healthsvc\string  $request_body = null, \Healthsvc\string  $content_type = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $request_method  |  
---|---|---  
array | $request_query  |  
\Healthsvc\string | $request_body  |  
\Healthsvc\string | $content_type  |  
  
#### Throws

\Healthsvc\RequestMethodNotAllowedException

    

# __

## Tags

_None found_  
---  
  
### getRequestData()

__

[code]

    getRequestData() 
[/code]

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### setRequestBody()

__

[code]

    setRequestBody(\Healthsvc\string   $request_body = null, \Healthsvc\string  $content_type = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $request_body  |  
---|---|---  
\Healthsvc\string | $content_type  |  
  
# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
×

### Request.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcRequestBodyParserTrait

__

## Summary

Methods Properties Constants getRequestBody()  
getContentType()  
_No public properties found_ _No constants found_ getRequestData()  
setRequestBody()  
_No protected properties found_ _N/A_ _No private methods found_ $requestBody  
$contentType  
$requestData  
_N/A_

File

    

RequestBodyParserTrait.php

Package

    

Default

Class hierarchy

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
## Properties

### $requestBody

[code]

    $requestBody : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
### $contentType

[code]

    $contentType : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
### $requestData

[code]

    $requestData : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getRequestBody()

__

[code]

    getRequestBody() 
[/code]

__

# __

File

    

RequestBodyParserTrait.php

## Tags

_None found_  
---  
  
### getContentType()

__

[code]

    getContentType() 
[/code]

__

# __

File

    

RequestBodyParserTrait.php

## Tags

_None found_  
---  
  
### getRequestData()

__

[code]

    getRequestData() 
[/code]

__

# __

File

    

RequestBodyParserTrait.php

## Tags

_None found_  
---  
  
### setRequestBody()

__

[code]

    setRequestBody(\Healthsvc\string   $request_body = null, \Healthsvc\string  $content_type = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $request_body  |  
---|---|---  
\Healthsvc\string | $content_type  |  
  
# __

File

    

RequestBodyParserTrait.php

## Tags

_None found_  
---  
  
×

### RequestBodyParserTrait.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcRequestMethodNotAllowedException

__

## Summary

Methods Properties Constants printResponseBody()  
getResponseCode()  
getContentType()  
getResponseBody()  
getRequestMethod()  
__construct()  
_No public properties found_ RESPONSE_CODE  
CONTENT_TYPE  
_No protected methods found_ _No protected properties found_ _N/A_ _No private
methods found_ $requestMethod  
_N/A_

File

    

RequestMethodNotAllowedException.php

Package

    

Default

Class hierarchy

    

\RuntimeException

\Healthsvc\ResponseException

\Healthsvc\RequestMethodNotAllowedException

## Tags

_None found_  
---  
  
## Constants

### RESPONSE_CODE

[code]

    RESPONSE_CODE
[/code]

__

# __

## Tags

_None found_  
---  
  
### CONTENT_TYPE

[code]

    CONTENT_TYPE
[/code]

__

# __

## Tags

_None found_  
---  
  
## Properties

### $requestMethod

[code]

    $requestMethod : string
[/code]

__

#### Type

string -- request method

# __

## Tags

_None found_  
---  
  
## Methods

### printResponseBody()

__

[code]

    printResponseBody(\Healthsvc\bool   $send_headers = true) 
[/code]

__

#### Parameters

\Healthsvc\bool | $send_headers  |  
---|---|---  
  
# __

final

Inherited from

    

\Healthsvc\ResponseException

## Tags

_None found_  
---  
  
### getResponseCode()

__

[code]

    getResponseCode() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getContentType()

__

[code]

    getContentType() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getResponseBody()

__

[code]

    getResponseBody() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getRequestMethod()

__

[code]

    getRequestMethod() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\string   $request_method) 
[/code]

__

#### Parameters

\Healthsvc\string | $request_method  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
×

### RequestMethodNotAllowedException.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcRequestResponseController

__

## Summary

Methods Properties Constants __construct()  
getRequest()  
getResponse()  
_No public properties found_ _No constants found_ getConfig()  
setConfigFile()  
_No protected properties found_ _N/A_ _No private methods found_ $config  
_N/A_

abstract

File

    

RequestResponseController.php

Package

    

Default

Class hierarchy

    

\Healthsvc\RequestResponseController

Implements

    

\Healthsvc\ResponseBodyPrinterInterface

Uses traits

    

\Healthsvc\ConfigFileReaderTrait

## Tags

_None found_  
---  
  
## Properties

### $config

[code]

    $config : 
[/code]

__

#### Type

# __

Inherited from

    

\Healthsvc\ConfigFileReaderTrait

## Tags

_None found_  
---  
  
## Methods

### __construct()

__

[code]

    __construct(\Healthsvc\string   $config_file = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $config_file  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
### getRequest()

__

[code]

    getRequest() 
[/code]

__

# __

abstract

## Tags

_None found_  
---  
  
### getResponse()

__

[code]

    getResponse() 
[/code]

__

# __

abstract

## Tags

_None found_  
---  
  
### getConfig()

__

[code]

    getConfig() 
[/code]

__

# __

Inherited from

    

\Healthsvc\ConfigFileReaderTrait

## Tags

_None found_  
---  
  
### setConfigFile()

__

[code]

    setConfigFile(\Healthsvc\string   $config_file = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $config_file  |  
---|---|---  
  
# __

Inherited from

    

\Healthsvc\ConfigFileReaderTrait

## Tags

_None found_  
---  
  
×

### RequestResponseController.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcResponse

__

## Summary

Methods Properties Constants getResponseCode()  
hasResponseData()  
getResponseData()  
getContentType()  
getResponseBody()  
printResponseBody()  
_No public properties found_ JSON_CONTENT_TYPE  
setResponseBody()  
setResponseData()  
_No protected properties found_ _N/A_ _No private methods found_
$hasResponseData  
$responseData  
$responseBody  
$contentType  
$responseCode  
_N/A_

abstract

File

    

Response.php

Package

    

Default

Class hierarchy

    

\Healthsvc\Response

Implements

    

\Healthsvc\ResponseInterface

## Tags

_None found_  
---  
  
## Constants

### JSON_CONTENT_TYPE

[code]

    JSON_CONTENT_TYPE
[/code]

__

# __

## Tags

_None found_  
---  
  
## Properties

### $hasResponseData

[code]

    $hasResponseData : boolean
[/code]

__

#### Type

boolean -- true if the response body corresponds to response data, otherwise
<b>bool</b> false

# __

## Tags

private  |  
---|---  
  
### $responseData

[code]

    $responseData : array
[/code]

__

#### Type

array -- response data corresponding to the response body

# __

## Tags

private  |  
---|---  
  
### $responseBody

[code]

    $responseBody : string
[/code]

__

#### Type

string -- response body

# __

## Tags

private  |  
---|---  
  
### $contentType

[code]

    $contentType : string
[/code]

__

#### Type

string -- response content type

# __

## Tags

private  |  
---|---  
  
### $responseCode

[code]

    $responseCode : integer
[/code]

__

#### Type

integer -- HTTP response code

# __

## Tags

private  |  
---|---  
  
## Methods

### getResponseCode()

__

[code]

    getResponseCode() : integer
[/code]

__

#### Returns

integer --

HTTP response code

# __

final

## Tags

_None found_  
---  
  
### hasResponseData()

__

[code]

    hasResponseData() : boolean
[/code]

__

#### Returns

boolean --

true if the response body corresponds to response data, otherwise **bool**
false

# __

final

## Tags

_None found_  
---  
  
### getResponseData()

__

[code]

    getResponseData() : array
[/code]

__

#### Returns

array --

response data corresponding to the response body

# __

final

## Tags

_None found_  
---  
  
### getContentType()

__

[code]

    getContentType() : string
[/code]

__

#### Returns

string --

response content type

# __

final

## Tags

_None found_  
---  
  
### getResponseBody()

__

[code]

    getResponseBody() : string
[/code]

__

#### Returns

string --

response body

# __

final

## Tags

_None found_  
---  
  
### printResponseBody()

__

[code]

    printResponseBody(boolean   $send_headers = true) : void
[/code]

_Prints the response body. Additionaly sends the appropriate HTTP headers
unless <b>$send_headers</b> is <i>false</i>._

#### Parameters

boolean | $send_headers  |

Optionally set to _false_ to suppress sending HTTP headers.  
  
---|---|---  
  
# __

final

## Tags

_None found_  
---  
  
### setResponseBody()

__

[code]

    setResponseBody(\Healthsvc\string   $response_body, \Healthsvc\string  $content_type, \Healthsvc\int  $response_code = 200) 
[/code]

__

#### Parameters

\Healthsvc\string | $response_body  |  
---|---|---  
\Healthsvc\string | $content_type  |  
\Healthsvc\int | $response_code  |  
  
# __

final

## Tags

_None found_  
---  
  
### setResponseData()

__

[code]

    setResponseData(array   $response_data, \Healthsvc\int  $response_code = 200) 
[/code]

__

#### Parameters

array | $response_data  |  
---|---|---  
\Healthsvc\int | $response_code  |  
  
# __

final

## Tags

_None found_  
---  
  
×

### Response.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __

#  \HealthsvcResponseBodyPrinterInterface

__

## Summary

Methods Constants printResponseBody()  
_No constants found_ _No protected methods found_ _N/A_ _No private methods
found_ _N/A_

File

    

ResponseBodyPrinterInterface.php

Package

    

\Default

## Tags

_None found_  
---  
  
## Methods

### printResponseBody()

__

[code]

    printResponseBody(\Healthsvc\bool   $send_headers = true) 
[/code]

__

#### Parameters

\Healthsvc\bool | $send_headers  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
×

### ResponseBodyPrinterInterface.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcResponseDataInvalidException

__

## Summary

Methods Properties Constants getReason()  
__construct()  
_No public properties found_ _No constants found_ _No protected methods found_
_No protected properties found_ _N/A_ _No private methods found_ $reason  
_N/A_

File

    

ResponseDataInvalidException.php

Package

    

Default

Class hierarchy

    

\RuntimeException

\Healthsvc\ResponseDataInvalidException

## Tags

_None found_  
---  
  
## Properties

### $reason

[code]

    $reason : 
[/code]

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getReason()

__

[code]

    getReason() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\string   $reason) 
[/code]

__

#### Parameters

\Healthsvc\string | $reason  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
×

### ResponseDataInvalidException.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcResponseException

__

## Summary

Methods Properties Constants printResponseBody()  
_No public properties found_ _No constants found_ _No protected methods found_
_No protected properties found_ _N/A_ _No private methods found_ _No private
properties found_ _N/A_

abstract

File

    

ResponseException.php

Package

    

Default

Class hierarchy

    

\RuntimeException

\Healthsvc\ResponseException

Implements

    

\Healthsvc\ResponseInterface

## Tags

_None found_  
---  
  
## Methods

### printResponseBody()

__

[code]

    printResponseBody(\Healthsvc\bool   $send_headers = true) 
[/code]

__

#### Parameters

\Healthsvc\bool | $send_headers  |  
---|---|---  
  
# __

final

## Tags

_None found_  
---  
  
×

### ResponseException.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __

#  \HealthsvcResponseInterface

__

## Summary

Methods Constants printResponseBody()  
getResponseCode()  
getContentType()  
getResponseBody()  
_No constants found_ _No protected methods found_ _N/A_ _No private methods
found_ _N/A_

File

    

ResponseInterface.php

Package

    

\Default

Parents

    

\Healthsvc\ResponseBodyPrinterInterface

## Tags

_None found_  
---  
  
## Methods

### printResponseBody()

__

[code]

    printResponseBody(\Healthsvc\bool   $send_headers = true) 
[/code]

__

#### Parameters

\Healthsvc\bool | $send_headers  |  
---|---|---  
  
# __

Inherited from

    

\Healthsvc\ResponseBodyPrinterInterface

## Tags

_None found_  
---  
  
### getResponseCode()

__

[code]

    getResponseCode() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getContentType()

__

[code]

    getContentType() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getResponseBody()

__

[code]

    getResponseBody() 
[/code]

__

# __

## Tags

_None found_  
---  
  
×

### ResponseInterface.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcSerializableData

__

## Summary

Methods Properties Constants jsonSerialize()  
toSerializedArray()  
toArray()  
_No public properties found_ PROPERTIES_TO_SNAKE_CASE  
getSerializableProperties()  
getSerializableValues()  
toSnakeCase()  
_No protected properties found_ _N/A_ _No private methods found_ _No private
properties found_ _N/A_

abstract

File

    

SerializableData.php

Package

    

Default

Class hierarchy

    

\Healthsvc\SerializableData

Implements

    

## Tags

_None found_  
---  
  
## Constants

### PROPERTIES_TO_SNAKE_CASE

[code]

    PROPERTIES_TO_SNAKE_CASE
[/code]

__

# __

## Tags

_None found_  
---  
  
## Methods

### jsonSerialize()

__

[code]

    jsonSerialize() 
[/code]

_Part of the JsonSerializable interface_

# __

See also

    \JsonSerializable

## Tags

_None found_  
---  
  
### toSerializedArray()

__

[code]

    toSerializedArray() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### toArray()

__

[code]

    toArray() : array
[/code]

_Provides an assoc array corresponding to this response data item_

#### Returns

array

# __

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

[code]

    getSerializableProperties() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getSerializableValues()

__

[code]

    getSerializableValues() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### toSnakeCase()

__

[code]

    toSnakeCase(\Healthsvc\string   $input) 
[/code]

__

#### Parameters

\Healthsvc\string | $input  |  
---|---|---  
  
# __

static final

## Tags

_None found_  
---  
  
×

### SerializableData.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __ __

#  \HealthsvcStatusData

__

## Summary

Methods Properties Constants jsonSerialize()  
toSerializedArray()  
toArray()  
hasNoTests()  
hasAnyTest()  
getHealthStatusTime()  
getHealthStatusTtl()  
getHealthInfo()  
getExecExitStatus()  
getHealthSuccess()  
getHealthWarn()  
getHealthFailure()  
getMessage()  
setExecExitStatus()  
setHealthFailure()  
setHealthWarn()  
hasAllHealthSuccess()  
hasAnyHealthFailure()  
hasAnyHealthWarn()  
hasExecExitStatus()  
hasHealthFailure()  
moveHealthFailureToWarn()  
setHealthSuccess()  
__construct()  
_No public properties found_ PROPERTIES_TO_SNAKE_CASE  
getSerializableProperties()  
getSerializableValues()  
toSnakeCase()  
refreshMessage()  
$message  
$healthStatusTime  
$healthStatusTtl  
$healthInfo  
$execExitStatus  
$healthSuccess  
$healthWarn  
$healthFailure  
_N/A_ _No private methods found_ _No private properties found_ _N/A_

abstract

File

    

StatusData.php

Package

    

Default

Class hierarchy

    

\Healthsvc\SerializableData

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
## Constants

### PROPERTIES_TO_SNAKE_CASE

[code]

    PROPERTIES_TO_SNAKE_CASE
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $message

[code]

    $message : string
[/code]

__

#### Type

string -- response message

# __

## Tags

private  |  
---|---  
  
### $healthStatusTime

[code]

    $healthStatusTime : string
[/code]

__

#### Type

string -- ISO 8601 timestamp of when health status generated

# __

## Tags

private  |  
---|---  
  
### $healthStatusTtl

[code]

    $healthStatusTtl : integer
[/code]

__

#### Type

integer -- health status time to live

# __

## Tags

private  |  
---|---  
  
### $healthInfo

[code]

    $healthInfo : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Type

array<mixed,\Healthsvc\InfoItem> -- test info as assoc array of health info
items, the element keys are the correspdoning test label

# __

## Tags

private  |  
---|---  
  
### $execExitStatus

[code]

    $execExitStatus : array<mixed,integer>
[/code]

__

#### Type

array<mixed,integer> -- exit status codes as assoc array of exit status codes,
the element keys are the correspdoning test label

# __

## Tags

private  |  
---|---  
  
### $healthSuccess

[code]

    $healthSuccess : array<mixed,string>
[/code]

__

#### Type

array<mixed,string> -- array containing the label of every successful test

# __

## Tags

private  |  
---|---  
  
### $healthWarn

[code]

    $healthWarn : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Type

array<mixed,\Healthsvc\InfoItem> -- health warnings as assoc array of health
info items, the element keys are the correspdoning test label

# __

## Tags

private  |  
---|---  
  
### $healthFailure

[code]

    $healthFailure : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Type

array<mixed,\Healthsvc\InfoItem> -- health failures as assoc array of health
info items, the element keys are the correspdoning test label

# __

## Tags

private  |  
---|---  
  
## Methods

### jsonSerialize()

__

[code]

    jsonSerialize() 
[/code]

_Part of the JsonSerializable interface_

# __

Inherited from

    

\Healthsvc\SerializableData

See also

    \JsonSerializable

## Tags

_None found_  
---  
  
### toSerializedArray()

__

[code]

    toSerializedArray() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

[code]

    toArray() : array
[/code]

_Provides an assoc array corresponding to this response data item_

#### Returns

array

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### hasNoTests()

__

[code]

    hasNoTests() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### hasAnyTest()

__

[code]

    hasAnyTest() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### getHealthStatusTime()

__

[code]

    getHealthStatusTime() : string
[/code]

__

#### Returns

string --

ISO 8601 timestamp of when health status generated

# __

## Tags

_None found_  
---  
  
### getHealthStatusTtl()

__

[code]

    getHealthStatusTtl() : integer
[/code]

__

#### Returns

integer --

health status time to live

# __

## Tags

_None found_  
---  
  
### getHealthInfo()

__

[code]

    getHealthInfo() : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Returns

array<mixed,\Healthsvc\InfoItem> --

test info as assoc array of health info items, the element keys are the
correspdoning test label

# __

## Tags

_None found_  
---  
  
### getExecExitStatus()

__

[code]

    getExecExitStatus() : array<mixed,integer>
[/code]

__

#### Returns

array<mixed,integer> --

exit status codes as assoc array of exit status codes, the element keys are
the correspdoning test label

# __

## Tags

_None found_  
---  
  
### getHealthSuccess()

__

[code]

    getHealthSuccess() : array<mixed,string>
[/code]

__

#### Returns

array<mixed,string> --

array containing the label of every successful test

# __

## Tags

_None found_  
---  
  
### getHealthWarn()

__

[code]

    getHealthWarn() : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Returns

array<mixed,\Healthsvc\InfoItem> --

health warnings as assoc array of health info items, the element keys are the
correspdoning test label

# __

## Tags

_None found_  
---  
  
### getHealthFailure()

__

[code]

    getHealthFailure() : array<mixed,\Healthsvc\InfoItem>
[/code]

__

#### Returns

array<mixed,\Healthsvc\InfoItem> --

health failures as assoc array of health info items, the element keys are the
correspdoning test label

# __

## Tags

_None found_  
---  
  
### getMessage()

__

[code]

    getMessage() : string
[/code]

__

#### Returns

string --

response message

# __

## Tags

_None found_  
---  
  
### setExecExitStatus()

__

[code]

    setExecExitStatus(\Healthsvc\string   $label, \Healthsvc\int  $exit_status) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
\Healthsvc\int | $exit_status  |  
  
# __

## Tags

_None found_  
---  
  
### setHealthFailure()

__

[code]

    setHealthFailure(\Healthsvc\string   $label, \Healthsvc\InfoItem  $health_failure) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
\Healthsvc\InfoItem | $health_failure  |  
  
# __

## Tags

_None found_  
---  
  
### setHealthWarn()

__

[code]

    setHealthWarn(\Healthsvc\string   $label, \Healthsvc\InfoItem  $health_warn) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
\Healthsvc\InfoItem | $health_warn  |  
  
# __

## Tags

_None found_  
---  
  
### hasAllHealthSuccess()

__

[code]

    hasAllHealthSuccess() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### hasAnyHealthFailure()

__

[code]

    hasAnyHealthFailure() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### hasAnyHealthWarn()

__

[code]

    hasAnyHealthWarn() 
[/code]

__

# __

## Tags

_None found_  
---  
  
### hasExecExitStatus()

__

[code]

    hasExecExitStatus(\Healthsvc\string   $label) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
### hasHealthFailure()

__

[code]

    hasHealthFailure(\Healthsvc\string   $label) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
### moveHealthFailureToWarn()

__

[code]

    moveHealthFailureToWarn(\Healthsvc\string   $label) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
  
# __

## Tags

_None found_  
---  
  
### setHealthSuccess()

__

[code]

    setHealthSuccess(\Healthsvc\string   $label, \Healthsvc\InfoItem  $success_info = null) 
[/code]

__

#### Parameters

\Healthsvc\string | $label  |  
---|---|---  
\Healthsvc\InfoItem | $success_info  |  
  
# __

## Tags

_None found_  
---  
  
### __construct()

__

[code]

    __construct(\Healthsvc\int   $health_staus_ttl, \Healthsvc\string  $health_status_time = null) 
[/code]

__

#### Parameters

\Healthsvc\int | $health_staus_ttl  |  
---|---|---  
\Healthsvc\string | $health_status_time  |  
  
# __

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

[code]

    getSerializableProperties() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

[code]

    getSerializableValues() 
[/code]

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

[code]

    toSnakeCase(\Healthsvc\string   $input) 
[/code]

__

#### Parameters

\Healthsvc\string | $input  |  
---|---|---  
  
# __

static final

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### refreshMessage()

__

[code]

    refreshMessage() 
[/code]

__

# __

## Tags

_None found_  
---  
  
×

### StatusData.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

__ API Documentation

  * API Documentation ****
    * \Healthsvc
  * Charts ****
    * __ Class hierarchy diagram 
  * Reports ****
    * __ Errors 207
    * __ Markers 0
    * __ Deprecated 0

\

Healthsvc

  * ResponseBodyPrinterInterface
  * ResponseInterface
  * StatusDataProviderInterface
  * ConfigFileReaderTrait
  * RequestBodyParserTrait
  * CommandErrorInfoItem
  * CommandInfoItem
  * ConfigController
  * ErrorInfoItem
  * HostSanityBinDirNotExistException
  * HostSanityConfig
  * HostSanityController
  * HostSanityRequest
  * HostSanityRequestResponseController
  * HostSanityResponse
  * HostSanityStatusData
  * InfoItem
  * Request
  * RequestMethodNotAllowedException
  * RequestResponseController
  * Response
  * ResponseDataInvalidException
  * ResponseException
  * SerializableData
  * StatusData

\Healthsvc __

#  \HealthsvcStatusDataProviderInterface

__

## Summary

Methods Constants getStatusData()  
_No constants found_ _No protected methods found_ _N/A_ _No private methods
found_ _N/A_

File

    

StatusDataProviderInterface.php

Package

    

\Default

## Tags

_None found_  
---  
  
## Methods

### getStatusData()

__

[code]

    getStatusData() 
[/code]

__

# __

## Tags

_None found_  
---  
  
×

### StatusDataProviderInterface.php

[/code]

[code]

# __

  * \Healthsvc

# __

  * Class Hierarchy Diagram

# __

  * Errors
  * Markers

* * *

Documentation is powered by phpDocumentor  and authored on December 7th, 2018
at 05:29.

