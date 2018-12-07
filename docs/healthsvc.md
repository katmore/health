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

    
    
    PROPERTIES_TO_SNAKE_CASE

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $stdout

    
    
    $stdout : 

__

#### Type

# __

Inherited from

    

\Healthsvc\CommandInfoItem

## Tags

_None found_  
---  
  
### $stderr

    
    
    $stderr : 

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getStdout()

__

    
    
    getStdout() 

__

# __

Inherited from

    

\Healthsvc\CommandInfoItem

## Tags

_None found_  
---  
  
### __construct()

__

    
    
    __construct(\Healthsvc\string   $stdout, \Healthsvc\string  $stderr) 

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

    
    
    jsonSerialize() 

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

    
    
    toSerializedArray() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

    
    
    toArray() : array

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

    
    
    getStderr() 

__

# __

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

    
    
    getSerializableProperties() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

    
    
    getSerializableValues() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

    
    
    toSnakeCase(\Healthsvc\string   $input) 

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

    
    
    PROPERTIES_TO_SNAKE_CASE

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $stdout

    
    
    $stdout : 

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### jsonSerialize()

__

    
    
    jsonSerialize() 

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

    
    
    toSerializedArray() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

    
    
    toArray() : array

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

    
    
    getStdout() 

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

    
    
    __construct(\Healthsvc\string   $stdout) 

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

    
    
    getSerializableProperties() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

    
    
    getSerializableValues() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

    
    
    toSnakeCase(\Healthsvc\string   $input) 

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

    
    
    $config : array

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

    
    
    __construct(array   $config = null) 

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

    
    
    getConfigVal(\Healthsvc\string   $key) 

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

    
    
    $config : 

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getConfig()

__

    
    
    getConfig() 

__

# __

File

    

ConfigFileReaderTrait.php

## Tags

_None found_  
---  
  
### setConfigFile()

__

    
    
    setConfigFile(\Healthsvc\string   $config_file = null) 

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

    
    
    PROPERTIES_TO_SNAKE_CASE

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $message

    
    
    $message : 

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### jsonSerialize()

__

    
    
    jsonSerialize() 

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

    
    
    toSerializedArray() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

    
    
    toArray() : array

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

    
    
    getMessage() 

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

    
    
    __construct(\Healthsvc\string   $message) 

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

    
    
    getSerializableProperties() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

    
    
    getSerializableValues() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

    
    
    toSnakeCase(\Healthsvc\string   $input) 

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

    
    
    $binDir : 

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getBinDir()

__

    
    
    getBinDir() 

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

    
    
    __construct(\Healthsvc\string   $bin_dir) 

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

    
    
    DEFAULT_BIN_DIR

__

# __

## Tags

_None found_  
---  
  
## Properties

### $config

    
    
    $config : array

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

    
    
    __construct(array   $config = null) 

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

    
    
    getExec() 

__

# __

## Tags

_None found_  
---  
  
### getWarnExitStatus()

__

    
    
    getWarnExitStatus() 

__

# __

## Tags

_None found_  
---  
  
### getBin()

__

    
    
    getBin() 

__

# __

## Tags

_None found_  
---  
  
### getBinDir()

__

    
    
    getBinDir() 

__

# __

## Tags

_None found_  
---  
  
### getConfigVal()

__

    
    
    getConfigVal(\Healthsvc\string   $key) 

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

    
    
    $statusData : \Healthsvc\HostSanityStatusData

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

    
    
    getStatusData() : \Healthsvc\HostSanityStatusData

__

#### Returns

\Healthsvc\HostSanityStatusData

# __

## Tags

_None found_  
---  
  
### __construct()

__

    
    
    __construct(array   $exec, array  $warn_exit_status, array  $bin, \Healthsvc\string  $bin_dir) 

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

    
    
    exec(\Healthsvc\string   $cmd,   $stdout = "",   $stderr = "") 

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

    
    
    ALLOWED_METHODS

