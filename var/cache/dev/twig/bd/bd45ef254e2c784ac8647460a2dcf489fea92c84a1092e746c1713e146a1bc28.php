<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0039b3274cfebd6bdb04d677412a2775527d89428591ee1bebfc26b162f837b5 extends Twig_Template
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
        $__internal_64868ba152fa9b36f167b54527392a3d43009992e1401bded91481b8153eedc4 = $this->env->getExtension("native_profiler");
        $__internal_64868ba152fa9b36f167b54527392a3d43009992e1401bded91481b8153eedc4->enter($__internal_64868ba152fa9b36f167b54527392a3d43009992e1401bded91481b8153eedc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_64868ba152fa9b36f167b54527392a3d43009992e1401bded91481b8153eedc4->leave($__internal_64868ba152fa9b36f167b54527392a3d43009992e1401bded91481b8153eedc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
