<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "puesto".
 *
 * @property integer $puesto_id
 * @property string $nombre
 * @property integer $dependencia_id
 * @property integer $subdependencia_id
 * @property integer $direccion_id
 * @property integer $departamento_id
 *
 * @property Conmutador[] $conmutadors
 * @property Funcionario[] $funcionarios
 * @property Departamento $departamento
 * @property Dependencia $dependencia
 * @property Direccion $direccion
 * @property Subdependencia $subdependencia
 */
class Puesto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'puesto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['puesto_id', 'nombre', 'dependencia_id'], 'required'],
            [['puesto_id', 'dependencia_id', 'subdependencia_id', 'direccion_id', 'departamento_id'], 'integer'],
            [['nombre'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'puesto_id' => Yii::t('app', 'Puesto ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'dependencia_id' => Yii::t('app', 'Dependencia ID'),
            'subdependencia_id' => Yii::t('app', 'Subdependencia ID'),
            'direccion_id' => Yii::t('app', 'Direccion ID'),
            'departamento_id' => Yii::t('app', 'Departamento ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConmutadors()
    {
        return $this->hasMany(Conmutador::className(), ['puesto_id' => 'puesto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::className(), ['puesto_id' => 'puesto_id']);
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
    public function getSubdependencia()
    {
        return $this->hasOne(Subdependencia::className(), ['subdependencia_id' => 'subdependencia_id']);
    }
}
