<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a110e2cef8a75db68e98f024907a5fd70705d085889b46f6e99476e39d171679 extends Twig_Template
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
        $__internal_fcee74196ac0d0dd48cfd6aece5969d91510fa5038731ce6bca8fc034a64d546 = $this->env->getExtension("native_profiler");
        $__internal_fcee74196ac0d0dd48cfd6aece5969d91510fa5038731ce6bca8fc034a64d546->enter($__internal_fcee74196ac0d0dd48cfd6aece5969d91510fa5038731ce6bca8fc034a64d546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fcee74196ac0d0dd48cfd6aece5969d91510fa5038731ce6bca8fc034a64d546->leave($__internal_fcee74196ac0d0dd48cfd6aece5969d91510fa5038731ce6bca8fc034a64d546_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
