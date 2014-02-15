<?php
	class WebUser extends CWebUser {
    private $_model = null;
 
    function getRole() {
        if($user = $this->getModel()){
            // � ������� User ���� ���� role
            return $user->Role;
        }
    }
 
    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = Users::model()->findByPk($this->id, array('select' => 'Role'));
        }
        return $this->_model;
    }
}
?>