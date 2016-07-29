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
        $__internal_8124cdcb99ea0ed7c99f2050303b18901618ec246aab476e589076c123397ff8 = $this->env->getExtension("native_profiler");
        $__internal_8124cdcb99ea0ed7c99f2050303b18901618ec246aab476e589076c123397ff8->enter($__internal_8124cdcb99ea0ed7c99f2050303b18901618ec246aab476e589076c123397ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8124cdcb99ea0ed7c99f2050303b18901618ec246aab476e589076c123397ff8->leave($__internal_8124cdcb99ea0ed7c99f2050303b18901618ec246aab476e589076c123397ff8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_71ea2ad1a3e19e29bb652731df4aad76f372c17e1bfc634cf2d82a28435a36ea = $this->env->getExtension("native_profiler");
        $__internal_71ea2ad1a3e19e29bb652731df4aad76f372c17e1bfc634cf2d82a28435a36ea->enter($__internal_71ea2ad1a3e19e29bb652731df4aad76f372c17e1bfc634cf2d82a28435a36ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_71ea2ad1a3e19e29bb652731df4aad76f372c17e1bfc634cf2d82a28435a36ea->leave($__internal_71ea2ad1a3e19e29bb652731df4aad76f372c17e1bfc634cf2d82a28435a36ea_prof);

    }

    // line 8
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_fa9548bc0729a51ce03b026b87a7ed9c8b749d49d78e1d5c1207ef4cec260fab = $this->env->getExtension("native_profiler");
        $__internal_fa9548bc0729a51ce03b026b87a7ed9c8b749d49d78e1d5c1207ef4cec260fab->enter($__internal_fa9548bc0729a51ce03b026b87a7ed9c8b749d49d78e1d5c1207ef4cec260fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 9
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 9)->display($context);
        
        $__internal_fa9548bc0729a51ce03b026b87a7ed9c8b749d49d78e1d5c1207ef4cec260fab->leave($__internal_fa9548bc0729a51ce03b026b87a7ed9c8b749d49d78e1d5c1207ef4cec260fab_prof);

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
