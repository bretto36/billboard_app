<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c194b6a92c57fb136cf9781966b92a571502a3df21ec2383d477f3e25551d3cc extends Twig_Template
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
        $__internal_46c6203145625619682b19404c06e4c807a2bda7e30ece3b301c34995dd34aff = $this->env->getExtension("native_profiler");
        $__internal_46c6203145625619682b19404c06e4c807a2bda7e30ece3b301c34995dd34aff->enter($__internal_46c6203145625619682b19404c06e4c807a2bda7e30ece3b301c34995dd34aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_46c6203145625619682b19404c06e4c807a2bda7e30ece3b301c34995dd34aff->leave($__internal_46c6203145625619682b19404c06e4c807a2bda7e30ece3b301c34995dd34aff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
