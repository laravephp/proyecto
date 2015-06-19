<?php
class Task extends Eloquent {

	//autoriza asignación masiva
	protected $fillable = ['folio', 
							'oficioReferencia',
							'descripcion' ];
	public $timestamps = false;
	
    public function user()
    {
    	return $this->belongsTo('User');
    }
  
}