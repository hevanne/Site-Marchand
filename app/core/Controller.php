<?php

abstract class Controller {
    protected $viewPath = '../app/views/'; // Chemin vers les vues
    protected $data = []; // Données à passer à la vue


    protected function view($viewName, $data = [], $status = 200) {
        $this->data = $data;
        $filePath = $this->viewPath . $viewName . '.php';

        if (file_exists($filePath)) {
            // Extraire les données pour qu'elles soient disponibles dans la vue comme des variables
            extract($this->data);
            http_response_code($status);
            require $filePath;
        } else {
            throw new Exception("Vue non trouvée : " . $filePath);
        }
    }

    protected function json($data, $status = 200) {
       header('Content-Type: application/json');
       http_response_code($status);
       echo json_encode($data);
       exit();
   }

    protected function redirectTo($url) {
        header("Location: $url");
        exit();
    }
}
