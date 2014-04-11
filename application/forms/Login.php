<?php
class Application_Form_Login extends Zend_Form{

    public function init(){
        // Set the method for the display form to POST
        $this->setMethod('post');

        $this->addElement('text', 'username', array(
            'label'      => 'Username',
            'required'   => true,
            'filters'    => array('StringTrim'),
        ));

        $this->addElement('password', 'password', array(
            'label'      => 'Password',
            'required'   => true,
            'filters'    => array('StringTrim'),
        ));

        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Login',
        ));

        $this->addElement('login_hash', 'csrf', array(
            'ignore' => true,
        ));
    }
}
