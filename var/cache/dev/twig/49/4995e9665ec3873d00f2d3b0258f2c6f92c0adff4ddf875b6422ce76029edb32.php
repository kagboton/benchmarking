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
        $__internal_e8a76e7d0b4b183b9ce3fefe371cc6e7563c11ac9b5008ec4c6b7b1f2cd0cbfd = $this->env->getExtension("native_profiler");
        $__internal_e8a76e7d0b4b183b9ce3fefe371cc6e7563c11ac9b5008ec4c6b7b1f2cd0cbfd->enter($__internal_e8a76e7d0b4b183b9ce3fefe371cc6e7563c11ac9b5008ec4c6b7b1f2cd0cbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e8a76e7d0b4b183b9ce3fefe371cc6e7563c11ac9b5008ec4c6b7b1f2cd0cbfd->leave($__internal_e8a76e7d0b4b183b9ce3fefe371cc6e7563c11ac9b5008ec4c6b7b1f2cd0cbfd_prof);

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
