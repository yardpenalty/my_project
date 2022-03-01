<?php 
namespace App\Controller;

use App\Entity\Vehicle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class VehicleController extends AbstractController
{
    public function indexAction(Request $request) 
    {
        $vehicles = $this->getDoctrine()->getRepository(persistentObject: Vehicle::class)->findAll();

        return $this->json($vehicles);
    }

    public function createAction(Request $request): Response
    {
        return $this->json(data: '');
    }
}
 