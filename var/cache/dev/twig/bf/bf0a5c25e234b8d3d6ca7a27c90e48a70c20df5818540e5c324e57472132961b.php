<?php

/* BenchmarkingBundle:Default/Localisation:form.html.twig */
class __TwigTemplate_17b0815c247eec2e01b4a27f71531c56a1c7df95f110741f7b2146a24b40db4d extends Twig_Template
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
        $__internal_d13d56a146935344bedc3d007ac6de7ae7169fc42ecf64215cbd9fd86281ec6d = $this->env->getExtension("native_profiler");
        $__internal_d13d56a146935344bedc3d007ac6de7ae7169fc42ecf64215cbd9fd86281ec6d->enter($__internal_d13d56a146935344bedc3d007ac6de7ae7169fc42ecf64215cbd9fd86281ec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Localisation:form.html.twig"));

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
        
        $__internal_d13d56a146935344bedc3d007ac6de7ae7169fc42ecf64215cbd9fd86281ec6d->leave($__internal_d13d56a146935344bedc3d007ac6de7ae7169fc42ecf64215cbd9fd86281ec6d_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Localisation:form.html.twig";
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
