<?php
namespace Roiwk\UmengOpenAPI\com\alibaba\openapi\client\serialize;

use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\exception\OceanException;
use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\policy\DataProtocol;

class Json2Deserializer implements DeSerializer
{
    public function supportedContentType()
    {
        return DataProtocol::json2;
    }
    public function deSerialize($deSerializer, $resultDefinition, $charSet = null)
    {
        $stdResult = json_decode($deSerializer);
        $resultDefinition->setStdResult($stdResult);
        return $resultDefinition;
    }
    public function buildException($deSerializer, $resultType, $charSet = null)
    {
        $exceptionStdResult = json_decode($deSerializer);
        $errorCode = $exceptionStdResult->{"error_code"};
        $errorMessage = $exceptionStdResult->{"error_message"};

        $oceanException = new OceanException($errorMessage);
        $oceanException->setErrorCode($errorCode);
        return $oceanException;
    }
}
