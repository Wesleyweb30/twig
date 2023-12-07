<?php
    require 'vendor/autoload.php';

    use src\Nucleo\Controlador;

    class siteControlador extends Controlador{
        public function __construct()
        {
            parent::__construct('src/views');
        }

        public function index(): void
        {
            echo $this->template->renderizar('index.html',[
                "nome" => "Wesley"
            
            ]);
        }
    }
    
    $siteControlador = (new siteControlador())->index();
    


?>
