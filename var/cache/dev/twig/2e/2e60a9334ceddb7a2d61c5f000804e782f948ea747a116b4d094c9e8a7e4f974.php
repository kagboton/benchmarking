<?php

/* BenchmarkingBundle:Default/BoiteVitesse:view.html.twig */
class __TwigTemplate_58aa483ddb442600c0fd9ca48c8652fc107a16a36c45bcb3cc9d2cbb15d423d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/BoiteVitesse:view.html.twig", 3);
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
        $__internal_c99a25b61b4e3cd6d021fdbb22976b3ffd9bafaea36be63efb52304e70941ebd = $this->env->getExtension("native_profiler");
        $__internal_c99a25b61b4e3cd6d021fdbb22976b3ffd9bafaea36be63efb52304e70941ebd->enter($__internal_c99a25b61b4e3cd6d021fdbb22976b3ffd9bafaea36be63efb52304e70941ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c99a25b61b4e3cd6d021fdbb22976b3ffd9bafaea36be63efb52304e70941ebd->leave($__internal_c99a25b61b4e3cd6d021fdbb22976b3ffd9bafaea36be63efb52304e70941ebd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a45bbfa604489851eb45c9d9d3e9dd077970c8373109cbcf5e7a9a86afb4432 = $this->env->getExtension("native_profiler");
        $__internal_9a45bbfa604489851eb45c9d9d3e9dd077970c8373109cbcf5e7a9a86afb4432->enter($__internal_9a45bbfa604489851eb45c9d9d3e9dd077970c8373109cbcf5e7a9a86afb4432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9a45bbfa604489851eb45c9d9d3e9dd077970c8373109cbcf5e7a9a86afb4432->leave($__internal_9a45bbfa604489851eb45c9d9d3e9dd077970c8373109cbcf5e7a9a86afb4432_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_39924408e3065c04ea947fe2b71981dbaee8193bd10e571447d68a67a26dec89 = $this->env->getExtension("native_profiler");
        $__internal_39924408e3065c04ea947fe2b71981dbaee8193bd10e571447d68a67a26dec89->enter($__internal_39924408e3065c04ea947fe2b71981dbaee8193bd10e571447d68a67a26dec89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        <h4 class=\"panel-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "nom", array()), "html", null, true);
        echo "</h4>
    </div>


    <div class=\"panel-body\">
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "description", array()), "html", null, true);
        echo "

        <br><br>

        <p>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("boitesVitesse");
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_edit", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier la boîte à vitesse
            </a>
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_delete", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer la boîte à vitesse
            </a>
        </p>
    </div>

";
        
        $__internal_39924408e3065c04ea947fe2b71981dbaee8193bd10e571447d68a67a26dec89->leave($__internal_39924408e3065c04ea947fe2b71981dbaee8193bd10e571447d68a67a26dec89_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/BoiteVitesse:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 34,  98 => 30,  90 => 25,  82 => 20,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/BoiteVitesse/view.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une boîte à vitesse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*         <p class="alert alert-info">*/
/*             {{ flashMessage }}*/
/*         </p>*/
/* */
/*     {% endfor %}*/
/* */
/*     <div class="panel-heading">*/
/*         <h4 class="panel-title">{{ boiteVitesse.nom }}</h4>*/
/*     </div>*/
/* */
/* */
/*     <div class="panel-body">*/
/*         {{ boiteVitesse.description }}*/
/* */
/*         <br><br>*/
/* */
/*         <p>*/
/*             <a href="{{ path('boitesVitesse') }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-chevron-left"></i>*/
/*                 Retour à la liste*/
/*             </a>*/
/*             <a href="{{ path('boiteVitesse_edit', {'id': boiteVitesse.id}) }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-edit"></i>*/
/*                 Modifier la boîte à vitesse*/
/*             </a>*/
/*             <a href="{{ path('boiteVitesse_delete', {'id': boiteVitesse.id}) }}" class="btn btn-danger">*/
/*                 <i class="glyphicon glyphicon-trash"></i>*/
/*                 Supprimer la boîte à vitesse*/
/*             </a>*/
/*         </p>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
