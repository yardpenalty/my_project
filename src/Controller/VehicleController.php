<?php 
namespace App\Controller;

use App\Entity\Vehicle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
class VehicleController extends AbstractController
{
    public function indexAction(Request $request): Response
    {
   
        $vehicles = $this->getDoctrine()->getRepository(persistentObject: Vehicle::class)->findAll();
        $data = [];
 
        foreach ($vehicles as $vehicle) {
           $data[] = [
               'id' => $vehicle->getId(),
               'vin' => $vehicle->getVin(),
               'make' => $vehicle->getMake(),
               'model' => $vehicle->getModel(),
           ];
        }
 
 
        return $this->json($data);
    }

    public function createAction(Request $request): Response
    {
        return $this->json(data: '');
    }
}
 