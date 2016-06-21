<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c3864fb2f53e4655dd3cf348702e0049758c167ae49d61ef4186e5d0d8c7ce82 extends Twig_Template
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
        $__internal_aff8443e9c4852b42b4f70fddd1f4ef67b995ad65d4036aacdb64586fd4ff889 = $this->env->getExtension("native_profiler");
        $__internal_aff8443e9c4852b42b4f70fddd1f4ef67b995ad65d4036aacdb64586fd4ff889->enter($__internal_aff8443e9c4852b42b4f70fddd1f4ef67b995ad65d4036aacdb64586fd4ff889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_aff8443e9c4852b42b4f70fddd1f4ef67b995ad65d4036aacdb64586fd4ff889->leave($__internal_aff8443e9c4852b42b4f70fddd1f4ef67b995ad65d4036aacdb64586fd4ff889_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
