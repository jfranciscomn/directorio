<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "direccion".
 *
 * @property integer $direccion_id
 * @property string $nombre
 * @property integer $dependencia_id
 * @property integer $subdependencia_id
 *
 * @property Conmutador[] $conmutadors
 * @property Departamento[] $departamentos
 * @property Dependencia $dependencia
 * @property Subdependencia $subdependencia
 * @property Funcionario[] $funcionarios
 * @property Puesto[] $puestos
 */
class Direccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'direccion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'dependencia_id'], 'required'],
            [['dependencia_id', 'subdependencia_id'], 'integer'],
            [['nombre'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'direccion_id' => Yii::t('app', 'Direccion ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'dependencia_id' => Yii::t('app', 'Dependencia ID'),
            'subdependencia_id' => Yii::t('app', 'Subdependencia ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConmutadors()
    {
        return $this->hasMany(Conmutador::className(), ['direccion_id' => 'direccion_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['direccion_id' => 'direccion_id']);
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
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::className(), ['direccion_id' => 'direccion_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuestos()
    {
        return $this->hasMany(Puesto::className(), ['direccion_id' => 'direccion_id']);
    }
}
