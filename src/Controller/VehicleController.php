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
               'date_added' => $vehicle->getDateAdded(),
               'type' => $vehicle->getType(),
               'msrp' => $vehicle->getMsrp(),
               'year' => $vehicle->getYear(),
               'make' => $vehicle->getMake(),
               'model' => $vehicle->getModel(),
               'miles' => $vehicle->getMiles(),
               'vin' => $vehicle->getVin(),
               'deleted' => $vehicle->getDeleted(),
           ];
        }
 
 
        return $this->json($data);
    }

    public function createAction(Request $request): Response
    {
        return $this->json(data: '');
    }
}
 