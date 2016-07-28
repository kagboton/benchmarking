<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2ffbadfd80f7b8604bebbbff72a3edd7ee88e4b04c94de684294a88af9177b18 extends Twig_Template
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
        $__internal_5c6cea4d7a1cf061e71fa5b7d6e0868e4fd628a26424f044ec64a6e0e5da5478 = $this->env->getExtension("native_profiler");
        $__internal_5c6cea4d7a1cf061e71fa5b7d6e0868e4fd628a26424f044ec64a6e0e5da5478->enter($__internal_5c6cea4d7a1cf061e71fa5b7d6e0868e4fd628a26424f044ec64a6e0e5da5478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5c6cea4d7a1cf061e71fa5b7d6e0868e4fd628a26424f044ec64a6e0e5da5478->leave($__internal_5c6cea4d7a1cf061e71fa5b7d6e0868e4fd628a26424f044ec64a6e0e5da5478_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
