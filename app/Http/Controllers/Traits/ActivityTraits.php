<?php
namespace App\Http\Controllers\Traits;
use App\Models\ActivityLog;
use Illuminate\Http\Request;


trait ActivityTraits{
    public function logActivityUpdate($description, $activityType, $old_data,$new_data, $id)
    {
        $ipAddress = request()->getClientIp();
        $location = geoip($ipAddress);

        $locationData = [
            'ip' => $location->ip,
            'iso_code' => $location->iso_code,
            'country' => $location->country,
            'city' => $location->city,
            'state' => $location->state,
            'state_name' => $location->state_name,
            'postal_code' => $location->postal_code,
            'lat' => $location->lat,
            'lon' => $location->lon,
            'timezone' => $location->timezone,
            'continent' => $location->continent,
            'currency' => $location->currency,
            'default' => $location->default,
            'cached' => $location->cached,
        ];

        $locationJson = json_encode($locationData);
        $new_dataJson = json_encode($new_data);
        $old_dataJson = json_encode($old_data);
        $changed = json_encode($id);

        $activity_log = new ActivityLog;

        $activity_log->user_id = auth()->user()->id;

        $activity_log->changed_id = $changed;
        $activity_log->ip_address = $ipAddress;
        $activity_log->url = request()->url();
        $activity_log->request_type = request()->method();

        $activity_log->description = $description;
        $activity_log->activity_type = $activityType;
        $activity_log->new_data = $new_dataJson;
        $activity_log->old_data = $old_dataJson;
        $activity_log->geo_location = $locationJson;
        $activity_log->save();
        return $id;
    }
    public function logActivityUpdateLoan($description, $activityType, $old_data,$new_data, $id,$deleted_data)
    {
        $ipAddress = request()->getClientIp();
        $location = geoip($ipAddress);

        $locationData = [
            'ip' => $location->ip,
            'iso_code' => $location->iso_code,
            'country' => $location->country,
            'city' => $location->city,
            'state' => $location->state,
            'state_name' => $location->state_name,
            'postal_code' => $location->postal_code,
            'lat' => $location->lat,
            'lon' => $location->lon,
            'timezone' => $location->timezone,
            'continent' => $location->continent,
            'currency' => $location->currency,
            'default' => $location->default,
            'cached' => $location->cached,
        ];

        $locationJson = json_encode($locationData);
        $new_dataJson = json_encode($new_data);
        $old_dataJson = json_encode($old_data);
        $changed = json_encode($id);

        $activity_log = new ActivityLog;

        $activity_log->user_id = auth()->user()->id;

        $activity_log->changed_id = $changed;
        $activity_log->ip_address = $ipAddress;
        $activity_log->url = request()->url();
        $activity_log->request_type = request()->method();
        $activity_log->deleted_data = $deleted_data;
        $activity_log->description = $description;
        $activity_log->activity_type = $activityType;
        $activity_log->new_data = $new_dataJson;
        $activity_log->old_data = $old_dataJson;
        $activity_log->geo_location = $locationJson;
        $activity_log->save();
        return $id;
    }
    public function logActivityCreate($description, $activityType, $id)
    {
        $ipAddress = request()->getClientIp();
        $location = geoip($ipAddress);

        $locationData = [
            'ip' => $location->ip,
            'iso_code' => $location->iso_code,
            'country' => $location->country,
            'city' => $location->city,
            'state' => $location->state,
            'state_name' => $location->state_name,
            'postal_code' => $location->postal_code,
            'lat' => $location->lat,
            'lon' => $location->lon,
            'timezone' => $location->timezone,
            'continent' => $location->continent,
            'currency' => $location->currency,
            'default' => $location->default,
            'cached' => $location->cached,
        ];

        $locationJson = json_encode($locationData);
        $changed = json_encode($id);

        $activity_log = new ActivityLog;

        $activity_log->user_id = auth()->user()->id;

        $activity_log->changed_id = $changed;
        $activity_log->ip_address = $ipAddress;
        $activity_log->url = request()->url();
        $activity_log->request_type = request()->method();
        $activity_log->description = $description;
        $activity_log->activity_type = $activityType;
        $activity_log->geo_location = $locationJson;
        $activity_log->save();
        return $id;
    }
    function getOriginalValuesOfChangedAttributes($originalData, $changedData) {
        $originalValues = [];
        foreach ($changedData as $key => $value) {
            if($value !=null){

                $originalValues[$key] = $originalData[$key];
            }
        }
        return $originalValues;
     }
     function getTransferedApplications($description,  $id ,$activityType) {

        $ipAddress = request()->getClientIp();
        $location = geoip($ipAddress);

        $locationData = [
            'ip' => $location->ip,
            'iso_code' => $location->iso_code,
            'country' => $location->country,
            'city' => $location->city,
            'state' => $location->state,
            'state_name' => $location->state_name,
            'postal_code' => $location->postal_code,
            'lat' => $location->lat,
            'lon' => $location->lon,
            'timezone' => $location->timezone,
            'continent' => $location->continent,
            'currency' => $location->currency,
            'default' => $location->default,
            'cached' => $location->cached,
        ];

        $locationJson = json_encode($locationData);
        $changed = json_encode($id);
        $activity_log = new ActivityLog;

        $activity_log->user_id = auth()->user()->id;
        $activity_log->changed_id = $changed;
        $activity_log->ip_address = $ipAddress;
        $activity_log->url = request()->url();
        $activity_log->request_type = request()->method();

        $activity_log->description = $description;
        $activity_log->activity_type = $activityType;

        $activity_log->geo_location = $locationJson;
        $activity_log->save();
        return $id;

     }


}
