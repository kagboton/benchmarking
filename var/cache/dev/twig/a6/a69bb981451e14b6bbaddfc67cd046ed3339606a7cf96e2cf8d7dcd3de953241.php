<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_07465f67bfb3fea2938e633b9e5acae5f350ee0a4c656d8ea487c7e1436cdefe extends Twig_Template
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
        $__internal_db07a789dbacf602bd9f28c9874fa9916278ba9eaee42c0498a3f714bf0e2533 = $this->env->getExtension("native_profiler");
        $__internal_db07a789dbacf602bd9f28c9874fa9916278ba9eaee42c0498a3f714bf0e2533->enter($__internal_db07a789dbacf602bd9f28c9874fa9916278ba9eaee42c0498a3f714bf0e2533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_db07a789dbacf602bd9f28c9874fa9916278ba9eaee42c0498a3f714bf0e2533->leave($__internal_db07a789dbacf602bd9f28c9874fa9916278ba9eaee42c0498a3f714bf0e2533_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
