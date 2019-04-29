<?php
class Category extends AppModel {
    public $validationDomain = 'validation';
    public $actsAs = array('search-master.Searchable');
    public $filterArgs = array('keyword' => array('type' => 'like','field'=>'Category.name'));
    public $validate = array('name' => array('alphaNumeric' => array('rule' => 'alphaNumericCustom','required' => true,'allowEmpty' => false,'message' => 'Only letters and numbers allowed')),
                             'type' => array('alphaNumeric'=>array('rule' => 'alphaNumeric','required' =>true)),
                           'ordering' => array('numeric' => array('rule' => 'numeric','required' => true,'message' => 'Only numbers allowed'))
                           );
    
}
?>