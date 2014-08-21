<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conmutador".
 *
 * @property integer $conmutador_id
 * @property string $nombre
 * @property string $marca
 * @property string $modelo
 * @property string $version
 * @property integer $dependencia_id
 * @property integer $subdependencia_id
 * @property integer $direccion_id
 * @property integer $departamento_id
 * @property integer $puesto_id
 * @property string $numero
 * @property string $direccion_ip
 *
 * @property Departamento $departamento
 * @property Dependencia $dependencia
 * @property Direccion $direccion
 * @property Puesto $puesto
 * @property Subdependencia $subdependencia
 * @property Extension[] $extensions
 * @property PlanMarcacion[] $planMarcacions
 */
class Conmutador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'conmutador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'marca', 'modelo', 'version', 'dependencia_id', 'puesto_id', 'numero', 'direccion_ip'], 'required'],
            [['dependencia_id', 'subdependencia_id', 'direccion_id', 'departamento_id', 'puesto_id'], 'integer'],
            [['nombre'], 'string', 'max' => 256],
            [['marca', 'modelo', 'version', 'numero', 'direccion_ip'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'conmutador_id' => Yii::t('app', 'Conmutador ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'marca' => Yii::t('app', 'Marca'),
            'modelo' => Yii::t('app', 'Modelo'),
            'version' => Yii::t('app', 'Version'),
            'dependencia_id' => Yii::t('app', 'Dependencia ID'),
            'subdependencia_id' => Yii::t('app', 'Subdependencia ID'),
            'direccion_id' => Yii::t('app', 'Direccion ID'),
            'departamento_id' => Yii::t('app', 'Departamento ID'),
            'puesto_id' => Yii::t('app', 'Puesto ID'),
            'numero' => Yii::t('app', 'Numero'),
            'direccion_ip' => Yii::t('app', 'Direccion Ip'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['departamento_id' => 'departamento_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencia()
    {
        return $this->hasOne(Dependencia::className(), ['dependencia_id' => 'dependencia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDireccion()
    {
        return $this->hasOne(Direccion::className(), ['direccion_id' => 'direccion_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuesto()
    {
        return $this->hasOne(Puesto::className(), ['puesto_id' => 'puesto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubdependencia()
    {
        return $this->hasOne(Subdependencia::className(), ['subdependencia_id' => 'subdependencia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExtensions()
    {
        return $this->hasMany(Extension::className(), ['conmutador_id' => 'conmutador_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanMarcacions()
    {
        return $this->hasMany(PlanMarcacion::className(), ['conmutador_id' => 'conmutador_id']);
    }
}
