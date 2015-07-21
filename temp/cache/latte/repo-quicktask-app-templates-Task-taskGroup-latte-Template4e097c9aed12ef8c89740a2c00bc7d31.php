<?php
// source: /home/programator/repo/quicktask/app/templates/Task/taskGroup.latte

class Template4e097c9aed12ef8c89740a2c00bc7d31 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('b05cf06394', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbccd6a0a3e4_content')) { function _lbccd6a0a3e4_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$_l->tmp = $_control->getComponent("insertTaskForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
    <div class="row">
        <div class="col-md-12">
<div id="<?php echo $_control->getSnippetId('tasks') ?>"><?php call_user_func(reset($_b->blocks['_tasks']), $_b, $template->getParameters()) ?>
</div>        </div>
    </div>
<?php
}}

//
// block _tasks
//
if (!function_exists($_b->blocks['_tasks'][] = '_lb1e57155cbb__tasks')) { function _lb1e57155cbb__tasks($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('tasks', FALSE)
?>                <ul class="list-group">
<?php $iterations = 0; foreach ($tasks as $task) { ?>
                        <li class="list-group-item">
                            <input type="checkbox">
                            <span><?php echo Latte\Runtime\Filters::escapeHtml($task['name'], ENT_NOQUOTES) ?></span>
                            <span class="label label-info"><?php echo Latte\Runtime\Filters::escapeHtml($template->date($task['date'], 'd.m.Y'), ENT_NOQUOTES) ?></span>
                        </li>
<?php $iterations++; } ?>
                </ul>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb30f47cbd4e_scripts')) { function _lb30f47cbd4e_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Latte\Macros\BlockMacrosRuntime::callBlockParent($_b, 'scripts', get_defined_vars()) ;
}}

//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lb8253d820ee_head')) { function _lb8253d820ee_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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