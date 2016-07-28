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
        $__internal_1e9774f19fbe6bdde02372adf1b82f6e22779a18c6e14c5f03f8522da796febc = $this->env->getExtension("native_profiler");
        $__internal_1e9774f19fbe6bdde02372adf1b82f6e22779a18c6e14c5f03f8522da796febc->enter($__internal_1e9774f19fbe6bdde02372adf1b82f6e22779a18c6e14c5f03f8522da796febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1e9774f19fbe6bdde02372adf1b82f6e22779a18c6e14c5f03f8522da796febc->leave($__internal_1e9774f19fbe6bdde02372adf1b82f6e22779a18c6e14c5f03f8522da796febc_prof);

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
