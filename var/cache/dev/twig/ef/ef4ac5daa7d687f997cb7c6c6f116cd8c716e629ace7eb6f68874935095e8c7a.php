<?php

/* BenchmarkingBundle:Default/BoiteVitesse:edit.html.twig */
class __TwigTemplate_6945216ed3ee52f04920212eabc98c18a8862b3fd22b8be68ac484688bbab652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/BoiteVitesse:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90bc08954c1627da3c1d29926ff4b639609df42285197f1407946ead121c2001 = $this->env->getExtension("native_profiler");
        $__internal_90bc08954c1627da3c1d29926ff4b639609df42285197f1407946ead121c2001->enter($__internal_90bc08954c1627da3c1d29926ff4b639609df42285197f1407946ead121c2001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90bc08954c1627da3c1d29926ff4b639609df42285197f1407946ead121c2001->leave($__internal_90bc08954c1627da3c1d29926ff4b639609df42285197f1407946ead121c2001_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9ab47151203c6576541d47baa014861c0b0bba609206201019ba0559e49f810 = $this->env->getExtension("native_profiler");
        $__internal_b9ab47151203c6576541d47baa014861c0b0bba609206201019ba0559e49f810->enter($__internal_b9ab47151203c6576541d47baa014861c0b0bba609206201019ba0559e49f810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b9ab47151203c6576541d47baa014861c0b0bba609206201019ba0559e49f810->leave($__internal_b9ab47151203c6576541d47baa014861c0b0bba609206201019ba0559e49f810_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_7c1ee55577bd4def7ef4a7ebc2ed6f8c2f3ec795f21bc1ef7979a3e2b7d4c51c = $this->env->getExtension("native_profiler");
        $__internal_7c1ee55577bd4def7ef4a7ebc2ed6f8c2f3ec795f21bc1ef7979a3e2b7d4c51c->enter($__internal_7c1ee55577bd4def7ef4a7ebc2ed6f8c2f3ec795f21bc1ef7979a3e2b7d4c51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une boîte à vitesse</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:BoiteVitesse/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_view", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la boîte à vitesse
      </a>
    </p>
  </div>

";
        
        $__internal_7c1ee55577bd4def7ef4a7ebc2ed6f8c2f3ec795f21bc1ef7979a3e2b7d4c51c->leave($__internal_7c1ee55577bd4def7ef4a7ebc2ed6f8c2f3ec795f21bc1ef7979a3e2b7d4c51c_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/BoiteVitesse:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  65 => 16,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/BoiteVitesse/edit.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une boîte à vitesse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une boîte à vitesse</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:BoiteVitesse/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('boiteVitesse_view', {'id': boiteVitesse.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la boîte à vitesse*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
