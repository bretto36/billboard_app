<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d55f2d4b1d68c8102d49bdd646cf778bc7d0e8bd7c1c5b1936f6e9e30ae4d890 extends Twig_Template
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
        $__internal_d34ebc934cf1e388c52ece48d3b2426eaed374f44ffc7a3a5f53f60958dff400 = $this->env->getExtension("native_profiler");
        $__internal_d34ebc934cf1e388c52ece48d3b2426eaed374f44ffc7a3a5f53f60958dff400->enter($__internal_d34ebc934cf1e388c52ece48d3b2426eaed374f44ffc7a3a5f53f60958dff400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d34ebc934cf1e388c52ece48d3b2426eaed374f44ffc7a3a5f53f60958dff400->leave($__internal_d34ebc934cf1e388c52ece48d3b2426eaed374f44ffc7a3a5f53f60958dff400_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
