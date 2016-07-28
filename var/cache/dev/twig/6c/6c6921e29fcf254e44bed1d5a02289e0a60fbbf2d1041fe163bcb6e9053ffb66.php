<?php

/* @Benchmarking/Default/BoiteVitesse/edit.html.twig */
class __TwigTemplate_b100e076d9c507b349088634f15051e7ed1c30cb8e7fd0e1759b9245273d5593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/BoiteVitesse/edit.html.twig", 3);
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
        $__internal_20b1181fbfa0cc32e8b38e54b3fa6da33b254a52434346c0a523c8a2ff5891d4 = $this->env->getExtension("native_profiler");
        $__internal_20b1181fbfa0cc32e8b38e54b3fa6da33b254a52434346c0a523c8a2ff5891d4->enter($__internal_20b1181fbfa0cc32e8b38e54b3fa6da33b254a52434346c0a523c8a2ff5891d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/BoiteVitesse/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20b1181fbfa0cc32e8b38e54b3fa6da33b254a52434346c0a523c8a2ff5891d4->leave($__internal_20b1181fbfa0cc32e8b38e54b3fa6da33b254a52434346c0a523c8a2ff5891d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aca533b8a6e8818173a6d9e3509145774a30944bb97dfdf38f4d6b0400e34619 = $this->env->getExtension("native_profiler");
        $__internal_aca533b8a6e8818173a6d9e3509145774a30944bb97dfdf38f4d6b0400e34619->enter($__internal_aca533b8a6e8818173a6d9e3509145774a30944bb97dfdf38f4d6b0400e34619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aca533b8a6e8818173a6d9e3509145774a30944bb97dfdf38f4d6b0400e34619->leave($__internal_aca533b8a6e8818173a6d9e3509145774a30944bb97dfdf38f4d6b0400e34619_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_ac2b8f0d49c3573656ddeda4bc8f067ebaa4a0717a79d578423d0c172ff0beb4 = $this->env->getExtension("native_profiler");
        $__internal_ac2b8f0d49c3573656ddeda4bc8f067ebaa4a0717a79d578423d0c172ff0beb4->enter($__internal_ac2b8f0d49c3573656ddeda4bc8f067ebaa4a0717a79d578423d0c172ff0beb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_ac2b8f0d49c3573656ddeda4bc8f067ebaa4a0717a79d578423d0c172ff0beb4->leave($__internal_ac2b8f0d49c3573656ddeda4bc8f067ebaa4a0717a79d578423d0c172ff0beb4_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/BoiteVitesse/edit.html.twig";
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
