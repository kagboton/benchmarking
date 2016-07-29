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
        $__internal_63f95a70578240b9976d6d9ee3d3ac17345cd1bb147d5ada99b4e5a15ddf5041 = $this->env->getExtension("native_profiler");
        $__internal_63f95a70578240b9976d6d9ee3d3ac17345cd1bb147d5ada99b4e5a15ddf5041->enter($__internal_63f95a70578240b9976d6d9ee3d3ac17345cd1bb147d5ada99b4e5a15ddf5041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f95a70578240b9976d6d9ee3d3ac17345cd1bb147d5ada99b4e5a15ddf5041->leave($__internal_63f95a70578240b9976d6d9ee3d3ac17345cd1bb147d5ada99b4e5a15ddf5041_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9dd57072c3d9f8cc562c44f180d8cfc2b58ba261ba8d7a5712fdb5ffa9b6d553 = $this->env->getExtension("native_profiler");
        $__internal_9dd57072c3d9f8cc562c44f180d8cfc2b58ba261ba8d7a5712fdb5ffa9b6d553->enter($__internal_9dd57072c3d9f8cc562c44f180d8cfc2b58ba261ba8d7a5712fdb5ffa9b6d553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9dd57072c3d9f8cc562c44f180d8cfc2b58ba261ba8d7a5712fdb5ffa9b6d553->leave($__internal_9dd57072c3d9f8cc562c44f180d8cfc2b58ba261ba8d7a5712fdb5ffa9b6d553_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_606cf26d5ef151a94461b36a1067c74b3bbc226ce3846fd3770896ce79796365 = $this->env->getExtension("native_profiler");
        $__internal_606cf26d5ef151a94461b36a1067c74b3bbc226ce3846fd3770896ce79796365->enter($__internal_606cf26d5ef151a94461b36a1067c74b3bbc226ce3846fd3770896ce79796365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_606cf26d5ef151a94461b36a1067c74b3bbc226ce3846fd3770896ce79796365->leave($__internal_606cf26d5ef151a94461b36a1067c74b3bbc226ce3846fd3770896ce79796365_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00f430384ab0b143abc34b6717f6ded2636206383f9a03cb006fee07f4818e68 = $this->env->getExtension("native_profiler");
        $__internal_00f430384ab0b143abc34b6717f6ded2636206383f9a03cb006fee07f4818e68->enter($__internal_00f430384ab0b143abc34b6717f6ded2636206383f9a03cb006fee07f4818e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00f430384ab0b143abc34b6717f6ded2636206383f9a03cb006fee07f4818e68->leave($__internal_00f430384ab0b143abc34b6717f6ded2636206383f9a03cb006fee07f4818e68_prof);

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
