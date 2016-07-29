<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8c6630723e192955ecbadd8f788973635a06e04ad85fe215a882294f15abe35d extends Twig_Template
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
        $__internal_084a6c620f142696b7fcbc83e40e68c10ec5177a35717729263a7194a413608e = $this->env->getExtension("native_profiler");
        $__internal_084a6c620f142696b7fcbc83e40e68c10ec5177a35717729263a7194a413608e->enter($__internal_084a6c620f142696b7fcbc83e40e68c10ec5177a35717729263a7194a413608e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_084a6c620f142696b7fcbc83e40e68c10ec5177a35717729263a7194a413608e->leave($__internal_084a6c620f142696b7fcbc83e40e68c10ec5177a35717729263a7194a413608e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