__

# __

## Tags

_None found_  
---  
  
## Properties

### $requestMethod

    
    
    $requestMethod : 

__

#### Type

# __

Inherited from

    

\Healthsvc\Request

## Tags

_None found_  
---  
  
### $requestQuery

    
    
    $requestQuery : 

__

#### Type

# __

Inherited from

    

\Healthsvc\Request

## Tags

_None found_  
---  
  
### $requestBody

    
    
    $requestBody : 

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $contentType

    
    
    $contentType : 

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $requestData

    
    
    $requestData : 

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

    
    
    isRequestMethodAllowed() 

__

# __

## Tags

_None found_  
---  
  
### getRequestQuery()

__

    
    
    getRequestQuery() 

__

# __

Inherited from

    

\Healthsvc\Request

## Tags

_None found_  
---  
  
### getRequestMethod()

__

    
    
    getRequestMethod() 

__

# __

Inherited from

    

\Healthsvc\Request

## Tags

_None found_  
---  
  
### __construct()

__

    
    
    __construct(\Healthsvc\string   $request_method = null, array  $request_query = null, \Healthsvc\string  $request_body = null, \Healthsvc\string  $content_type = null) 

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

    
    
    getRequestBody() 

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### getContentType()

__

    
    
    getContentType() 

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### getRequestData()

__

    
    
    getRequestData() 

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### setRequestBody()

__

    
    
    setRequestBody(\Healthsvc\string   $request_body = null, \Healthsvc\string  $content_type = null) 

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

    
    
    $config : \Healthsvc\HostSanityConfig

__

#### Type

\Healthsvc\HostSanityConfig

# __

## Tags

_None found_  
---  
  
### $requestMethod

    
    
    $requestMethod : 

__

#### Type

# __

## Tags

_None found_  
---  
  
### $requestQuery

    
    
    $requestQuery : 

__

#### Type

# __

## Tags

_None found_  
---  
  
### $requestBody

    
    
    $requestBody : 

__

#### Type

# __

## Tags

_None found_  
---  
  
### $contentType

    
    
    $contentType : 

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### __construct()

__

    
    
    __construct(\Healthsvc\string   $config_file = null, \Healthsvc\string  $request_method = null, array  $request_query = null, \Healthsvc\string  $request_body = null, \Healthsvc\string  $content_type = null) 

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

    
    
    getRequest() 

__

#### Throws

\Healthsvc\RequestMethodNotAllowedException

    

# __

## Tags

_None found_  
---  
  
### getResponse()

__

    
    
    getResponse() 

__

#### Throws

\Healthsvc\RequestMethodNotAllowedException

    

# __

## Tags

_None found_  
---  
  
### printResponseBody()

__

    
    
    printResponseBody(\Healthsvc\bool   $send_headers = true) 

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

    
    
    getConfig() 

__

# __

Inherited from

    

\Healthsvc\ConfigFileReaderTrait

## Tags

_None found_  
---  
  
### setConfigFile()

__

    
    
    setConfigFile(\Healthsvc\string   $config_file = null) 

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

    
    
    JSON_CONTENT_TYPE

__

# __

Inherited from

    

\Healthsvc\Response

## Tags

_None found_  
---  
  
### RESPONSE_CODE_HAS_WARN_NO_FAILURE

    
    
    RESPONSE_CODE_HAS_WARN_NO_FAILURE

__

# __

## Tags

_None found_  
---  
  
### RESPONSE_CODE_HAS_FAILURE

    
    
    RESPONSE_CODE_HAS_FAILURE

__

# __

## Tags

_None found_  
---  
  
### RESPONSE_CODE_HAS_NO_TESTS

    
    
    RESPONSE_CODE_HAS_NO_TESTS

__

# __

## Tags

_None found_  
---  
  
### RESPONSE_CODE_ALL_SUCCESS

    
    
    RESPONSE_CODE_ALL_SUCCESS

