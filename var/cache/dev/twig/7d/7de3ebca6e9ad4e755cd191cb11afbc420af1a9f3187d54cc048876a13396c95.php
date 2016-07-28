<?php

/* BenchmarkingBundle:Default/TechnologieAfficheur:view.html.twig */
class __TwigTemplate_60080b00ded47772464ca5faab7e110869e14ed69ac8bffd400c4d0b4e168bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TechnologieAfficheur:view.html.twig", 3);
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
        $__internal_a5634e00318809626c65265a84e77541a2b75d01a3ffc94eaf152525b35c684b = $this->env->getExtension("native_profiler");
        $__internal_a5634e00318809626c65265a84e77541a2b75d01a3ffc94eaf152525b35c684b->enter($__internal_a5634e00318809626c65265a84e77541a2b75d01a3ffc94eaf152525b35c684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5634e00318809626c65265a84e77541a2b75d01a3ffc94eaf152525b35c684b->leave($__internal_a5634e00318809626c65265a84e77541a2b75d01a3ffc94eaf152525b35c684b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9f9dd1050f3df54b5c677e5dfeda4b4df3869784a3f325a25f83309728246ff = $this->env->getExtension("native_profiler");
        $__internal_f9f9dd1050f3df54b5c677e5dfeda4b4df3869784a3f325a25f83309728246ff->enter($__internal_f9f9dd1050f3df54b5c677e5dfeda4b4df3869784a3f325a25f83309728246ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f9f9dd1050f3df54b5c677e5dfeda4b4df3869784a3f325a25f83309728246ff->leave($__internal_f9f9dd1050f3df54b5c677e5dfeda4b4df3869784a3f325a25f83309728246ff_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_1049e97e65291b858be7fa2cf39c7100ce1c8286fee605c8ac79bd2cd83ce60c = $this->env->getExtension("native_profiler");
        $__internal_1049e97e65291b858be7fa2cf39c7100ce1c8286fee605c8ac79bd2cd83ce60c->enter($__internal_1049e97e65291b858be7fa2cf39c7100ce1c8286fee605c8ac79bd2cd83ce60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "nom", array()), "html", null, true);
        echo "</h2>



    <p>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("technologiesAfficheur");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("technologieAfficheur_edit", array("id" => $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier la Technologie Afficheur
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("technologieAfficheur_delete", array("id" => $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer la Technologie Afficheur
        </a>
    </p>


";
        
        $__internal_1049e97e65291b858be7fa2cf39c7100ce1c8286fee605c8ac79bd2cd83ce60c->leave($__internal_1049e97e65291b858be7fa2cf39c7100ce1c8286fee605c8ac79bd2cd83ce60c_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TechnologieAfficheur:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  96 => 28,  89 => 24,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TechnologieAfficheur/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*         <p class="alert alert-info">*/
/*             {{ flashMessage }}*/
/*         </p>*/
/* */
/*     {% endfor %}*/
/* */
/*   <h2>{{ technologieAfficheur.nom }}</h2>*/
/* */
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('technologiesAfficheur') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('technologieAfficheur_edit', {'id': technologieAfficheur.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier la Technologie Afficheur*/
/*         </a>*/
/*         <a href="{{ path('technologieAfficheur_delete', {'id': technologieAfficheur.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer la Technologie Afficheur*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
