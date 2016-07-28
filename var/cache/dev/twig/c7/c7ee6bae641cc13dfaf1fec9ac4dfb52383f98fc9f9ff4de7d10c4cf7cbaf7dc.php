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
        $__internal_0f9546e0aa4396e220cd82c46ab4ceb5deaaad7eab7748d31911bfc0b451fb6a = $this->env->getExtension("native_profiler");
        $__internal_0f9546e0aa4396e220cd82c46ab4ceb5deaaad7eab7748d31911bfc0b451fb6a->enter($__internal_0f9546e0aa4396e220cd82c46ab4ceb5deaaad7eab7748d31911bfc0b451fb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0f9546e0aa4396e220cd82c46ab4ceb5deaaad7eab7748d31911bfc0b451fb6a->leave($__internal_0f9546e0aa4396e220cd82c46ab4ceb5deaaad7eab7748d31911bfc0b451fb6a_prof);

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
