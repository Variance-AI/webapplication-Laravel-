<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Log;
use App\Models\Methods;
use App\Models\TripeIdeas;
use App\Models\usersBackup;
use App\Models\TransportBase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\TableModel as TableModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Models\TransferCloudUserInfoToLocalDB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


/**
 * @OA\Info(
 *    title="",
 *    version="... BOOKPERFECT API DESIGNED BY HOTELISTAN COMPANY ...",
 * ),
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $__USERNAME__ = 'apiuser';
    public $__PASSWORD__ = 'Apiuser@2022';
    public $__URL__ = 'https://bookperfect.paquetedinamico.com/resources/authentication/getAuthToken?microsite=bookperfect';
    public $__CALL = null;
    public function __construct()
    {
        $this->__CALL = new Methods;
    }
    public function auth()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->__URL__ . '&username=' . $this->__USERNAME__ . '&password=' . $this->__PASSWORD__,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response, true);
            return  $data["token"];
        }
    }
    public function log($__REQUESTNAME, $__IP, $__STATUS, $__RESPONSE)
    {
        //RECODE IN DATABASE : SECTION
        // Log::create([
        //     'requestName'  => $__REQUESTNAME,
        //     'IP'           => $__IP,
        //     'status'       => $__STATUS,
        // ]);
        // // FILE MAKER : SECTION
        // $__CONTENT = 'REQUEST_NAME------->' . $__REQUESTNAME . PHP_EOL . 'RESPONSE------>' . $__RESPONSE;
        // $__ROW = Log::latest()->first();
        // $__DIR = 'api_log_files/' . 'DATE' . str_replace('-', '', date('Y-m-d'));
        // $__FILENAME = 'REQUEST_RESPONSE_' . $__ROW->id . '_' . str_replace('-', '', date('Y-m-d')) . str_replace(' ', '', Carbon::now()->setTimezone('Turkey')->format('H i s'));
        // Storage::put($__DIR . '/' . $__FILENAME . '.txt', $__CONTENT);
        // return json_decode($__RESPONSE);
    }
    public function Curl($__URL__)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $__URL__,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                'auth-token:' . $this->auth(),
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
            $status = 0;
        } else {
            if (isset(json_decode($response, true)["error"])) {
                $status = 0;
            } else {
                $status = 1;
            }
            $this->log(url()->current(), request()->ip(), $status, $response);
            return json_decode($response);
        }
    }
    public function TransferUsersDateToLocalDB($__RESPONSE)
    {


        $__ACK = TransferCloudUserInfoToLocalDB::all();
        if (count($__ACK) >= 1) {
            TransferCloudUserInfoToLocalDB::truncate();
        }
        $__ENCODING__PROCESS = json_encode($__RESPONSE);
        $__USER = json_decode(json_encode(json_decode($__ENCODING__PROCESS, true)['user']), true);

        foreach ($__USER as $__ITEM) {
            $user = TransferCloudUserInfoToLocalDB::where('userName', '=', $__ITEM['username'])->where('userEmail', '=', $__ITEM['email'])->get();
            if (count($user) == 0) {
                TransferCloudUserInfoToLocalDB::create([
                    'userName' => $__ITEM['username'],
                    'userEmail' => $__ITEM['email'],
                    'userCountry' => isset($__ITEM['country']) ? $__ITEM['country'] : 'TR',
                    'userAgency' => $__ITEM['agency'],
                    'userSurname' => $__ITEM['surname'],
                    'userProfile' => $__ITEM['profile'],
                    'userIsB2C' => $__ITEM['b2c'],
                    'userRegisterViaAPI' => 0,
                ]);
            }

        }
        $this->__CALL->matchUserBackup();
        return $__RESPONSE;
    }
    public function CreateUser($__URL, $__POST__DATA, $data, $__TYPE)
    {

        $crl = curl_init($__URL);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLINFO_HEADER_OUT, true);
        curl_setopt($crl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($crl, CURLOPT_POSTFIELDS, $__POST__DATA);
        curl_setopt($crl, CURLOPT_HTTPHEADER, array(
            'accept: application/json',
            'auth-token:' . $this->auth(),
            'Content-Type: application/json',
        ));
        $result = curl_exec($crl);
        if ($result === false) {
            $result_noti = 0;
            $status = 'fail';
            die();
        } else {
            if (isset(json_decode($result, true)["error"])) {
                if (json_decode($result, true)["error"][0] == 'User already exists, use the update operation instead') {
                    if ($__TYPE != 1) {
                        $result = json_encode($this->Curl('https://bookperfect.paquetedinamico.com/resources/user/bookperfect/bookperfect/' . $data['username']), true);
                    }
                }
            } else {
                // THIS METHOD CREATE NEW USER ON LOCAL DB
                usersBackup::create([
                    'email' => $data['email'],
                    'Type'  => $__TYPE,
                ]);

                $this->Curl('https://test.hitrooms.com/rest-api/get__alluser');
                $getUserbackup = usersBackup::where('email', '=', $data['email'])->first();
                $updateUser = TransferCloudUserInfoToLocalDB::where('userEmail', '=', $data['email'])->first();
                $updateUser->typeSignup = $getUserbackup->Type;
                $updateUser->save();
                // THIS PROCESS MAKE NEW USER INTO usersBackup table in database
                return $result;
            }
        }

        curl_close($crl);
    }
    public function UpdateUser($__URL, $__POST__DATA)
    {
        $crl = curl_init($__URL);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLINFO_HEADER_OUT, true);
        curl_setopt($crl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($crl, CURLOPT_POSTFIELDS, $__POST__DATA);
        curl_setopt($crl, CURLOPT_HTTPHEADER, array(
            'accept: application/json',
            'auth-token:' . $this->auth(),
            'Content-Type: application/json',
        ));
        $__RESPONSE = curl_exec($crl);
        if ($__RESPONSE === false) {
            $__RESPONSE__noti = 0;
            $status = 'fail';
            die();
        } else {
            if (isset(json_decode($__RESPONSE, true)["error"])) {
                $status = 0;
            } else {
                $status = 1;
            }
            $this->log(url()->current(), request()->ip(), $status, $__RESPONSE);
            return $__RESPONSE;
        }
    }
    public function TransportBase($__RESPONSE)
    {
        $__DATA = $__RESPONSE;
        TransportBase::truncate();
        $__ENCODING__PROCESS = json_decode(json_encode($__RESPONSE), true);
        foreach ($__ENCODING__PROCESS['transportbase'] as $__ITEM) {
            TransportBase::create([
                'code' => $__ITEM['code'],
                'name' => $__ITEM['name'],
                'cityName' => isset($__ITEM['cityName']) ? $__ITEM['cityName'] : '',
                'countryCode' => $__ITEM['country'],
                'geolocation_latitude' => $__ITEM['geolocation']['latitude'],
                'geolocation_longitude' => $__ITEM['geolocation']['longitude'],
            ]);
        }
        return $__DATA;
    }
    public function TripIdeasCategoriesCreator($__data)
    {
        $check = TripeIdeas::all();
        $flag = false;
        $status = null;
        foreach ($check as $item) {
            if ($item->HotelID == $__data['HotelID']) {
                $flag = true;
            }
        }
        if (!$flag) {
            $insert = TripeIdeas::create($__data);
            if ($insert) {
                $response =  'Record Created Successfully';
                $status = 1;
            } else {
                $response =  'Record Created Failed';
                $status = 0;
            }
        } else {
            $response =  'This Hotel ID is Already Created';
            $status = 0;
        }
        $this->log(url()->current(), request()->ip(), $status, $response);
        return $response;
    }
    public function DeleteTripIdeas($__HOTELID)
    {
        $row = TripeIdeas::where('HotelID', '=', $__HOTELID)->first();
        if ($row->delete()) {
            $status = 1;
            $response =  'Record Deleted Successfully';
        } else {
            $response = 'removing record  Failed';
            $status = 0;
        }
        $this->log(url()->current(), request()->ip(), $status, $response);
        return $response;
    }
    public function GetTripIdeas($__CITY)
    {
        $response = TripeIdeas::where('HotelLocationCity', '=', $__CITY)->limit(10)->get();
        if ($response) {
            $status = 1;
        } else {
            $status = 0;
        }
        $this->log(url()->current(), request()->ip(), $status, $response);
        return $response;
    }
    public function getTripIdeasByname($__NAME)
    {
        $response = TripeIdeas::where('HotelLocationCity', '=', $__NAME)->get();
        if ($response) {
            $status = 1;
        } else {
            $status = 0;
        }
        $this->log(url()->current(), request()->ip(), $status, $response);
        return $response;
    }
    public function getTripIdeasByID($__ID)
    {
        $response = TripeIdeas::where('HotelID', '=', $__ID)->get();
        if ($response) {
            $status = 1;
        } else {
            $status = 0;
        }
        $this->log(url()->current(), request()->ip(), $status, $response);
        return $response;
    }
    public function UpdateTripIdeas($__HOTELID, $__NewHotelID, $__DRUPALCITYID)
    {
        $status = null;
        $response = null;
        $row = TripeIdeas::where('HotelID', '=', $__HOTELID)->first();
        if ($row == null) {
            $response = "HotelID NOT FOUND";
            $status = 0;
        } else {
            $update = TripeIdeas::where('HotelID', '=', $__HOTELID)->first();
            $update->HotelID = $__NewHotelID;
            $update->DrupalCityID = isset($__DRUPALCITYID) ? $__DRUPALCITYID : null;
            $update->save();

            if ($update) {
                $response = 'Record Updated Successfully';
                $status = 1;
            } else {
                $response = 'Record Created Failed';
                $status = 0;
            }
        }
        $this->log(url()->current(), request()->ip(), $status, $response);
        return $response;
    }
}
