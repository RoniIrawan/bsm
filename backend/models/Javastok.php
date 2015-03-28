<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "javastok".
 *
 * @property string $kode
 * @property string $size
 * @property integer $qty
 */
class Javastok extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'javastok';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'size'], 'required'],
            [['qty'], 'integer'],
            [['kode', 'size'], 'string', 'max' => 7]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'size' => 'Size',
            'qty' => 'Qty',
        ];
    }
}
