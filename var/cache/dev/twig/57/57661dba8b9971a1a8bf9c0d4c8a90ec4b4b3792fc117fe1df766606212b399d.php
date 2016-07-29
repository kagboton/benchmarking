<?php

/* @Benchmarking/Default/Famille/form.html.twig */
class __TwigTemplate_906e2732b8f3f5b43f3e0fe44856486ba275eadc89e47024f5e3e05c3c01c4fa extends Twig_Template
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
        $__internal_2abf142d31cbc74028d0f54e5a92dea2f766c30e6bd70950ce02b83cb328625f = $this->env->getExtension("native_profiler");
        $__internal_2abf142d31cbc74028d0f54e5a92dea2f766c30e6bd70950ce02b83cb328625f->enter($__internal_2abf142d31cbc74028d0f54e5a92dea2f766c30e6bd70950ce02b83cb328625f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Famille/form.html.twig"));

        // line 2
        echo "
<div>
  ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_2abf142d31cbc74028d0f54e5a92dea2f766c30e6bd70950ce02b83cb328625f->leave($__internal_2abf142d31cbc74028d0f54e5a92dea2f766c30e6bd70950ce02b83cb328625f_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Famille/form.html.twig";
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
