<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public string $name = '';
    public string $email = '';

    public function rules(): array
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}