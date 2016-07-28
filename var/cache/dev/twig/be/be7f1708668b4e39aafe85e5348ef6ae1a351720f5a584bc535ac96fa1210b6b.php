<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_66fa39aaf28922aee39671298fe7f092c35104e9237104f9ed3553257ddf16d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_c2be08c43e03f66bdebdbd1f4a011e6d70ef69a5b3a3a1728b48859346b7cb76 = $this->env->getExtension("native_profiler");
        $__internal_c2be08c43e03f66bdebdbd1f4a011e6d70ef69a5b3a3a1728b48859346b7cb76->enter($__internal_c2be08c43e03f66bdebdbd1f4a011e6d70ef69a5b3a3a1728b48859346b7cb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2be08c43e03f66bdebdbd1f4a011e6d70ef69a5b3a3a1728b48859346b7cb76->leave($__internal_c2be08c43e03f66bdebdbd1f4a011e6d70ef69a5b3a3a1728b48859346b7cb76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0c2f585d68b6c096678a66639616c67a679074a781e8dfb9da8f84d51e5984e = $this->env->getExtension("native_profiler");
        $__internal_f0c2f585d68b6c096678a66639616c67a679074a781e8dfb9da8f84d51e5984e->enter($__internal_f0c2f585d68b6c096678a66639616c67a679074a781e8dfb9da8f84d51e5984e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f0c2f585d68b6c096678a66639616c67a679074a781e8dfb9da8f84d51e5984e->leave($__internal_f0c2f585d68b6c096678a66639616c67a679074a781e8dfb9da8f84d51e5984e_prof);

    }

    // line 7
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_32d5777918a63a6a1bfea79e1b3ca0b6f395cac6816718fd841a6be22fa933c4 = $this->env->getExtension("native_profiler");
        $__internal_32d5777918a63a6a1bfea79e1b3ca0b6f395cac6816718fd841a6be22fa933c4->enter($__internal_32d5777918a63a6a1bfea79e1b3ca0b6f395cac6816718fd841a6be22fa933c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 8
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_32d5777918a63a6a1bfea79e1b3ca0b6f395cac6816718fd841a6be22fa933c4->leave($__internal_32d5777918a63a6a1bfea79e1b3ca0b6f395cac6816718fd841a6be22fa933c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Modifier profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/*     {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock admin_body %}*/
/* */
