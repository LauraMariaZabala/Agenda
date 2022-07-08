<?php

    require 'model/contactModel.php';
    class  contactController 
    {
        private $contactModel;

        public function __construct()
        {
            $this->contactModel = new Contact;
        }

        public function Index()
        {
            $contact = $this->contactModel->getAll();
            require 'view/layout.php';
            require 'view/contact/list.php';
        }

        public function new()
        {       
            require 'view/layout.php';
            require 'view/contact/new.php';
        }

        public function save()
        {
            $this->contactModel->newContact($_POST);
            header('Location: ?controller=contact');
        }

        public function edit()
        {
            if (isset($_REQUEST['id'])) {
                $id = $_REQUEST['id'];
                $contact = $this->contactModel->getById($id);
                require 'view/layout.php';
                require 'view/contact/edit.php';
            }else{
                echo "El contacto no existe";
            }
        }

        public function update()
        {
            if (isset($_POST)) {
                $this->contactModel->editcontact($_POST);
                header('Location: ?controller=contact');
            }else{
                echo "Error, accion no permitida";
            }
        }
        public function delete()
{
		$this->contactModel->deleteContact($_REQUEST);
		header('Location: ?controller=contact');
}
    }