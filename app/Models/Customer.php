<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'industry',
        'sub_industry',
        'geo_code',
        'hq_or_br',
        'scale',
        'organization_eng',
        'organization_viet',
        'website',
        'prefix',
        'name',
        'title_department_eng',
        'title_department_viet',
        'professional',
        'title_level',
        'directphone_extension',
        'mobile',
        'linkedIn',
        'company_email',
        'business_email',
        'personal_email',
        'address',
        'outdate_business_email',
        'outdate_personal_email',
        'attendance',
        'last_updated_date',
        'note',
    ];

    public $timestamps = TRUE;
}
