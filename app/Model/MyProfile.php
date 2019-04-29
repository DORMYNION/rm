<?php
class MyProfile extends AppModel
{
  public $validationDomain = 'validation';
  public $useTable="clients";
  public $hasMany=array('ClientsCoapplicant');
}
?>