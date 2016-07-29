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
        $__internal_bff02bc1941aad4a4715954e3e25279b8512191eb9dcaf5efda118fcf3b5d207 = $this->env->getExtension("native_profiler");
        $__internal_bff02bc1941aad4a4715954e3e25279b8512191eb9dcaf5efda118fcf3b5d207->enter($__internal_bff02bc1941aad4a4715954e3e25279b8512191eb9dcaf5efda118fcf3b5d207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bff02bc1941aad4a4715954e3e25279b8512191eb9dcaf5efda118fcf3b5d207->leave($__internal_bff02bc1941aad4a4715954e3e25279b8512191eb9dcaf5efda118fcf3b5d207_prof);

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
