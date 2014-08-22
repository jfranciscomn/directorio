<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edificio".
 *
 * @property integer $edificio_id
 * @property string $nombre
 * @property integer $estado_id
 * @property integer $municipio_id
 * @property string $ubicacion
 *
 * @property Estado $estado
 * @property Municipio $municipio
 * @property Extension[] $extensions
 */
class Edificio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'edificio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'estado_id', 'municipio_id'], 'required'],
            [['estado_id', 'municipio_id'], 'integer'],
            [['ubicacion'], 'string'],
            [['nombre'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'edificio_id' => Yii::t('app', 'Edificio ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'estado_id' => Yii::t('app', 'Estado ID'),
            'municipio_id' => Yii::t('app', 'Municipio ID'),
            'ubicacion' => Yii::t('app', 'Ubicacion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::className(), ['estado_id' => 'estado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipio()
    {
        return $this->hasOne(Municipio::className(), ['municipio_id' => 'municipio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExtensions()
    {
        return $this->hasMany(Extension::className(), ['edificio_id' => 'edificio_id']);
    }
}
