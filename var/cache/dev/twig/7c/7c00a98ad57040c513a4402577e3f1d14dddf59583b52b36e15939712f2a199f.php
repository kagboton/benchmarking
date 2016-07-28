<?php

/* @Pages/Default/Pages/modulesUsed/menu.html.twig */
class __TwigTemplate_b5de6a9a4b4f1d7650a1b8e419bc5771142382b623c5526841d35aff28fb0c33 extends Twig_Template
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
        $__internal_c6162d87921920510a5f58722c401c2dd3effb83330808cafffe23b9f4fc38c6 = $this->env->getExtension("native_profiler");
        $__internal_c6162d87921920510a5f58722c401c2dd3effb83330808cafffe23b9f4fc38c6->enter($__internal_c6162d87921920510a5f58722c401c2dd3effb83330808cafffe23b9f4fc38c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Pages/Default/Pages/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c6162d87921920510a5f58722c401c2dd3effb83330808cafffe23b9f4fc38c6->leave($__internal_c6162d87921920510a5f58722c401c2dd3effb83330808cafffe23b9f4fc38c6_prof);

    }

    public function getTemplateName()
    {
        return "@Pages/Default/Pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for page in pages %}*/
/*     <li><a href="{{ path('page', {'id' : page.id })  }}">{{ page.titre }}</a>*/
/* {% endfor %}*/
