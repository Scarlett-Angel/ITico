<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "word".
 *
 * @property integer $idword
 * @property string $description
 * @property string $value
 * @property string $owner_user_name
 *
 * @property User $ownerUserName
 * @property WordListHasWord[] $wordListHasWords
 * @property WordList[] $wordListIdwordLists
 */
class Word extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'word';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'value', 'owner_user_name'], 'required'],
            [['description'], 'string'],
            [['value'], 'string', 'max' => 25],
            [['owner_user_name'], 'string', 'max' => 45],
            [['owner_user_name'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_user_name' => 'name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idword' => 'Idword',
            'description' => 'Description',
            'value' => 'Value',
            'owner_user_name' => 'Owner User Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwnerUserName()
    {
        return $this->hasOne(User::className(), ['name' => 'owner_user_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWordListHasWords()
    {
        return $this->hasMany(WordListHasWord::className(), ['word_idword' => 'idword']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWordListIdwordLists()
    {
        return $this->hasMany(WordList::className(), ['idword_list' => 'word_list_idword_list'])->viaTable('word_list_has_word', ['word_idword' => 'idword']);
    }

    /**
     * @inheritdoc
     * @return WordQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new WordQuery(get_called_class());
    }
}
