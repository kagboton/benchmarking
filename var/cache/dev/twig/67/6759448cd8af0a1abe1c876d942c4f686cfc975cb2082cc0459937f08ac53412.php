<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_24ebfdab6681c111d15e365f618bbc3877c3d94775b263b8a3bf57fcf6ed03ca extends Twig_Template
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
        $__internal_85a242e61c21d2781eb2b1eea92a6b6c75b33dcae366aa1f855e0345d746b2f7 = $this->env->getExtension("native_profiler");
        $__internal_85a242e61c21d2781eb2b1eea92a6b6c75b33dcae366aa1f855e0345d746b2f7->enter($__internal_85a242e61c21d2781eb2b1eea92a6b6c75b33dcae366aa1f855e0345d746b2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_85a242e61c21d2781eb2b1eea92a6b6c75b33dcae366aa1f855e0345d746b2f7->leave($__internal_85a242e61c21d2781eb2b1eea92a6b6c75b33dcae366aa1f855e0345d746b2f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
