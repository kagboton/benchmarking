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
        $__internal_cff8694878422174d20ac32d0922d0389a98ea3aac88666871db968eda2c894f = $this->env->getExtension("native_profiler");
        $__internal_cff8694878422174d20ac32d0922d0389a98ea3aac88666871db968eda2c894f->enter($__internal_cff8694878422174d20ac32d0922d0389a98ea3aac88666871db968eda2c894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cff8694878422174d20ac32d0922d0389a98ea3aac88666871db968eda2c894f->leave($__internal_cff8694878422174d20ac32d0922d0389a98ea3aac88666871db968eda2c894f_prof);

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
