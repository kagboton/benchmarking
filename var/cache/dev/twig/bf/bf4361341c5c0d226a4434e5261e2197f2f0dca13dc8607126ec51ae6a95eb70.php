<?php

/* PagesBundle:Default/Pages/layout:page.html.twig */
class __TwigTemplate_6e8c200edbc9006881e0a7847ee38c394dee399b009286039230c935e977b279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default/Pages/layout:page.html.twig", 1);
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
        $__internal_7c480af318ec66a83b487758688fadb99fe3177889b41450bdce5f760fb7fe26 = $this->env->getExtension("native_profiler");
        $__internal_7c480af318ec66a83b487758688fadb99fe3177889b41450bdce5f760fb7fe26->enter($__internal_7c480af318ec66a83b487758688fadb99fe3177889b41450bdce5f760fb7fe26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/Pages/layout:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c480af318ec66a83b487758688fadb99fe3177889b41450bdce5f760fb7fe26->leave($__internal_7c480af318ec66a83b487758688fadb99fe3177889b41450bdce5f760fb7fe26_prof);

    }

    // line 3
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_d5d939d6ff79197159cc1fb23c1d150b2d305c0ed9ac213536d017552e37521e = $this->env->getExtension("native_profiler");
        $__internal_d5d939d6ff79197159cc1fb23c1d150b2d305c0ed9ac213536d017552e37521e->enter($__internal_d5d939d6ff79197159cc1fb23c1d150b2d305c0ed9ac213536d017552e37521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_d5d939d6ff79197159cc1fb23c1d150b2d305c0ed9ac213536d017552e37521e->leave($__internal_d5d939d6ff79197159cc1fb23c1d150b2d305c0ed9ac213536d017552e37521e_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/Pages/layout:page.html.twig";
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
