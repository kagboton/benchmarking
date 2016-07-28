<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_0a04a0484e8c510c9d1e5ed322818805c3e58615695bad383655bc60e4324352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f02b15e418e42b2f88155bb3e3db9bd377fcf0ec6affe8cabea5e0c4cdb9aac9 = $this->env->getExtension("native_profiler");
        $__internal_f02b15e418e42b2f88155bb3e3db9bd377fcf0ec6affe8cabea5e0c4cdb9aac9->enter($__internal_f02b15e418e42b2f88155bb3e3db9bd377fcf0ec6affe8cabea5e0c4cdb9aac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f02b15e418e42b2f88155bb3e3db9bd377fcf0ec6affe8cabea5e0c4cdb9aac9->leave($__internal_f02b15e418e42b2f88155bb3e3db9bd377fcf0ec6affe8cabea5e0c4cdb9aac9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
