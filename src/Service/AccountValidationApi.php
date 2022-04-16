<?php
/**
 * AccountValidationApi
 * PHP version 5
 *
 * @category Class
 * @package  Maviance\S3PApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Smobilpay S3P API
 *
 * Smobilpay Third Party API FOR PAYMENT COLLECTIONS
 *
 * OpenAPI spec version: 3.0.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Maviance\S3PApiClient\Service;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Maviance\S3PApiClient\ApiException;
use Maviance\S3PApiClient\Configuration;
use Maviance\S3PApiClient\HeaderSelector;
use Maviance\S3PApiClient\ObjectSerializer;

/**
 * AccountValidationApi Class Doc Comment
 *
 * @category Class
 * @package  Maviance\S3PApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountValidationApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation verifyGet
     *
     * Verify service number
     *
     * @param  string $xApiVersion api version info (required)
     * @param  string $merchant Unique  merchant code (required)
     * @param  int $serviceid Unique  service Identifier (required)
     * @param  string $serviceNumber Service number with merchant (e.g. meter number in bills from a utility provider) for which to perform the bill payment (required)
     *
     * @throws \Maviance\S3PApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function verifyGet($xApiVersion, $merchant, $serviceid, $serviceNumber)
    {
        list($response) = $this->verifyGetWithHttpInfo($xApiVersion, $merchant, $serviceid, $serviceNumber);
        return $response;
    }

    /**
     * Operation verifyGetWithHttpInfo
     *
     * Verify service number
     *
     * @param  string $xApiVersion api version info (required)
     * @param  string $merchant Unique  merchant code (required)
     * @param  int $serviceid Unique  service Identifier (required)
     * @param  string $serviceNumber Service number with merchant (e.g. meter number in bills from a utility provider) for which to perform the bill payment (required)
     *
     * @throws \Maviance\S3PApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function verifyGetWithHttpInfo($xApiVersion, $merchant, $serviceid, $serviceNumber)
    {
        $returnType = 'bool';
        $request = $this->verifyGetRequest($xApiVersion, $merchant, $serviceid, $serviceNumber);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Maviance\S3PApiClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation verifyGetAsync
     *
     * Verify service number
     *
     * @param  string $xApiVersion api version info (required)
     * @param  string $merchant Unique  merchant code (required)
     * @param  int $serviceid Unique  service Identifier (required)
     * @param  string $serviceNumber Service number with merchant (e.g. meter number in bills from a utility provider) for which to perform the bill payment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function verifyGetAsync($xApiVersion, $merchant, $serviceid, $serviceNumber)
    {
        return $this->verifyGetAsyncWithHttpInfo($xApiVersion, $merchant, $serviceid, $serviceNumber)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation verifyGetAsyncWithHttpInfo
     *
     * Verify service number
     *
     * @param  string $xApiVersion api version info (required)
     * @param  string $merchant Unique  merchant code (required)
     * @param  int $serviceid Unique  service Identifier (required)
     * @param  string $serviceNumber Service number with merchant (e.g. meter number in bills from a utility provider) for which to perform the bill payment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function verifyGetAsyncWithHttpInfo($xApiVersion, $merchant, $serviceid, $serviceNumber)
    {
        $returnType = 'bool';
        $request = $this->verifyGetRequest($xApiVersion, $merchant, $serviceid, $serviceNumber);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'verifyGet'
     *
     * @param  string $xApiVersion api version info (required)
     * @param  string $merchant Unique  merchant code (required)
     * @param  int $serviceid Unique  service Identifier (required)
     * @param  string $serviceNumber Service number with merchant (e.g. meter number in bills from a utility provider) for which to perform the bill payment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function verifyGetRequest($xApiVersion, $merchant, $serviceid, $serviceNumber)
    {
        // verify the required parameter 'xApiVersion' is set
        if ($xApiVersion === null || (is_array($xApiVersion) && count($xApiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xApiVersion when calling verifyGet'
            );
        }
        // verify the required parameter 'merchant' is set
        if ($merchant === null || (is_array($merchant) && count($merchant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant when calling verifyGet'
            );
        }
        // verify the required parameter 'serviceid' is set
        if ($serviceid === null || (is_array($serviceid) && count($serviceid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $serviceid when calling verifyGet'
            );
        }
        // verify the required parameter 'serviceNumber' is set
        if ($serviceNumber === null || (is_array($serviceNumber) && count($serviceNumber) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $serviceNumber when calling verifyGet'
            );
        }

        $resourcePath = '/verify';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($merchant !== null) {
            $queryParams['merchant'] = ObjectSerializer::toQueryValue($merchant, null);
        }
        // query params
        if ($serviceid !== null) {
            $queryParams['serviceid'] = ObjectSerializer::toQueryValue($serviceid, null);
        }
        // query params
        if ($serviceNumber !== null) {
            $queryParams['serviceNumber'] = ObjectSerializer::toQueryValue($serviceNumber, null);
        }
        // header params
        if ($xApiVersion !== null) {
            $headerParams['x-api-version'] = ObjectSerializer::toHeaderValue($xApiVersion);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
