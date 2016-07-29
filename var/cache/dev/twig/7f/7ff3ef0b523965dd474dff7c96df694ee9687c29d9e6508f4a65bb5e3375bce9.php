<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_7b4fade645a70b86cff22860312d9b334b8bd6de5f6d52f3c70a7b2ebedfce89 extends Twig_Template
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
        $__internal_f2830d9abee1a201764a92a887e06cd745a8cfc95fd2ca89decb73f5fbdbb278 = $this->env->getExtension("native_profiler");
        $__internal_f2830d9abee1a201764a92a887e06cd745a8cfc95fd2ca89decb73f5fbdbb278->enter($__internal_f2830d9abee1a201764a92a887e06cd745a8cfc95fd2ca89decb73f5fbdbb278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f2830d9abee1a201764a92a887e06cd745a8cfc95fd2ca89decb73f5fbdbb278->leave($__internal_f2830d9abee1a201764a92a887e06cd745a8cfc95fd2ca89decb73f5fbdbb278_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
