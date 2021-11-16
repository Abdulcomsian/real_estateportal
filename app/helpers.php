<?php
function removefile($leaddata, $inputname)
{
    if ($inputname == 'om_file') {
        if ($leaddata->om_file) //if already resume unlink resume and upload new one
        {
            unlink(public_path() . '/leads-documents/' . $leaddata->om_file);
        }
    } elseif ($inputname == 'rent_roll_file') {
        if ($leaddata->rent_roll_file) //if already resume unlink resume and upload new one
        {
            unlink(public_path() . '/leads-documents/' . $leaddata->rent_roll_file);
        }
    } elseif ($inputname == 'p_l_file') {
        if ($leaddata->rent_roll_file) //if already resume unlink resume and upload new one
        {
            unlink(public_path() . '/leads-documents/' . $leaddata->p_l_file);
        }
    } elseif ($inputname == 't12_file') {
        if ($leaddata->rent_roll_file) //if already resume unlink resume and upload new one
        {
            unlink(public_path() . '/leads-documents/' . $leaddata->t12_file);
        }
    } elseif ($inputname == 't3_file') {
        if ($leaddata->rent_roll_file) //if already resume unlink resume and upload new one
        {
            unlink(public_path() . '/leads-documents/' . $leaddata->t3_file);
        }
    } elseif ($inputname == 'covid_file') {
        if ($leaddata->rent_roll_file) //if already resume unlink resume and upload new one
        {
            unlink(public_path() . '/leads-documents/' . $leaddata->covid_file);
        }
    } elseif ($inputname == 'capx_file') {
        if ($leaddata->rent_roll_file) //if already resume unlink resume and upload new one
        {
            unlink(public_path() . '/leads-documents/' . $leaddata->capx_file);
        }
    }
}

function lead_status($status)
{
    if ($status == "0") {
        return ['color' => 'yellowgreen', 'name' => 'Pending Offer'];
    } elseif ($status == "1") {
        return ['color' => 'blue', 'name' => 'Active'];
    } elseif ($status == "2") {
        return ['color' => 'orange', 'name' => 'Under Contract'];
    } elseif ($status == "3") {
        return ['color' => 'green', 'name' => 'Zellaray Under Contract'];
    } elseif ($status == "4") {
        return ['color' => 'red', 'name' => 'Sold'];
    } elseif ($status == "5") {
        return ['color' => 'red', 'name' => 'Undeliverable'];
    }
}
