<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property integer $departamento_id
 * @property string $nombre
 * @property integer $dependencia_id
 * @property integer $subdependencia_id
 * @property integer $direccion_id
 *
 * @property Conmutador[] $conmutadors
 * @property Dependencia $dependencia
 * @property Direccion $direccion
 * @property Subdependencia $subdependencia
 * @property Funcionario[] $funcionarios
 * @property Puesto[] $puestos
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'dependencia_id'], 'required'],
            [['dependencia_id', 'subdependencia_id', 'direccion_id'], 'integer'],
            [['nombre'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'departamento_id' => Yii::t('app', 'Departamento ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'dependencia_id' => Yii::t('app', 'Dependencia ID'),
            'subdependencia_id' => Yii::t('app', 'Subdependencia ID'),
            'direccion_id' => Yii::t('app', 'Direccion ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConmutadors()
    {
        return $this->hasMany(Conmutador::className(), ['departamento_id' => 'departamento_id']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::className(), ['departamento_id' => 'departamento_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuestos()
    {
        return $this->hasMany(Puesto::className(), ['departamento_id' => 'departamento_id']);
    }
}
