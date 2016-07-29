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
        $__internal_3731b24b9f5878f61f33526668c2e5e25af4c6f1b9981987fb28677e3583365e = $this->env->getExtension("native_profiler");
        $__internal_3731b24b9f5878f61f33526668c2e5e25af4c6f1b9981987fb28677e3583365e->enter($__internal_3731b24b9f5878f61f33526668c2e5e25af4c6f1b9981987fb28677e3583365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:form.html.twig"));

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
        
        $__internal_3731b24b9f5878f61f33526668c2e5e25af4c6f1b9981987fb28677e3583365e->leave($__internal_3731b24b9f5878f61f33526668c2e5e25af4c6f1b9981987fb28677e3583365e_prof);

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
