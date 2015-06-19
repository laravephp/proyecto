<?php
class Tarea extends Eloquent {

	//autoriza asignación masiva
	protected $fillable = ['folio', 
							'oficioReferencia',
							'descripcion' ];
	public $timestamps = false;
	
	{
	    $this->attributes['fecha_respuesta'] = date("yy-mm-dd", strtotime($value) );
	}
  
    public function user()
    {
    	return $this->belongsTo('User');
    }
  
}