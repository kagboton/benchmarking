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
        $__internal_336478d64e46b9a06f352a81e3662a38b6fad0cfbca96857f311f172ea1b1531 = $this->env->getExtension("native_profiler");
        $__internal_336478d64e46b9a06f352a81e3662a38b6fad0cfbca96857f311f172ea1b1531->enter($__internal_336478d64e46b9a06f352a81e3662a38b6fad0cfbca96857f311f172ea1b1531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_336478d64e46b9a06f352a81e3662a38b6fad0cfbca96857f311f172ea1b1531->leave($__internal_336478d64e46b9a06f352a81e3662a38b6fad0cfbca96857f311f172ea1b1531_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8dc6b8df4571971b56767281ffaaf7290f347be2ebf8eeea20b5750424749f0e = $this->env->getExtension("native_profiler");
        $__internal_8dc6b8df4571971b56767281ffaaf7290f347be2ebf8eeea20b5750424749f0e->enter($__internal_8dc6b8df4571971b56767281ffaaf7290f347be2ebf8eeea20b5750424749f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8dc6b8df4571971b56767281ffaaf7290f347be2ebf8eeea20b5750424749f0e->leave($__internal_8dc6b8df4571971b56767281ffaaf7290f347be2ebf8eeea20b5750424749f0e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03f9e7dc0772ba57957d5154845e03b32f9d580905d3cf12f4d6be56126db5fe = $this->env->getExtension("native_profiler");
        $__internal_03f9e7dc0772ba57957d5154845e03b32f9d580905d3cf12f4d6be56126db5fe->enter($__internal_03f9e7dc0772ba57957d5154845e03b32f9d580905d3cf12f4d6be56126db5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03f9e7dc0772ba57957d5154845e03b32f9d580905d3cf12f4d6be56126db5fe->leave($__internal_03f9e7dc0772ba57957d5154845e03b32f9d580905d3cf12f4d6be56126db5fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e8838269595741ca517a1fba35e9890a2cab0e1b0f6261edc8c31481506f2d7 = $this->env->getExtension("native_profiler");
        $__internal_1e8838269595741ca517a1fba35e9890a2cab0e1b0f6261edc8c31481506f2d7->enter($__internal_1e8838269595741ca517a1fba35e9890a2cab0e1b0f6261edc8c31481506f2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e8838269595741ca517a1fba35e9890a2cab0e1b0f6261edc8c31481506f2d7->leave($__internal_1e8838269595741ca517a1fba35e9890a2cab0e1b0f6261edc8c31481506f2d7_prof);

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
