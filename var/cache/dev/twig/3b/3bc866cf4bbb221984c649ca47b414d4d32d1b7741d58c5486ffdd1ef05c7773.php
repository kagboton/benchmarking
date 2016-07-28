<?php

/* @Benchmarking/Default/Motorisation/index.html.twig */
class __TwigTemplate_f0b6fba45fd40f0f07ffdd9bd2e3af16d910b1c61e6c8892beaa6225ccf742c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Motorisation/index.html.twig", 3);
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
        $__internal_7743911964a0ba512bb5e29261ba9fa99d84d5d2f5fc26acaf42307196befe16 = $this->env->getExtension("native_profiler");
        $__internal_7743911964a0ba512bb5e29261ba9fa99d84d5d2f5fc26acaf42307196befe16->enter($__internal_7743911964a0ba512bb5e29261ba9fa99d84d5d2f5fc26acaf42307196befe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Motorisation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7743911964a0ba512bb5e29261ba9fa99d84d5d2f5fc26acaf42307196befe16->leave($__internal_7743911964a0ba512bb5e29261ba9fa99d84d5d2f5fc26acaf42307196befe16_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c716df75e85605c8d5a932f71fb37a32aa407c1d5c87774f0701d91d2dd357d = $this->env->getExtension("native_profiler");
        $__internal_5c716df75e85605c8d5a932f71fb37a32aa407c1d5c87774f0701d91d2dd357d->enter($__internal_5c716df75e85605c8d5a932f71fb37a32aa407c1d5c87774f0701d91d2dd357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5c716df75e85605c8d5a932f71fb37a32aa407c1d5c87774f0701d91d2dd357d->leave($__internal_5c716df75e85605c8d5a932f71fb37a32aa407c1d5c87774f0701d91d2dd357d_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_0a52178f1514282f3818c4df28e524e3f118b08b1bffc82ee9649eef08c4450c = $this->env->getExtension("native_profiler");
        $__internal_0a52178f1514282f3818c4df28e524e3f118b08b1bffc82ee9649eef08c4450c->enter($__internal_0a52178f1514282f3818c4df28e524e3f118b08b1bffc82ee9649eef08c4450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "
    <p class=\"alert alert-info\">
      ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </p>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Liste des motorisations</h4>
  </div>


  <div class=\"panel-body\">
    <ul class=\"list-group\">

      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMotorisations"]) ? $context["listMotorisations"] : $this->getContext($context, "listMotorisations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["motorisation"]) {
            // line 28
            echo "
          <a class=\"list-group-item\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motorisation_view", array("id" => $this->getAttribute($context["motorisation"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["motorisation"], "nom", array()), "html", null, true);
            echo "
          </a>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <li>Pas (encore !) de motorisations</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motorisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </ul>
  </div>



";
        
        $__internal_0a52178f1514282f3818c4df28e524e3f118b08b1bffc82ee9649eef08c4450c->leave($__internal_0a52178f1514282f3818c4df28e524e3f118b08b1bffc82ee9649eef08c4450c_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Motorisation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  109 => 33,  101 => 30,  97 => 29,  94 => 28,  89 => 27,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Motorisation/index.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Motorisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/* */
/*   {% endfor %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Liste des motorisations</h4>*/
/*   </div>*/
/* */
/* */
/*   <div class="panel-body">*/
/*     <ul class="list-group">*/
/* */
/*       {% for motorisation in listMotorisations %}*/
/* */
/*           <a class="list-group-item" href="{{ path('motorisation_view', {'id': motorisation.id}) }}">*/
/*             {{ motorisation.nom }}*/
/*           </a>*/
/*       {% else %}*/
/*         <li>Pas (encore !) de motorisations</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
