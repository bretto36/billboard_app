<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_b45f54e0b493f38ced9982173e6c73cff86f6b8a45b36584e2e0f3d8b56d58fd extends Twig_Template
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
        $__internal_f8d879fb288998a449bf341baedd2c20615e8c57d611aac9fc8c2719a824b984 = $this->env->getExtension("native_profiler");
        $__internal_f8d879fb288998a449bf341baedd2c20615e8c57d611aac9fc8c2719a824b984->enter($__internal_f8d879fb288998a449bf341baedd2c20615e8c57d611aac9fc8c2719a824b984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_f8d879fb288998a449bf341baedd2c20615e8c57d611aac9fc8c2719a824b984->leave($__internal_f8d879fb288998a449bf341baedd2c20615e8c57d611aac9fc8c2719a824b984_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <span class="label">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
