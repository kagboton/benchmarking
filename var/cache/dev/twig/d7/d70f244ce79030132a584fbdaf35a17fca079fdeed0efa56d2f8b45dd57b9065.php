<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3677697e29b619dc3036fc06b857e7cadea8a11d5b05e6e9440b640990653c34 extends Twig_Template
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
        $__internal_e71261e4f8cdf1724323612856c31e1aaf1af7959d1cda4e61258644f0324dce = $this->env->getExtension("native_profiler");
        $__internal_e71261e4f8cdf1724323612856c31e1aaf1af7959d1cda4e61258644f0324dce->enter($__internal_e71261e4f8cdf1724323612856c31e1aaf1af7959d1cda4e61258644f0324dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e71261e4f8cdf1724323612856c31e1aaf1af7959d1cda4e61258644f0324dce->leave($__internal_e71261e4f8cdf1724323612856c31e1aaf1af7959d1cda4e61258644f0324dce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
