<?php

class Localizacao extends Eloquent
{
	public $table = 'localizacao';

	public function veiculo()
	{
		return $this->hasOne('Veiculo', 'id', 'veiculo_id');
	}
}