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
        $__internal_838b39340e37eee9d7d9b5a254ab82bd81dea31872c6cdd23685fefdd7ed9b73 = $this->env->getExtension("native_profiler");
        $__internal_838b39340e37eee9d7d9b5a254ab82bd81dea31872c6cdd23685fefdd7ed9b73->enter($__internal_838b39340e37eee9d7d9b5a254ab82bd81dea31872c6cdd23685fefdd7ed9b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_838b39340e37eee9d7d9b5a254ab82bd81dea31872c6cdd23685fefdd7ed9b73->leave($__internal_838b39340e37eee9d7d9b5a254ab82bd81dea31872c6cdd23685fefdd7ed9b73_prof);

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
