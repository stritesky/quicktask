<?php
namespace App\Model\Repository;

use App\Model\Entity;
use Kdyby\Doctrine\EntityManager;


class TaskRepository extends AbstractRepository
{
    /** @var \Kdyby\Doctrine\EntityRepository */
    private $task;

    public function __construct(EntityManager $entityManager)
    {
        parent::__construct($entityManager);
        $this->task = $this->entityManager->getRepository(Entity\Task::getClassName());
    }

    /**
     * @param number $id
     * @return Entity\Task|null
     */
    public function getById($id)
    {
        return $this->task->find($id);
    }

    /**
     * @param number $idTaskGroup
     * @return Entity\Task[]
     */
    public function getByTaskGroup($idTaskGroup)
    {
        return $this->task->findBy(array('taskGroup' => $idTaskGroup),array('date' => 'asc'));
    }


    /**
     * @param Entity\Task $task
     */
    public function insert(Entity\Task $task)
    {
        $this->entityManager->persist($task);
        $this->entityManager->flush();
    }
}
