<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subdependencia".
 *
 * @property integer $subdependencia_id
 * @property string $nombre
 * @property integer $dependencia_id
 *
 * @property Conmutador[] $conmutadors
 * @property Departamento[] $departamentos
 * @property Direccion[] $direccions
 * @property Funcionario[] $funcionarios
 * @property Puesto[] $puestos
 * @property Dependencia $dependencia
 */
class Subdependencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subdependencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'dependencia_id'], 'required'],
            [['dependencia_id'], 'integer'],
            [['nombre'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subdependencia_id' => Yii::t('app', 'Subdependencia ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'dependencia_id' => Yii::t('app', 'Dependencia ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConmutadors()
    {
        return $this->hasMany(Conmutador::className(), ['subdependencia_id' => 'subdependencia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['subdependencia_id' => 'subdependencia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDireccions()
    {
        return $this->hasMany(Direccion::className(), ['subdependencia_id' => 'subdependencia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::className(), ['subdependencia_id' => 'subdependencia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuestos()
    {
        return $this->hasMany(Puesto::className(), ['subdependencia_id' => 'subdependencia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencia()
    {
        return $this->hasOne(Dependencia::className(), ['dependencia_id' => 'dependencia_id']);
    }
}
