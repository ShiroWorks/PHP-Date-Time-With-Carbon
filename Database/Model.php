<?php

namespace Project\Database;

use PDO;
use Carbon\Carbon;

class Model
{
    public $data;
    public $dates = [];
    public function __construct(){
        // Don't do this

        $this->db = new PDO('mysql:host=localhost;dbname=carbon','root','');

    }

    public function __get($key)
    {
        return $this->data[$key];
    }

    public function getFirst()
    {
        $this->data =$this->getCollection($this->getFirstRecord()->fetchObject());
        return $this->data;
    }
    protected function getFirstRecord()
    {
    return $this->db->query("SELECT * FROM {$this->table} LIMIT 1");
    }
    protected function getCollection(\stdClass $object)
    {
        //Transform dates
        foreach($this->dates as $date){
            $object->{$date} = $this->newCarbon()->parse($object->{$date});
        }
        return $object;
    }
    protected function newCarbon()
    {
        return new Carbon;
    }

}