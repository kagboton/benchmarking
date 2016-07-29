<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ac7cef653f08ebd71b102d07e83f7da6b27cb4e7906527a369b16e4aadd884f3 extends Twig_Template
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
        $__internal_041817854dd0ff058dcc9c2f582022f488426eb9d9db1b378bc8434f21316444 = $this->env->getExtension("native_profiler");
        $__internal_041817854dd0ff058dcc9c2f582022f488426eb9d9db1b378bc8434f21316444->enter($__internal_041817854dd0ff058dcc9c2f582022f488426eb9d9db1b378bc8434f21316444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_041817854dd0ff058dcc9c2f582022f488426eb9d9db1b378bc8434f21316444->leave($__internal_041817854dd0ff058dcc9c2f582022f488426eb9d9db1b378bc8434f21316444_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
