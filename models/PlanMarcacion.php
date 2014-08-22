<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plan_marcacion".
 *
 * @property integer $plan_marcacion_id
 * @property string $nombre
 * @property integer $ext_ini
 * @property integer $ext_fin
 * @property integer $conmutador_id
 * @property string $estado
 *
 * @property Conmutador $conmutador
 */
class PlanMarcacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plan_marcacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'ext_ini', 'ext_fin', 'conmutador_id', 'estado'], 'required'],
            [['ext_ini', 'ext_fin', 'conmutador_id'], 'integer'],
            [['nombre'], 'string', 'max' => 256],
            [['estado'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'plan_marcacion_id' => Yii::t('app', 'Plan Marcacion ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'ext_ini' => Yii::t('app', 'Ext Ini'),
            'ext_fin' => Yii::t('app', 'Ext Fin'),
            'conmutador_id' => Yii::t('app', 'Conmutador ID'),
            'estado' => Yii::t('app', 'Estado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConmutador()
    {
        return $this->hasOne(Conmutador::className(), ['conmutador_id' => 'conmutador_id']);
    }
}
