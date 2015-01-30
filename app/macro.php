<?php

Form::macro('delete', function($url, $string, $options)
{
	$parameters = ['url' => $url, 'class' => 'form-delete'];

    return Form::open($parameters).Form::submit($string, $options).Form::close();
});