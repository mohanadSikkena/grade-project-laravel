<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class WebNotificationController extends Controller
{
    public function sendWebNotification($data)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $serverKey = 'AAAA7plG2_E:APA91bHFvyEG-9088HnIhxkrZGqBkygxWrOkh-qOWUTwampoOwiTF8sHPiwbUh4c70y_Mt352suDo94E2TcqWUe9vB61pp7HNmqnMQEexyV59t_pQ8O0nwDAtFjhAOVsejfu_6tNGdSt';
        $encodedData = json_encode($data);

        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        // Close connection
        curl_close($ch);

        return "Notification Sent Successfully";
    }
}
