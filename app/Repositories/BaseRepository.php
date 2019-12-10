<?php


namespace App\Repositories;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class BaseRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $em, string $className)
    {
        parent::__construct($em, $em->getClassMetadata($className));
    }

    public function save($entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush();
    }
}
