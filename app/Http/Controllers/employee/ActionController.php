<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function sentToRepair(Request $request)
    {
        $validated = $request->validate([
            'device_id' => 'required|integer|exists:devices,id'
        ]);

        // updating this device status
        $device = Device::find($validated['device_id']);
        $device->status = "on going repair";
        $device->save();

        return redirect()->back()->with("success","Device Sent for Repair");
    }

    public function complete(Request $request)
    {
        $validated = $request->validate([
            'device_id' => 'required|integer|exists:devices,id'
        ]);

        // updating this device status
        $device = Device::find($validated['device_id']);
        $device->status = "completed";
        $device->save();

        return redirect()->back()->with("success","Device Mark as Complete");
    }
}
