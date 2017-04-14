<?php
App::uses('AppModel', 'Model');
class User extends AppModel {

////////////////////////////////////////////////////////////

    public $validate = array(
        'name' => array(
            'rule1' => array(
                'rule' => array('notBlank'),
                'message' => 'name is required',
                //'allowEmpty' => false,
                //'required' => false,
            ),
        ),
        'username' => array(
            'rule1' => array(
                'rule' => array('lengthBetween', 3, 60),
                'message' => 'username is required',
                'allowEmpty' => false,
                'required' => false,
            ),
            'rule2' => array(
                'rule' => array('isUnique'),
                'message' => 'username already exists',
                'allowEmpty' => false,
                'required' => false,
            ),
        ),
        'password' => array(
            'rule1' => array(
                'rule' => array('lengthBetween', 1, 30),
                'message' => 'password is required'
            ),
        ),
		'passwordconfirm' => array(
			'identical' => array(
				'rule' => array('identicalFieldValues', 'password'),
				'message' => 'Password confirmation does not match password. Please try again'
			),
		),

    );

////////////////////////////////////////////////////////////

    public function beforeSave($options = array()) {
        if(isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

////////////////////////////////////////////////////////////

    function identicalFieldValues( $field=array(), $compare_field=null )  
    { 
        foreach( $field as $key => $value ){ 
            $v1 = $value; 
            $v2 = $this->data[$this->name][ $compare_field ];                  
            if($v1 !== $v2) { 
                return FALSE; 
            } else { 
                continue; 
            } 
        } 
        return TRUE; 
    } 

////////////////////////////////////////////////////////////
}

