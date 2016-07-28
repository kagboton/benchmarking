<?php

/* BenchmarkingBundle:Default/Marque:add.html.twig */
class __TwigTemplate_6ee2ee8919f9922c6536a8fdf616b747f7ddc411a7da1615ebfcf81a529a5071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Marque:add.html.twig", 3);
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
        $__internal_a5e424b00ac8383cdb4c6e324897f9b367ce508c5e2011e3e629d63a632daa7f = $this->env->getExtension("native_profiler");
        $__internal_a5e424b00ac8383cdb4c6e324897f9b367ce508c5e2011e3e629d63a632daa7f->enter($__internal_a5e424b00ac8383cdb4c6e324897f9b367ce508c5e2011e3e629d63a632daa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Marque:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e424b00ac8383cdb4c6e324897f9b367ce508c5e2011e3e629d63a632daa7f->leave($__internal_a5e424b00ac8383cdb4c6e324897f9b367ce508c5e2011e3e629d63a632daa7f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_56983b3c9fae0013c63083753234ee247c11a829663370396fadc23d80697cb6 = $this->env->getExtension("native_profiler");
        $__internal_56983b3c9fae0013c63083753234ee247c11a829663370396fadc23d80697cb6->enter($__internal_56983b3c9fae0013c63083753234ee247c11a829663370396fadc23d80697cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_56983b3c9fae0013c63083753234ee247c11a829663370396fadc23d80697cb6->leave($__internal_56983b3c9fae0013c63083753234ee247c11a829663370396fadc23d80697cb6_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_28756ed1f684a9fef87e3fd5d2b4ad24d7bb9730dd5727ff3370433eabf26aa2 = $this->env->getExtension("native_profiler");
        $__internal_28756ed1f684a9fef87e3fd5d2b4ad24d7bb9730dd5727ff3370433eabf26aa2->enter($__internal_28756ed1f684a9fef87e3fd5d2b4ad24d7bb9730dd5727ff3370433eabf26aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Ajouter une marque</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Marque/form.html.twig");
        echo "
  </div>

";
        
        $__internal_28756ed1f684a9fef87e3fd5d2b4ad24d7bb9730dd5727ff3370433eabf26aa2->leave($__internal_28756ed1f684a9fef87e3fd5d2b4ad24d7bb9730dd5727ff3370433eabf26aa2_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Marque:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Marque/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une marque - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Ajouter une marque</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Marque/form.html.twig") }}*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
