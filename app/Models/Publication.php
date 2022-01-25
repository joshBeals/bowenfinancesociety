<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    
    protected $fillable = [
        'name',
        'file_path',
        'category',
        'availability'
    ];

    const CATEGORIES = [
        'Market Update' => 'Market Update',
        'Newsletter' => 'Newsletter',
        'Company Report' => 'Company Report',
        'Study Abroad' => 'Study Abroad',
        'Recruitment Materials ' => 'Recruitment Materials ',
        'Professional Qualifications ' => 'Professional Qualifications ',
        'Finance study materials' => 'Finance study materials',
        'Others' => 'Others'
    ];

    const AVAILABILITY = [
        'free' => 'Free',
        'members' => 'Members'
    ];

    public static function boot()
    {
        parent::boot();
        // static::deleting(function($obj) {
        //     \Storage::disk('public_folder')->delete("publications/1642433557_2020 'B' STREAM I POP.pdf");
        // });
    }

    public function setFileAttribute($value)
    {
        $attribute_name = "file";
        $disk = "public";
        $destination_path = "publications";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

}
