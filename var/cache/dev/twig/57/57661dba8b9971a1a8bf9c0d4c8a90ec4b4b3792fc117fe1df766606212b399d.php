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
        $__internal_8e9ca59f498d82234af38d366362eb7293c3d2aa90aec22db7f03be43443c3ee = $this->env->getExtension("native_profiler");
        $__internal_8e9ca59f498d82234af38d366362eb7293c3d2aa90aec22db7f03be43443c3ee->enter($__internal_8e9ca59f498d82234af38d366362eb7293c3d2aa90aec22db7f03be43443c3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Famille/form.html.twig"));

        // line 2
        echo "
<div>
  ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_8e9ca59f498d82234af38d366362eb7293c3d2aa90aec22db7f03be43443c3ee->leave($__internal_8e9ca59f498d82234af38d366362eb7293c3d2aa90aec22db7f03be43443c3ee_prof);

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
