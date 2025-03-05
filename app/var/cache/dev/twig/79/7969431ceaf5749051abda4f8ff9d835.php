<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @EasyAdmin/includes/_css_assets.html.twig */
class __TwigTemplate_98afd1544c25880e23cc7304ba74eff4 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/includes/_css_assets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/includes/_css_assets.html.twig"));

        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["assets"]) || array_key_exists("assets", $context) ? $context["assets"] : (function () { throw new RuntimeError('Variable "assets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 3
            yield "    ";
            $context["href"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["css_asset"], "value", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, $context["css_asset"], "packageName", [], "any", false, false, false, 3));
            // line 4
            yield "    <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, $context["css_asset"], "preload", [], "any", false, false, false, 4)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "preload", (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 4, $this->source); })()), ["as" => "style", "nopush" => CoreExtension::getAttribute($this->env, $this->source, $context["css_asset"], "nopush", [], "any", false, false, false, 4)])) : ("")), (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 4, $this->source); })())), "html", null, true);
            yield "\"";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["css_asset"], "htmlAttributes", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html");
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['css_asset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/includes/_css_assets.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  59 => 5,  55 => 4,  52 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var assets \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto[] #}
{% for css_asset in assets %}
    {% set href = asset(css_asset.value, css_asset.packageName) %}
    <link rel=\"stylesheet\" href=\"{{ (css_asset.preload ? ea_call_function_if_exists('preload', href, { as: 'style', nopush: css_asset.nopush }))|default(href) }}\"
    {%- for attr, value in css_asset.htmlAttributes %} {{ attr }}=\"{{ value|e('html') }}\"{% endfor %}>
{% endfor %}
", "@EasyAdmin/includes/_css_assets.html.twig", "/var/www/vendor/easycorp/easyadmin-bundle/templates/includes/_css_assets.html.twig");
    }
}
