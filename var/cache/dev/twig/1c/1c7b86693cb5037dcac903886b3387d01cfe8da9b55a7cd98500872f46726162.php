<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_32c518b73d1e5b243bfba93aa00bee5a0662ea4864b86084e619cd777d2d6ad4 extends Twig_Template
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
        $__internal_e4718e5a49b55e09938faeb6aa356b5cb32f361be21cfb983ce780b01af161fe = $this->env->getExtension("native_profiler");
        $__internal_e4718e5a49b55e09938faeb6aa356b5cb32f361be21cfb983ce780b01af161fe->enter($__internal_e4718e5a49b55e09938faeb6aa356b5cb32f361be21cfb983ce780b01af161fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e4718e5a49b55e09938faeb6aa356b5cb32f361be21cfb983ce780b01af161fe->leave($__internal_e4718e5a49b55e09938faeb6aa356b5cb32f361be21cfb983ce780b01af161fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
