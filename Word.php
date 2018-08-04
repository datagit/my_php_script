<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 8/4/18
 * Time: 2:42 PM
 */

class Word
{
    private $i = '';
    private $w = '';
    private $e = array();

    /**
     * Word constructor.
     * @param string $w
     * @param array $e
     */
    public function __construct($w = '', array $e = array())
    {
        $this->toObject($w, $e);
    }


    /**
     * @return string
     */
    public function getI()
    {
        return $this->i;
    }

    /**
     *
     */
    private function setI()
    {
        $this->i = md5(strtolower($this->getW()));
    }

    /**
     * @return string
     */
    public function getW()
    {
        return $this->w;
    }

    /**
     * @param string $w
     */
    public function setW($w)
    {
        $this->w = $w;
        $this->setI();
    }

    /**
     * @return array
     */
    public function getE()
    {
        return $this->e;
    }

    /**
     * @param array $e
     */
    public function setE($e)
    {
        $this->e = $e;
    }

    public function toJson()
    {
        $array = array(
            'i' => $this->getI(),
            'w' => $this->getW(),
            'e' => $this->getE(),
        );
        return json_encode($array);
    }

    public function toArray()
    {
        $array = array(
            'i' => $this->getI(),
            'w' => $this->getW(),
            'e' => $this->getE(),
        );
        return $array;
    }

    public function toObject($w, array $e)
    {
        $this->setE($e);
        $this->setW($w);
    }


}