<?php

/* BenchmarkingBundle:Default/FormatEcran:form.html.twig */
class __TwigTemplate_ad39142030e599b4a89c46c7c5384d7df0f8a82398eb5ccdd7c225499720d509 extends Twig_Template
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
        $__internal_d114a5a2c6afdd17f87da4d5bb0aac898dbcddd0ea1b587f02c632649875da3a = $this->env->getExtension("native_profiler");
        $__internal_d114a5a2c6afdd17f87da4d5bb0aac898dbcddd0ea1b587f02c632649875da3a->enter($__internal_d114a5a2c6afdd17f87da4d5bb0aac898dbcddd0ea1b587f02c632649875da3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FormatEcran:form.html.twig"));

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
        
        $__internal_d114a5a2c6afdd17f87da4d5bb0aac898dbcddd0ea1b587f02c632649875da3a->leave($__internal_d114a5a2c6afdd17f87da4d5bb0aac898dbcddd0ea1b587f02c632649875da3a_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FormatEcran:form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/FormatEcran/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
