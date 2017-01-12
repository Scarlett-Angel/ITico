<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $name
 * @property string $password
 * @property string $email
 *
 * @property Complex[] $complexes
 * @property ComplexList[] $complexLists
 * @property Page[] $pages
 * @property Sentence[] $sentences
 * @property SentenceList[] $sentenceLists
 * @property Template[] $templates
 * @property UserHasComplexList[] $userHasComplexLists
 * @property ComplexList[] $complexListIdcomplexLists
 * @property UserHasSentenceList[] $userHasSentenceLists
 * @property SentenceList[] $sentenceListIdsentenceLists
 * @property UserHasTemplate[] $userHasTemplates
 * @property Template[] $templateIdtemplates
 * @property UserHasWordList[] $userHasWordLists
 * @property WordList[] $wordListIdwordLists
 * @property Word[] $words
 * @property WordList[] $wordLists
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'password', 'email'], 'required'],
            [['name', 'email'], 'string', 'max' => 45],
            [['password'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComplexes()
    {
        return $this->hasMany(Complex::className(), ['owner_user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComplexLists()
    {
        return $this->hasMany(ComplexList::className(), ['owner_user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Page::className(), ['owner_user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSentences()
    {
        return $this->hasMany(Sentence::className(), ['owner_user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSentenceLists()
    {
        return $this->hasMany(SentenceList::className(), ['owner_user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTemplates()
    {
        return $this->hasMany(Template::className(), ['owner_user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserHasComplexLists()
    {
        return $this->hasMany(UserHasComplexList::className(), ['user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComplexListIdcomplexLists()
    {
        return $this->hasMany(ComplexList::className(), ['idcomplex_list' => 'complex_list_idcomplex_list'])->viaTable('user_has_complex_list', ['user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserHasSentenceLists()
    {
        return $this->hasMany(UserHasSentenceList::className(), ['user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSentenceListIdsentenceLists()
    {
        return $this->hasMany(SentenceList::className(), ['idsentence_list' => 'sentence_list_idsentence_list'])->viaTable('user_has_sentence_list', ['user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserHasTemplates()
    {
        return $this->hasMany(UserHasTemplate::className(), ['user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTemplateIdtemplates()
    {
        return $this->hasMany(Template::className(), ['idtemplate' => 'template_idtemplate'])->viaTable('user_has_template', ['user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserHasWordLists()
    {
        return $this->hasMany(UserHasWordList::className(), ['user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWordListIdwordLists()
    {
        return $this->hasMany(WordList::className(), ['idword_list' => 'word_list_idword_list'])->viaTable('user_has_word_list', ['user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWords()
    {
        return $this->hasMany(Word::className(), ['owner_user_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWordLists()
    {
        return $this->hasMany(WordList::className(), ['owner_user_name' => 'name']);
    }

    /**
     * @inheritdoc
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}
