<?php

/* PagesBundle:Default/Pages/modulesUsed:menu.html.twig */
class __TwigTemplate_1acf8e4dcbb2d103bd0d9e515d73282f0756b0c743c54294828005f95b9538c3 extends Twig_Template
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
        $__internal_fe38b023100bf4c5028fb1d0275ff508364d91a0b135986c127bbaa7d27db86d = $this->env->getExtension("native_profiler");
        $__internal_fe38b023100bf4c5028fb1d0275ff508364d91a0b135986c127bbaa7d27db86d->enter($__internal_fe38b023100bf4c5028fb1d0275ff508364d91a0b135986c127bbaa7d27db86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/Pages/modulesUsed:menu.html.twig"));

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
        
        $__internal_fe38b023100bf4c5028fb1d0275ff508364d91a0b135986c127bbaa7d27db86d->leave($__internal_fe38b023100bf4c5028fb1d0275ff508364d91a0b135986c127bbaa7d27db86d_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/Pages/modulesUsed:menu.html.twig";
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
