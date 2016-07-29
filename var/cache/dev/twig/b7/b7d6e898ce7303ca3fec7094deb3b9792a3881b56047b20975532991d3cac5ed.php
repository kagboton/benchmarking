<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a5d588c19ebef4b461b518e44d0e1f2c021045418489a90d2f7cbec84bb09ff8 extends Twig_Template
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
        $__internal_01d4dd9213c356c97c7e0736bd6fd24cc9eb3dd1fa93c7a1c4e12987c2af19fd = $this->env->getExtension("native_profiler");
        $__internal_01d4dd9213c356c97c7e0736bd6fd24cc9eb3dd1fa93c7a1c4e12987c2af19fd->enter($__internal_01d4dd9213c356c97c7e0736bd6fd24cc9eb3dd1fa93c7a1c4e12987c2af19fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_01d4dd9213c356c97c7e0736bd6fd24cc9eb3dd1fa93c7a1c4e12987c2af19fd->leave($__internal_01d4dd9213c356c97c7e0736bd6fd24cc9eb3dd1fa93c7a1c4e12987c2af19fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