__

# __

## Tags

_None found_  
---  
  
## Properties

### $hasResponseData

    
    
    $hasResponseData : boolean

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

    
    
    $responseData : array

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

    
    
    $responseBody : string

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

    
    
    $contentType : string

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

    
    
    $responseCode : integer

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

    
    
    getResponseCode() : integer

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

    
    
    hasResponseData() : boolean

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

    
    
    getResponseData() : array

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

    
    
    getContentType() : string

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

    
    
    getResponseBody() : string

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

    
    
    printResponseBody(boolean   $send_headers = true) : void

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

    
    
    __construct(\Healthsvc\HostSanityStatusData   $status) 

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

    
    
    setResponseBody(\Healthsvc\string   $response_body, \Healthsvc\string  $content_type, \Healthsvc\int  $response_code = 200) 

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

    
    
    setResponseData(array   $response_data, \Healthsvc\int  $response_code = 200) 

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

    
    
    PROPERTIES_TO_SNAKE_CASE

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $message

    
    
    $message : string

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

    
    
    $healthStatusTime : string

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

    
    
    $healthStatusTtl : integer

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

    
    
    $healthInfo : array<mixed,\Healthsvc\InfoItem>

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

    
    
    $execExitStatus : array<mixed,integer>

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

    
    
    $healthSuccess : array<mixed,string>

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

    
    
    $healthWarn : array<mixed,\Healthsvc\InfoItem>

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

    
    
    $healthFailure : array<mixed,\Healthsvc\InfoItem>

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

    
    
    $hostname : string

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

    
    
    hasNoTests() 

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasAnyTest()

__

    
    
    hasAnyTest() 

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getHealthStatusTime()

__

    
    
    getHealthStatusTime() : string

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

    
    
    getHealthStatusTtl() : integer

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

    
    
    getHealthInfo() : array<mixed,\Healthsvc\InfoItem>

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

    
    
    getExecExitStatus() : array<mixed,integer>

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

    
    
    getHealthSuccess() : array<mixed,string>

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

    
    
    getHealthWarn() : array<mixed,\Healthsvc\InfoItem>

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

    
    
    getHealthFailure() : array<mixed,\Healthsvc\InfoItem>

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

    
    
    getMessage() : string

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

    
    
    setExecExitStatus(\Healthsvc\string   $label, \Healthsvc\int  $exit_status) 

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

    
    
    setHealthFailure(\Healthsvc\string   $label, \Healthsvc\InfoItem  $health_failure) 

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

    
    
    setHealthWarn(\Healthsvc\string   $label, \Healthsvc\InfoItem  $health_warn) 

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

    
    
    hasAllHealthSuccess() 

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasAnyHealthFailure()

__

    
    
    hasAnyHealthFailure() 

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasAnyHealthWarn()

__

    
    
    hasAnyHealthWarn() 

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### hasExecExitStatus()

__

    
    
    hasExecExitStatus(\Healthsvc\string   $label) 

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

    
    
    hasHealthFailure(\Healthsvc\string   $label) 

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

    
    
    moveHealthFailureToWarn(\Healthsvc\string   $label) 

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

    
    
    setHealthSuccess(\Healthsvc\string   $label, \Healthsvc\InfoItem  $success_info = null) 

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

    
    
    __construct(\Healthsvc\int   $healthStatusTtl, \Healthsvc\string  $healthStatusTime = null, \Healthsvc\string  $hostname = "") 

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

    
    
    jsonSerialize() 

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

    
    
    toSerializedArray() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

    
    
    toArray() : array

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

    
    
    getHostname() : string

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

    
    
    refreshMessage() 

__

# __

Inherited from

    

