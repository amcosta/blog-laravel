<?php


namespace App\Repositories;


use App\Entities\Author;
use Doctrine\ORM\EntityManagerInterface;

class AuthorRepository extends BaseRepository
{
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em, Author::class);
    }
}
