<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_91f14d0925f6987697f117a64204597a01ed55e72af4e9680551d790586b5cad extends Twig_Template
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
        $__internal_2262ba4bce5915ef87ad24f3e3e1cca5acad5ed9f45bbda36f50226d4e14e381 = $this->env->getExtension("native_profiler");
        $__internal_2262ba4bce5915ef87ad24f3e3e1cca5acad5ed9f45bbda36f50226d4e14e381->enter($__internal_2262ba4bce5915ef87ad24f3e3e1cca5acad5ed9f45bbda36f50226d4e14e381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2262ba4bce5915ef87ad24f3e3e1cca5acad5ed9f45bbda36f50226d4e14e381->leave($__internal_2262ba4bce5915ef87ad24f3e3e1cca5acad5ed9f45bbda36f50226d4e14e381_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
