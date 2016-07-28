<?php

/* BenchmarkingBundle:Default/ComposantAffichage:form.html.twig */
class __TwigTemplate_53228dd28d244def4fd010ed8cff4ec74a898de686502970ee8606ecc4099ebb extends Twig_Template
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
        $__internal_ef22dde46d641b7c485e3bd507720ee8faeb7e160075f7e1fb0c468207a3f0ed = $this->env->getExtension("native_profiler");
        $__internal_ef22dde46d641b7c485e3bd507720ee8faeb7e160075f7e1fb0c468207a3f0ed->enter($__internal_ef22dde46d641b7c485e3bd507720ee8faeb7e160075f7e1fb0c468207a3f0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/ComposantAffichage:form.html.twig"));

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
        
        $__internal_ef22dde46d641b7c485e3bd507720ee8faeb7e160075f7e1fb0c468207a3f0ed->leave($__internal_ef22dde46d641b7c485e3bd507720ee8faeb7e160075f7e1fb0c468207a3f0ed_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/ComposantAffichage:form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/ComposantAffichage/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
