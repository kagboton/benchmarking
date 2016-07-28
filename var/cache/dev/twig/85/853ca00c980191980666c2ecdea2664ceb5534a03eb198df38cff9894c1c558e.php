<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5fae294672a746140c5420f885389dcf71deadd37b7cd21934b0f56d07eb2c0f extends Twig_Template
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
        $__internal_563d6877744c5b0a2e5856bd5687fc40824054e6554a5739e33f0805b7960b57 = $this->env->getExtension("native_profiler");
        $__internal_563d6877744c5b0a2e5856bd5687fc40824054e6554a5739e33f0805b7960b57->enter($__internal_563d6877744c5b0a2e5856bd5687fc40824054e6554a5739e33f0805b7960b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_563d6877744c5b0a2e5856bd5687fc40824054e6554a5739e33f0805b7960b57->leave($__internal_563d6877744c5b0a2e5856bd5687fc40824054e6554a5739e33f0805b7960b57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
