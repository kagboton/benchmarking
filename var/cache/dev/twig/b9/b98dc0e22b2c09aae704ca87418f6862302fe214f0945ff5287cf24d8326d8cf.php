<?php

/* @Pages/Default/Pages/layout/page.html.twig */
class __TwigTemplate_29420346f2b7e2c7ef7a31ccaaaf96c4d7f8dbc02ca49e9699d4e027a52a1501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Pages/Default/Pages/layout/page.html.twig", 1);
        $this->blocks = array(
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffc39c43578adf2d1bdb8c7ee7ae58b62406a37b0bf266144d142b3b9cf7078b = $this->env->getExtension("native_profiler");
        $__internal_ffc39c43578adf2d1bdb8c7ee7ae58b62406a37b0bf266144d142b3b9cf7078b->enter($__internal_ffc39c43578adf2d1bdb8c7ee7ae58b62406a37b0bf266144d142b3b9cf7078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Pages/Default/Pages/layout/page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffc39c43578adf2d1bdb8c7ee7ae58b62406a37b0bf266144d142b3b9cf7078b->leave($__internal_ffc39c43578adf2d1bdb8c7ee7ae58b62406a37b0bf266144d142b3b9cf7078b_prof);

    }

    // line 3
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_ca3ca8071001229574731c62637e3fcff07d561ec71c7598e16ee27a21876ab7 = $this->env->getExtension("native_profiler");
        $__internal_ca3ca8071001229574731c62637e3fcff07d561ec71c7598e16ee27a21876ab7->enter($__internal_ca3ca8071001229574731c62637e3fcff07d561ec71c7598e16ee27a21876ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 4
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
            <div class=\"span12\">
                    ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
                </div>
        </div>
    </div>
";
        
        $__internal_ca3ca8071001229574731c62637e3fcff07d561ec71c7598e16ee27a21876ab7->leave($__internal_ca3ca8071001229574731c62637e3fcff07d561ec71c7598e16ee27a21876ab7_prof);

    }

    public function getTemplateName()
    {
        return "@Pages/Default/Pages/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <h1>{{ page.titre }}</h1>*/
/*             <div class="span12">*/
/*                     {{ page.contenu | raw }}*/
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
