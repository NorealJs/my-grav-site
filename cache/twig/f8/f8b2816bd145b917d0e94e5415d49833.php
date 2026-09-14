<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/messages.html.twig */
class __TwigTemplate_a9e3136db26855f69f444003d9576870 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["type_mapping"] = ["info" => "success", "error" => "error", "warning" => "warning"];
        // line 2
        $context["icon_mapping"] = ["info" => "circle-check", "error" => "circle-xmark", "warning" => "circle-info"];
        // line 3
        yield "
";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, true, 4), "all", [], "any", false, false, true, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <div id=\"messages\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, true, 6), "fetch", [], "any", false, false, true, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                yield "        ";
                $context["scope"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "scope", [], "any", false, false, true, 7), 7, $this->source));
                // line 8
                yield "        ";
                $context["type"] = (($_v0 = ($context["type_mapping"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[(($_v1 = $this->sandbox->ensureToStringAllowed(($context["scope"] ?? null), 8, $this->source)) instanceof \Stringable && is_array($_v0) ? (string) $_v1 : $_v1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["type_mapping"] ?? null), $this->sandbox->ensureToStringAllowed(($context["scope"] ?? null), 8, $this->source), [], "array", false, false, true, 8));
                // line 9
                yield "        ";
                $context["icon"] = (($_v2 = ($context["icon_mapping"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[(($_v3 = $this->sandbox->ensureToStringAllowed(($context["scope"] ?? null), 9, $this->source)) instanceof \Stringable && is_array($_v2) ? (string) $_v3 : $_v3)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icon_mapping"] ?? null), $this->sandbox->ensureToStringAllowed(($context["scope"] ?? null), 9, $this->source), [], "array", false, false, true, 9));
                // line 10
                yield "        <div class=\"toast toast-";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 10, $this->source), "html", null, true), 10, $this->source);
                yield " ";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["scope"] ?? null), 10, $this->source), "html", null, true), 10, $this->source);
                yield "\">
            <i class=\"fa-solid fa-";
                // line 11
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 11, $this->source), "html", null, true), 11, $this->source);
                yield "\" aria-hidden=\"true\"></i>
            <span>";
                // line 12
                yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, true, 12), 12, $this->source), 12, $this->source);
                yield "</span>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 15
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/messages.html.twig";
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
        return array (  91 => 15,  81 => 12,  77 => 11,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  57 => 6,  54 => 5,  52 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set type_mapping = {\x27info\x27:\x27success\x27, \x27error\x27: \x27error\x27, \x27warning\x27: \x27warning\x27} %}
{% set icon_mapping = {\x27info\x27:\x27circle-check\x27, \x27error\x27:\x27circle-xmark\x27, \x27warning\x27:\x27circle-info\x27} %}

{% if grav.messages.all %}
    <div id=\"messages\">
    {% for message in grav.messages.fetch %}
        {% set scope = message.scope|e %}
        {% set type = type_mapping[scope] %}
        {% set icon = icon_mapping[scope] %}
        <div class=\"toast toast-{{ type }} {{ scope }}\">
            <i class=\"fa-solid fa-{{ icon }}\" aria-hidden=\"true\"></i>
            <span>{{ message.message|raw }}</span>
        </div>
    {% endfor %}
    </div>
{% endif %}
", "partials/messages.html.twig", "C:\\laragon\\www\\LARAGON_WORKSPACE\\grav\\user\\themes\\quark2\\templates\\partials\\messages.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 4, "for" => 6];
        static $filters = ["e" => 7, "escape" => 10, "raw" => 12];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "for"],
                [0 => "e", 1 => "escape", 2 => "raw"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
