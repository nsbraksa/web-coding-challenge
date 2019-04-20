<?php

namespace CTRV\MailBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Doctrine\ORM\Mapping as ORM;
/**
 * MailTypeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MailTypeRepository extends EntityRepository
{
	/**
	 * retourne tou les types de mails
	 */
	public function getTypeMails(){
		$qb= $this->createQueryBuilder("p")
		->orderBy('p.code','ASC')
		;
		return $qb->getQuery()->getResult();
	}
}
