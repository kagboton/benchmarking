<?php

/* BenchmarkingBundle:Default/Marque:edit.html.twig */
class __TwigTemplate_132b6bb5303be0a1d4b8c51439ec1292e39089e252b024a589876711e8368a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBunlde::layout.html.twig", "BenchmarkingBundle:Default/Marque:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBunlde::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73a8b9758eafd207bb0b4c8465c91847ab1ef19b5374faf90c65e879e2c253b4 = $this->env->getExtension("native_profiler");
        $__internal_73a8b9758eafd207bb0b4c8465c91847ab1ef19b5374faf90c65e879e2c253b4->enter($__internal_73a8b9758eafd207bb0b4c8465c91847ab1ef19b5374faf90c65e879e2c253b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Marque:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73a8b9758eafd207bb0b4c8465c91847ab1ef19b5374faf90c65e879e2c253b4->leave($__internal_73a8b9758eafd207bb0b4c8465c91847ab1ef19b5374faf90c65e879e2c253b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_064f255f3f2c2fa554cb2e57039c4201d21662677fb175e543c0b042603a088b = $this->env->getExtension("native_profiler");
        $__internal_064f255f3f2c2fa554cb2e57039c4201d21662677fb175e543c0b042603a088b->enter($__internal_064f255f3f2c2fa554cb2e57039c4201d21662677fb175e543c0b042603a088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_064f255f3f2c2fa554cb2e57039c4201d21662677fb175e543c0b042603a088b->leave($__internal_064f255f3f2c2fa554cb2e57039c4201d21662677fb175e543c0b042603a088b_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_bebda994e2224266afee9ad7fe83c4cc018cfc02c44a21a71b45376760dd3607 = $this->env->getExtension("native_profiler");
        $__internal_bebda994e2224266afee9ad7fe83c4cc018cfc02c44a21a71b45376760dd3607->enter($__internal_bebda994e2224266afee9ad7fe83c4cc018cfc02c44a21a71b45376760dd3607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une marque</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Marque/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_view", array("id" => $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la marque
      </a>
    </p>
  </div>

";
        
        $__internal_bebda994e2224266afee9ad7fe83c4cc018cfc02c44a21a71b45376760dd3607->leave($__internal_bebda994e2224266afee9ad7fe83c4cc018cfc02c44a21a71b45376760dd3607_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Marque:edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Marque/edit.html.twig #}*/
/* */
/* {% extends "AdminBunlde::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une marque - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une marque</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Marque/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('marque_view', {'id': marque.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la marque*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
