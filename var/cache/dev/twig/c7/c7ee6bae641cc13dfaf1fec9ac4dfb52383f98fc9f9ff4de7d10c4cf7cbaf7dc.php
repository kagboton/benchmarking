<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d46ee1ccb170a005c0944939f2738a48e4776e47e95d61d081fda6ce12a32da0 extends Twig_Template
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
        $__internal_c2db8eace99b7bd84bf324d373b9b5187390abab77a3d335ec6969fbf4af7378 = $this->env->getExtension("native_profiler");
        $__internal_c2db8eace99b7bd84bf324d373b9b5187390abab77a3d335ec6969fbf4af7378->enter($__internal_c2db8eace99b7bd84bf324d373b9b5187390abab77a3d335ec6969fbf4af7378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c2db8eace99b7bd84bf324d373b9b5187390abab77a3d335ec6969fbf4af7378->leave($__internal_c2db8eace99b7bd84bf324d373b9b5187390abab77a3d335ec6969fbf4af7378_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
