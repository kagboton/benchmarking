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
        $__internal_18c0d876a7bc34a5e1f33ef7c48a9a023ad4dbf48b21635e6236dc800d744932 = $this->env->getExtension("native_profiler");
        $__internal_18c0d876a7bc34a5e1f33ef7c48a9a023ad4dbf48b21635e6236dc800d744932->enter($__internal_18c0d876a7bc34a5e1f33ef7c48a9a023ad4dbf48b21635e6236dc800d744932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_18c0d876a7bc34a5e1f33ef7c48a9a023ad4dbf48b21635e6236dc800d744932->leave($__internal_18c0d876a7bc34a5e1f33ef7c48a9a023ad4dbf48b21635e6236dc800d744932_prof);

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
