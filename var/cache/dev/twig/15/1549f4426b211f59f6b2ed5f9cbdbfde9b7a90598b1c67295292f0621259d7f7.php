<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1901ad33f82ce5871e94a80bf25eff03866f8d4df703633506ce1f04e7f01e4d extends Twig_Template
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
        $__internal_531792ca2f608702d39d8e0b705f31fdb5c32f1fc6a868c8337e3a2d6848c3cc = $this->env->getExtension("native_profiler");
        $__internal_531792ca2f608702d39d8e0b705f31fdb5c32f1fc6a868c8337e3a2d6848c3cc->enter($__internal_531792ca2f608702d39d8e0b705f31fdb5c32f1fc6a868c8337e3a2d6848c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_531792ca2f608702d39d8e0b705f31fdb5c32f1fc6a868c8337e3a2d6848c3cc->leave($__internal_531792ca2f608702d39d8e0b705f31fdb5c32f1fc6a868c8337e3a2d6848c3cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
