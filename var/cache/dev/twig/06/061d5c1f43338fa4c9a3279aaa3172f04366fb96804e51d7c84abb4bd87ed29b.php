<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e4a11b1fdbcfb9a346210a23491454fa3c7a14b2ff7dafd5f14edb6720606e97 extends Twig_Template
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
        $__internal_5ba5cfa8f002cc0499d06fb30e6a5bf89163e26f43d9c9ec98dc1bf677872cb5 = $this->env->getExtension("native_profiler");
        $__internal_5ba5cfa8f002cc0499d06fb30e6a5bf89163e26f43d9c9ec98dc1bf677872cb5->enter($__internal_5ba5cfa8f002cc0499d06fb30e6a5bf89163e26f43d9c9ec98dc1bf677872cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5ba5cfa8f002cc0499d06fb30e6a5bf89163e26f43d9c9ec98dc1bf677872cb5->leave($__internal_5ba5cfa8f002cc0499d06fb30e6a5bf89163e26f43d9c9ec98dc1bf677872cb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
