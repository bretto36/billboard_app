<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_7284d8643e7d819f5209ea5fb836b6204b2cf9e5c88ea6cf4795fbcee18c3362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f9fde86564d9cf4cfde49f5f2b108b3330d4092efc1808cb70e47f4a289201c = $this->env->getExtension("native_profiler");
        $__internal_2f9fde86564d9cf4cfde49f5f2b108b3330d4092efc1808cb70e47f4a289201c->enter($__internal_2f9fde86564d9cf4cfde49f5f2b108b3330d4092efc1808cb70e47f4a289201c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f9fde86564d9cf4cfde49f5f2b108b3330d4092efc1808cb70e47f4a289201c->leave($__internal_2f9fde86564d9cf4cfde49f5f2b108b3330d4092efc1808cb70e47f4a289201c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f62489f07a0022ce5cea2cac9b3d07c422e46daa944aac383c0468967ba9b0a3 = $this->env->getExtension("native_profiler");
        $__internal_f62489f07a0022ce5cea2cac9b3d07c422e46daa944aac383c0468967ba9b0a3->enter($__internal_f62489f07a0022ce5cea2cac9b3d07c422e46daa944aac383c0468967ba9b0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f62489f07a0022ce5cea2cac9b3d07c422e46daa944aac383c0468967ba9b0a3->leave($__internal_f62489f07a0022ce5cea2cac9b3d07c422e46daa944aac383c0468967ba9b0a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
