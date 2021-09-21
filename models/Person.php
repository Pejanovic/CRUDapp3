<?php

namespace app\models;

use Yii;


class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['name', 'lastname', 'birthdate', 'birthplace', 'education', 'privatelife', 'work', 'achievements'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */

}