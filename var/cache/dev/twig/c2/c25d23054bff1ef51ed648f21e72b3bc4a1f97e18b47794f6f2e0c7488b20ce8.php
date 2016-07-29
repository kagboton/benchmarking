<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9917575ac529cb4c801b16e55aab374fcfa82242a6239c56fd7099ab9d9faa0c extends Twig_Template
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
        $__internal_5a008e26d9d595b983d21baaf1db90b460bca36fdfc24316660b1eb5ffaeba5e = $this->env->getExtension("native_profiler");
        $__internal_5a008e26d9d595b983d21baaf1db90b460bca36fdfc24316660b1eb5ffaeba5e->enter($__internal_5a008e26d9d595b983d21baaf1db90b460bca36fdfc24316660b1eb5ffaeba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5a008e26d9d595b983d21baaf1db90b460bca36fdfc24316660b1eb5ffaeba5e->leave($__internal_5a008e26d9d595b983d21baaf1db90b460bca36fdfc24316660b1eb5ffaeba5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
