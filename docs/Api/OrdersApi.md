# Klarna\Payments\OrdersApi

All URIs are relative to *https://api.klarna.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAuthorization**](OrdersApi.md#cancelAuthorization) | **DELETE** /payments/v1/authorizations/{authorizationToken} | Cancel an existing authorization
[**createOrder**](OrdersApi.md#createOrder) | **POST** /payments/v1/authorizations/{authorizationToken}/order | Create a new order
[**purchaseToken**](OrdersApi.md#purchaseToken) | **POST** /payments/v1/authorizations/{authorizationToken}/customer-token | Generate a consumer token


# **cancelAuthorization**
> cancelAuthorization($authorization_token)

Cancel an existing authorization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\Payments\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_token = "authorization_token_example"; // string | 

try {
    $apiInstance->cancelAuthorization($authorization_token);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrder**
> \Klarna\Payments\Model\Order createOrder($authorization_token, $body)

Create a new order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\Payments\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_token = "authorization_token_example"; // string | 
$body = new \Klarna\Payments\Model\CreateOrderRequest(); // \Klarna\Payments\Model\CreateOrderRequest | 

try {
    $result = $apiInstance->createOrder($authorization_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_token** | **string**|  |
 **body** | [**\Klarna\Payments\Model\CreateOrderRequest**](../Model/CreateOrderRequest.md)|  | [optional]

### Return type

[**\Klarna\Payments\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseToken**
> \Klarna\Payments\Model\CustomerTokenCreationResponse purchaseToken($authorization_token, $body)

Generate a consumer token



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\Payments\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_token = "authorization_token_example"; // string | 
$body = new \Klarna\Payments\Model\CustomerTokenCreationRequest(); // \Klarna\Payments\Model\CustomerTokenCreationRequest | 

try {
    $result = $apiInstance->purchaseToken($authorization_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->purchaseToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_token** | **string**|  |
 **body** | [**\Klarna\Payments\Model\CustomerTokenCreationRequest**](../Model/CustomerTokenCreationRequest.md)|  | [optional]

### Return type

[**\Klarna\Payments\Model\CustomerTokenCreationResponse**](../Model/CustomerTokenCreationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

