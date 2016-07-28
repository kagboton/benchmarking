<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9917575ac529cb4c801b16e55aab374fcfa82242a6239c56fd7099ab9d9faa0c extends Twig_Template
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
        $__internal_a9d979eeb6a2b93647f50b031b4bc02d7acf67bc70854ce277a6154cca9bcd21 = $this->env->getExtension("native_profiler");
        $__internal_a9d979eeb6a2b93647f50b031b4bc02d7acf67bc70854ce277a6154cca9bcd21->enter($__internal_a9d979eeb6a2b93647f50b031b4bc02d7acf67bc70854ce277a6154cca9bcd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a9d979eeb6a2b93647f50b031b4bc02d7acf67bc70854ce277a6154cca9bcd21->leave($__internal_a9d979eeb6a2b93647f50b031b4bc02d7acf67bc70854ce277a6154cca9bcd21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
