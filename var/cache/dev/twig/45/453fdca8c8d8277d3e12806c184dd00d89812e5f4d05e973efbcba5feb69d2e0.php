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
        $__internal_8e7c9347a249fc4e642e259af6bbe03c239cf991a052db20fda2727bfa0a4afa = $this->env->getExtension("native_profiler");
        $__internal_8e7c9347a249fc4e642e259af6bbe03c239cf991a052db20fda2727bfa0a4afa->enter($__internal_8e7c9347a249fc4e642e259af6bbe03c239cf991a052db20fda2727bfa0a4afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/ComposantAffichage:form.html.twig"));

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
        
        $__internal_8e7c9347a249fc4e642e259af6bbe03c239cf991a052db20fda2727bfa0a4afa->leave($__internal_8e7c9347a249fc4e642e259af6bbe03c239cf991a052db20fda2727bfa0a4afa_prof);

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
