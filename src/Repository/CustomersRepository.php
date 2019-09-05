<?php 

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class CustomersRepository extends EntityRepository
{
    public function customer()
    {
        $sql = "SELECT c FROM App:Customers c";
        $results = $this->getEntityManager()->createQuery($sql)->getResult();
        return ($results);
    }
}