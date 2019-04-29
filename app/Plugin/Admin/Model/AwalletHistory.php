<?php
class AwalletHistory extends AppModel
{
  public $validationDomain = 'validation';
  public $belongsTo=array('Agent');
  public $actsAs = array('search-master.Searchable');
  public $filterArgs = array('keyword' => array('type' => 'like','field'=>'AwalletHistory.remarks'));
}
?>