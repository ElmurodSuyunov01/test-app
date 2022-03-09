<?php

namespace backend\models;

use yii\base\Model;

class PersonForm extends Model
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;

    public function rules()
    {
        return[
            [['first_name','last_name','email'],'required'],
            [['first_name','last_name','email'],'string'],
            ['email','email'],
        ];
        
    }

}