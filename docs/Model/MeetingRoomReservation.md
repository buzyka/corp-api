# MeetingRoomReservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Reservation id | 
**date** | [**\DateTime**](\DateTime.md) | Reservation date | 
**time_from** | **string** | Reservation time slot in format \&quot;hh:mm\&quot; | 
**time_to** | **string** | Reservation time slot in format \&quot;hh:mm\&quot; | 
**room_id** | **int** | Reservation room id | 
**description** | **string** | Reservation description | 
**initiator** | [**\Swagger\Client\Model\Worker**](Worker.md) |  | 
**responsible** | [**\Swagger\Client\Model\Worker[]**](Worker.md) | Meeting room responsibles | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

