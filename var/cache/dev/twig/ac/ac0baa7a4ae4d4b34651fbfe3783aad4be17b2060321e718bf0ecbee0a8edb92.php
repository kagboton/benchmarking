<?php

/* BenchmarkingBundle:Default/Segment:form.html.twig */
class __TwigTemplate_28d6744ac0d0ca7bce84115cf5b58659e6af2f6ad743e532fb693e978334f6f0 extends Twig_Template
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
        $__internal_cf7c6b55a92cfd2a6b6789e7338dee6acd856e89b1c2d7062ae630cf79c51438 = $this->env->getExtension("native_profiler");
        $__internal_cf7c6b55a92cfd2a6b6789e7338dee6acd856e89b1c2d7062ae630cf79c51438->enter($__internal_cf7c6b55a92cfd2a6b6789e7338dee6acd856e89b1c2d7062ae630cf79c51438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Segment:form.html.twig"));

        // line 2
        echo "
  ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_cf7c6b55a92cfd2a6b6789e7338dee6acd856e89b1c2d7062ae630cf79c51438->leave($__internal_cf7c6b55a92cfd2a6b6789e7338dee6acd856e89b1c2d7062ae630cf79c51438_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Segment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/Segment/form.html.twig #}*/
/* */
/*   {{ form(form) }}*/
/* */
