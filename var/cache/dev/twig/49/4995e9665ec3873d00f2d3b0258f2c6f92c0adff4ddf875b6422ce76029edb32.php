<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b43e52f1b8af02426c02291dbc909ebc80a4cf4764d9c9e3c666774198fd1505 extends Twig_Template
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
        $__internal_e440043c3b6de2d953777dd3223c79136f6be3cda622323df7101df7e24b666a = $this->env->getExtension("native_profiler");
        $__internal_e440043c3b6de2d953777dd3223c79136f6be3cda622323df7101df7e24b666a->enter($__internal_e440043c3b6de2d953777dd3223c79136f6be3cda622323df7101df7e24b666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e440043c3b6de2d953777dd3223c79136f6be3cda622323df7101df7e24b666a->leave($__internal_e440043c3b6de2d953777dd3223c79136f6be3cda622323df7101df7e24b666a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
