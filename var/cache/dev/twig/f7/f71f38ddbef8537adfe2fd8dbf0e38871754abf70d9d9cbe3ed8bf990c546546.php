<?php

/* @Benchmarking/Default/BoiteVitesse/add.html.twig */
class __TwigTemplate_f8c89750cdb3091b06a52a61d1e32487c7a842a1fb17caa6286f6e7f527747e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/BoiteVitesse/add.html.twig", 3);
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
        $__internal_72ee52c25ae982c4096df8b68ad541c84c6c761b69f85b374082cec7201b60b9 = $this->env->getExtension("native_profiler");
        $__internal_72ee52c25ae982c4096df8b68ad541c84c6c761b69f85b374082cec7201b60b9->enter($__internal_72ee52c25ae982c4096df8b68ad541c84c6c761b69f85b374082cec7201b60b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/BoiteVitesse/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ee52c25ae982c4096df8b68ad541c84c6c761b69f85b374082cec7201b60b9->leave($__internal_72ee52c25ae982c4096df8b68ad541c84c6c761b69f85b374082cec7201b60b9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd665827c4c24bd4286a2b8abfa9122e17d0be1a8e97eba3d0fb2f3c92609c82 = $this->env->getExtension("native_profiler");
        $__internal_dd665827c4c24bd4286a2b8abfa9122e17d0be1a8e97eba3d0fb2f3c92609c82->enter($__internal_dd665827c4c24bd4286a2b8abfa9122e17d0be1a8e97eba3d0fb2f3c92609c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dd665827c4c24bd4286a2b8abfa9122e17d0be1a8e97eba3d0fb2f3c92609c82->leave($__internal_dd665827c4c24bd4286a2b8abfa9122e17d0be1a8e97eba3d0fb2f3c92609c82_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_3efda4de874835c09c2991702e92b64e803be3171ebe67a1f826d5579cecf773 = $this->env->getExtension("native_profiler");
        $__internal_3efda4de874835c09c2991702e92b64e803be3171ebe67a1f826d5579cecf773->enter($__internal_3efda4de874835c09c2991702e92b64e803be3171ebe67a1f826d5579cecf773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Ajouter une boîte à vitesse</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:BoiteVitesse/form.html.twig");
        echo "
  </div>


";
        
        $__internal_3efda4de874835c09c2991702e92b64e803be3171ebe67a1f826d5579cecf773->leave($__internal_3efda4de874835c09c2991702e92b64e803be3171ebe67a1f826d5579cecf773_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/BoiteVitesse/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/BoiteVitesse/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une boîte à vitesse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Ajouter une boîte à vitesse</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:BoiteVitesse/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
