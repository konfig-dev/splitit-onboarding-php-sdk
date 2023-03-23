# Splitit\DataApi

All URIs are relative to https://onboarding-v2.sandbox.splitit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCountries()**](DataApi.md#getCountries) | **GET** /api/data/get-countries |  |
| [**getCurrencies()**](DataApi.md#getCurrencies) | **GET** /api/data/get-currencies |  |
| [**getProcessors()**](DataApi.md#getProcessors) | **GET** /api/data/get-processors |  |
| [**getVerticals()**](DataApi.md#getVerticals) | **GET** /api/data/get-verticals |  |
| [**statusLegend()**](DataApi.md#statusLegend) | **GET** /api/data/status-legend |  |


## `getCountries()`

```php
getCountries(): \Splitit\Model\CountriesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://onboarding-v2.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://onboarding-v2.sandbox.splitit.com");

$apiInstance = new Splitit\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getCountries();
    print_r($result->$getCountries());
} catch (\Exception $e) {
    echo 'Exception when calling DataApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Splitit\Model\CountriesResponse**](../Model/CountriesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencies()`

```php
getCurrencies(): \Splitit\Model\CurrenciesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://onboarding-v2.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://onboarding-v2.sandbox.splitit.com");

$apiInstance = new Splitit\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getCurrencies();
    print_r($result->$getCurrencies());
} catch (\Exception $e) {
    echo 'Exception when calling DataApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Splitit\Model\CurrenciesResponse**](../Model/CurrenciesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessors()`

```php
getProcessors(): \Splitit\Model\ProcessorsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://onboarding-v2.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://onboarding-v2.sandbox.splitit.com");

$apiInstance = new Splitit\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getProcessors();
    print_r($result->$getProcessors());
} catch (\Exception $e) {
    echo 'Exception when calling DataApi->getProcessors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Splitit\Model\ProcessorsResponse**](../Model/ProcessorsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVerticals()`

```php
getVerticals(): \Splitit\Model\MerchantVerticalsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://onboarding-v2.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://onboarding-v2.sandbox.splitit.com");

$apiInstance = new Splitit\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getVerticals();
    print_r($result->$getMerchantVerticals());
} catch (\Exception $e) {
    echo 'Exception when calling DataApi->getVerticals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Splitit\Model\MerchantVerticalsResponse**](../Model/MerchantVerticalsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statusLegend()`

```php
statusLegend(): \Splitit\Model\EnumDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://onboarding-v2.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://onboarding-v2.sandbox.splitit.com");

$apiInstance = new Splitit\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->statusLegend();
    print_r($result->$getKey());
    print_r($result->$getName());
} catch (\Exception $e) {
    echo 'Exception when calling DataApi->statusLegend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Splitit\Model\EnumDTO[]**](../Model/EnumDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
