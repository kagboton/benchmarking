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
        $__internal_59e5178debceffb359f222b1a6e3bec3fa75aef03ee24516b65ec25c70d198f3 = $this->env->getExtension("native_profiler");
        $__internal_59e5178debceffb359f222b1a6e3bec3fa75aef03ee24516b65ec25c70d198f3->enter($__internal_59e5178debceffb359f222b1a6e3bec3fa75aef03ee24516b65ec25c70d198f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59e5178debceffb359f222b1a6e3bec3fa75aef03ee24516b65ec25c70d198f3->leave($__internal_59e5178debceffb359f222b1a6e3bec3fa75aef03ee24516b65ec25c70d198f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f58dc419cb9ff96ccc93f51a20925f567b1df2444c498c56d35c7f7c7448eb75 = $this->env->getExtension("native_profiler");
        $__internal_f58dc419cb9ff96ccc93f51a20925f567b1df2444c498c56d35c7f7c7448eb75->enter($__internal_f58dc419cb9ff96ccc93f51a20925f567b1df2444c498c56d35c7f7c7448eb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f58dc419cb9ff96ccc93f51a20925f567b1df2444c498c56d35c7f7c7448eb75->leave($__internal_f58dc419cb9ff96ccc93f51a20925f567b1df2444c498c56d35c7f7c7448eb75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e4a1eca1e680b2d0c71be3d991401b5fe879390789b3db1d1e44dc388c597f7 = $this->env->getExtension("native_profiler");
        $__internal_8e4a1eca1e680b2d0c71be3d991401b5fe879390789b3db1d1e44dc388c597f7->enter($__internal_8e4a1eca1e680b2d0c71be3d991401b5fe879390789b3db1d1e44dc388c597f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e4a1eca1e680b2d0c71be3d991401b5fe879390789b3db1d1e44dc388c597f7->leave($__internal_8e4a1eca1e680b2d0c71be3d991401b5fe879390789b3db1d1e44dc388c597f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4e75acf27f601d0264eca0e7219953c7273600a490e118cf901f3e4e74f844d = $this->env->getExtension("native_profiler");
        $__internal_e4e75acf27f601d0264eca0e7219953c7273600a490e118cf901f3e4e74f844d->enter($__internal_e4e75acf27f601d0264eca0e7219953c7273600a490e118cf901f3e4e74f844d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e4e75acf27f601d0264eca0e7219953c7273600a490e118cf901f3e4e74f844d->leave($__internal_e4e75acf27f601d0264eca0e7219953c7273600a490e118cf901f3e4e74f844d_prof);

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
