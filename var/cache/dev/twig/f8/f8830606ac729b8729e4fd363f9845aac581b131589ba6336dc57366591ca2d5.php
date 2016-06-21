<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8e054dd8a1c89232976ab7bfeef11cb75f8bd031343e6eb91dd75ebbbed8fedf extends Twig_Template
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
        $__internal_2b496716da4f2570865402bc86ad7f1bbfbd4d38daccf0d50bbb0f0833031b7a = $this->env->getExtension("native_profiler");
        $__internal_2b496716da4f2570865402bc86ad7f1bbfbd4d38daccf0d50bbb0f0833031b7a->enter($__internal_2b496716da4f2570865402bc86ad7f1bbfbd4d38daccf0d50bbb0f0833031b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2b496716da4f2570865402bc86ad7f1bbfbd4d38daccf0d50bbb0f0833031b7a->leave($__internal_2b496716da4f2570865402bc86ad7f1bbfbd4d38daccf0d50bbb0f0833031b7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
