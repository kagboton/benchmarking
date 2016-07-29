<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_46342d2747346dca0088fc32637c972a84352a04af47c0be6ca90d4c5f43dbf6 extends Twig_Template
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
        $__internal_16ab4dd68b1872ab007f95e96d2b87ca5229cdf5042640dce9ea74df1301b99b = $this->env->getExtension("native_profiler");
        $__internal_16ab4dd68b1872ab007f95e96d2b87ca5229cdf5042640dce9ea74df1301b99b->enter($__internal_16ab4dd68b1872ab007f95e96d2b87ca5229cdf5042640dce9ea74df1301b99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_16ab4dd68b1872ab007f95e96d2b87ca5229cdf5042640dce9ea74df1301b99b->leave($__internal_16ab4dd68b1872ab007f95e96d2b87ca5229cdf5042640dce9ea74df1301b99b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
