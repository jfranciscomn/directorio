<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property integer $estado_id
 * @property string $nombre
 *
 * @property Edificio[] $edificios
 * @property Municipio[] $municipios
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'estado_id' => Yii::t('app', 'Estado ID'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEdificios()
    {
        return $this->hasMany(Edificio::className(), ['estado_id' => 'estado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipios()
    {
        return $this->hasMany(Municipio::className(), ['estado_id' => 'estado_id']);
    }
}
