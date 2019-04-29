<?php
class Ourflat extends AppModel
{
    public $validationDomain = 'validation';
    public $useTable='properties_flats';
    public $belongsTo=array('Unit');
}
