<?php
namespace App\Helpers;

class UtilsHelper
{

    const BUSINESS_ERP = 1;
    const EDUCATION_ERP = 2;

    const PRODUCTS = [
        self::BUSINESS_ERP => 'Business ERP',
        self::EDUCATION_ERP => 'Education ERP',
    ];

    const DISTRIBUTOR_USER = 1;
    const ACADEMY_USER = 2;

    const USER_TYPES = [
        self::ACADEMY_USER => "Academy",
        self::DISTRIBUTOR_USER => 'Distributor'
    ];

}

