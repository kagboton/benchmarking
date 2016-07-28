<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c05c25d6eaca80b61979ac8767d41aa2605b2df2411cacb72716ad1733a583ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7598178eb41e8d71c07b6f904ba01061372e0844973ae030e61b65bdf780c5d8 = $this->env->getExtension("native_profiler");
        $__internal_7598178eb41e8d71c07b6f904ba01061372e0844973ae030e61b65bdf780c5d8->enter($__internal_7598178eb41e8d71c07b6f904ba01061372e0844973ae030e61b65bdf780c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7598178eb41e8d71c07b6f904ba01061372e0844973ae030e61b65bdf780c5d8->leave($__internal_7598178eb41e8d71c07b6f904ba01061372e0844973ae030e61b65bdf780c5d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc3bc68bd636fb8abaed3820f59f3d4fc75270ced2175490f8f5ea0d55acf756 = $this->env->getExtension("native_profiler");
        $__internal_bc3bc68bd636fb8abaed3820f59f3d4fc75270ced2175490f8f5ea0d55acf756->enter($__internal_bc3bc68bd636fb8abaed3820f59f3d4fc75270ced2175490f8f5ea0d55acf756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc3bc68bd636fb8abaed3820f59f3d4fc75270ced2175490f8f5ea0d55acf756->leave($__internal_bc3bc68bd636fb8abaed3820f59f3d4fc75270ced2175490f8f5ea0d55acf756_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8139cfeab61f9e9b58babfb44f5906756f7593827bc6dfd20c42b662508e226f = $this->env->getExtension("native_profiler");
        $__internal_8139cfeab61f9e9b58babfb44f5906756f7593827bc6dfd20c42b662508e226f->enter($__internal_8139cfeab61f9e9b58babfb44f5906756f7593827bc6dfd20c42b662508e226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8139cfeab61f9e9b58babfb44f5906756f7593827bc6dfd20c42b662508e226f->leave($__internal_8139cfeab61f9e9b58babfb44f5906756f7593827bc6dfd20c42b662508e226f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16a5e3b22f604ce7e19bb58b8be1d9684220cf1ccab78a06d3db13ec866de4de = $this->env->getExtension("native_profiler");
        $__internal_16a5e3b22f604ce7e19bb58b8be1d9684220cf1ccab78a06d3db13ec866de4de->enter($__internal_16a5e3b22f604ce7e19bb58b8be1d9684220cf1ccab78a06d3db13ec866de4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16a5e3b22f604ce7e19bb58b8be1d9684220cf1ccab78a06d3db13ec866de4de->leave($__internal_16a5e3b22f604ce7e19bb58b8be1d9684220cf1ccab78a06d3db13ec866de4de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
