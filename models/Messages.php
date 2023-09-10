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
/*
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Текст сообщения',
            'id_cafe' => 'ID кафе',
        ];
    }
    */
    public function getCafe()
    {
        return $this->hasOne(Cafe::class, ['id_cafe' => 'id_cafe']);
    }
}