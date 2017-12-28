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
        $__internal_2c961c0510b16ab9d65a65cadb53346c8304f729e7b40933df481cb229ed932d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c961c0510b16ab9d65a65cadb53346c8304f729e7b40933df481cb229ed932d->enter($__internal_2c961c0510b16ab9d65a65cadb53346c8304f729e7b40933df481cb229ed932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3c74cb75f084b2965489f8b7f95273f4eeab649f77bf1d4b908875467176b848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c74cb75f084b2965489f8b7f95273f4eeab649f77bf1d4b908875467176b848->enter($__internal_3c74cb75f084b2965489f8b7f95273f4eeab649f77bf1d4b908875467176b848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_2c961c0510b16ab9d65a65cadb53346c8304f729e7b40933df481cb229ed932d->leave($__internal_2c961c0510b16ab9d65a65cadb53346c8304f729e7b40933df481cb229ed932d_prof);

        
        $__internal_3c74cb75f084b2965489f8b7f95273f4eeab649f77bf1d4b908875467176b848->leave($__internal_3c74cb75f084b2965489f8b7f95273f4eeab649f77bf1d4b908875467176b848_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_671f685b3458a741e21c9314e0dc03e90a10e06e47665cbd6ea40be3b847bafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671f685b3458a741e21c9314e0dc03e90a10e06e47665cbd6ea40be3b847bafa->enter($__internal_671f685b3458a741e21c9314e0dc03e90a10e06e47665cbd6ea40be3b847bafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9a233b1ea4ebe5c1688a524a00e1ddde2ff359b1bd2ae36114d99b4290da99f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a233b1ea4ebe5c1688a524a00e1ddde2ff359b1bd2ae36114d99b4290da99f1->enter($__internal_9a233b1ea4ebe5c1688a524a00e1ddde2ff359b1bd2ae36114d99b4290da99f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9a233b1ea4ebe5c1688a524a00e1ddde2ff359b1bd2ae36114d99b4290da99f1->leave($__internal_9a233b1ea4ebe5c1688a524a00e1ddde2ff359b1bd2ae36114d99b4290da99f1_prof);

        
        $__internal_671f685b3458a741e21c9314e0dc03e90a10e06e47665cbd6ea40be3b847bafa->leave($__internal_671f685b3458a741e21c9314e0dc03e90a10e06e47665cbd6ea40be3b847bafa_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e4e04791e12d3c7aa65d9e89bf7ecb109af536f56ed491c751584cdc785153f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e04791e12d3c7aa65d9e89bf7ecb109af536f56ed491c751584cdc785153f0->enter($__internal_e4e04791e12d3c7aa65d9e89bf7ecb109af536f56ed491c751584cdc785153f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_5029471d405d3f6774ac9641977509b0affebd12f1cdce2ef70c780a239e244b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5029471d405d3f6774ac9641977509b0affebd12f1cdce2ef70c780a239e244b->enter($__internal_5029471d405d3f6774ac9641977509b0affebd12f1cdce2ef70c780a239e244b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_5029471d405d3f6774ac9641977509b0affebd12f1cdce2ef70c780a239e244b->leave($__internal_5029471d405d3f6774ac9641977509b0affebd12f1cdce2ef70c780a239e244b_prof);

        
        $__internal_e4e04791e12d3c7aa65d9e89bf7ecb109af536f56ed491c751584cdc785153f0->leave($__internal_e4e04791e12d3c7aa65d9e89bf7ecb109af536f56ed491c751584cdc785153f0_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_01759093ba9772d2a4154bab5a10014db5128dcf41494127cae7a6c7e2292c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01759093ba9772d2a4154bab5a10014db5128dcf41494127cae7a6c7e2292c1c->enter($__internal_01759093ba9772d2a4154bab5a10014db5128dcf41494127cae7a6c7e2292c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_c02f988c7ba2ee37cd80bc96c10836846b00ff7cb82f2449d9c9010de7d207e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02f988c7ba2ee37cd80bc96c10836846b00ff7cb82f2449d9c9010de7d207e3->enter($__internal_c02f988c7ba2ee37cd80bc96c10836846b00ff7cb82f2449d9c9010de7d207e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_c02f988c7ba2ee37cd80bc96c10836846b00ff7cb82f2449d9c9010de7d207e3->leave($__internal_c02f988c7ba2ee37cd80bc96c10836846b00ff7cb82f2449d9c9010de7d207e3_prof);

        
        $__internal_01759093ba9772d2a4154bab5a10014db5128dcf41494127cae7a6c7e2292c1c->leave($__internal_01759093ba9772d2a4154bab5a10014db5128dcf41494127cae7a6c7e2292c1c_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d5f98b024a46a85e1db33dafd39d0c7737bc89d4d605dfd18e17ead8a4eea1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f98b024a46a85e1db33dafd39d0c7737bc89d4d605dfd18e17ead8a4eea1e6->enter($__internal_d5f98b024a46a85e1db33dafd39d0c7737bc89d4d605dfd18e17ead8a4eea1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_cab2829aea0506c54fd43720e305e6afcf1ea080d2cbbaf5ffb675d7619c2cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab2829aea0506c54fd43720e305e6afcf1ea080d2cbbaf5ffb675d7619c2cba->enter($__internal_cab2829aea0506c54fd43720e305e6afcf1ea080d2cbbaf5ffb675d7619c2cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_cab2829aea0506c54fd43720e305e6afcf1ea080d2cbbaf5ffb675d7619c2cba->leave($__internal_cab2829aea0506c54fd43720e305e6afcf1ea080d2cbbaf5ffb675d7619c2cba_prof);

        
        $__internal_d5f98b024a46a85e1db33dafd39d0c7737bc89d4d605dfd18e17ead8a4eea1e6->leave($__internal_d5f98b024a46a85e1db33dafd39d0c7737bc89d4d605dfd18e17ead8a4eea1e6_prof);

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
