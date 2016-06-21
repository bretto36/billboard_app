<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d7170149cdaa362c3b737ef90442b02c216ad937f80fb5ae89e219cdfc74ba8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92f6717bcf30a462db343f218523bf4206d7a8289d114cc247dda2804d884877 = $this->env->getExtension("native_profiler");
        $__internal_92f6717bcf30a462db343f218523bf4206d7a8289d114cc247dda2804d884877->enter($__internal_92f6717bcf30a462db343f218523bf4206d7a8289d114cc247dda2804d884877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92f6717bcf30a462db343f218523bf4206d7a8289d114cc247dda2804d884877->leave($__internal_92f6717bcf30a462db343f218523bf4206d7a8289d114cc247dda2804d884877_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16a06833be332dba77045f2dc91ac9823ef45cc7446f1e0b9ba2d369930ce954 = $this->env->getExtension("native_profiler");
        $__internal_16a06833be332dba77045f2dc91ac9823ef45cc7446f1e0b9ba2d369930ce954->enter($__internal_16a06833be332dba77045f2dc91ac9823ef45cc7446f1e0b9ba2d369930ce954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_16a06833be332dba77045f2dc91ac9823ef45cc7446f1e0b9ba2d369930ce954->leave($__internal_16a06833be332dba77045f2dc91ac9823ef45cc7446f1e0b9ba2d369930ce954_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1b7276a7eef41df5f85038d4751045b831744b12ee9afbcd61a9b02ca0fc885 = $this->env->getExtension("native_profiler");
        $__internal_f1b7276a7eef41df5f85038d4751045b831744b12ee9afbcd61a9b02ca0fc885->enter($__internal_f1b7276a7eef41df5f85038d4751045b831744b12ee9afbcd61a9b02ca0fc885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1b7276a7eef41df5f85038d4751045b831744b12ee9afbcd61a9b02ca0fc885->leave($__internal_f1b7276a7eef41df5f85038d4751045b831744b12ee9afbcd61a9b02ca0fc885_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_234fa87c60a5223ca58c07f169234771ee2f1732338261b58fcac1e694b9a566 = $this->env->getExtension("native_profiler");
        $__internal_234fa87c60a5223ca58c07f169234771ee2f1732338261b58fcac1e694b9a566->enter($__internal_234fa87c60a5223ca58c07f169234771ee2f1732338261b58fcac1e694b9a566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_234fa87c60a5223ca58c07f169234771ee2f1732338261b58fcac1e694b9a566->leave($__internal_234fa87c60a5223ca58c07f169234771ee2f1732338261b58fcac1e694b9a566_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
