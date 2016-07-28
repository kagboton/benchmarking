<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_7b1fd38643210d3f3f6f1f9f1aa602ed76c4d56281cd282663404d37ea708b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_b90dc7999cb55824f0269a707cae7607797e3b343d3faa82772d13c6b4e24878 = $this->env->getExtension("native_profiler");
        $__internal_b90dc7999cb55824f0269a707cae7607797e3b343d3faa82772d13c6b4e24878->enter($__internal_b90dc7999cb55824f0269a707cae7607797e3b343d3faa82772d13c6b4e24878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90dc7999cb55824f0269a707cae7607797e3b343d3faa82772d13c6b4e24878->leave($__internal_b90dc7999cb55824f0269a707cae7607797e3b343d3faa82772d13c6b4e24878_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34754761099346c305c2948802e2dea3a3c48f8a41cd09f58e8f582151113ff3 = $this->env->getExtension("native_profiler");
        $__internal_34754761099346c305c2948802e2dea3a3c48f8a41cd09f58e8f582151113ff3->enter($__internal_34754761099346c305c2948802e2dea3a3c48f8a41cd09f58e8f582151113ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_34754761099346c305c2948802e2dea3a3c48f8a41cd09f58e8f582151113ff3->leave($__internal_34754761099346c305c2948802e2dea3a3c48f8a41cd09f58e8f582151113ff3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
