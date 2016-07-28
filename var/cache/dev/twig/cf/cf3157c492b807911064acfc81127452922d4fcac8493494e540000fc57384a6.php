<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2a65649a6e18a61860758020b91191ea002ab077c9ee273f9cddd189a8d573bc extends Twig_Template
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
        $__internal_4e030811c04ae76c8780abbfa24ad6244acca243a62f0fb0e5845df26761f9a5 = $this->env->getExtension("native_profiler");
        $__internal_4e030811c04ae76c8780abbfa24ad6244acca243a62f0fb0e5845df26761f9a5->enter($__internal_4e030811c04ae76c8780abbfa24ad6244acca243a62f0fb0e5845df26761f9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4e030811c04ae76c8780abbfa24ad6244acca243a62f0fb0e5845df26761f9a5->leave($__internal_4e030811c04ae76c8780abbfa24ad6244acca243a62f0fb0e5845df26761f9a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
