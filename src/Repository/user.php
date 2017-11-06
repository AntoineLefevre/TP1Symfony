<?php
/**
 * Created by PhpStorm.
 * User: antoine.lefevre
 * Date: 06/11/17
 * Time: 16:28
 */

namespace Repository;

use Doctrine\ORM\EntityRepository;

class User extends EntityRepository
{
    public function listAll()
    {
        $resultat=$this->findAll();
        return $resultat;
    }
}

