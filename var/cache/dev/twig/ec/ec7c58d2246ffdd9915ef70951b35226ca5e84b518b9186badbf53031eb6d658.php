<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_91ab95b74750149dd9ff48d503847acbb9db0fa4d954c8e4e8aeaa70240faee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a6be2ced643ecf74adadb09d6c0748622f46f26babd2939ff46d295c2fe8902 = $this->env->getExtension("native_profiler");
        $__internal_7a6be2ced643ecf74adadb09d6c0748622f46f26babd2939ff46d295c2fe8902->enter($__internal_7a6be2ced643ecf74adadb09d6c0748622f46f26babd2939ff46d295c2fe8902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6be2ced643ecf74adadb09d6c0748622f46f26babd2939ff46d295c2fe8902->leave($__internal_7a6be2ced643ecf74adadb09d6c0748622f46f26babd2939ff46d295c2fe8902_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2f690f713b9022c52ef41c7cf408fb5c548c3977f8fbbca36005e2eb2c5e346 = $this->env->getExtension("native_profiler");
        $__internal_c2f690f713b9022c52ef41c7cf408fb5c548c3977f8fbbca36005e2eb2c5e346->enter($__internal_c2f690f713b9022c52ef41c7cf408fb5c548c3977f8fbbca36005e2eb2c5e346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_c2f690f713b9022c52ef41c7cf408fb5c548c3977f8fbbca36005e2eb2c5e346->leave($__internal_c2f690f713b9022c52ef41c7cf408fb5c548c3977f8fbbca36005e2eb2c5e346_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
