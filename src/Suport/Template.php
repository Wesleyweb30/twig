<?php
    namespace src\Suport;

    class Template{
        private \Twig\Environment $twig;

        public function __construct(string $diretorio)
        {
            $loader = new \Twig\Loader\FilesystemLoader($diretorio);
            $this->twig = new \Twig\Environment($loader);
        }

        public function renderizar(string $views, array $dados): string{
            return $this->twig->render($views, $dados);
        }
    }
?>