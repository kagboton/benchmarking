<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_57d6753ae2622111a037db9e48a6a4d9772960b8cb585ce954407b1ae6835601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 2);
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
        $__internal_2b6fb9ee4697322d25dfec17d07ee68b9cd07237cab3823b0ad499bc13620148 = $this->env->getExtension("native_profiler");
        $__internal_2b6fb9ee4697322d25dfec17d07ee68b9cd07237cab3823b0ad499bc13620148->enter($__internal_2b6fb9ee4697322d25dfec17d07ee68b9cd07237cab3823b0ad499bc13620148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6fb9ee4697322d25dfec17d07ee68b9cd07237cab3823b0ad499bc13620148->leave($__internal_2b6fb9ee4697322d25dfec17d07ee68b9cd07237cab3823b0ad499bc13620148_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c07773886ab98faf969295a76ba167f45ca0e1815253b40ffbfc9c7bffa260f1 = $this->env->getExtension("native_profiler");
        $__internal_c07773886ab98faf969295a76ba167f45ca0e1815253b40ffbfc9c7bffa260f1->enter($__internal_c07773886ab98faf969295a76ba167f45ca0e1815253b40ffbfc9c7bffa260f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c07773886ab98faf969295a76ba167f45ca0e1815253b40ffbfc9c7bffa260f1->leave($__internal_c07773886ab98faf969295a76ba167f45ca0e1815253b40ffbfc9c7bffa260f1_prof);

    }

    // line 8
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_0ab8d5bc41401c978f1f66a1f5e32122844de24d8cf326b62be81839ff47eb86 = $this->env->getExtension("native_profiler");
        $__internal_0ab8d5bc41401c978f1f66a1f5e32122844de24d8cf326b62be81839ff47eb86->enter($__internal_0ab8d5bc41401c978f1f66a1f5e32122844de24d8cf326b62be81839ff47eb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 9
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 9)->display($context);
        
        $__internal_0ab8d5bc41401c978f1f66a1f5e32122844de24d8cf326b62be81839ff47eb86->leave($__internal_0ab8d5bc41401c978f1f66a1f5e32122844de24d8cf326b62be81839ff47eb86_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock admin_body %}*/
/* */
