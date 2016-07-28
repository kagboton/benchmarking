<?php

/* BenchmarkingBundle:Default/CommandePhysique:form.html.twig */
class __TwigTemplate_3c6b07e6637b65d6835765df77b85082e788a5a2aa93752ec6e701edded0926d extends Twig_Template
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
        $__internal_453463456ff9ee5b47d8745c266843930eea300c569051c37218d0791d5a2cdb = $this->env->getExtension("native_profiler");
        $__internal_453463456ff9ee5b47d8745c266843930eea300c569051c37218d0791d5a2cdb->enter($__internal_453463456ff9ee5b47d8745c266843930eea300c569051c37218d0791d5a2cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:form.html.twig"));

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
        
        $__internal_453463456ff9ee5b47d8745c266843930eea300c569051c37218d0791d5a2cdb->leave($__internal_453463456ff9ee5b47d8745c266843930eea300c569051c37218d0791d5a2cdb_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/CommandePhysique:form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/CommandePhysique/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
