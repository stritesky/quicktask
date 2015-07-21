<?php
// source: /home/programator/repo/quicktask/app/components/form/InsertTask.latte

class Template638b87a2a7b2428600f3bd4d60596e06 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('56ce8b65c5', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["insertTaskForm"], array()) ?>

    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                <?php if ($_label = $_form["name"]->getLabel()) echo $_label  ?>

                <?php echo $_form["name"]->getControl()->addAttributes(array('class' => 'form-control')) ?>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php if ($_label = $_form["date"]->getLabel()) echo $_label  ?>

                <?php echo $_form["date"]->getControl()->addAttributes(array('class' => 'form-control datepicker')) ?>

            </div>
        </div>
        <div class="col-md-2">
            <br>
            <?php echo $_form["submit"]->getControl()->addAttributes(array('class' => 'btn btn-primary')) ?>

        </div>
    </div>
<?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ;
}}