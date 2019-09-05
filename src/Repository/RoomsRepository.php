<?php 

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class RoomsRepository extends EntityRepository
{
    public function room()
    {
        $sql1 = "SELECT d FROM App:Rooms d";
        $apotelesmata = $this->getEntityManager()->createQuery($sql1)->getResult();
        return ($apotelesmata);
    }
}