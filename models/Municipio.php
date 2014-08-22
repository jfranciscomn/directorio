<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municipio".
 *
 * @property integer $municipio_id
 * @property string $nombre
 * @property integer $estado_id
 *
 * @property Edificio[] $edificios
 * @property Estado $estado
 */
class Municipio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'municipio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'estado_id'], 'required'],
            [['estado_id'], 'integer'],
            [['nombre'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'municipio_id' => Yii::t('app', 'Municipio ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'estado_id' => Yii::t('app', 'Estado ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEdificios()
    {
        return $this->hasMany(Edificio::className(), ['municipio_id' => 'municipio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::className(), ['estado_id' => 'estado_id']);
    }
}
