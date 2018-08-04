<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 8/4/18
 * Time: 2:45 PM
 */
class Repository
{
    const DATA_FILE = 'words_examples.json';
    private $_word = null;
    private $_words_examples = array();

    public function __construct()
    {
        $this->_word = new Word();
        $this->_words_examples = $this->_initData();
    }

    private function _initData()
    {
        $array = $this->_toArray(file_get_contents(self::DATA_FILE));
        if (empty($array)) {
            return array();
        }
        return $array;
    }

    private function _toArray($json_data)

    {
        return json_decode($json_data, true);
    }

    private function _toJson(array $item)
    {
        if (empty($item)) {
            return '';
        }
        return json_encode($item, JSON_PRETTY_PRINT);
    }

    private function _save()
    {
        $json_data = $this->_toJson($this->_words_examples);
        if(!file_put_contents(self::DATA_FILE, $json_data)) {
            return false;
        }
        return true;
    }

    public function findByWord(Word $word)
    {
        if (!isset($this->_words_examples[$word->getI()])) {
            return array();
        }
        return new Word($word->getW(), $this->_words_examples[$word->getI()]['e']);
    }

    public function findByTerm($term)
    {
        $w = new Word($term);
        var_dump($this->_toArray($this->findByWord($w)));die;
        return $this->_toJson($this->_toArray($this->findByWord($w)));
    }

    public function add(Word $word)
    {
        $find = $this->findByWord($word);
        if (empty($find)) {
            //add new
            $this->_words_examples[$word->getI()] = $word->toArray();
        } else {
            //add more examples
            $find->setE(array_merge($find->getE(),$word->getE()));
            $this->_words_examples[$word->getI()] = $find->toArray();
        }
        return $this->_save();
    }

    public function getList($limit = 5)
    {
        return $this->_toJson($this->_words_examples);
    }
}