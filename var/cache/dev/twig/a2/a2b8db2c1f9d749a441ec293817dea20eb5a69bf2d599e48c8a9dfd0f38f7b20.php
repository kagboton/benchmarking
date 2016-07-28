<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e29502f02d06fd065d8a9677fc22cbedc8ce3d30400f49f594e1c483c59defe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2205073ec04620ceec316cee8eeddd1f08ea9e61a9b8f559e3601f8c454927b1 = $this->env->getExtension("native_profiler");
        $__internal_2205073ec04620ceec316cee8eeddd1f08ea9e61a9b8f559e3601f8c454927b1->enter($__internal_2205073ec04620ceec316cee8eeddd1f08ea9e61a9b8f559e3601f8c454927b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2205073ec04620ceec316cee8eeddd1f08ea9e61a9b8f559e3601f8c454927b1->leave($__internal_2205073ec04620ceec316cee8eeddd1f08ea9e61a9b8f559e3601f8c454927b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_855c1912b7dff1e0cf08e681144b6bf773b3939dedba19220235b16b276aa55a = $this->env->getExtension("native_profiler");
        $__internal_855c1912b7dff1e0cf08e681144b6bf773b3939dedba19220235b16b276aa55a->enter($__internal_855c1912b7dff1e0cf08e681144b6bf773b3939dedba19220235b16b276aa55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_855c1912b7dff1e0cf08e681144b6bf773b3939dedba19220235b16b276aa55a->leave($__internal_855c1912b7dff1e0cf08e681144b6bf773b3939dedba19220235b16b276aa55a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_715ba1d49387ef9bb708cd591718f20f2721048ae83a9fc2ee5cd2bb69772b69 = $this->env->getExtension("native_profiler");
        $__internal_715ba1d49387ef9bb708cd591718f20f2721048ae83a9fc2ee5cd2bb69772b69->enter($__internal_715ba1d49387ef9bb708cd591718f20f2721048ae83a9fc2ee5cd2bb69772b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_715ba1d49387ef9bb708cd591718f20f2721048ae83a9fc2ee5cd2bb69772b69->leave($__internal_715ba1d49387ef9bb708cd591718f20f2721048ae83a9fc2ee5cd2bb69772b69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbb321ed41eef6a3aff7f900155fd96dd34d4d1e0dd05b53197aeaaf68642510 = $this->env->getExtension("native_profiler");
        $__internal_cbb321ed41eef6a3aff7f900155fd96dd34d4d1e0dd05b53197aeaaf68642510->enter($__internal_cbb321ed41eef6a3aff7f900155fd96dd34d4d1e0dd05b53197aeaaf68642510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cbb321ed41eef6a3aff7f900155fd96dd34d4d1e0dd05b53197aeaaf68642510->leave($__internal_cbb321ed41eef6a3aff7f900155fd96dd34d4d1e0dd05b53197aeaaf68642510_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
