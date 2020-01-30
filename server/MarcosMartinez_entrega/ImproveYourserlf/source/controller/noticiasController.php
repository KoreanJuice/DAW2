<?php
class NoticiasController
{
    public function verNoticias()
    {
        require_once __DIR__ . '/../repo/noticiasRepositorio.php';//'/../Repositorio/noticiasRepositorio.php';
        $noticias = (new noticiasRepositorio)->findAllNoticias();
        include_once __DIR__ . '/../../app/html/noticias.php';
    }
}
