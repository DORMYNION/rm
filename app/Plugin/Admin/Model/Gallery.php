<?php
class Gallery extends AppModel {
    public $validationDomain = 'validation';
    public $actsAs = array('search-master.Searchable','Upload.Upload' => array(
            'photo' => array(
                'pathMethod'=>'flat',
                'thumbnailSizes' => array('' => '300x300',),
		'path' => '{ROOT}webroot{DS}img{DS}gallery{DS}',
                'thumbnailPath' => '{ROOT}webroot{DS}img{DS}gallery_thumb{DS}',
                'thumbnailMethod' => 'php',
                'thumbnailPrefixStyle' => false,
		'deleteOnUpdate' => true,
                'thumbnailType'=>true
            ),
        )
    );
    public $filterArgs = array('keyword' => array('type' => 'like','field'=>'Category.name'));
    public $validate = array('name' => array('alphaNumeric' => array('rule' => 'alphaNumericCustom','required' => true,'allowEmpty' => false,'message' => 'Only letters and numbers allowed')),
                             'category_id' => array('alphaNumeric'=>array('rule' => 'alphaNumeric','required' =>true)),
                            'photo' => array('isValidExtension' =>array('rule' => array('isValidExtension', array('jpg', 'jpeg', 'png'),false),'allowEmpty' => true,'message' => 'File does not have a valid extension'),
				   'isValidMimeType' => array('rule' => array('isValidMimeType', array('image/jpeg','image/png','image/bmp','image/gif'),false),'allowEmpty' => true,'message' => 'You must supply a JPG, GIF  or PNG File.'))
                           );
    public $belongsTo=array('Category');
    
}
?>