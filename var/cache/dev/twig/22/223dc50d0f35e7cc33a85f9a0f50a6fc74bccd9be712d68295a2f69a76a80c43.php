<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2dfceae92309a7dd6c6b932851784689fc65895fe170a423ba5e37050ab1273c extends Twig_Template
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
        $__internal_62094af79cc4f9805a714b5f8f91e0fb50ed2ddb318b58989addaf6d98a44c2f = $this->env->getExtension("native_profiler");
        $__internal_62094af79cc4f9805a714b5f8f91e0fb50ed2ddb318b58989addaf6d98a44c2f->enter($__internal_62094af79cc4f9805a714b5f8f91e0fb50ed2ddb318b58989addaf6d98a44c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_62094af79cc4f9805a714b5f8f91e0fb50ed2ddb318b58989addaf6d98a44c2f->leave($__internal_62094af79cc4f9805a714b5f8f91e0fb50ed2ddb318b58989addaf6d98a44c2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
