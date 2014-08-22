<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "extension".
 *
 * @property integer $extension_id
 * @property string $num_ext
 * @property string $tel_directo
 * @property integer $conmutador_id
 * @property integer $edificio_id
 * @property string $confidencialidad
 * @property integer $funcionario_id
 *
 * @property Conmutador $conmutador
 * @property Edificio $edificio
 * @property Funcionario $funcionario
 */
class Extension extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'extension';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_ext', 'conmutador_id', 'edificio_id', 'funcionario_id'], 'required'],
            [['conmutador_id', 'edificio_id', 'funcionario_id'], 'integer'],
            [['num_ext'], 'string', 'max' => 10],
            [['tel_directo', 'confidencialidad'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extension_id' => Yii::t('app', 'Extension ID'),
            'num_ext' => Yii::t('app', 'Num Ext'),
            'tel_directo' => Yii::t('app', 'Tel Directo'),
            'conmutador_id' => Yii::t('app', 'Conmutador ID'),
            'edificio_id' => Yii::t('app', 'Edificio ID'),
            'confidencialidad' => Yii::t('app', 'Confidencialidad'),
            'funcionario_id' => Yii::t('app', 'Funcionario ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConmutador()
    {
        return $this->hasOne(Conmutador::className(), ['conmutador_id' => 'conmutador_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEdificio()
    {
        return $this->hasOne(Edificio::className(), ['edificio_id' => 'edificio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionario()
    {
        return $this->hasOne(Funcionario::className(), ['funionario_id' => 'funcionario_id']);
    }
}
