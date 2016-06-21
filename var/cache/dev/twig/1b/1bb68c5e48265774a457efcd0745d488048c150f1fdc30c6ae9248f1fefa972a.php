<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_352cf44b9583a35117dab67a1fd005ab4cea5eb48e9691fa33e86fdf9a9c7fc2 extends Twig_Template
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
        $__internal_f8d5f24bfc57ed6f27415295989fb9b00c4a44f2545421a43cb57a20ba7b1e71 = $this->env->getExtension("native_profiler");
        $__internal_f8d5f24bfc57ed6f27415295989fb9b00c4a44f2545421a43cb57a20ba7b1e71->enter($__internal_f8d5f24bfc57ed6f27415295989fb9b00c4a44f2545421a43cb57a20ba7b1e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f8d5f24bfc57ed6f27415295989fb9b00c4a44f2545421a43cb57a20ba7b1e71->leave($__internal_f8d5f24bfc57ed6f27415295989fb9b00c4a44f2545421a43cb57a20ba7b1e71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
