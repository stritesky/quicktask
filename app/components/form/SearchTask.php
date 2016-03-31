<?php
namespace App\Components\Form;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\ArrayHash;

class SearchTask extends Control
{

    /** @persistent */
    public $filter = array();


    public function render()
    {
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/SearchTask.latte');
        $template->render();
    }

    /**
     * @return Form
     */
    protected function createComponentSearchTaskForm()
    {
        $form = new Form();
        $form->addText('name', 'Name')
            ->setRequired('Please fill task name');
        $form->addSubmit('submit', 'Search');
        $form->onSuccess[] = array($this, 'searchTaskFromSuccess');
        return $form;
    }

    /**
     * @param Form $form
     * @param $values
     */
    public function searchTaskFromSuccess(Form $form, $values)
    {
        $this->filter = ArrayHash::from($values);
        $this->redirect("this");
    }

}
