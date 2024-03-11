<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    protected $table = 'seed1';
    public $timestamps = false;
    protected $fillable = [
        'p_rank',
        'avb_date',
        'c_rank',
        'c_vessel',
        'fname',
        'lname',
        'dob',
        'birth_place',
        'nationalty',
        'm_status',
        'zone',
        'experience',
        'email1',
        'email2',
        'p_ad1',
        'p_ad2',
        'p_city',
        'p_state',
        'p_pin',
        'p_country',
        'area_code2',
        'p_tel1',
        'p_tel2',
        'mobile_code2',
        'p_mobi1',
        'p_mobi2',
        'c_ad1',
        'c_ad2',
        'c_city',
        'c_state',
        'c_pin',
        'area_code1',
        'c_tel1',
        'c_tel2',
        'mobile_code1',
        'c_mobi1',
        'c_mobi2',
        'work_nautilus',
        'cr_date',
        'cr_time',
        'last_salary',
        'last_company',
        'grade',
        'l_country',
        'company_status',
        'boiler_suit_size',
        'safety_shoe_size',
        'height',
        'weight',
        'indos_number',
        'photos',
        'resume',
        'resume_upload_date',
        'imp_discussion',
        'ref_check',
        'joined_date',
        'other_mobile_code',
        'other_numbers',
        'skype',
        'category',
        'stcw',
        'las_date',
        'las_time',
        'createdby',
        'editedby',
        'active_details',
        'ipaddress',
        'vendor_id'
    ];
}