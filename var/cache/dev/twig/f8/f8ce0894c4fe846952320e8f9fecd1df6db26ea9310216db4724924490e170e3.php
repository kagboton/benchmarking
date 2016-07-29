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
        $__internal_4b1b510ead366d64b96f8de193d6a5c3c6dfce428fdcc2f2f61f9cb6720bc807 = $this->env->getExtension("native_profiler");
        $__internal_4b1b510ead366d64b96f8de193d6a5c3c6dfce428fdcc2f2f61f9cb6720bc807->enter($__internal_4b1b510ead366d64b96f8de193d6a5c3c6dfce428fdcc2f2f61f9cb6720bc807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1b510ead366d64b96f8de193d6a5c3c6dfce428fdcc2f2f61f9cb6720bc807->leave($__internal_4b1b510ead366d64b96f8de193d6a5c3c6dfce428fdcc2f2f61f9cb6720bc807_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6573742c0718f88a57a135bdc9e3b512cde35904e37195f1991477672a43b42 = $this->env->getExtension("native_profiler");
        $__internal_d6573742c0718f88a57a135bdc9e3b512cde35904e37195f1991477672a43b42->enter($__internal_d6573742c0718f88a57a135bdc9e3b512cde35904e37195f1991477672a43b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d6573742c0718f88a57a135bdc9e3b512cde35904e37195f1991477672a43b42->leave($__internal_d6573742c0718f88a57a135bdc9e3b512cde35904e37195f1991477672a43b42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b18e4ae1a3cf3233357697801a2d6df88c8b352f0f4b845a955943d276595357 = $this->env->getExtension("native_profiler");
        $__internal_b18e4ae1a3cf3233357697801a2d6df88c8b352f0f4b845a955943d276595357->enter($__internal_b18e4ae1a3cf3233357697801a2d6df88c8b352f0f4b845a955943d276595357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b18e4ae1a3cf3233357697801a2d6df88c8b352f0f4b845a955943d276595357->leave($__internal_b18e4ae1a3cf3233357697801a2d6df88c8b352f0f4b845a955943d276595357_prof);

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
