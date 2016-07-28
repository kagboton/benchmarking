<?php

/* BenchmarkingBundle:Default/TypeTdB:form.html.twig */
class __TwigTemplate_254e5f5aafcf2ba34e363d0d1503e09be1d8cfd967ee9b461ecaa8928055aa77 extends Twig_Template
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
        $__internal_5574858d3647003f1bd9345f6c6514db1655153435f249f53bcf7c701ac54946 = $this->env->getExtension("native_profiler");
        $__internal_5574858d3647003f1bd9345f6c6514db1655153435f249f53bcf7c701ac54946->enter($__internal_5574858d3647003f1bd9345f6c6514db1655153435f249f53bcf7c701ac54946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeTdB:form.html.twig"));

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
        
        $__internal_5574858d3647003f1bd9345f6c6514db1655153435f249f53bcf7c701ac54946->leave($__internal_5574858d3647003f1bd9345f6c6514db1655153435f249f53bcf7c701ac54946_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeTdB:form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TypeTdB/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
