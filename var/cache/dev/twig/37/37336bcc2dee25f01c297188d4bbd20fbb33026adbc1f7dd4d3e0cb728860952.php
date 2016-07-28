<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2fdb1fd18c904bcf09e9eef711eb5a839ff22a2b2a90acde16e6cba6c323c958 extends Twig_Template
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
        $__internal_ca99828726101e13434cc513ac78e28e4c0f4b95b9373d4d9f8e25d8cc77d18b = $this->env->getExtension("native_profiler");
        $__internal_ca99828726101e13434cc513ac78e28e4c0f4b95b9373d4d9f8e25d8cc77d18b->enter($__internal_ca99828726101e13434cc513ac78e28e4c0f4b95b9373d4d9f8e25d8cc77d18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ca99828726101e13434cc513ac78e28e4c0f4b95b9373d4d9f8e25d8cc77d18b->leave($__internal_ca99828726101e13434cc513ac78e28e4c0f4b95b9373d4d9f8e25d8cc77d18b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
