<?php

/* @Benchmarking/Default/Localisation/form.html.twig */
class __TwigTemplate_7c6fe203c2a8effe0df8d4aeab56cc731876b51eb34d92c4613072955356e2f0 extends Twig_Template
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
        $__internal_47790b7fb08f552db7514421b22384eb356e9b1510a81679d4a23e8ef8fc79ba = $this->env->getExtension("native_profiler");
        $__internal_47790b7fb08f552db7514421b22384eb356e9b1510a81679d4a23e8ef8fc79ba->enter($__internal_47790b7fb08f552db7514421b22384eb356e9b1510a81679d4a23e8ef8fc79ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Localisation/form.html.twig"));

        // line 2
        echo "

";
        // line 6
        echo "<div class=\"well\">
  ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_47790b7fb08f552db7514421b22384eb356e9b1510a81679d4a23e8ef8fc79ba->leave($__internal_47790b7fb08f552db7514421b22384eb356e9b1510a81679d4a23e8ef8fc79ba_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Localisation/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  26 => 6,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/Localisation/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */