<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fe95b259c049128a84f26d2f0fa508726903598d762e461ac7b969b3dd53a2be extends Twig_Template
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
        $__internal_d33a6d8764a18589ff26f45cd8faad658e22d3fc39317f84c89385a12779ab3e = $this->env->getExtension("native_profiler");
        $__internal_d33a6d8764a18589ff26f45cd8faad658e22d3fc39317f84c89385a12779ab3e->enter($__internal_d33a6d8764a18589ff26f45cd8faad658e22d3fc39317f84c89385a12779ab3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d33a6d8764a18589ff26f45cd8faad658e22d3fc39317f84c89385a12779ab3e->leave($__internal_d33a6d8764a18589ff26f45cd8faad658e22d3fc39317f84c89385a12779ab3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
