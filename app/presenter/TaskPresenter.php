<?php
namespace App\Presenters;

use App\Model\Entity\Task;


/**
 * Class TaskPresenter
 * @package App\Presenters
 */
class TaskPresenter extends BasePresenter
{
    /** @var \App\Model\Repository\TaskGroupRepository @inject */
    public $taskGroupRepository;
    /** @var \App\Model\Repository\TaskRepository @inject */
    public $taskRepository;
    /** @var \App\Factories\Modal\IInsertTaskGroupFactory @inject */
    public $insertTaskGroupFactory;
    /** @var \App\Factories\Form\IInsertTaskFactory @inject */
    public $insertTaskFactory;
    /** @var \App\Factories\Form\ISearchTaskFactory @inject */
    public $searchTaskFactory;
    /** @var number */
    protected $idTaskGroup;

    public function renderDefault()
    {
        $this->template->taskGroups = $this->getTaskGroups();
    }

    /**
     * @param int $id
     */
    public function handleDeleteTaskGroup($id)
    {
        $this->taskGroupRepository->delete($id);
        if ($this->isAjax()) {
            $this->redrawControl('taskGroups');
        } else {
            $this->redirect('this');
        }
    }

    /**
     * @param number $idTaskGroup
     */
    public function renderTaskGroup($idTaskGroup)
    {
        $this->template->tasks = $this->getTasks($idTaskGroup) ;
        $this->idTaskGroup = $idTaskGroup;
        $this->template->taskGroups = $this->getTaskGroups();
    }

    /**
     * @param int $id
     */
    public function handleCompletedTaskGroup($id)
    {
        $taskEntity = $this->taskRepository->getById($id);

        if($taskEntity->getCompleted()){
            $taskEntity->setCompleted(0);
        }else{
            $taskEntity->setCompleted(1);
        }

        $this->taskRepository->updateEntity($taskEntity);
        if ($this->isAjax()) {
            $this->redrawControl('tasks');
        } else {
            $this->redirect('this');
        }
    }

    /**
     * @param int $id
     * @param int $taskGroupId
     */
    public function handleChangeTaskGroup($id, $taskGroupId)
    {
        $taskEntity = $this->taskRepository->getById($id);
        $taskGroupEntity = $this->taskGroupRepository->getById($taskGroupId);
        $taskEntity->setTaskGroup($taskGroupEntity);

        $this->taskRepository->updateEntity($taskEntity);

            $this->redirect('this');

    }

    /**
     * @return \App\Components\Modal\InsertTaskGroup
     */
    protected function createComponentInsertTaskGroupModal()
    {
        $control = $this->insertTaskGroupFactory->create();
        return $control;
    }

    /**
     * @return \App\Components\Form\InsertTask
     */
    protected function createComponentInsertTaskForm()
    {
        $control = $this->insertTaskFactory->create();
        $control->setTaskGroupId($this->idTaskGroup);
        return $control;
    }

    /**
     * @return \App\Components\Form\SearchTask
     */
    protected function createComponentSearchTaskForm()
    {
        $control = $this->searchTaskFactory->create();
        return $control;
    }

    /**
     * @return array
     */
    protected function getTaskGroups()
    {
        $result = array();
        $taskGroups = $this->taskGroupRepository->getAll();
        foreach ($taskGroups as $taskGroup) {
            $item = array();
            $item['id'] = $taskGroup->getId();
            $item['name'] = $taskGroup->getName();
            $result[] = $item;
        }
        return $result;
    }

    /**
     * @param number $idTaskGroup
     * @return array
     */
    protected function getTasks($idTaskGroup)
    {
        $result = array();
        $tasks = $this->taskRepository->getByTaskGroup($idTaskGroup);
        foreach ($tasks as $task) {
            $item = array();
            $item['id'] = $task->getId();
            $item['date'] = $task->getDate();
            $item['name'] = $task->getName();
            $item['completed'] = $task->getCompleted();
            $item['taskGroup'] = $task->getTaskGroup();
            $result[] = $item;
        }
        return $result;
    }
}
