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
        $__internal_67aaedfc6afef6ea0698c403ddb3916102a78f0d643745a37bb83671f7cc7fbc = $this->env->getExtension("native_profiler");
        $__internal_67aaedfc6afef6ea0698c403ddb3916102a78f0d643745a37bb83671f7cc7fbc->enter($__internal_67aaedfc6afef6ea0698c403ddb3916102a78f0d643745a37bb83671f7cc7fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_67aaedfc6afef6ea0698c403ddb3916102a78f0d643745a37bb83671f7cc7fbc->leave($__internal_67aaedfc6afef6ea0698c403ddb3916102a78f0d643745a37bb83671f7cc7fbc_prof);

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