\Healthsvc\StatusData

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

    
    
    getSerializableProperties() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

    
    
    getSerializableValues() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

    
    
    toSnakeCase(\Healthsvc\string   $input) 

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

    
    
    PROPERTIES_TO_SNAKE_CASE

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

    
    
    jsonSerialize() 

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

    
    
    toSerializedArray() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

    
    
    toArray() : array

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

    
    
    getSerializableProperties() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

    
    
    getSerializableValues() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

    
    
    toSnakeCase(\Healthsvc\string   $input) 

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

    
    
    $requestBody : 

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $contentType

    
    
    $contentType : 

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $requestData

    
    
    $requestData : 

__

#### Type

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### $requestMethod

    
    
    $requestMethod : 

__

#### Type

# __

## Tags

_None found_  
---  
  
### $requestQuery

    
    
    $requestQuery : 

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getRequestBody()

__

    
    
    getRequestBody() 

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### getContentType()

__

    
    
    getContentType() 

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### isRequestMethodAllowed()

__

    
    
    isRequestMethodAllowed() 

__

# __

abstract

## Tags

_None found_  
---  
  
### getRequestQuery()

__

    
    
    getRequestQuery() 

__

# __

## Tags

_None found_  
---  
  
### getRequestMethod()

__

    
    
    getRequestMethod() 

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

    
    
    __construct(\Healthsvc\string   $request_method = null, array  $request_query = null, \Healthsvc\string  $request_body = null, \Healthsvc\string  $content_type = null) 

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

    
    
    getRequestData() 

__

# __

Inherited from

    

\Healthsvc\RequestBodyParserTrait

## Tags

_None found_  
---  
  
### setRequestBody()

__

    
    
    setRequestBody(\Healthsvc\string   $request_body = null, \Healthsvc\string  $content_type = null) 

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

    
    
    $requestBody : 

__

#### Type

# __

## Tags

_None found_  
---  
  
### $contentType

    
    
    $contentType : 

__

#### Type

# __

## Tags

_None found_  
---  
  
### $requestData

    
    
    $requestData : 

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getRequestBody()

__

    
    
    getRequestBody() 

__

# __

File

    

RequestBodyParserTrait.php

## Tags

_None found_  
---  
  
### getContentType()

__

    
    
    getContentType() 

__

# __

File

    

RequestBodyParserTrait.php

## Tags

_None found_  
---  
  
### getRequestData()

__

    
    
    getRequestData() 

__

# __

File

    

RequestBodyParserTrait.php

## Tags

_None found_  
---  
  
### setRequestBody()

__

    
    
    setRequestBody(\Healthsvc\string   $request_body = null, \Healthsvc\string  $content_type = null) 

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

    
    
    RESPONSE_CODE

__

# __

## Tags

_None found_  
---  
  
### CONTENT_TYPE

    
    
    CONTENT_TYPE

__

# __

## Tags

_None found_  
---  
  
## Properties

### $requestMethod

    
    
    $requestMethod : string

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

    
    
    printResponseBody(\Healthsvc\bool   $send_headers = true) 

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

    
    
    getResponseCode() 

__

# __

## Tags

_None found_  
---  
  
### getContentType()

__

    
    
    getContentType() 

__

# __

## Tags

_None found_  
---  
  
### getResponseBody()

__

    
    
    getResponseBody() 

__

# __

## Tags

_None found_  
---  
  
### getRequestMethod()

__

    
    
    getRequestMethod() 

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

    
    
    __construct(\Healthsvc\string   $request_method) 

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

    
    
    $config : 

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

    
    
    __construct(\Healthsvc\string   $config_file = null) 

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

    
    
    getRequest() 

__

# __

abstract

## Tags

_None found_  
---  
  
### getResponse()

__

    
    
    getResponse() 

__

# __

abstract

## Tags

_None found_  
---  
  
### getConfig()

__

    
    
    getConfig() 

__

# __

Inherited from

    

\Healthsvc\ConfigFileReaderTrait

## Tags

_None found_  
---  
  
### setConfigFile()

