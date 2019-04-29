<?php
class Ourproject extends AppModel
{
    public $validationDomain = 'validation';
    public $useTable='projects';
    public $hasMany=array('ProjectsPhoto','ProjectsLayoutplan','ProjectsLocationmap');
    
}
