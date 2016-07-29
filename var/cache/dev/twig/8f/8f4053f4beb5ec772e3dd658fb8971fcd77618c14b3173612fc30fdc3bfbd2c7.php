<?php

/* @Benchmarking/Default/Marque/index.html.twig */
class __TwigTemplate_fabe597e2e6dc7bc789deff7965a72e56db90c47ce6a477398515f14205fc8ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Marque/index.html.twig", 3);
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
        $__internal_f188c247c809d7a43f267610a980bccf421af9083ebcd634e3de2245616566d9 = $this->env->getExtension("native_profiler");
        $__internal_f188c247c809d7a43f267610a980bccf421af9083ebcd634e3de2245616566d9->enter($__internal_f188c247c809d7a43f267610a980bccf421af9083ebcd634e3de2245616566d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Marque/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f188c247c809d7a43f267610a980bccf421af9083ebcd634e3de2245616566d9->leave($__internal_f188c247c809d7a43f267610a980bccf421af9083ebcd634e3de2245616566d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bae3d9ce14f3e0febfd9b11f897af26315a223975a7a25754cb0adf35d65a9d3 = $this->env->getExtension("native_profiler");
        $__internal_bae3d9ce14f3e0febfd9b11f897af26315a223975a7a25754cb0adf35d65a9d3->enter($__internal_bae3d9ce14f3e0febfd9b11f897af26315a223975a7a25754cb0adf35d65a9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bae3d9ce14f3e0febfd9b11f897af26315a223975a7a25754cb0adf35d65a9d3->leave($__internal_bae3d9ce14f3e0febfd9b11f897af26315a223975a7a25754cb0adf35d65a9d3_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_a96f2e29e8d9bbaa1474e870b9b196bb827ef262a88982463537a3917d54da22 = $this->env->getExtension("native_profiler");
        $__internal_a96f2e29e8d9bbaa1474e870b9b196bb827ef262a88982463537a3917d54da22->enter($__internal_a96f2e29e8d9bbaa1474e870b9b196bb827ef262a88982463537a3917d54da22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
    <h4 class=\"panel-title\">Liste des marques</h4>
  </div>

  <div class=\"panel-body\">
    <ul class=\"list-group\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMarques"]) ? $context["listMarques"] : $this->getContext($context, "listMarques")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 26
            echo "          <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_view", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "nom", array()), "html", null, true);
            echo "
          </a>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "        <li>Pas (encore !) de marques</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>

    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("marque_add");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-plus\"></i>
      Ajouter une marque
    </a>
  </div>




";
        
        $__internal_a96f2e29e8d9bbaa1474e870b9b196bb827ef262a88982463537a3917d54da22->leave($__internal_a96f2e29e8d9bbaa1474e870b9b196bb827ef262a88982463537a3917d54da22_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Marque/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  112 => 32,  105 => 30,  97 => 27,  92 => 26,  87 => 25,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Marque/index.html.twig #}*/
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
/*     <h4 class="panel-title">Liste des marques</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <ul class="list-group">*/
/*       {% for marque in listMarques %}*/
/*           <a class="list-group-item" href="{{ path('marque_view', {'id': marque.id}) }}">*/
/*             {{ marque.nom }}*/
/*           </a>*/
/*       {% else %}*/
/*         <li>Pas (encore !) de marques</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/* */
/*     <a href="{{ path('marque_add') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-plus"></i>*/
/*       Ajouter une marque*/
/*     </a>*/
/*   </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
