<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_81576cf64bbf1187ea70a78f5d77fa2d71fb23ee3d5600beffbe7523451d7122 extends Twig_Template
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
        $__internal_083965c6d568f8631b2755e19484999010f42a7289273f7b6c7cfebcbf25b480 = $this->env->getExtension("native_profiler");
        $__internal_083965c6d568f8631b2755e19484999010f42a7289273f7b6c7cfebcbf25b480->enter($__internal_083965c6d568f8631b2755e19484999010f42a7289273f7b6c7cfebcbf25b480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_083965c6d568f8631b2755e19484999010f42a7289273f7b6c7cfebcbf25b480->leave($__internal_083965c6d568f8631b2755e19484999010f42a7289273f7b6c7cfebcbf25b480_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
