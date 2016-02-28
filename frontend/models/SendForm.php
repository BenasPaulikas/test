<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * SendFrom is the model behind the send form.
 */
class SendForm extends Model
{
    public $user_id;
    public $amount;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'amount'], 'required'],
            ['user_id', 'exist', 'targetClass' => 'common\models\User', 'targetAttribute' => 'id'],
            ['amount', 'number', 'min' => 1],
            ['amount', 'validateAmount'],
        ];

    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'Receiver',
        ];
    }


    /**
     * Validates if user has enough money
     * @return bool
     */
    public function validateAmount()
    {
        if ($this->amount > Yii::$app->user->identity->balance) {
            $this->addError('amount', "Sorry. You don't have enough money.");
            return false;
        }
        return true;
    }
}
