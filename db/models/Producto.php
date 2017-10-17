<?php 
namespace Models;
use \Illuminate\Database\Eloquent\Model;
 
class Producto extends Model {
	public $timestamps = false;
    protected $table = 'distribucion_productos';
	protected $primaryKey = 'id';

}