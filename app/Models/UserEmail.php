<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmail extends Model
{
    use HasFactory;

    public $toAddres;
    public $title;
    public $body;

    public function __construct($to, $title,$body){
        $this->toAddress = $to;
        $this->title = $title;
        $this->body = $body;
    }

    public function getToAddress(){
        return $this->toAddress;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getBody(){
        return $this->body;
    }
}
