<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e3b825fd30f1cceae06ec8af3fae2613e045ddbdbd9b2db41aac0581fa841391 extends Twig_Template
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
        $__internal_7fdec721011c084ee22f72501983ff655eeb2b2937e686007334ef33a8da13dd = $this->env->getExtension("native_profiler");
        $__internal_7fdec721011c084ee22f72501983ff655eeb2b2937e686007334ef33a8da13dd->enter($__internal_7fdec721011c084ee22f72501983ff655eeb2b2937e686007334ef33a8da13dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7fdec721011c084ee22f72501983ff655eeb2b2937e686007334ef33a8da13dd->leave($__internal_7fdec721011c084ee22f72501983ff655eeb2b2937e686007334ef33a8da13dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
