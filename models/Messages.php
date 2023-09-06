<?php

namespace app\models;

use yii\db\ActiveRecord;

class Messages extends ActiveRecord
{
    public static function tableName()
    {
        return 'messages';
    }

    public function rules()
    {
        return [
            [['text', 'id_cafe'], 'required'],
            [['text'], 'string'],
            [['id_cafe'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'id_cafe' => 'Cafe ID',
        ];
    }
}