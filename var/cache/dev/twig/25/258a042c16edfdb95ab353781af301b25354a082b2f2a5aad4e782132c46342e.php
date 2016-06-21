<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c9d23ae73c3d8e2ab95a74293cb42f8dac12ede517163ede3bcb6167af8c5aca extends Twig_Template
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
        $__internal_dc0e5aee62b16567f44588f3b6bbaa2fd826dabdbf8b46b5208fe7dece74547c = $this->env->getExtension("native_profiler");
        $__internal_dc0e5aee62b16567f44588f3b6bbaa2fd826dabdbf8b46b5208fe7dece74547c->enter($__internal_dc0e5aee62b16567f44588f3b6bbaa2fd826dabdbf8b46b5208fe7dece74547c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dc0e5aee62b16567f44588f3b6bbaa2fd826dabdbf8b46b5208fe7dece74547c->leave($__internal_dc0e5aee62b16567f44588f3b6bbaa2fd826dabdbf8b46b5208fe7dece74547c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
