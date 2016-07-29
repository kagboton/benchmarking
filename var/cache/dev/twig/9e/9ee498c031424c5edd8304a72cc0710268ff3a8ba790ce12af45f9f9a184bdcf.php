<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_79fd0b2c3b1007b673059d59e3302ccf08d8fb17b369ebb381ae6c7cd2f9b4af extends Twig_Template
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
        $__internal_27273c6685fa7eb428e2e2d9c4d28bcca7a15e4771836f6c3eae9f460d83c4e1 = $this->env->getExtension("native_profiler");
        $__internal_27273c6685fa7eb428e2e2d9c4d28bcca7a15e4771836f6c3eae9f460d83c4e1->enter($__internal_27273c6685fa7eb428e2e2d9c4d28bcca7a15e4771836f6c3eae9f460d83c4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_27273c6685fa7eb428e2e2d9c4d28bcca7a15e4771836f6c3eae9f460d83c4e1->leave($__internal_27273c6685fa7eb428e2e2d9c4d28bcca7a15e4771836f6c3eae9f460d83c4e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
