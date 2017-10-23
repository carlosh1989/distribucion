<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Coste extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_costes';
	protected $primaryKey = 'id';

}