# Splitit\MerchantsApi

All URIs are relative to https://onboarding-v2.sandbox.splitit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**create()**](MerchantsApi.md#create) | **POST** /api/merchants/create |  |
| [**get()**](MerchantsApi.md#get) | **GET** /api/merchants/get |  |
| [**getDetails()**](MerchantsApi.md#getDetails) | **GET** /api/merchants/get-details |  |


## `create()`

```php
create($create_merchant_request): \Splitit\Model\CreateMerchantResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://onboarding-v2.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://onboarding-v2.sandbox.splitit.com");

$apiInstance = new Splitit\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$create_merchant_request = [
        "public_name" => "public_name_example",
        "email" => "email_example",
        "phone_number" => "phone_number_example",
        "country_iso2" => "country_iso2_example",
        "legal_name" => "legal_name_example",
        "currency_code" => "currency_code_example",
    ];

try {
    $result = $apiInstance->create(
        create_merchant_request: $create_merchant_request
    );
    print_r($result->$getMerchantTempId());
    print_r($result->$getMerchantStatus());
} catch (\Exception $e) {
    echo 'Exception when calling MerchantsApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_merchant_request** | [**\Splitit\Model\CreateMerchantRequest**](../Model/CreateMerchantRequest.md)|  | |

### Return type

[**\Splitit\Model\CreateMerchantResponse**](../Model/CreateMerchantResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `get()`

```php
get($number_of_rows_in_page, $page_number, $name, $legal_name, $status): \Splitit\Model\GetMerchantsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://onboarding-v2.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://onboarding-v2.sandbox.splitit.com");

$apiInstance = new Splitit\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$number_of_rows_in_page = 1;
$page_number = 1;
$name = "string_example";
$legal_name = "string_example";
$status = 1;

try {
    $result = $apiInstance->get(
        number_of_rows_in_page: $number_of_rows_in_page, 
        page_number: $page_number, 
        name: $name, 
        legal_name: $legal_name, 
        status: $status
    );
    print_r($result->$getMerchants());
} catch (\Exception $e) {
    echo 'Exception when calling MerchantsApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number_of_rows_in_page** | **int**|  | |
| **page_number** | **int**|  | |
| **name** | **string**|  | [optional] |
| **legal_name** | **string**|  | [optional] |
| **status** | **int**|  | [optional] |

### Return type

[**\Splitit\Model\GetMerchantsResponse**](../Model/GetMerchantsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetails()`

```php
getDetails($merchant_temp_id): \Splitit\Model\GetMerchantDetailsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://onboarding-v2.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://onboarding-v2.sandbox.splitit.com");

$apiInstance = new Splitit\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$merchant_temp_id = "merchantTempId_example";

try {
    $result = $apiInstance->getDetails(
        merchant_temp_id: $merchant_temp_id
    );
    print_r($result->$getPublicName());
    print_r($result->$getLegalName());
    print_r($result->$getPhoneNumber());
    print_r($result->$getMerchantTempId());
    print_r($result->$getEmail());
    print_r($result->$getMerchantStatus());
} catch (\Exception $e) {
    echo 'Exception when calling MerchantsApi->getDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_temp_id** | **string**|  | |

### Return type

[**\Splitit\Model\GetMerchantDetailsResponse**](../Model/GetMerchantDetailsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
