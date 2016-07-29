<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_762a7457d1710f78e4e4f053d5f38fbe0657cbf849f1a6fd90d750f4acc7b30e extends Twig_Template
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
        $__internal_adac98f641743809962e60ac04935f4ab5d78c433058a0106045aca0019f8b81 = $this->env->getExtension("native_profiler");
        $__internal_adac98f641743809962e60ac04935f4ab5d78c433058a0106045aca0019f8b81->enter($__internal_adac98f641743809962e60ac04935f4ab5d78c433058a0106045aca0019f8b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_adac98f641743809962e60ac04935f4ab5d78c433058a0106045aca0019f8b81->leave($__internal_adac98f641743809962e60ac04935f4ab5d78c433058a0106045aca0019f8b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
