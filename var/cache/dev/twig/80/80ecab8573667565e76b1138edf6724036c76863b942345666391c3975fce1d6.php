<?php

/* form_table_layout.html.twig */
class __TwigTemplate_96cd836cbe473a3f65e139ab813b74ca4bd2b8959a08b3bb3171c48130d4be69 extends Twig_Template
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
        $__internal_4066c4b4dc1e54a193788ff9cddccd3a41b39ac2484017db7d8b24fabeb9d9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4066c4b4dc1e54a193788ff9cddccd3a41b39ac2484017db7d8b24fabeb9d9c2->enter($__internal_4066c4b4dc1e54a193788ff9cddccd3a41b39ac2484017db7d8b24fabeb9d9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_49d644ec58d64f51d04f447fb245505f451cbbb5b6adc4e911d46cec364c7657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d644ec58d64f51d04f447fb245505f451cbbb5b6adc4e911d46cec364c7657->enter($__internal_49d644ec58d64f51d04f447fb245505f451cbbb5b6adc4e911d46cec364c7657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_4066c4b4dc1e54a193788ff9cddccd3a41b39ac2484017db7d8b24fabeb9d9c2->leave($__internal_4066c4b4dc1e54a193788ff9cddccd3a41b39ac2484017db7d8b24fabeb9d9c2_prof);

        
        $__internal_49d644ec58d64f51d04f447fb245505f451cbbb5b6adc4e911d46cec364c7657->leave($__internal_49d644ec58d64f51d04f447fb245505f451cbbb5b6adc4e911d46cec364c7657_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a4ec4d569ff552c614d373bc8af6f7873b5b78cefad12f30f365e82ec991481f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ec4d569ff552c614d373bc8af6f7873b5b78cefad12f30f365e82ec991481f->enter($__internal_a4ec4d569ff552c614d373bc8af6f7873b5b78cefad12f30f365e82ec991481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b3b54df2e969cab2d410131d4d34e5d1e867b22582201d07177a4fb6c502abd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b54df2e969cab2d410131d4d34e5d1e867b22582201d07177a4fb6c502abd9->enter($__internal_b3b54df2e969cab2d410131d4d34e5d1e867b22582201d07177a4fb6c502abd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b3b54df2e969cab2d410131d4d34e5d1e867b22582201d07177a4fb6c502abd9->leave($__internal_b3b54df2e969cab2d410131d4d34e5d1e867b22582201d07177a4fb6c502abd9_prof);

        
        $__internal_a4ec4d569ff552c614d373bc8af6f7873b5b78cefad12f30f365e82ec991481f->leave($__internal_a4ec4d569ff552c614d373bc8af6f7873b5b78cefad12f30f365e82ec991481f_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7b517a3f5d356f63bd057222a9abcbd01eca03e146f22c8b63f09673f4412348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b517a3f5d356f63bd057222a9abcbd01eca03e146f22c8b63f09673f4412348->enter($__internal_7b517a3f5d356f63bd057222a9abcbd01eca03e146f22c8b63f09673f4412348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_445f25e99d4f5fb0db4d91fb71e723b69e86d873daf1341af600054022e5d766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445f25e99d4f5fb0db4d91fb71e723b69e86d873daf1341af600054022e5d766->enter($__internal_445f25e99d4f5fb0db4d91fb71e723b69e86d873daf1341af600054022e5d766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_445f25e99d4f5fb0db4d91fb71e723b69e86d873daf1341af600054022e5d766->leave($__internal_445f25e99d4f5fb0db4d91fb71e723b69e86d873daf1341af600054022e5d766_prof);

        
        $__internal_7b517a3f5d356f63bd057222a9abcbd01eca03e146f22c8b63f09673f4412348->leave($__internal_7b517a3f5d356f63bd057222a9abcbd01eca03e146f22c8b63f09673f4412348_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_55587bd7616866b0dbd13232607c2c0b7bff9fbb2d5e9afb66cf42ea92d2bf3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55587bd7616866b0dbd13232607c2c0b7bff9fbb2d5e9afb66cf42ea92d2bf3c->enter($__internal_55587bd7616866b0dbd13232607c2c0b7bff9fbb2d5e9afb66cf42ea92d2bf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_4a5f3d43e2b246b2af44732eef9857a6ae56deb5eb00902b889c491ac115dd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5f3d43e2b246b2af44732eef9857a6ae56deb5eb00902b889c491ac115dd97->enter($__internal_4a5f3d43e2b246b2af44732eef9857a6ae56deb5eb00902b889c491ac115dd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_4a5f3d43e2b246b2af44732eef9857a6ae56deb5eb00902b889c491ac115dd97->leave($__internal_4a5f3d43e2b246b2af44732eef9857a6ae56deb5eb00902b889c491ac115dd97_prof);

        
        $__internal_55587bd7616866b0dbd13232607c2c0b7bff9fbb2d5e9afb66cf42ea92d2bf3c->leave($__internal_55587bd7616866b0dbd13232607c2c0b7bff9fbb2d5e9afb66cf42ea92d2bf3c_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_669136b5359eb7edaa1915fa80b3ef381060cb997dcecacc7f05a4bacf9d9053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669136b5359eb7edaa1915fa80b3ef381060cb997dcecacc7f05a4bacf9d9053->enter($__internal_669136b5359eb7edaa1915fa80b3ef381060cb997dcecacc7f05a4bacf9d9053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_b5cc55ee6e62af87a58bbcbeb754bb6afe2e456d06ef5452458a7e211c1c2d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cc55ee6e62af87a58bbcbeb754bb6afe2e456d06ef5452458a7e211c1c2d71->enter($__internal_b5cc55ee6e62af87a58bbcbeb754bb6afe2e456d06ef5452458a7e211c1c2d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_b5cc55ee6e62af87a58bbcbeb754bb6afe2e456d06ef5452458a7e211c1c2d71->leave($__internal_b5cc55ee6e62af87a58bbcbeb754bb6afe2e456d06ef5452458a7e211c1c2d71_prof);

        
        $__internal_669136b5359eb7edaa1915fa80b3ef381060cb997dcecacc7f05a4bacf9d9053->leave($__internal_669136b5359eb7edaa1915fa80b3ef381060cb997dcecacc7f05a4bacf9d9053_prof);

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
