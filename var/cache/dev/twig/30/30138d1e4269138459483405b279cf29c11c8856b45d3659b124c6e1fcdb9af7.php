<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_8da9227325e76c6d43d33cfeb2f92c2f37be07d03477591e543ce2fe014a8bd7 extends Twig_Template
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
        $__internal_5b76abc95ac4cf56e81b8c76193313d535da8e952983060af1ec3b783591515d = $this->env->getExtension("native_profiler");
        $__internal_5b76abc95ac4cf56e81b8c76193313d535da8e952983060af1ec3b783591515d->enter($__internal_5b76abc95ac4cf56e81b8c76193313d535da8e952983060af1ec3b783591515d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_5b76abc95ac4cf56e81b8c76193313d535da8e952983060af1ec3b783591515d->leave($__internal_5b76abc95ac4cf56e81b8c76193313d535da8e952983060af1ec3b783591515d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
/* <span class="label">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
