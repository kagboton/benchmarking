<?php

/* BenchmarkingBundle:Default:Vehicule/delete.html.twig */
class __TwigTemplate_3322544f5c16682cfda7d911e5f045ed2133e2148eac6f733cc581d392e801ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default:Vehicule/delete.html.twig", 3);
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
        $__internal_9b9baed019c740ab1b55b5c948d61d47999197545b2044a43596545b224f05bf = $this->env->getExtension("native_profiler");
        $__internal_9b9baed019c740ab1b55b5c948d61d47999197545b2044a43596545b224f05bf->enter($__internal_9b9baed019c740ab1b55b5c948d61d47999197545b2044a43596545b224f05bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b9baed019c740ab1b55b5c948d61d47999197545b2044a43596545b224f05bf->leave($__internal_9b9baed019c740ab1b55b5c948d61d47999197545b2044a43596545b224f05bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4945fa8db8859a9bd3859e57cddc520904cd81f85f22b49faccefa225f9b9964 = $this->env->getExtension("native_profiler");
        $__internal_4945fa8db8859a9bd3859e57cddc520904cd81f85f22b49faccefa225f9b9964->enter($__internal_4945fa8db8859a9bd3859e57cddc520904cd81f85f22b49faccefa225f9b9964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un véhicule - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4945fa8db8859a9bd3859e57cddc520904cd81f85f22b49faccefa225f9b9964->leave($__internal_4945fa8db8859a9bd3859e57cddc520904cd81f85f22b49faccefa225f9b9964_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_c5106f188f05d25fd38b9ae704af75d769a2b4f888f0c39938a0f6b03903546b = $this->env->getExtension("native_profiler");
        $__internal_c5106f188f05d25fd38b9ae704af75d769a2b4f888f0c39938a0f6b03903546b->enter($__internal_c5106f188f05d25fd38b9ae704af75d769a2b4f888f0c39938a0f6b03903546b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Supprimer un véhicule</h4>
  </div>
  <div class=\"panel-body\">
    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer le véhicule \"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "marque", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "nom", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 20
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_delete", array("id" => $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_view", array("id" => $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour au véhicule
      </a>
      ";
        // line 26
        echo "      <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
      ";
        // line 28
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

  </div>


";
        
        $__internal_c5106f188f05d25fd38b9ae704af75d769a2b4f888f0c39938a0f6b03903546b->leave($__internal_c5106f188f05d25fd38b9ae704af75d769a2b4f888f0c39938a0f6b03903546b_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default:Vehicule/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  85 => 26,  78 => 21,  73 => 20,  65 => 16,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeTdB/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un véhicule - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Supprimer un véhicule</h4>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer le véhicule "{{ vehicule.marque.nom }} {{ vehicule.nom }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('vehicule_delete', {'id': vehicule.id}) }}" method="post">*/
/*       <a href="{{ path('vehicule_view', {'id': vehicule.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour au véhicule*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*       <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
