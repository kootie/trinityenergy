<?php

use App\Models\CompanyInfomation;

function settings($key)
{
    $info = CompanyInfomation::where('id', 1)->first();

    return $info->{$key};
}