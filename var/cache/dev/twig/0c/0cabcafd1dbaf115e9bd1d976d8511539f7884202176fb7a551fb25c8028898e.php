<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c965c08d6f660ad76486936b8b7d728bdc1a10a4254e5e4ed378c589126b6f83 extends Twig_Template
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
        $__internal_47227e76d29bd7febf3c2e902b325f26b71bb265b08e143cf7a84fae74336443 = $this->env->getExtension("native_profiler");
        $__internal_47227e76d29bd7febf3c2e902b325f26b71bb265b08e143cf7a84fae74336443->enter($__internal_47227e76d29bd7febf3c2e902b325f26b71bb265b08e143cf7a84fae74336443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_47227e76d29bd7febf3c2e902b325f26b71bb265b08e143cf7a84fae74336443->leave($__internal_47227e76d29bd7febf3c2e902b325f26b71bb265b08e143cf7a84fae74336443_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
