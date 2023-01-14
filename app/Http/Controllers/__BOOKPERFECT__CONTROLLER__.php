<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class __BOOKPERFECT__CONTROLLER__ extends Controller
{
    public $__LANG__ = 'EN';
    public function __GET__AGENCIES__ALL__()
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/agency/bookperfect');
    }
    public function __GET__AGENCIES__BY__ID__($__ID__)
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/agency/bookperfect/' . $__ID__);
    }
    public function __AGENCIES__BALANCE__BY__ID__($__AGENCIES__ID__)
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/agency/agencyCredit/bookperfect/' . $__AGENCIES__ID__);
    }
    public function __AGENCY__MANAGER__BY__ID__($__MANAGER__ID)
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/agencymanager/bookperfect/' . $__MANAGER__ID);
    }
    public function __USERS__BY__AGENCY__($__AGENCY__ID)
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/user/bookperfect/' . $__AGENCY__ID);
    }
    public function __GET__USER__BY__ID__($__USERNAME, $__ACCESS__TOKEN = null)
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/user/bookperfect/bookperfect/' . $__USERNAME);
    }
    public function __GET__ALL__USER__()
    {
        $__RESPONSE = $this->Curl('https://bookperfect.paquetedinamico.com/resources/user/bookperfect');

        return $this->TransferUsersDateToLocalDB($__RESPONSE);

    }
    public function __GET__USER__BY__USERANDPASS__($__USERNAME, $__PASSWORD)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/authentication/getAuthToken?microsite=bookperfect&username=" . $__USERNAME . "&password=" . $__PASSWORD);
    }
    public function GET__CSRF()
    {
        return csrf_token();
    }
    public function __CREATE__USER__(Request $request)
    {
        $email = $request->Email;
        $name = $request->Name;
        $lastname = $request->Lastname;
        $country = $request->Country;
        $telephone = $request->Telephone;
        $password = $request->Password;
        $__TYPE = $request->Type;
        $data = array(
            "username" => $email,
            "password" => $password,
            "name" => $name,
            "surname" => $lastname,
            "email" => $email,
            "telephone" => $telephone,
            "country" => $country,
            "birthDate" => "2022-08-22",
            "documentNumber" => "1234",
            "active" => true,
            "newsletter" => true,
            "b2c" => true,
            "profile" => "USER",
            "referralId" => "63",
            "agency" => "BOOKPERFECT",
            "rewards" => [],
            "externalCode" => "50",
            "courtesyTitle" => "MS",
        );
        $__POST__DATA = json_encode($data);
        $this->CreateUser('https://bookperfect.paquetedinamico.com/resources/user/bookperfect/bookperfect', $__POST__DATA, $data, $__TYPE);
    }
    public function __UPDATE__USER__(Request $request)
    {
        $email = $request->Email;
        $name = $request->Name;
        $lastname = $request->Lastname;
        $country = $request->Country;
        $telephone = $request->Telephone;
        $password = $request->Password;
        $data = array(
            "username" => $email,
            "password" => $password,
            "name" => $name,
            "surname" => $lastname,
            "email" => $email,
            "telephone" => $telephone,
            "country" => $country,
            "birthDate" => "2022-08-22",
            "documentNumber" => "1234",
            "active" => true,
            "newsletter" => true,
            "b2c" => true,
            "profile" => "OPERATOR",
            "referralId" => "63",
            "agency" => "BOOKPERFECT",
            "rewards" => [],
            "externalCode" => "50",
            "courtesyTitle" => "MS",
        );
        $__POST__DATA = json_encode($data);
        echo ($this->UpdateUser('https://bookperfect.paquetedinamico.com/resources/user/bookperfect/bookperfect', $__POST__DATA));
    }
    public function __GET__ALL__BOOKING__($__FROM, $__TO, $__LANG = 'EN')
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/booking/getBookings?microsite=bookperfect&from=" . $__FROM . "&to=" . $__TO . "&lang=" . $__LANG);
    }
    public function __GET__BOOKING__REF__($__REF)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/booking/getBookings/bookperfect/" . $__REF);
    }
    public function __GET__CLOSED__TOUR__($__SUPPLIER__ID, $__CLOSED__TOUR__CODE)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/closedtour/" . $__SUPPLIER__ID . '/' . $__CLOSED__TOUR__CODE);
    }
    public function __GET__CLOSED__TOUR__CODE__BY__OPTION__CODE__($__SUPPLIER__ID, $__CLOSED__TOUR, $__OPTION__CODE)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/closedtour/" . $__SUPPLIER__ID . '/' . $__CLOSED__TOUR . '/' . $__OPTION__CODE);
    }
    public function __GET__GOLF__BY__SUPPLIERID__($__SUPPLIER__ID)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/golf/" . $__SUPPLIER__ID);
    }
    public function __GET__HOTEL__BY__SUPPLIERID__($__SUPPLIER__ID)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/hotel/" . $__SUPPLIER__ID);
    }
    public function __GET__HOTEL__BY__SUPPLIERID__PROVIDER__CODE($__SUPPLIER__ID, $__PROVIDER__CODE)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/hotel/" . $__SUPPLIER__ID . '/' . $__PROVIDER__CODE);
    }
    public function SUPPLIER()
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/suppliers");
    }
    public function __SUPPLIERS__($__SUPPLIER__ID)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/suppliers/" . $__SUPPLIER__ID);
    }
    public function __GET__TICKET__SUPPLIERID__($__SUPPLIER__ID)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/ticket/" . $__SUPPLIER__ID);
    }
    public function __GET__TICKET__SUPPLIER__TICKETCODE__($__SUPPLIER__ID, $__TICKETCODE)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/ticket/" . $__SUPPLIER__ID . '/' . $__TICKETCODE);
    }
    public function __GET__TRANSFER__($__SUPPLIER__ID)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/transfer/" . $__SUPPLIER__ID);
    }
    public function __GET__TRANSFER__SUPPLIERID__TRANSFERID__($__SUPPLIER__ID, $__TRANSFER__ID)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/transfer/" . $__SUPPLIER__ID . '/' . $__TRANSFER__ID);
    }
    public function __GET__ZONE__SUPPLIERID__($__SUPPLIER__ID, $__ZONE__TYPE)
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/transfer/zones/' . $__SUPPLIER__ID . '?zoneType=' . $__ZONE__TYPE);
    }
    public function __GET__TRANSPORT__SUPPLIERID__CURRENCY__($__SUPPLIER__ID, $__CURRENCY = null)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/transport/" . $__SUPPLIER__ID);
    }
    public function __GET__TRANSPORT__SUPPLIERID__TRANSPORTID__($__SUPPLIER__ID, $__TRANSPORT__ID)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/transport/" . $__SUPPLIER__ID . '/' . $__TRANSPORT__ID);
    }
    public function __GET__PROMOTION__CODE__()
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/promotioncode/bookperfect");
    }
    public function __GET__ACCOMMODATIONS__BY__ID__($__ACCOMMODATION__ID, $__LANG__ = null)
    {
        if (!isset($__LANG__)) {
            $__LANG__ = $this->__LANG__;
        }
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/accommodations/" . $__ACCOMMODATION__ID . "/datasheet?lang=" . $__LANG__);
    }
    public function __GET__ACCOMMODATIONS__ALL__()
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/accommodations/preferred/bookperfect');
    }
    public function __GET__ALL__AIRLINE__()
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/airline/bookperfect');
    }
    public function __GET__COUNTRIES__ALL__()
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/destination/countries/bookperfect');
    }
    public function __GET__DESTINATION__CODE__($__CODE)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/destination/bookperfect/" . $__CODE);
    }
    public function __GET__MEALPLAN__()
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/mealplan/bookperfect');
    }
    public function __GET__PREFERRED__TICKET()
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/ticket/preferred/bookperfect');
    }
    public function __GET__THEME__()
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/theme/bookperfect');
    }
    public function __GET__TRANSPORT__BASE__()
    {
        $__RESPONSE =  $this->Curl('https://bookperfect.paquetedinamico.com/resources/transportbase/bookperfect');
        return $this->TransportBase($__RESPONSE);
    }
    public function __GET__IDEAS__($__LANG, $__CURRENCY, $__COUNTRY)
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/travelidea/bookperfect?lang=' . $__LANG . '&currency=' . $__CURRENCY . '&country=' . $__COUNTRY);
    }
    public function __GET__PACKAGE__ALL__()
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/package/bookperfect');
    }
    public function __GET__PACKAGE__HOLIDAYID__CURRENCY__($__HOLIDAYPACAGE, $__CURRENCY)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/package/calendar/bookperfect/" . $__HOLIDAYPACAGE . "?currency=" . $__CURRENCY);
    }
    public function __GET__PACKAGE__HOLIDAY__LAN__CURRENCT__($__HOLIDAYPACAGEID, $__LANG, $__CURRENCY)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/package/bookperfect/info/" . $__HOLIDAYPACAGEID . '?lang=' . $__LANG . '&Currency=' . $__CURRENCY);
    }
    public function __GET__TRAVELIDEA__IDEA__LANG__($__IDEA, $__LANG)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/travelidea/bookperfect/" . $__IDEA . '?lang=' . $__LANG);
    }
    public function __GET__TRAVELIDEA__IDEA__LANG__CURRENCY__($__IDEA, $__LANG, $__CURRENCY)
    {
        return $this->Curl("https://bookperfect.paquetedinamico.com/resources/travelidea/bookperfect/info/" . $__IDEA . '?lang=' . $__LANG . '&currency=' . $__CURRENCY);
    }
    public function __GET__CREATE__TRIPIDEAS__CATEGORIES__(Request $__REQUEST)
    {
        $__data = [
            'HotelLocationCity' => $__REQUEST->HotelLocationCity,
            'HotelLocationCountry' => $__REQUEST->HotelLocationCountry,
            'HotelLocationContinent' => $__REQUEST->HotelLocationContinent,
            'HotelID' => $__REQUEST->HotelID,
            'DrupalCityID' => $__REQUEST->DrupalCityID,
            'HotelStartRate' => $__REQUEST->HotelStartRate,
        ];
        return $this->TripIdeasCategoriesCreator($__data);
    }
    public function __DELETE__TRIPIDEAS__CATEGORIES__($__HOTELID)
    {
        return $this->DeleteTripIdeas($__HOTELID);
    }
    public function __GET__TRIPIDEAS__CATEGORIES__($__CITY)
    {
        return $this->GetTripIdeas($__CITY);
    }
    public function __GET__TRIPIDEAS__BY__NAME__($__NAME)
    {
        return $this->getTripIdeasByname($__NAME);
    }
    public function __GET__TRIPIDEAS__CATEGORIES__BY__ID__($__ID)
    {
        return $this->getTripIdeasByID($__ID);
    }
    public function __UPDATE__TRIPIDEAS__CATEGORIES__(Request $__REQUEST)
    {
        return $this->UpdateTripIdeas($__REQUEST->HotelID, $__REQUEST->NewHotelID, $__REQUEST->DrupalCityID);
    }
    public function __GET__DESTINATION__ALL__()
    {
        return $this->Curl('https://bookperfect.paquetedinamico.com/resources/destenition/bookperfect');
    }
    public function GET__IDEAS__PACKAGES($__USERNAME = null, $__STATUS = null)
    {
        if ($__USERNAME != null && $__STATUS != null) {
            $__URL__ =  $this->Curl('https://bookperfect.paquetedinamico.com/resources/travelidea/bookperfect?username=' . $__USERNAME . '&onlyVisible=' . $__STATUS);
        } else {
            $__URL__ =  $this->Curl('https://bookperfect.paquetedinamico.com/resources/travelidea/bookperfect');
        }
        return $__URL__;
    }
}
