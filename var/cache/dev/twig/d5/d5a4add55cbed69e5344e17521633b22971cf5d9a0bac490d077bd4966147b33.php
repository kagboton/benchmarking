<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ed3f1c8e1daafd77c8c56507a43c27b6e073b42f5c1bc1ca9f61053879b65d7f extends Twig_Template
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
        $__internal_23facf4e1774fc6fee8617f9a519d9792d2ada95c3f0e3420e0683a59ab3715d = $this->env->getExtension("native_profiler");
        $__internal_23facf4e1774fc6fee8617f9a519d9792d2ada95c3f0e3420e0683a59ab3715d->enter($__internal_23facf4e1774fc6fee8617f9a519d9792d2ada95c3f0e3420e0683a59ab3715d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_23facf4e1774fc6fee8617f9a519d9792d2ada95c3f0e3420e0683a59ab3715d->leave($__internal_23facf4e1774fc6fee8617f9a519d9792d2ada95c3f0e3420e0683a59ab3715d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
