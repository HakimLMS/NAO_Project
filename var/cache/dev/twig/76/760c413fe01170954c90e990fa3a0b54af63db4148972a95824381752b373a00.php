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
        $__internal_e20864dd1d1d8e0a41a01055c7b9b59f5d02820358c539b65bad39be5f3fb71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20864dd1d1d8e0a41a01055c7b9b59f5d02820358c539b65bad39be5f3fb71f->enter($__internal_e20864dd1d1d8e0a41a01055c7b9b59f5d02820358c539b65bad39be5f3fb71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_578d598fe99e3eafe7e620575eefac179e028ad0b91ee9af98705944cff5e728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578d598fe99e3eafe7e620575eefac179e028ad0b91ee9af98705944cff5e728->enter($__internal_578d598fe99e3eafe7e620575eefac179e028ad0b91ee9af98705944cff5e728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_e20864dd1d1d8e0a41a01055c7b9b59f5d02820358c539b65bad39be5f3fb71f->leave($__internal_e20864dd1d1d8e0a41a01055c7b9b59f5d02820358c539b65bad39be5f3fb71f_prof);

        
        $__internal_578d598fe99e3eafe7e620575eefac179e028ad0b91ee9af98705944cff5e728->leave($__internal_578d598fe99e3eafe7e620575eefac179e028ad0b91ee9af98705944cff5e728_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c231bd68e389a072925ff1c622872279f2f4e98a86f9f7e9de61ee8e4cd09f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c231bd68e389a072925ff1c622872279f2f4e98a86f9f7e9de61ee8e4cd09f8a->enter($__internal_c231bd68e389a072925ff1c622872279f2f4e98a86f9f7e9de61ee8e4cd09f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_47916d5c0db82960b0c13523b38b4a2bfcb6c6e80a6594cae9e019c7edf2c9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47916d5c0db82960b0c13523b38b4a2bfcb6c6e80a6594cae9e019c7edf2c9ef->enter($__internal_47916d5c0db82960b0c13523b38b4a2bfcb6c6e80a6594cae9e019c7edf2c9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_47916d5c0db82960b0c13523b38b4a2bfcb6c6e80a6594cae9e019c7edf2c9ef->leave($__internal_47916d5c0db82960b0c13523b38b4a2bfcb6c6e80a6594cae9e019c7edf2c9ef_prof);

        
        $__internal_c231bd68e389a072925ff1c622872279f2f4e98a86f9f7e9de61ee8e4cd09f8a->leave($__internal_c231bd68e389a072925ff1c622872279f2f4e98a86f9f7e9de61ee8e4cd09f8a_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ccb9eaa878309603f1da6f56870ab9c4bdbf7a307b0a207a5c07b337f7b9d108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb9eaa878309603f1da6f56870ab9c4bdbf7a307b0a207a5c07b337f7b9d108->enter($__internal_ccb9eaa878309603f1da6f56870ab9c4bdbf7a307b0a207a5c07b337f7b9d108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ad30810a7621e73ff56fe653c16146e8c4e42ef755657706a03efd3f6743b707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad30810a7621e73ff56fe653c16146e8c4e42ef755657706a03efd3f6743b707->enter($__internal_ad30810a7621e73ff56fe653c16146e8c4e42ef755657706a03efd3f6743b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_ad30810a7621e73ff56fe653c16146e8c4e42ef755657706a03efd3f6743b707->leave($__internal_ad30810a7621e73ff56fe653c16146e8c4e42ef755657706a03efd3f6743b707_prof);

        
        $__internal_ccb9eaa878309603f1da6f56870ab9c4bdbf7a307b0a207a5c07b337f7b9d108->leave($__internal_ccb9eaa878309603f1da6f56870ab9c4bdbf7a307b0a207a5c07b337f7b9d108_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_3736287595e75b5a72eb4865a92c181f10adfa49357ee5744a7b4fae4b0f19b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3736287595e75b5a72eb4865a92c181f10adfa49357ee5744a7b4fae4b0f19b5->enter($__internal_3736287595e75b5a72eb4865a92c181f10adfa49357ee5744a7b4fae4b0f19b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_c2b5556f63fadc89d8729962b0c2c02dd86c80a54ad86149a9a01b185e47e7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b5556f63fadc89d8729962b0c2c02dd86c80a54ad86149a9a01b185e47e7d8->enter($__internal_c2b5556f63fadc89d8729962b0c2c02dd86c80a54ad86149a9a01b185e47e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_c2b5556f63fadc89d8729962b0c2c02dd86c80a54ad86149a9a01b185e47e7d8->leave($__internal_c2b5556f63fadc89d8729962b0c2c02dd86c80a54ad86149a9a01b185e47e7d8_prof);

        
        $__internal_3736287595e75b5a72eb4865a92c181f10adfa49357ee5744a7b4fae4b0f19b5->leave($__internal_3736287595e75b5a72eb4865a92c181f10adfa49357ee5744a7b4fae4b0f19b5_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c76dc38b949f5225a4680536e09f0553b23839c575ff9e3367a8b360383faca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76dc38b949f5225a4680536e09f0553b23839c575ff9e3367a8b360383faca5->enter($__internal_c76dc38b949f5225a4680536e09f0553b23839c575ff9e3367a8b360383faca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_abf6ed174e43a56c7d1b72123708d9aa10514920facaa1b3e5fa334aada6889b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf6ed174e43a56c7d1b72123708d9aa10514920facaa1b3e5fa334aada6889b->enter($__internal_abf6ed174e43a56c7d1b72123708d9aa10514920facaa1b3e5fa334aada6889b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_abf6ed174e43a56c7d1b72123708d9aa10514920facaa1b3e5fa334aada6889b->leave($__internal_abf6ed174e43a56c7d1b72123708d9aa10514920facaa1b3e5fa334aada6889b_prof);

        
        $__internal_c76dc38b949f5225a4680536e09f0553b23839c575ff9e3367a8b360383faca5->leave($__internal_c76dc38b949f5225a4680536e09f0553b23839c575ff9e3367a8b360383faca5_prof);

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
", "form_table_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
