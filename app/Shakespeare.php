<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Shakespeare extends Model
{
    use ElasticquentTrait;

    public $table = "shakespeare";

    protected $fillable = ['line_id', 'playname', 'line_number', 'speaker','text_entry'];
    
}