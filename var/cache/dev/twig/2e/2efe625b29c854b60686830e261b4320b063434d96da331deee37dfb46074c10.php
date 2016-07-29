<?php

/* BenchmarkingBundle:Default/AfficheurExistant:form.html.twig */
class __TwigTemplate_439ae25501ec580edf390ebebf39a8ed842be22387060d922183dd8577fe825d extends Twig_Template
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
        $__internal_4d0567bba40a038ae6e00f06eec67115f386db8819a153e8b0948ceabaa004ac = $this->env->getExtension("native_profiler");
        $__internal_4d0567bba40a038ae6e00f06eec67115f386db8819a153e8b0948ceabaa004ac->enter($__internal_4d0567bba40a038ae6e00f06eec67115f386db8819a153e8b0948ceabaa004ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/AfficheurExistant:form.html.twig"));

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
        
        $__internal_4d0567bba40a038ae6e00f06eec67115f386db8819a153e8b0948ceabaa004ac->leave($__internal_4d0567bba40a038ae6e00f06eec67115f386db8819a153e8b0948ceabaa004ac_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/AfficheurExistant:form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/AfficheurExistant/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
