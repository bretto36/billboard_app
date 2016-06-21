<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_aa73f367d7ab7f5257cfd13ea0080d460038d2d753bf31587ec6151bfc69ecd9 extends Twig_Template
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
        $__internal_b4cc83a83658314f484db23b2bafaa82ce8e28544635eded54a9c01634c5e362 = $this->env->getExtension("native_profiler");
        $__internal_b4cc83a83658314f484db23b2bafaa82ce8e28544635eded54a9c01634c5e362->enter($__internal_b4cc83a83658314f484db23b2bafaa82ce8e28544635eded54a9c01634c5e362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b4cc83a83658314f484db23b2bafaa82ce8e28544635eded54a9c01634c5e362->leave($__internal_b4cc83a83658314f484db23b2bafaa82ce8e28544635eded54a9c01634c5e362_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
