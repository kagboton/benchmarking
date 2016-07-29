<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4a4475fdc3e3ac04bf7f73f5ec59f75e889958e919bd22601364a537fdec0b33 extends Twig_Template
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
        $__internal_ef1b65c634480e0826fba73b65d5bb2efd02f0882ec566a66826a1161de83b4f = $this->env->getExtension("native_profiler");
        $__internal_ef1b65c634480e0826fba73b65d5bb2efd02f0882ec566a66826a1161de83b4f->enter($__internal_ef1b65c634480e0826fba73b65d5bb2efd02f0882ec566a66826a1161de83b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ef1b65c634480e0826fba73b65d5bb2efd02f0882ec566a66826a1161de83b4f->leave($__internal_ef1b65c634480e0826fba73b65d5bb2efd02f0882ec566a66826a1161de83b4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
