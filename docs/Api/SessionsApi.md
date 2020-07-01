# Klarna\Payments\SessionsApi

All URIs are relative to *https://api.klarna.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCreditSession**](SessionsApi.md#createCreditSession) | **POST** /payments/v1/sessions | Create a new credit session
[**readCreditSession**](SessionsApi.md#readCreditSession) | **GET** /payments/v1/sessions/{session_id} | Read an existing credit session
[**updateCreditSession**](SessionsApi.md#updateCreditSession) | **POST** /payments/v1/sessions/{session_id} | Update an existing credit session


# **createCreditSession**
> \Klarna\Payments\Model\MerchantSession createCreditSession($body)

Create a new credit session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\Payments\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Klarna\Payments\Model\Session(); // \Klarna\Payments\Model\Session | session_request

try {
    $result = $apiInstance->createCreditSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->createCreditSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Klarna\Payments\Model\Session**](../Model/Session.md)| session_request |

### Return type

[**\Klarna\Payments\Model\MerchantSession**](../Model/MerchantSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readCreditSession**
> \Klarna\Payments\Model\Session readCreditSession($session_id)

Read an existing credit session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\Payments\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = "session_id_example"; // string | session_id

try {
    $result = $apiInstance->readCreditSession($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->readCreditSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| session_id |

### Return type

[**\Klarna\Payments\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCreditSession**
> updateCreditSession($session_id, $body)

Update an existing credit session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Klarna\Payments\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = "session_id_example"; // string | session_id
$body = new \Klarna\Payments\Model\Session(); // \Klarna\Payments\Model\Session | session_request

try {
    $apiInstance->updateCreditSession($session_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->updateCreditSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| session_id |
 **body** | [**\Klarna\Payments\Model\Session**](../Model/Session.md)| session_request |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

