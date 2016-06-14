<?php
namespace App\Action;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeAction
{
    private $view;
    private $logger;

    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->logger->info("Home page action dispatched");
        
        $this->view->render($response, 'home.twig');
        return $response;
    }

    public function viewAcerca(Request $request, Response $response, $args){
        $this->logger->info("Acerca page action dispatched");
        
        $this->view->render($response, 'acerca.twig');
        return $response;
    }

    public function viewServicios(Request $request, Response $response, $args){
        $this->logger->info("Servicios page action dispatched");
        
        $this->view->render($response, 'servicios.twig');
        return $response;
    }

    public function viewProductos(Request $request, Response $response, $args){
        $this->logger->info("Productos page action dispatched");
        
        $this->view->render($response, 'productos.twig');
        return $response;
    }

    public function viewContacto(Request $request, Response $response, $args){
        $this->logger->info("Contacto page action dispatched");
        
        $this->view->render($response, 'contacto.twig');
        return $response;
    }

}
