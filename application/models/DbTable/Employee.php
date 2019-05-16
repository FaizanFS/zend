<?php

class Application_Model_DbTable_Employee extends Zend_Db_Table_Abstract
{

    protected $_name = 'employees';
    
    public function createEmployee()
    {
        $front = Zend_Controller_Front::getInstance();
        $request = $front->getRequest();
        $data = array(
            'name' => $request->getPost('name'),
            'number' => $request->getPost('number'),
            'designation' => $request->getPost('designation')
        );
        $this->insert($data);
    }
    
    public function editEmployee()
    {
        $front = Zend_Controller_Front::getInstance();
        $request = $front->getRequest();
        $data = array(
            'name' => $request->getPost('name'),
            'number' => $request->getPost('number'),
            'designation' => $request->getPost('designation')
        );
        $where = array('id = ?' => $request->getParam('id'));
        $this->update($data, $where);
    }
    
    public function deleteEmployee()
    {
        $front = Zend_Controller_Front::getInstance();
        $request = $front->getRequest();
        $where = array('id = ?' => $request->getParam('id'));
        $this->delete($where);
    }

}

