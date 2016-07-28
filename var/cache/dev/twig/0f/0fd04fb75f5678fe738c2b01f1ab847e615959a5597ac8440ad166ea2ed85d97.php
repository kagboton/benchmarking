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
        $__internal_432aeaca78115a546630903547e22159d4bfcad509ef178b39cfbf7c40406b16 = $this->env->getExtension("native_profiler");
        $__internal_432aeaca78115a546630903547e22159d4bfcad509ef178b39cfbf7c40406b16->enter($__internal_432aeaca78115a546630903547e22159d4bfcad509ef178b39cfbf7c40406b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_432aeaca78115a546630903547e22159d4bfcad509ef178b39cfbf7c40406b16->leave($__internal_432aeaca78115a546630903547e22159d4bfcad509ef178b39cfbf7c40406b16_prof);

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
