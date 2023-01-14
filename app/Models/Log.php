<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Get(
 *  path="/get__agencies__all",
 *   tags={"@Users and Agencies"},
 *   summary="Return agencies by microsite",
 *   operationId="1",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__agencies__id/{id}",
 *   tags={"@Users and Agencies"},
 *   summary="Return agency by its ID",
 *   operationId="2",
 *  @OA\Parameter(
 *      name="id",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__agencyCredit/{agency}",
 *   tags={"@Users and Agencies"},
 *   summary="Return agency credit balance by its ID",
 *   operationId="3",
 *  @OA\Parameter(
 *      name="agency",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__agencyManager/{agencyManagerID}",
 *   tags={"@Users and Agencies"},
 *   summary="Return agency manager by its ID",
 *   operationId="4",
 *  @OA\Parameter(
 *      name="agencyManagerID",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__usersbyAgency/{agencyId}",
 *   tags={"@Users and Agencies"},
 *   summary="Return users by agency",
 *   operationId="5",
 * @OA\Parameter(
 *      name="agencyId",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__user_id/{username}",
 *   tags={"@Users and Agencies"},
 *   summary="Return user by its ID",
 *   operationId="6",
 *  @OA\Parameter(
 *      name="username",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__alluser",
 *   tags={"@Users and Agencies"},
 *   summary="Return users and copy Cloud database user info in middel Server Database",
 *   operationId="7",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Post(
 *  path="/create__user",
 *   tags={"@Users and Agencies"},
 *   summary="Creates a new user",
 *   operationId="8",
 *  @OA\Parameter(
 *      name="Email",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *  @OA\Parameter(
 *      name="Name",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Lastname",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Country",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Telephone",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Password",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Put(
 *  path="/update__user",
 *   tags={"@Users and Agencies"},
 *   summary="Updates an existing user",
 *   operationId="9",
 *  @OA\Parameter(
 *      name="Email",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *  @OA\Parameter(
 *      name="Name",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Lastname",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Country",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Telephone",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Password",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__Booking_all/{from}/{to}",
 *   tags={"@Booking"},
 *   summary="Return bookings by operator or microsite",
 *   operationId="10",
 * @OA\Parameter(
 *      name="from",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="to",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="lang",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__Booking_ref/{ref}",
 *   tags={"@Booking"},
 *   summary="Return booking by reference",
 *   operationId="11",
 * @OA\Parameter(
 *      name="ref",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get_Closed_Tour/{suplierid}/{closedtourcode}",
 *   tags={"@Contracts"},
 *   summary="Return closed tour by its code",
 *   operationId="12",
 *  @OA\Parameter(
 *      name="suplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="closedtourcode",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get_closedTour_optionCode/{suplierid}/{closedtourcode}/{optionCode}",
 *   tags={"@Contracts"},
 *   summary="Return closed tour options by code",
 *   operationId="13",
 *  @OA\Parameter(
 *      name="suplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="closedtourcode",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="optionCode",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__golfbySupplier/{supplierid}",
 *   tags={"@Contracts"},
 *   summary="Return golf contracts by supplier",
 *   operationId="14",
 *  @OA\Parameter(
 *      name="supplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__hotel/{supplierid}",
 *   tags={"@Contracts"},
 *   summary="Return hotels by supplier",
 *   operationId="15",
 *
 *  @OA\Parameter(
 *      name="supplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__hotel_supplierid_provider_code/{supplierid}/{providercode}",
 *   tags={"@Contracts"},
 *   summary="Return hotel by its provider code",
 *   operationId="16",
 *
 *  @OA\Parameter(
 *      name="supplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *  @OA\Parameter(
 *      name="providercode",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/supplier",
 *   tags={"@Contracts"},
 *   summary="Return suppliers of operator",
 *   operationId="17",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/suppliers/{supplierId}",
 *   tags={"@Contracts"},
 *   summary="Return supplier by its code",
 *   operationId="18",
 *  @OA\Parameter(
 *      name="supplierId",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__ticket_supplierid/{supplierid}",
 *   tags={"@Contracts"},
 *   summary="Return tickets by supplier",
 *   operationId="19",
 *  @OA\Parameter(
 *      name="supplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__ticket/{supplierid}/{ticketcode}",
 *   tags={"@Contracts"},
 *   summary="Return ticket by its code",
 *   operationId="20",
 *  @OA\Parameter(
 *      name="supplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="ticketcode",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__transfer/{supplierid}",
 *   tags={"@Contracts"},
 *   summary="Return transfers by supplier",
 *   operationId="21",
 *  @OA\Parameter(
 *      name="supplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__transfer_supplierid_transferid/{supplierid}/{transferid}",
 *   tags={"@Contracts"},
 *   summary="Return transfer by its id",
 *   operationId="22",
 *  @OA\Parameter(
 *      name="supplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *  @OA\Parameter(
 *      name="transferid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/transfer/zones/{supplierId}/{ZoneType}",
 *   tags={"@Contracts"},
 *   summary="Return transfer zones",
 *   operationId="23",
 *  @OA\Parameter(
 *      name="supplierId",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *  @OA\Parameter(
 *      name="ZoneType",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__transport/{supplierid}",
 *   tags={"@Contracts"},
 *   summary="Return transports by supplier",
 *   operationId="24",
 *  @OA\Parameter(
 *      name="supplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__transport_id/{supplierid}/{transportid}",
 *   tags={"@Contracts"},
 *   summary="Return transports by its ID",
 *   operationId="25",
 *  @OA\Parameter(
 *      name="supplierid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *  @OA\Parameter(
 *      name="transportid",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__accommodations__by__id/{accommodationId}",
 *   tags={"@Web content"},
 *   summary="Returns a accommodation datasheet",
 *   operationId="26",
 *  @OA\Parameter(
 *      name="accommodationId",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Lan",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__promotioncode",
 *   tags={"@Web content"},
 *   summary="Return promotional codes by microsite",
 *   operationId="27",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__accommodations__all",
 *   tags={"@Web content"},
 *   summary="Return preferred accommodations",
 *   operationId="28",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__airline__all",
 *   tags={"@Web content"},
 *   summary="Return airlines by microsite",
 *   operationId="29",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__countries__all",
 *   tags={"@Web content"},
 *   summary="Return countries",
 *   operationId="30",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__destination__by_code/{code}",
 *   tags={"@Web content"},
 *   summary="Return destination by ID",
 *   operationId="31",
 *   @OA\Parameter(
 *      name="code",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__mealplan",
 *   tags={"@Web content"},
 *   summary="Return meal plans by microsite",
 *   operationId="32",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__preferredticket",
 *   tags={"@Web content"},
 *   summary="Return preferred tickets",
 *   operationId="33",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__theme",
 *   tags={"@Web content"},
 *   summary="Return themes by microsite",
 *   operationId="34",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/push_transportBase",
 *   tags={"@Web content"},
 *   summary="Return transport bases by microsite and it copy cloud transport db into localdb",
 *   operationId="35",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__ideas/{language}/{currency}/{country}",
 *   tags={"@Ideas and Packages"},
 *   summary="Return ideas by microsite",
 *   operationId="36",
 *  @OA\Parameter(
 *      name="language",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="currency",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="country",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__package__all",
 *   tags={"@Ideas and Packages"},
 *   summary="Return holiday packages by microsite",
 *   operationId="37",
 * @OA\Parameter(
 *      name="origin Code",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="month",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="array",
 *           @OA\Items( type="enum", enum={
 *               "January",
 *               "February",
 *               "March",
 *               "April",
 *               "May",
 *               "June",
 *               "July",
 *               "August",
 *               "September",
 *               "October",
 *               "November",
 *               "December",}
 *        ),
 *      ),
 *   ),
 * @OA\Parameter(
 *      name="destinations",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="lang",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="currency",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="countryCode",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="onlyVisible",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="fromCreationDate",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="toCreationDate",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="first",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="integer($int32)"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="limit",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="provider",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__package__holidayPackage_id_CURRENCY/{holidayPackageId}/{currency}",
 *   tags={"@Ideas and Packages"},
 *   summary="Return holiday package calendar by its ID",
 *   operationId="38",
 *  @OA\Parameter(
 *      name="holidayPackageId",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="currency",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__package__holidayPackage_id_LAN_CURRENCY/{holidayPackageId}/{Lang}/{Currency}",
 *   tags={"@Ideas and Packages"},
 *   summary="Return holiday package by its ID",
 *   operationId="39",
 *  @OA\Parameter(
 *      name="holidayPackageId",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Lang",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="Currency",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__travelidea_idea_language/{idea}/{lang}",
 *   tags={"@Ideas and Packages"},
 *   summary="Return idea details by its ID",
 *   operationId="40",
 *  @OA\Parameter(
 *      name="idea",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="lang",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__travelidea_ideaid_lan_currency/{idea}/{lang}/{currency}",
 *   tags={"@Ideas and Packages"},
 *   summary="Return idea by its ID",
 *   operationId="41",
 *  @OA\Parameter(
 *      name="idea",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="lang",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="currency",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
  * @OA\Post(
 *  path="/create__TripIdeasCategories",
 *   tags={"@TripIdeasCategories"},
 *   summary="Create New IdeasCategory",
 *   operationId="42",
 *  @OA\Parameter(
 *      name="HotelLocationCity",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *  @OA\Parameter(
 *      name="HotelLocationCountry",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="HotelLocationContinent",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="HotelID",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="HotelStartRate",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="integer"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="DrupalCityID",
 *      in="query",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/delete__TripIdeasCategories/{HotelId}",
 *   tags={"@TripIdeasCategories"},
 *   summary="Delete Hotel By id",
 *   operationId="43",
 *
 *  @OA\Parameter(
 *      name="HotelId",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
  * @OA\Get(
 *  path="/get__TripIdeasCategoriesHotelten__by__name/{city}",
 *   tags={"@TripIdeasCategories"},
 *   summary="Get 10 top Hotel Id",
 *   operationId="44",
 *
 *  @OA\Parameter(
 *      name="city",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__TripIdeasCategories__by__name/{city}",
 *   tags={"@TripIdeasCategories"},
 *   summary="Get TripIdeasCategories",
 *   operationId="45",
 *  @OA\Parameter(
 *      name="city",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__TripIdeasCategories__by__id/{id}",
 *   tags={"@TripIdeasCategories"},
 *   summary="Return tripideas by id",
 *   operationId="46",
 *  @OA\Parameter(
 *      name="id",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Put(
 *  path="/update__TripIdeasCategories",
 *   tags={"@TripIdeasCategories"},
 *   summary="Update TripIdeas",
 *   operationId="47",
 * @OA\Parameter(
 *      name="HotelID",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *  @OA\Parameter(
 *      name="NewHotelID",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="DrupalCityID",
 *      in="query",
 *      required=false,
 *      @OA\Schema(
 *           type="int"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__user/{username}/{password}",
 *   tags={"@Users and Agencies"},
 *   summary="Return auth token",
 *   operationId="48",
 *  @OA\Parameter(
 *      name="username",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="password",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__destination__all",
 *   tags={"@Web content"},
 *   summary="Return destinations",
 *   operationId="49",
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 * @OA\Get(
 *  path="/get__transportbase__id/{countryCode}/{code}",
 *   tags={"@Web content"},
 *   summary="Return country by it's code and it's countryCode",
 *   operationId="51",
 *  @OA\Parameter(
 *      name="countryCode",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 * @OA\Parameter(
 *      name="code",
 *      in="path",
 *      required=false,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *   ),
 *)
 */
class Log extends Model
{
    use HasFactory;
    protected $table = "logTable";
    protected $fillable = [
        'requestName',
        'IP',
        'status',
    ];
}
