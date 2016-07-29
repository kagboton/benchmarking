<?php

/* @Benchmarking/Default/ComposantAffichage/delete.html.twig */
class __TwigTemplate_5d0919a76d19a3878369dfdaed418c310b430dd0b6859ea5af89984fc331b306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/ComposantAffichage/delete.html.twig", 3);
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
        $__internal_f41b73e76084517e415f74bbdcdfcbb148948d33a1fb6ed0572e25a90b83cfa8 = $this->env->getExtension("native_profiler");
        $__internal_f41b73e76084517e415f74bbdcdfcbb148948d33a1fb6ed0572e25a90b83cfa8->enter($__internal_f41b73e76084517e415f74bbdcdfcbb148948d33a1fb6ed0572e25a90b83cfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/ComposantAffichage/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f41b73e76084517e415f74bbdcdfcbb148948d33a1fb6ed0572e25a90b83cfa8->leave($__internal_f41b73e76084517e415f74bbdcdfcbb148948d33a1fb6ed0572e25a90b83cfa8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_18c57113be5c8430d2086f39d41d6292469df05a0446c007629de092f67485c2 = $this->env->getExtension("native_profiler");
        $__internal_18c57113be5c8430d2086f39d41d6292469df05a0446c007629de092f67485c2->enter($__internal_18c57113be5c8430d2086f39d41d6292469df05a0446c007629de092f67485c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_18c57113be5c8430d2086f39d41d6292469df05a0446c007629de092f67485c2->leave($__internal_18c57113be5c8430d2086f39d41d6292469df05a0446c007629de092f67485c2_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_455c0d49e932ac4cf6645c28894cda8c59d76886099da577c2aaf89312a70c70 = $this->env->getExtension("native_profiler");
        $__internal_455c0d49e932ac4cf6645c28894cda8c59d76886099da577c2aaf89312a70c70->enter($__internal_455c0d49e932ac4cf6645c28894cda8c59d76886099da577c2aaf89312a70c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer un composant d'affichage</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer le composant  \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_delete", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_view", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au composant
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_455c0d49e932ac4cf6645c28894cda8c59d76886099da577c2aaf89312a70c70->leave($__internal_455c0d49e932ac4cf6645c28894cda8c59d76886099da577c2aaf89312a70c70_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/ComposantAffichage/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 24,  74 => 19,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/ComposantAffichage/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un composant d'affichage - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer un composant d'affichage</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer le composant  "{{ composantAffichage.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('composantAffichage_delete', {'id': composantAffichage.id}) }}" method="post">*/
/*     <a href="{{ path('composantAffichage_view', {'id': composantAffichage.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au composant*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
