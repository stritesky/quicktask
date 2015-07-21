<?php
// source: /home/programator/repo/quicktask/app/templates/Task/default.latte

class Template92e7f68e2107b724cef49b8c29b73f23 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('3e5e32eadb', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb9829ba3a2b_content')) { function _lb9829ba3a2b_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-success" data-toggle="modal" data-target="#insertTaskGroupModal">Create task group</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
<div id="<?php echo $_control->getSnippetId('task-groups') ?>"><?php call_user_func(reset($_b->blocks['_task-groups']), $_b, $template->getParameters()) ?>
</div>        </div>
    </div>

<?php $_l->tmp = $_control->getComponent("insertTaskGroupModal"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ;
}}

//
// block _task-groups
//
if (!function_exists($_b->blocks['_task-groups'][] = '_lbafc8057d6a__task_groups')) { function _lbafc8057d6a__task_groups($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('task-groups', FALSE)
?>                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
<?php $iterations = 0; foreach ($taskGroups as $taskGroup) { ?>                        <tr>
                            <td><?php echo Latte\Runtime\Filters::escapeHtml($taskGroup['id'], ENT_NOQUOTES) ?></td>
                            <td>
                                <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("taskGroup", array($taskGroup['id'])), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($taskGroup['name'], ENT_NOQUOTES) ?></a>
                            </td>
                            <td>
                                <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("deleteTaskGroup!", array($taskGroup['id'])), ENT_COMPAT) ?>"
                                   class="btn btn-danger btn-xs"
                                   data-nette-confirm="modal"
                                   data-nette-confirm-title="Confirm dialog"
                                   data-nette-confirm-text="Delete task group?"
                                   data-nette-confirm-ok-class="btn-danger"
                                   data-nette-confirm-ok-text="Yes"
                                   data-nette-confirm-cancel-class="btn-default"
                                   data-nette-confirm-cancel-text="No"
                                >
                                    Delete
                                </a>
                            </td>
                        </tr>
<?php $iterations++; } ?>
                    </tbody>
                </table>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbe977e8293c_scripts')) { function _lbe977e8293c_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Latte\Macros\BlockMacrosRuntime::callBlockParent($_b, 'scripts', get_defined_vars()) ;
}}

//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lb6f6683139e_head')) { function _lb6f6683139e_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>


<?php call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars()) ; 
}}