__

    
    
    setConfigFile(\Healthsvc\string   $config_file = null) 

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

    
    
    JSON_CONTENT_TYPE

__

# __

## Tags

_None found_  
---  
  
## Properties

### $hasResponseData

    
    
    $hasResponseData : boolean

__

#### Type

boolean -- true if the response body corresponds to response data, otherwise
<b>bool</b> false

# __

## Tags

private  |  
---|---  
  
### $responseData

    
    
    $responseData : array

__

#### Type

array -- response data corresponding to the response body

# __

## Tags

private  |  
---|---  
  
### $responseBody

    
    
    $responseBody : string

__

#### Type

string -- response body

# __

## Tags

private  |  
---|---  
  
### $contentType

    
    
    $contentType : string

__

#### Type

string -- response content type

# __

## Tags

private  |  
---|---  
  
### $responseCode

    
    
    $responseCode : integer

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

    
    
    getResponseCode() : integer

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

    
    
    hasResponseData() : boolean

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

    
    
    getResponseData() : array

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

    
    
    getContentType() : string

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

    
    
    getResponseBody() : string

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

    
    
    printResponseBody(boolean   $send_headers = true) : void

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

    
    
    setResponseBody(\Healthsvc\string   $response_body, \Healthsvc\string  $content_type, \Healthsvc\int  $response_code = 200) 

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

    
    
    setResponseData(array   $response_data, \Healthsvc\int  $response_code = 200) 

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

    
    
    printResponseBody(\Healthsvc\bool   $send_headers = true) 

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

    
    
    $reason : 

__

#### Type

# __

## Tags

_None found_  
---  
  
## Methods

### getReason()

__

    
    
    getReason() 

__

# __

## Tags

_None found_  
---  
  
### __construct()

__

    
    
    __construct(\Healthsvc\string   $reason) 

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

    
    
    printResponseBody(\Healthsvc\bool   $send_headers = true) 

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

    
    
    printResponseBody(\Healthsvc\bool   $send_headers = true) 

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

    
    
    getResponseCode() 

__

# __

## Tags

_None found_  
---  
  
### getContentType()

__

    
    
    getContentType() 

__

# __

## Tags

_None found_  
---  
  
### getResponseBody()

__

    
    
    getResponseBody() 

__

# __

## Tags

_None found_  
---  
  
×

### ResponseInterface.php

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

    
    
    PROPERTIES_TO_SNAKE_CASE

__

# __

## Tags

_None found_  
---  
  
## Methods

### jsonSerialize()

__

    
    
    jsonSerialize() 

_Part of the JsonSerializable interface_

# __

See also

    \JsonSerializable

## Tags

_None found_  
---  
  
### toSerializedArray()

__

    
    
    toSerializedArray() 

__

# __

## Tags

_None found_  
---  
  
### toArray()

__

    
    
    toArray() : array

_Provides an assoc array corresponding to this response data item_

#### Returns

array

# __

## Tags

_None found_  
---  
  
### getSerializableProperties()

__

    
    
    getSerializableProperties() 

__

# __

## Tags

_None found_  
---  
  
### getSerializableValues()

__

    
    
    getSerializableValues() 

__

# __

## Tags

_None found_  
---  
  
### toSnakeCase()

__

    
    
    toSnakeCase(\Healthsvc\string   $input) 

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

    
    
    PROPERTIES_TO_SNAKE_CASE

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
## Properties

### $message

    
    
    $message : string

__

#### Type

string -- response message

# __

## Tags

private  |  
---|---  
  
### $healthStatusTime

    
    
    $healthStatusTime : string

__

#### Type

string -- ISO 8601 timestamp of when health status generated

# __

## Tags

private  |  
---|---  
  
### $healthStatusTtl

    
    
    $healthStatusTtl : integer

__

#### Type

integer -- health status time to live

# __

## Tags

private  |  
---|---  
  
### $healthInfo

    
    
    $healthInfo : array<mixed,\Healthsvc\InfoItem>

