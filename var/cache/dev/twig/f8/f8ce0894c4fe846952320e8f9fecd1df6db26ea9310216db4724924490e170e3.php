<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_90c4505e2b4955a677873c7d6f8abeff237282ad5221b985ad4015c56c2276f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6335cc96e57e195735e459ccc72d5ee316d8137c1a59f491a1f22f4845ee4c2c = $this->env->getExtension("native_profiler");
        $__internal_6335cc96e57e195735e459ccc72d5ee316d8137c1a59f491a1f22f4845ee4c2c->enter($__internal_6335cc96e57e195735e459ccc72d5ee316d8137c1a59f491a1f22f4845ee4c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6335cc96e57e195735e459ccc72d5ee316d8137c1a59f491a1f22f4845ee4c2c->leave($__internal_6335cc96e57e195735e459ccc72d5ee316d8137c1a59f491a1f22f4845ee4c2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3328f8eaffa3c9ce3b405bb5f8bd42a850186972d5908eec6f0795d7a6005be = $this->env->getExtension("native_profiler");
        $__internal_c3328f8eaffa3c9ce3b405bb5f8bd42a850186972d5908eec6f0795d7a6005be->enter($__internal_c3328f8eaffa3c9ce3b405bb5f8bd42a850186972d5908eec6f0795d7a6005be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c3328f8eaffa3c9ce3b405bb5f8bd42a850186972d5908eec6f0795d7a6005be->leave($__internal_c3328f8eaffa3c9ce3b405bb5f8bd42a850186972d5908eec6f0795d7a6005be_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab73b5144451584516ef8d7c7e35c81070e9b0a6a144c13ea17e7ad6dc20a3e = $this->env->getExtension("native_profiler");
        $__internal_bab73b5144451584516ef8d7c7e35c81070e9b0a6a144c13ea17e7ad6dc20a3e->enter($__internal_bab73b5144451584516ef8d7c7e35c81070e9b0a6a144c13ea17e7ad6dc20a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bab73b5144451584516ef8d7c7e35c81070e9b0a6a144c13ea17e7ad6dc20a3e->leave($__internal_bab73b5144451584516ef8d7c7e35c81070e9b0a6a144c13ea17e7ad6dc20a3e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
