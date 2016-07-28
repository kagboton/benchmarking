<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c56984f0e1c4cc265408e0b536952e71396f6ec0c1c3eb620aa8d3ccf66418f4 extends Twig_Template
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
        $__internal_d10afaf1e0119eb3a9db69c6a202867e60edf36f100e224cfc43fbe39b9162fd = $this->env->getExtension("native_profiler");
        $__internal_d10afaf1e0119eb3a9db69c6a202867e60edf36f100e224cfc43fbe39b9162fd->enter($__internal_d10afaf1e0119eb3a9db69c6a202867e60edf36f100e224cfc43fbe39b9162fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d10afaf1e0119eb3a9db69c6a202867e60edf36f100e224cfc43fbe39b9162fd->leave($__internal_d10afaf1e0119eb3a9db69c6a202867e60edf36f100e224cfc43fbe39b9162fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
