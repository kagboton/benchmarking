<?php

/* BenchmarkingBundle:Default/TechnologieAfficheur:form.html.twig */
class __TwigTemplate_9186c1d6c9b3c6c6049c9e72cd63b1b6a95b37615b00cea6f4a415da19db4312 extends Twig_Template
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
        $__internal_a9889b59b68220214f8cdf99791b4ea4ea668a6d358f392c76d37dd32cc47533 = $this->env->getExtension("native_profiler");
        $__internal_a9889b59b68220214f8cdf99791b4ea4ea668a6d358f392c76d37dd32cc47533->enter($__internal_a9889b59b68220214f8cdf99791b4ea4ea668a6d358f392c76d37dd32cc47533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:form.html.twig"));

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
        
        $__internal_a9889b59b68220214f8cdf99791b4ea4ea668a6d358f392c76d37dd32cc47533->leave($__internal_a9889b59b68220214f8cdf99791b4ea4ea668a6d358f392c76d37dd32cc47533_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TechnologieAfficheur:form.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TechnologieAfficheur/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
