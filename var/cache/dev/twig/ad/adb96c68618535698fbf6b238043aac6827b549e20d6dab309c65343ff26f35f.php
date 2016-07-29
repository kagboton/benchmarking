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
        $__internal_24e50b9021a7e6212b9be23f340a0b42da47799d8602cc5f1d602e4f79e2608d = $this->env->getExtension("native_profiler");
        $__internal_24e50b9021a7e6212b9be23f340a0b42da47799d8602cc5f1d602e4f79e2608d->enter($__internal_24e50b9021a7e6212b9be23f340a0b42da47799d8602cc5f1d602e4f79e2608d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_24e50b9021a7e6212b9be23f340a0b42da47799d8602cc5f1d602e4f79e2608d->leave($__internal_24e50b9021a7e6212b9be23f340a0b42da47799d8602cc5f1d602e4f79e2608d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4b32c94d17260b975aa205a483ca52bc9ace0d8dce0991ea7bab2bd37379888 = $this->env->getExtension("native_profiler");
        $__internal_b4b32c94d17260b975aa205a483ca52bc9ace0d8dce0991ea7bab2bd37379888->enter($__internal_b4b32c94d17260b975aa205a483ca52bc9ace0d8dce0991ea7bab2bd37379888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        
        $__internal_b4b32c94d17260b975aa205a483ca52bc9ace0d8dce0991ea7bab2bd37379888->leave($__internal_b4b32c94d17260b975aa205a483ca52bc9ace0d8dce0991ea7bab2bd37379888_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7691293e0338e14da9058c7184b65502e0a690cf1f2ee9e3f689fd99f538bcb2 = $this->env->getExtension("native_profiler");
        $__internal_7691293e0338e14da9058c7184b65502e0a690cf1f2ee9e3f689fd99f538bcb2->enter($__internal_7691293e0338e14da9058c7184b65502e0a690cf1f2ee9e3f689fd99f538bcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "            ";
        
        $__internal_7691293e0338e14da9058c7184b65502e0a690cf1f2ee9e3f689fd99f538bcb2->leave($__internal_7691293e0338e14da9058c7184b65502e0a690cf1f2ee9e3f689fd99f538bcb2_prof);

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
