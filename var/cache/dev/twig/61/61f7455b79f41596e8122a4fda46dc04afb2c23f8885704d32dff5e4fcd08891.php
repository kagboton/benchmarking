<?php

/* BenchmarkingBundle:Default/Famille:form.html.twig */
class __TwigTemplate_f46e62120c1d22db99e7489d0f39fd69c40dc1c8c0dd924be5b7b1b5b42d84c8 extends Twig_Template
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
        $__internal_ee9c0b8449c1f62cc871040de18d8e0d7f0cc2ef836dc1cf262a7ed7f2d54867 = $this->env->getExtension("native_profiler");
        $__internal_ee9c0b8449c1f62cc871040de18d8e0d7f0cc2ef836dc1cf262a7ed7f2d54867->enter($__internal_ee9c0b8449c1f62cc871040de18d8e0d7f0cc2ef836dc1cf262a7ed7f2d54867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Famille:form.html.twig"));

        // line 2
        echo "
<div>
  ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_ee9c0b8449c1f62cc871040de18d8e0d7f0cc2ef836dc1cf262a7ed7f2d54867->leave($__internal_ee9c0b8449c1f62cc871040de18d8e0d7f0cc2ef836dc1cf262a7ed7f2d54867_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Famille:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/Famille/form.html.twig #}*/
/* */
/* <div>*/
/*   {{ form(form) }}*/
/* </div>*/
/* */
