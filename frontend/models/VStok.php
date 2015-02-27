<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "v_stok".
 *
 * @property string $kode
 * @property string $size
 * @property integer $qty
 */
class VStok extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'v_stok';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
