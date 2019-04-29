<?php
class Content extends AppModel
{
  public $validationDomain = 'validation';
  public $actsAs = array('search-master.Searchable');
  public $filterArgs = array('keyword' => array('type' => 'like','field'=>'Content.link_name'));
  public $validate =array('link_name' => array('alphaNumeric'=>array('rule' =>'alphaNumericCustom','required'=>true,'allowEmpty'=>false,'message'=>'Only Alphabets')),
                          'parent_id' => array('Numeric'=>array('rule' =>'Numeric','required'=>true,'allowEmpty'=>false)),
                          'ordering' => array('Numeric'=>array('rule' =>'Numeric','required'=>true,'allowEmpty'=>false)),
                          'url' => array('alphaNumeric'=>array('rule' =>'alphaNumericCustom','required'=>true,'allowEmpty'=>true,'message'=>'Only Url')),
                          ); 
}
?>