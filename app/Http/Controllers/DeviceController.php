<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
    //
    function add(Request $req){
        $device= new Device;
        $device->device_name=$req->device_name;
        $device->user_id=$req->user_id;
        $result=$device->save();
        if ($result){
        return["result"=>"los datos han sido guardados"];
        }else{
            return["result"=>"Fallo"];
        }
    }
}
