<?php 
 
namespace src\Nucleo;

use src\Suport\Template;

    class Controlador
    {
        protected Template $template;

        public function __construct(string $diretorio){
            $this->template = new Template($diretorio);
        }
    }
?>