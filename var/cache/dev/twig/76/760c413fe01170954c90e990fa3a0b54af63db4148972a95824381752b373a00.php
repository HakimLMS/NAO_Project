<?php

/* form_table_layout.html.twig */
class __TwigTemplate_c28abcbd13129841cae784b14b65289cf1ac7943a90001ef0f36ca112d7dd8ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f803b6cdccd296bc85bbd1848da21139daf5b0c62443bc62718b0640529d767c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f803b6cdccd296bc85bbd1848da21139daf5b0c62443bc62718b0640529d767c->enter($__internal_f803b6cdccd296bc85bbd1848da21139daf5b0c62443bc62718b0640529d767c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_7035a20b7c0aa827e29bbf67f928987003f1fc67b7064f72cd18b4b059518a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7035a20b7c0aa827e29bbf67f928987003f1fc67b7064f72cd18b4b059518a48->enter($__internal_7035a20b7c0aa827e29bbf67f928987003f1fc67b7064f72cd18b4b059518a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_f803b6cdccd296bc85bbd1848da21139daf5b0c62443bc62718b0640529d767c->leave($__internal_f803b6cdccd296bc85bbd1848da21139daf5b0c62443bc62718b0640529d767c_prof);

        
        $__internal_7035a20b7c0aa827e29bbf67f928987003f1fc67b7064f72cd18b4b059518a48->leave($__internal_7035a20b7c0aa827e29bbf67f928987003f1fc67b7064f72cd18b4b059518a48_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_95f514ac64d2956291255d3c5611f184d80106f46e3c55d8766df2f552941c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f514ac64d2956291255d3c5611f184d80106f46e3c55d8766df2f552941c8a->enter($__internal_95f514ac64d2956291255d3c5611f184d80106f46e3c55d8766df2f552941c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ce19ecb9cb9d06d2274bc6dd35760284eb7954cc6403963ae0da9b5efbf3fc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce19ecb9cb9d06d2274bc6dd35760284eb7954cc6403963ae0da9b5efbf3fc62->enter($__internal_ce19ecb9cb9d06d2274bc6dd35760284eb7954cc6403963ae0da9b5efbf3fc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_ce19ecb9cb9d06d2274bc6dd35760284eb7954cc6403963ae0da9b5efbf3fc62->leave($__internal_ce19ecb9cb9d06d2274bc6dd35760284eb7954cc6403963ae0da9b5efbf3fc62_prof);

        
        $__internal_95f514ac64d2956291255d3c5611f184d80106f46e3c55d8766df2f552941c8a->leave($__internal_95f514ac64d2956291255d3c5611f184d80106f46e3c55d8766df2f552941c8a_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_869fbb2573c4f100fc74ecd272f3ebf7f2809322c6b643a31a223f07955984d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869fbb2573c4f100fc74ecd272f3ebf7f2809322c6b643a31a223f07955984d4->enter($__internal_869fbb2573c4f100fc74ecd272f3ebf7f2809322c6b643a31a223f07955984d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b4fa8827af673671a01f8520863b34f0017e3cbaa194c206f81ee759ca2fc2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fa8827af673671a01f8520863b34f0017e3cbaa194c206f81ee759ca2fc2d5->enter($__internal_b4fa8827af673671a01f8520863b34f0017e3cbaa194c206f81ee759ca2fc2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_b4fa8827af673671a01f8520863b34f0017e3cbaa194c206f81ee759ca2fc2d5->leave($__internal_b4fa8827af673671a01f8520863b34f0017e3cbaa194c206f81ee759ca2fc2d5_prof);

        
        $__internal_869fbb2573c4f100fc74ecd272f3ebf7f2809322c6b643a31a223f07955984d4->leave($__internal_869fbb2573c4f100fc74ecd272f3ebf7f2809322c6b643a31a223f07955984d4_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d4411c6ce1b5bab87dd200dd4214db39bd2e44e65ba6f5f9b6214789523eea75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4411c6ce1b5bab87dd200dd4214db39bd2e44e65ba6f5f9b6214789523eea75->enter($__internal_d4411c6ce1b5bab87dd200dd4214db39bd2e44e65ba6f5f9b6214789523eea75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_40f9df4a04a954d74ee68e5efb0a45f5d889fb1a4573d37814003df1580ec9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f9df4a04a954d74ee68e5efb0a45f5d889fb1a4573d37814003df1580ec9c1->enter($__internal_40f9df4a04a954d74ee68e5efb0a45f5d889fb1a4573d37814003df1580ec9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_40f9df4a04a954d74ee68e5efb0a45f5d889fb1a4573d37814003df1580ec9c1->leave($__internal_40f9df4a04a954d74ee68e5efb0a45f5d889fb1a4573d37814003df1580ec9c1_prof);

        
        $__internal_d4411c6ce1b5bab87dd200dd4214db39bd2e44e65ba6f5f9b6214789523eea75->leave($__internal_d4411c6ce1b5bab87dd200dd4214db39bd2e44e65ba6f5f9b6214789523eea75_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_bf68e392cd513ddbb765ed7c3f086da37c196941a09b013c967f92c97bbb158c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf68e392cd513ddbb765ed7c3f086da37c196941a09b013c967f92c97bbb158c->enter($__internal_bf68e392cd513ddbb765ed7c3f086da37c196941a09b013c967f92c97bbb158c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_7878184a32af40af66b9ff6c7f872e931b8ed0899e2c71b2aa6f999d575b07f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7878184a32af40af66b9ff6c7f872e931b8ed0899e2c71b2aa6f999d575b07f0->enter($__internal_7878184a32af40af66b9ff6c7f872e931b8ed0899e2c71b2aa6f999d575b07f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_7878184a32af40af66b9ff6c7f872e931b8ed0899e2c71b2aa6f999d575b07f0->leave($__internal_7878184a32af40af66b9ff6c7f872e931b8ed0899e2c71b2aa6f999d575b07f0_prof);

        
        $__internal_bf68e392cd513ddbb765ed7c3f086da37c196941a09b013c967f92c97bbb158c->leave($__internal_bf68e392cd513ddbb765ed7c3f086da37c196941a09b013c967f92c97bbb158c_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
