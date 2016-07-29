<?php

/* BenchmarkingBundle:Default/ComposantAffichage:index.html.twig */
class __TwigTemplate_7a931024a2d0b763d23463a9e0eb7806bac452d7d5b4ecf2a0e35260b4189169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/ComposantAffichage:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bbf3909c23664adcd25bb753f23284b24746fbbdef7c9a38c197b17695d6c9c = $this->env->getExtension("native_profiler");
        $__internal_8bbf3909c23664adcd25bb753f23284b24746fbbdef7c9a38c197b17695d6c9c->enter($__internal_8bbf3909c23664adcd25bb753f23284b24746fbbdef7c9a38c197b17695d6c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/ComposantAffichage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bbf3909c23664adcd25bb753f23284b24746fbbdef7c9a38c197b17695d6c9c->leave($__internal_8bbf3909c23664adcd25bb753f23284b24746fbbdef7c9a38c197b17695d6c9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cc8df6ee6a3c16c8b9e49ce1e2cda3cb36bf0aacd8e6a8134f30dbcc6fec83c = $this->env->getExtension("native_profiler");
        $__internal_7cc8df6ee6a3c16c8b9e49ce1e2cda3cb36bf0aacd8e6a8134f30dbcc6fec83c->enter($__internal_7cc8df6ee6a3c16c8b9e49ce1e2cda3cb36bf0aacd8e6a8134f30dbcc6fec83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Composants d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7cc8df6ee6a3c16c8b9e49ce1e2cda3cb36bf0aacd8e6a8134f30dbcc6fec83c->leave($__internal_7cc8df6ee6a3c16c8b9e49ce1e2cda3cb36bf0aacd8e6a8134f30dbcc6fec83c_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_2e2bfe1644f85f9e8dae77774d3e1e683d2aa1ee1e414f5551a4a9b94e0e94f7 = $this->env->getExtension("native_profiler");
        $__internal_2e2bfe1644f85f9e8dae77774d3e1e683d2aa1ee1e414f5551a4a9b94e0e94f7->enter($__internal_2e2bfe1644f85f9e8dae77774d3e1e683d2aa1ee1e414f5551a4a9b94e0e94f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des composants d'affichage</h2>

    <ul>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listComposantsAffichage"]) ? $context["listComposantsAffichage"] : $this->getContext($context, "listComposantsAffichage")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["composantAffichage"]) {
            // line 23
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_view", array("id" => $this->getAttribute($context["composantAffichage"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["composantAffichage"], "nom", array()), "html", null, true);
            echo "</a></li>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "            <li>Pas (encore !) de composants d'affichage</li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composantAffichage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    </ul>

";
        
        $__internal_2e2bfe1644f85f9e8dae77774d3e1e683d2aa1ee1e414f5551a4a9b94e0e94f7->leave($__internal_2e2bfe1644f85f9e8dae77774d3e1e683d2aa1ee1e414f5551a4a9b94e0e94f7_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/ComposantAffichage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 29,  100 => 26,  89 => 23,  84 => 22,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Fonction/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Composants d'affichage - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/* */
/*   {% endfor %}*/
/* */
/*   <h2>Liste des composants d'affichage</h2>*/
/* */
/*     <ul>*/
/*         {% for composantAffichage in listComposantsAffichage %}*/
/*             <li><a href="{{ path('composantAffichage_view', {'id': composantAffichage.id}) }}">{{ composantAffichage.nom }}</a></li>*/
/* */
/*         {% else %}*/
/*             <li>Pas (encore !) de composants d'affichage</li>*/
/* */
/*         {% endfor %}*/
/* */
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
