<?php

/* BenchmarkingBundle:Default/FonctionExistante:add.html.twig */
class __TwigTemplate_0b858aa42113c4505daf4b6744bda6d2ee7c38cb3c512b41f05c0f42870c0c7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/FonctionExistante:add.html.twig", 3);
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
        $__internal_9cdb5ccc34533cf00d66995712feb276d58c8e71e1598fc92ebd4bce8ce2511f = $this->env->getExtension("native_profiler");
        $__internal_9cdb5ccc34533cf00d66995712feb276d58c8e71e1598fc92ebd4bce8ce2511f->enter($__internal_9cdb5ccc34533cf00d66995712feb276d58c8e71e1598fc92ebd4bce8ce2511f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FonctionExistante:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cdb5ccc34533cf00d66995712feb276d58c8e71e1598fc92ebd4bce8ce2511f->leave($__internal_9cdb5ccc34533cf00d66995712feb276d58c8e71e1598fc92ebd4bce8ce2511f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa2933bd748348db81ca6bb45b6b4271c521b187203cc0e7df82e40a3faf68d4 = $this->env->getExtension("native_profiler");
        $__internal_aa2933bd748348db81ca6bb45b6b4271c521b187203cc0e7df82e40a3faf68d4->enter($__internal_aa2933bd748348db81ca6bb45b6b4271c521b187203cc0e7df82e40a3faf68d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aa2933bd748348db81ca6bb45b6b4271c521b187203cc0e7df82e40a3faf68d4->leave($__internal_aa2933bd748348db81ca6bb45b6b4271c521b187203cc0e7df82e40a3faf68d4_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_29a74a8befd163263bedf3daa20921642dae7395dda9e3d82cbb95f59a32576d = $this->env->getExtension("native_profiler");
        $__internal_29a74a8befd163263bedf3daa20921642dae7395dda9e3d82cbb95f59a32576d->enter($__internal_29a74a8befd163263bedf3daa20921642dae7395dda9e3d82cbb95f59a32576d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h2 class=\"panel-title\">Ajouter une fonction</h2>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FonctionExistante/form.html.twig");
        echo "
  </div>


";
        
        $__internal_29a74a8befd163263bedf3daa20921642dae7395dda9e3d82cbb95f59a32576d->leave($__internal_29a74a8befd163263bedf3daa20921642dae7395dda9e3d82cbb95f59a32576d_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FonctionExistante:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/FonctionExistante/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une fonction - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h2 class="panel-title">Ajouter une fonction</h2>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:FonctionExistante/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
