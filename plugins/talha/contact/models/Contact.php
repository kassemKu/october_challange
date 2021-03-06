<?php namespace Talha\Contact\Models;

use Model;

/**
 * Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $fillable = [
        'member_name',
        'phone_number',
        'content',
        'en_description'
    ];

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'talha_contact_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