__

#### Type

array<mixed,\Healthsvc\InfoItem> -- test info as assoc array of health info
items, the element keys are the correspdoning test label

# __

## Tags

private  |  
---|---  
  
### $execExitStatus

    
    
    $execExitStatus : array<mixed,integer>

__

#### Type

array<mixed,integer> -- exit status codes as assoc array of exit status codes,
the element keys are the correspdoning test label

# __

## Tags

private  |  
---|---  
  
### $healthSuccess

    
    
    $healthSuccess : array<mixed,string>

__

#### Type

array<mixed,string> -- array containing the label of every successful test

# __

## Tags

private  |  
---|---  
  
### $healthWarn

    
    
    $healthWarn : array<mixed,\Healthsvc\InfoItem>

__

#### Type

array<mixed,\Healthsvc\InfoItem> -- health warnings as assoc array of health
info items, the element keys are the correspdoning test label

# __

## Tags

private  |  
---|---  
  
### $healthFailure

    
    
    $healthFailure : array<mixed,\Healthsvc\InfoItem>

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

    
    
    jsonSerialize() 

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

    
    
    toSerializedArray() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toArray()

__

    
    
    toArray() : array

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

    
    
    hasNoTests() 

__

# __

## Tags

_None found_  
---  
  
### hasAnyTest()

__

    
    
    hasAnyTest() 

__

# __

## Tags

_None found_  
---  
  
### getHealthStatusTime()

__

    
    
    getHealthStatusTime() : string

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

    
    
    getHealthStatusTtl() : integer

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

    
    
    getHealthInfo() : array<mixed,\Healthsvc\InfoItem>

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

    
    
    getExecExitStatus() : array<mixed,integer>

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

    
    
    getHealthSuccess() : array<mixed,string>

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

    
    
    getHealthWarn() : array<mixed,\Healthsvc\InfoItem>

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

    
    
    getHealthFailure() : array<mixed,\Healthsvc\InfoItem>

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

    
    
    getMessage() : string

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

    
    
    setExecExitStatus(\Healthsvc\string   $label, \Healthsvc\int  $exit_status) 

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

    
    
    setHealthFailure(\Healthsvc\string   $label, \Healthsvc\InfoItem  $health_failure) 

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

    
    
    setHealthWarn(\Healthsvc\string   $label, \Healthsvc\InfoItem  $health_warn) 

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

    
    
    hasAllHealthSuccess() 

__

# __

## Tags

_None found_  
---  
  
### hasAnyHealthFailure()

__

    
    
    hasAnyHealthFailure() 

__

# __

## Tags

_None found_  
---  
  
### hasAnyHealthWarn()

__

    
    
    hasAnyHealthWarn() 

__

# __

## Tags

_None found_  
---  
  
### hasExecExitStatus()

__

    
    
    hasExecExitStatus(\Healthsvc\string   $label) 

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

    
    
    hasHealthFailure(\Healthsvc\string   $label) 

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

    
    
    moveHealthFailureToWarn(\Healthsvc\string   $label) 

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

    
    
    setHealthSuccess(\Healthsvc\string   $label, \Healthsvc\InfoItem  $success_info = null) 

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

    
    
    __construct(\Healthsvc\int   $health_staus_ttl, \Healthsvc\string  $health_status_time = null) 

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

    
    
    getSerializableProperties() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### getSerializableValues()

__

    
    
    getSerializableValues() 

__

# __

Inherited from

    

\Healthsvc\SerializableData

## Tags

_None found_  
---  
  
### toSnakeCase()

__

    
    
    toSnakeCase(\Healthsvc\string   $input) 

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

    
    
    refreshMessage() 

__

# __

## Tags

_None found_  
---  
  
×

### StatusData.php

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

    
    
    getStatusData() 

__

# __

## Tags

_None found_  
---  
  
×

### StatusDataProviderInterface.php

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

