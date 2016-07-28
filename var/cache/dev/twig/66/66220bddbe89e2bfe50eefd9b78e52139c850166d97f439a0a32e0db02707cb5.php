<?php

/* BenchmarkingBundle:Default/BoiteVitesse:add.html.twig */
class __TwigTemplate_f2566c1a2ebc2caaf3967a4e195fc90b9e9b33cc9dc42b1ea4a503139d76bed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/BoiteVitesse:add.html.twig", 3);
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
        $__internal_3c2083816484b94b2310fb6586ac973bc848d63b4bb08d1ce81289a21214d49c = $this->env->getExtension("native_profiler");
        $__internal_3c2083816484b94b2310fb6586ac973bc848d63b4bb08d1ce81289a21214d49c->enter($__internal_3c2083816484b94b2310fb6586ac973bc848d63b4bb08d1ce81289a21214d49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c2083816484b94b2310fb6586ac973bc848d63b4bb08d1ce81289a21214d49c->leave($__internal_3c2083816484b94b2310fb6586ac973bc848d63b4bb08d1ce81289a21214d49c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5183765bacdba92983e9516ae3cc70405a605684c7a4a4c8aabb57df6e5618e3 = $this->env->getExtension("native_profiler");
        $__internal_5183765bacdba92983e9516ae3cc70405a605684c7a4a4c8aabb57df6e5618e3->enter($__internal_5183765bacdba92983e9516ae3cc70405a605684c7a4a4c8aabb57df6e5618e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5183765bacdba92983e9516ae3cc70405a605684c7a4a4c8aabb57df6e5618e3->leave($__internal_5183765bacdba92983e9516ae3cc70405a605684c7a4a4c8aabb57df6e5618e3_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_4ff184e3d0b8033dbb8d58ab0abc2274ae820e08e4b63aae7fa8bfae66723242 = $this->env->getExtension("native_profiler");
        $__internal_4ff184e3d0b8033dbb8d58ab0abc2274ae820e08e4b63aae7fa8bfae66723242->enter($__internal_4ff184e3d0b8033dbb8d58ab0abc2274ae820e08e4b63aae7fa8bfae66723242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Ajouter une boîte à vitesse</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:BoiteVitesse/form.html.twig");
        echo "
  </div>


";
        
        $__internal_4ff184e3d0b8033dbb8d58ab0abc2274ae820e08e4b63aae7fa8bfae66723242->leave($__internal_4ff184e3d0b8033dbb8d58ab0abc2274ae820e08e4b63aae7fa8bfae66723242_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/BoiteVitesse:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/BoiteVitesse/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une boîte à vitesse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Ajouter une boîte à vitesse</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:BoiteVitesse/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
