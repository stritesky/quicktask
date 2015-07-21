<?php
// source: /home/programator/repo/quicktask/app/components/modal/InsertTaskGroup.latte

class Template36f2d74da8e7310dd7c59a94b2df2d68 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('e91e850054', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="insertTaskGroupModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["insertTaskGroupForm"], array()) ?>

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create task group</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <?php if ($_label = $_form["name"]->getLabel()) echo $_label  ?>

                        <?php echo $_form["name"]->getControl()->addAttributes(array('class' => 'form-control')) ?>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <?php echo $_form["submit"]->getControl()->addAttributes(array('class' => 'btn btn-primary')) ?>

                </div>
            <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

        </div>
    </div>
</div><?php
}}