<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f464f6591ea667bffdd52ed1c6a96ea67f15a4b1f5750f839761d5be7ba38eae extends Twig_Template
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
        $__internal_b1f6be7185de1042084187c9ceb81736187748771c4ee1b2eaca52d643f0d312 = $this->env->getExtension("native_profiler");
        $__internal_b1f6be7185de1042084187c9ceb81736187748771c4ee1b2eaca52d643f0d312->enter($__internal_b1f6be7185de1042084187c9ceb81736187748771c4ee1b2eaca52d643f0d312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b1f6be7185de1042084187c9ceb81736187748771c4ee1b2eaca52d643f0d312->leave($__internal_b1f6be7185de1042084187c9ceb81736187748771c4ee1b2eaca52d643f0d312_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
