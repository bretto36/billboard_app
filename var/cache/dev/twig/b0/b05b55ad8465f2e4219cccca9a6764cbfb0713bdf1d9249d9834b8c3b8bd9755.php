<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f95c5ed7135ca8efa2c5d5621adc1724418f6f0a420592a72e92c629e42754f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c07260fbf0475174765490bdbbfd5be2f01bf2c62bf35ed7318aaa8411bd56f5 = $this->env->getExtension("native_profiler");
        $__internal_c07260fbf0475174765490bdbbfd5be2f01bf2c62bf35ed7318aaa8411bd56f5->enter($__internal_c07260fbf0475174765490bdbbfd5be2f01bf2c62bf35ed7318aaa8411bd56f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c07260fbf0475174765490bdbbfd5be2f01bf2c62bf35ed7318aaa8411bd56f5->leave($__internal_c07260fbf0475174765490bdbbfd5be2f01bf2c62bf35ed7318aaa8411bd56f5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e06b1dcf5fc57e3383d61d3fa910643ef79eea1c55e8b72e861178b57fcba037 = $this->env->getExtension("native_profiler");
        $__internal_e06b1dcf5fc57e3383d61d3fa910643ef79eea1c55e8b72e861178b57fcba037->enter($__internal_e06b1dcf5fc57e3383d61d3fa910643ef79eea1c55e8b72e861178b57fcba037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e06b1dcf5fc57e3383d61d3fa910643ef79eea1c55e8b72e861178b57fcba037->leave($__internal_e06b1dcf5fc57e3383d61d3fa910643ef79eea1c55e8b72e861178b57fcba037_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7b4f3d3827dc163d8b9cab34617d59aaf60af5d6cfe201f40876c47c83edd039 = $this->env->getExtension("native_profiler");
        $__internal_7b4f3d3827dc163d8b9cab34617d59aaf60af5d6cfe201f40876c47c83edd039->enter($__internal_7b4f3d3827dc163d8b9cab34617d59aaf60af5d6cfe201f40876c47c83edd039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7b4f3d3827dc163d8b9cab34617d59aaf60af5d6cfe201f40876c47c83edd039->leave($__internal_7b4f3d3827dc163d8b9cab34617d59aaf60af5d6cfe201f40876c47c83edd039_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5b594fcbf0a99bb000bcfd8f0ac8c05ab8d0e16d26ee4919a7c6237bbed7feb0 = $this->env->getExtension("native_profiler");
        $__internal_5b594fcbf0a99bb000bcfd8f0ac8c05ab8d0e16d26ee4919a7c6237bbed7feb0->enter($__internal_5b594fcbf0a99bb000bcfd8f0ac8c05ab8d0e16d26ee4919a7c6237bbed7feb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5b594fcbf0a99bb000bcfd8f0ac8c05ab8d0e16d26ee4919a7c6237bbed7feb0->leave($__internal_5b594fcbf0a99bb000bcfd8f0ac8c05ab8d0e16d26ee4919a7c6237bbed7feb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
