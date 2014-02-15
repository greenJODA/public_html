<?php

class UserIdentity extends CUserIdentity {
    // ����� ������� id.
    protected $_id;
 
    // ������ ����� ���������� ���� ��� ��� �������������� ������������.
    public function authenticate(){
        // ���������� ����������� ��������������, ��������� � �����������.
        $user = Users::model()->find('LOWER(username)=?', array(strtolower($this->username)));
        if(($user===null) || ($this->password)!==$user->password) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else {
            // � �������� �������������� ����� ������������ id, � �� username,
            // ��� ��� ���������� �� ���������. ����������� ����� ��������������
            // ����� getId(��. ����).
            $this->_id = $user->User_id;
 
            // ����� ����� ��� �� �����������, ���� ��� ����� ����������
            // � ����� ����������. ������������ ��� Yii::app()->user->name.
            // realName ���� � ����� ������. � ��� ��� ����� ���� name, firstName
            // ��� ���-���� ���.
            $this->username = $user->UserName;
 
            $this->errorCode = self::ERROR_NONE;
        }
       return !$this->errorCode;
    }
 
    public function getId(){
        return $this->_id;
    }
}