# Swagger\Client\DefaultApi

All URIs are relative to *https://virtserver.swaggerhub.com/house-elf/corp/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteReservation**](DefaultApi.md#deletereservation) | **DELETE** /meeting-rooms/reservation/{id} | Delete a reservation
[**getReservation**](DefaultApi.md#getreservation) | **GET** /meeting-rooms/reservation/{id} | Get a reservation
[**makeReservation**](DefaultApi.md#makereservation) | **POST** /meeting-rooms/reservation | Make a reservation
[**meetingRoomItem**](DefaultApi.md#meetingroomitem) | **GET** /meeting-rooms/item/{id} | Get meeting rooms by its id
[**meetingRoomList**](DefaultApi.md#meetingroomlist) | **GET** /meeting-rooms/list | Get meeting rooms filtered by provided parameters
[**reservations**](DefaultApi.md#reservations) | **GET** /meeting-rooms/reservations | Get reservations of meeting rooms filtered by provided parameters
[**updateReservation**](DefaultApi.md#updatereservation) | **PUT** /meeting-rooms/reservation/{id} | Update a reservation

# **deleteReservation**
> \Swagger\Client\Model\InlineResponse2005 deleteReservation($id, $body)

Delete a reservation

Allowed to reservation owner and meeting room responsible person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of existing reservation
$body = new \Swagger\Client\Model\Initiator(); // \Swagger\Client\Model\Initiator | 

try {
    $result = $apiInstance->deleteReservation($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of existing reservation |
 **body** | [**\Swagger\Client\Model\Initiator**](../Model/Initiator.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReservation**
> \Swagger\Client\Model\InlineResponse2004 getReservation($id)

Get a reservation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of existing reservation

try {
    $result = $apiInstance->getReservation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of existing reservation |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **makeReservation**
> \Swagger\Client\Model\InlineResponse2003 makeReservation($body)

Make a reservation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MeetingRoomReservationDetails(); // \Swagger\Client\Model\MeetingRoomReservationDetails | 

try {
    $result = $apiInstance->makeReservation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->makeReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MeetingRoomReservationDetails**](../Model/MeetingRoomReservationDetails.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRoomItem**
> \Swagger\Client\Model\InlineResponse2001 meetingRoomItem($id)

Get meeting rooms by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of existing meeting room

try {
    $result = $apiInstance->meetingRoomItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->meetingRoomItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of existing meeting room |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meetingRoomList**
> \Swagger\Client\Model\InlineResponse200 meetingRoomList($room_location_id, $location_id, $city_id, $limit, $offset)

Get meeting rooms filtered by provided parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_location_id = 56; // int | Filter rooms by provided room location (floor)
$location_id = 56; // int | Filter rooms by provided office building
$city_id = 56; // int | Filter rooms by provided city
$limit = 56; // int | Number of items expected in response
$offset = 56; // int | Number of items that should be skipped

try {
    $result = $apiInstance->meetingRoomList($room_location_id, $location_id, $city_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->meetingRoomList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room_location_id** | **int**| Filter rooms by provided room location (floor) | [optional]
 **location_id** | **int**| Filter rooms by provided office building | [optional]
 **city_id** | **int**| Filter rooms by provided city | [optional]
 **limit** | **int**| Number of items expected in response | [optional]
 **offset** | **int**| Number of items that should be skipped | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reservations**
> \Swagger\Client\Model\InlineResponse2002 reservations($date_from, $date_to, $room_id, $room_location_id, $location_id, $city_id, $limit, $offset)

Get reservations of meeting rooms filtered by provided parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = new \DateTime("2013-10-20"); // \DateTime | Filter reservations starting from the provided date. If missing current date will be used instead.
$date_to = new \DateTime("2013-10-20"); // \DateTime | Filter reservations ending with the provided date.
$room_id = 56; // int | Filter reservations by provided meeting room
$room_location_id = 56; // int | Filter reservations by provided room location (floor)
$location_id = 56; // int | Filter reservations by provided office building
$city_id = 56; // int | Filter reservations by city
$limit = 56; // int | Number of items expected in response
$offset = 56; // int | Number of items that should be skipped

try {
    $result = $apiInstance->reservations($date_from, $date_to, $room_id, $room_location_id, $location_id, $city_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reservations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **\DateTime**| Filter reservations starting from the provided date. If missing current date will be used instead. | [optional]
 **date_to** | **\DateTime**| Filter reservations ending with the provided date. | [optional]
 **room_id** | **int**| Filter reservations by provided meeting room | [optional]
 **room_location_id** | **int**| Filter reservations by provided room location (floor) | [optional]
 **location_id** | **int**| Filter reservations by provided office building | [optional]
 **city_id** | **int**| Filter reservations by city | [optional]
 **limit** | **int**| Number of items expected in response | [optional]
 **offset** | **int**| Number of items that should be skipped | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReservation**
> \Swagger\Client\Model\InlineResponse2005 updateReservation($id, $body)

Update a reservation

Allowed to reservation owner and meeting room responsible person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of existing reservation
$body = new \Swagger\Client\Model\MeetingRoomReservationDetails(); // \Swagger\Client\Model\MeetingRoomReservationDetails | 

try {
    $result = $apiInstance->updateReservation($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of existing reservation |
 **body** | [**\Swagger\Client\Model\MeetingRoomReservationDetails**](../Model/MeetingRoomReservationDetails.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

