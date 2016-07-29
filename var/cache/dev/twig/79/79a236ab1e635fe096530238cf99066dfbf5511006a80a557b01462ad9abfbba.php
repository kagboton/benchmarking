<?php

/* @Benchmarking/Default/ComposantAffichage/index.html.twig */
class __TwigTemplate_1f9b786cf91b03455d511cd5a2bd0ac1636b1ce9262dac98c8b3a2f0b4e5e944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/ComposantAffichage/index.html.twig", 3);
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
        $__internal_ff3d6d59ee82afc48d898a2496de04bf60a85bfa38c1bebdf3f3efb5d4143112 = $this->env->getExtension("native_profiler");
        $__internal_ff3d6d59ee82afc48d898a2496de04bf60a85bfa38c1bebdf3f3efb5d4143112->enter($__internal_ff3d6d59ee82afc48d898a2496de04bf60a85bfa38c1bebdf3f3efb5d4143112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/ComposantAffichage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff3d6d59ee82afc48d898a2496de04bf60a85bfa38c1bebdf3f3efb5d4143112->leave($__internal_ff3d6d59ee82afc48d898a2496de04bf60a85bfa38c1bebdf3f3efb5d4143112_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dcdc7faf577a453e5f17ef889961ded8b1e85f8093b46ce386e10b0c1112d8c = $this->env->getExtension("native_profiler");
        $__internal_1dcdc7faf577a453e5f17ef889961ded8b1e85f8093b46ce386e10b0c1112d8c->enter($__internal_1dcdc7faf577a453e5f17ef889961ded8b1e85f8093b46ce386e10b0c1112d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Composants d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1dcdc7faf577a453e5f17ef889961ded8b1e85f8093b46ce386e10b0c1112d8c->leave($__internal_1dcdc7faf577a453e5f17ef889961ded8b1e85f8093b46ce386e10b0c1112d8c_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_d14f8011da0610ffcb081591c5155124968f3d2aeeb72ec7dc4c1278606360d5 = $this->env->getExtension("native_profiler");
        $__internal_d14f8011da0610ffcb081591c5155124968f3d2aeeb72ec7dc4c1278606360d5->enter($__internal_d14f8011da0610ffcb081591c5155124968f3d2aeeb72ec7dc4c1278606360d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_d14f8011da0610ffcb081591c5155124968f3d2aeeb72ec7dc4c1278606360d5->leave($__internal_d14f8011da0610ffcb081591c5155124968f3d2aeeb72ec7dc4c1278606360d5_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/ComposantAffichage/index.html.twig";
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
