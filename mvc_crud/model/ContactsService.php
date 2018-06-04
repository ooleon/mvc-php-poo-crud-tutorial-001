<?php

require_once 'model/ContactsGateway.php';
require_once 'model/ValidationException.php';


class ContactsService {
    
    private $contactsGateway    = NULL;
    
    private function openDb() {
        if (!mysql_connect("localhost", "root", "")) {
            throw new Exception("Conexion a la base de datos fallida!");
        }
        if (!mysql_select_db("contacts")) {
            throw new Exception("No se encontro la base de datos contacts en el servidor de base de datos.");
        }
    }
    
    private function closeDb() {
        mysql_close();
    }
  
    public function __construct() {
        $this->contactsGateway = new ContactsGateway();
    }
    
    public function getAllContacts($order) {
        try {
            $this->openDb();
            $res = $this->contactsGateway->selectAll($order);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
    
    public function getContact($id) {
        try {
            $this->openDb();
            $res = $this->contactsGateway->selectById($id);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
        return $this->contactsGateway->find($id);
    }
    
    private function validateContactParams( $name, $phone, $email, $address ) {
        $errors = array();
        if ( !isset($name) || empty($name) ) {
            $errors[] = 'Nombre es requerido';
        }
        if ( empty($errors) ) {
            return;
        }
        throw new ValidationException($errors);
    }
    
    public function createNewContact( $name, $phone, $email, $address ) {
        try {
            $this->openDb();
            $this->validateContactParams($name, $phone, $email, $address);
            $res = $this->contactsGateway->insert($name, $phone, $email, $address);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
    
    private function validateContactParamsU( $id, $name, $phone, $email, $address ) {
        $errors = array();
        if ( !isset($id) || empty($id) ) {
            $errors[] = 'id es requerido';
        }
        if ( !isset($name) || empty($name) ) {
            $errors[] = 'Nombre es requiredo';
        }
        if ( empty($errors) ) {
            return;
        }
        throw new ValidationException($errors);
    }
    
    public function updateContact( $id, $name, $phone, $email, $address ) {
        try {
            $this->openDb();
            $this->validateContactParamsU($id, $name, $phone, $email, $address);
            $res = $this->contactsGateway->update($id, $name, $phone, $email, $address);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
    
    public function deleteContact( $id ) {
        try {
            $this->openDb();
            $res = $this->contactsGateway->delete($id);
            $this->closeDb();
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
    
    
}

?>
