<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property integer $funionario_id
 * @property string $nombre
 * @property string $apellido
 * @property integer $dependencia_id
 * @property integer $subdependencia_id
 * @property integer $direccion_id
 * @property integer $departamento_id
 * @property integer $puesto_id
 * @property string $correo_electronico
 *
 * @property Extension[] $extensions
 * @property Dependencia $dependencia
 * @property Subdependencia $subdependencia
 * @property Direccion $direccion
 * @property Departamento $departamento
 * @property Puesto $puesto
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'dependencia_id', 'puesto_id'], 'required'],
            [['dependencia_id', 'subdependencia_id', 'direccion_id', 'departamento_id', 'puesto_id'], 'integer'],
            [['nombre', 'apellido', 'correo_electronico'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'funionario_id' => Yii::t('app', 'Funionario ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellido' => Yii::t('app', 'Apellido'),
            'dependencia_id' => Yii::t('app', 'Dependencia ID'),
            'subdependencia_id' => Yii::t('app', 'Subdependencia ID'),
            'direccion_id' => Yii::t('app', 'Direccion ID'),
            'departamento_id' => Yii::t('app', 'Departamento ID'),
            'puesto_id' => Yii::t('app', 'Puesto ID'),
            'correo_electronico' => Yii::t('app', 'Correo Electronico'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExtensions()
    {
        return $this->hasMany(Extension::className(), ['funcionario_id' => 'funionario_id']);
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
    public function getSubdependencia()
    {
        return $this->hasOne(Subdependencia::className(), ['subdependencia_id' => 'subdependencia_id']);
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
    public function getDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['departamento_id' => 'departamento_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuesto()
    {
        return $this->hasOne(Puesto::className(), ['puesto_id' => 'puesto_id']);
    }
}
