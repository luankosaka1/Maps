<?php

class Veiculo extends Eloquent
{
	public $table = 'veiculo';

	public function empresa()
	{
		return $this->hasOne('Veiculo', 'id', 'veiculo_id');
	}
}