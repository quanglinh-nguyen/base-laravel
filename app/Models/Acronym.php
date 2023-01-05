<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acronym extends Model
{
    use HasFactory;

    protected $table = 'acronyms';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'acronym',
        'acronym_column',
        'full_name',
    ];

    /**
     * Get a name by acronym_column
     */
    public function getNameFieldColumn()
    {
        $array_acronym = config('config.acronym_column_list');
        $acronym_column = $this->acronym_column;
        if(isset($acronym_column) && isset($array_acronym[$acronym_column])){
            return $array_acronym[$acronym_column];
        }
        return null;
    }


}
