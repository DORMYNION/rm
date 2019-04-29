<?php
class Ourproperty extends AppModel
{
    public $validationDomain = 'validation';
    public $useTable='properties';
    public $hasMany=array('PropertiesPhoto','PropertiesDocument');
    
}
