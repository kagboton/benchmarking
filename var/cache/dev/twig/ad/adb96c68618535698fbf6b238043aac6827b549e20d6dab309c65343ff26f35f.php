<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2d0c022d84ed21f36ae570714039e1d105a8d7e90292afd2b5b1ac8a8a23d66a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65635aff752f97d1ff4054cf03ea5f0befac80edcb8e36858ceb2f3804414f96 = $this->env->getExtension("native_profiler");
        $__internal_65635aff752f97d1ff4054cf03ea5f0befac80edcb8e36858ceb2f3804414f96->enter($__internal_65635aff752f97d1ff4054cf03ea5f0befac80edcb8e36858ceb2f3804414f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>

    <body>

        <div class=\"container\">

            ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
        }
        // line 24
        echo "
            ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "
        </div>

    </body>
</html>
";
        
        $__internal_65635aff752f97d1ff4054cf03ea5f0befac80edcb8e36858ceb2f3804414f96->leave($__internal_65635aff752f97d1ff4054cf03ea5f0befac80edcb8e36858ceb2f3804414f96_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_534c479d33585236478d2817a5cb2d2bfd8d3c3ef50279aa51b11b3bfecd540b = $this->env->getExtension("native_profiler");
        $__internal_534c479d33585236478d2817a5cb2d2bfd8d3c3ef50279aa51b11b3bfecd540b->enter($__internal_534c479d33585236478d2817a5cb2d2bfd8d3c3ef50279aa51b11b3bfecd540b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        
        $__internal_534c479d33585236478d2817a5cb2d2bfd8d3c3ef50279aa51b11b3bfecd540b->leave($__internal_534c479d33585236478d2817a5cb2d2bfd8d3c3ef50279aa51b11b3bfecd540b_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0acc0879a06ff913c410afa2f260984ed07911c4867cf075578ddbeabf17c33 = $this->env->getExtension("native_profiler");
        $__internal_e0acc0879a06ff913c410afa2f260984ed07911c4867cf075578ddbeabf17c33->enter($__internal_e0acc0879a06ff913c410afa2f260984ed07911c4867cf075578ddbeabf17c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "            ";
        
        $__internal_e0acc0879a06ff913c410afa2f260984ed07911c4867cf075578ddbeabf17c33->leave($__internal_e0acc0879a06ff913c410afa2f260984ed07911c4867cf075578ddbeabf17c33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  107 => 25,  100 => 8,  94 => 7,  82 => 27,  80 => 25,  77 => 24,  74 => 23,  68 => 22,  59 => 19,  54 => 18,  49 => 17,  44 => 16,  42 => 15,  34 => 9,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* */
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <div class="container">*/
/* */
/*             {% if app.request.hasPreviousSession %}*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="flash-{{ type }}">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/* */
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/* */
/*         </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
