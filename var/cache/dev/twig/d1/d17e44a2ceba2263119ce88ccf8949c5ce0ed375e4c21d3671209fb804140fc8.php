<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7d214db37bf63fce5bf2be003cd240236e1936905c521b5724e23ddcbd0a49d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02f7236e5fc23cf4d930a117024e7c435664091e1218f375f4141dce99da4670 = $this->env->getExtension("native_profiler");
        $__internal_02f7236e5fc23cf4d930a117024e7c435664091e1218f375f4141dce99da4670->enter($__internal_02f7236e5fc23cf4d930a117024e7c435664091e1218f375f4141dce99da4670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_02f7236e5fc23cf4d930a117024e7c435664091e1218f375f4141dce99da4670->leave($__internal_02f7236e5fc23cf4d930a117024e7c435664091e1218f375f4141dce99da4670_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
