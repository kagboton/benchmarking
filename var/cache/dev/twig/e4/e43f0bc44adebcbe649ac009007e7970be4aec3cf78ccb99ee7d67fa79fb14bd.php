<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_17cbdfd0be9995ee15712d58638386979d08a7aee1fa6d0fce215cc4ae98a736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_4c0a4a1273f72d93573a3dbd85845ad22353a8cf89504b6a6c3cdd6bd41ab458 = $this->env->getExtension("native_profiler");
        $__internal_4c0a4a1273f72d93573a3dbd85845ad22353a8cf89504b6a6c3cdd6bd41ab458->enter($__internal_4c0a4a1273f72d93573a3dbd85845ad22353a8cf89504b6a6c3cdd6bd41ab458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c0a4a1273f72d93573a3dbd85845ad22353a8cf89504b6a6c3cdd6bd41ab458->leave($__internal_4c0a4a1273f72d93573a3dbd85845ad22353a8cf89504b6a6c3cdd6bd41ab458_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd6ac81f669121b1469c15882f0b2e3f15d36744119c0bf199fe01290c57bacc = $this->env->getExtension("native_profiler");
        $__internal_bd6ac81f669121b1469c15882f0b2e3f15d36744119c0bf199fe01290c57bacc->enter($__internal_bd6ac81f669121b1469c15882f0b2e3f15d36744119c0bf199fe01290c57bacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bd6ac81f669121b1469c15882f0b2e3f15d36744119c0bf199fe01290c57bacc->leave($__internal_bd6ac81f669121b1469c15882f0b2e3f15d36744119c0bf199fe01290c57bacc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_30e0744a85d1e1a450f7e7c09f04c2414c260d8a6a4e4b903bdcd6bc93ce2db4 = $this->env->getExtension("native_profiler");
        $__internal_30e0744a85d1e1a450f7e7c09f04c2414c260d8a6a4e4b903bdcd6bc93ce2db4->enter($__internal_30e0744a85d1e1a450f7e7c09f04c2414c260d8a6a4e4b903bdcd6bc93ce2db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30e0744a85d1e1a450f7e7c09f04c2414c260d8a6a4e4b903bdcd6bc93ce2db4->leave($__internal_30e0744a85d1e1a450f7e7c09f04c2414c260d8a6a4e4b903bdcd6bc93ce2db4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
