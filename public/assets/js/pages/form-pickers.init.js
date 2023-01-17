var classicPickrDemo = document.querySelectorAll(".classic-colorpicker");
classicPickrDemo &&
    classicPickrDemo.forEach(function () {
        Pickr.create({
            el: ".classic-colorpicker",
            theme: "classic",
            default: "#405189",
            swatches: [
                "rgba(244, 67, 54, 1)",
                "rgba(233, 30, 99, 0.95)",
                "rgba(156, 39, 176, 0.9)",
                "rgba(103, 58, 183, 0.85)",
                "rgba(63, 81, 181, 0.8)",
                "rgba(33, 150, 243, 0.75)",
                "rgba(3, 169, 244, 0.7)",
                "rgba(0, 188, 212, 0.7)",
                "rgba(0, 150, 136, 0.75)",
                "rgba(76, 175, 80, 0.8)",
                "rgba(139, 195, 74, 0.85)",
                "rgba(205, 220, 57, 0.9)",
                "rgba(255, 235, 59, 0.95)",
                "rgba(255, 193, 7, 1)",
            ],
            components: {
                preview: !0,
                opacity: !0,
                hue: !0,
                interaction: {
                    hex: !0,
                    rgba: !0,
                    hsva: !0,
                    input: !0,
                    clear: !0,
                    save: !0,
                },
            },
        });
    });
var monolithColorPickr = document.querySelectorAll(".monolith-colorpicker");
monolithColorPickr &&
    monolithColorPickr.forEach(function () {
        Pickr.create({
            el: ".monolith-colorpicker",
            theme: "monolith",
            default: "#0ab39c",
            swatches: [
                "rgba(244, 67, 54, 1)",
                "rgba(233, 30, 99, 0.95)",
                "rgba(156, 39, 176, 0.9)",
                "rgba(103, 58, 183, 0.85)",
                "rgba(63, 81, 181, 0.8)",
                "rgba(33, 150, 243, 0.75)",
                "rgba(3, 169, 244, 0.7)",
            ],
            defaultRepresentation: "HEXA",
            components: {
                preview: !0,
                opacity: !0,
                hue: !0,
                interaction: {
                    hex: !1,
                    rgba: !1,
                    hsva: !1,
                    input: !0,
                    clear: !0,
                    save: !0,
                },
            },
        });
    });
var nanoColorPickr = document.querySelectorAll(".nano-colorpicker");
nanoColorPickr &&
    nanoColorPickr.forEach(function () {
        Pickr.create({
            el: ".nano-colorpicker",
            theme: "nano",
            default: "#3577f1",
            swatches: [
                "rgba(244, 67, 54, 1)",
                "rgba(233, 30, 99, 0.95)",
                "rgba(156, 39, 176, 0.9)",
                "rgba(103, 58, 183, 0.85)",
                "rgba(63, 81, 181, 0.8)",
                "rgba(33, 150, 243, 0.75)",
                "rgba(3, 169, 244, 0.7)",
            ],
            defaultRepresentation: "HEXA",
            components: {
                preview: !0,
                opacity: !0,
                hue: !0,
                interaction: {
                    hex: !1,
                    rgba: !1,
                    hsva: !1,
                    input: !0,
                    clear: !0,
                    save: !0,
                },
            },
        });
    });
var demoColorPickr = document.querySelectorAll(".colorpicker-demo");
demoColorPickr &&
    demoColorPickr.forEach(function () {
        Pickr.create({
            el: ".colorpicker-demo",
            theme: "monolith",
            default: "#405189",
            components: { preview: !0, interaction: { clear: !0, save: !0 } },
        });
    });
var opacityHueColorPickr = document.querySelectorAll(
    ".colorpicker-opacity-hue"
);
opacityHueColorPickr &&
    opacityHueColorPickr.forEach(function () {
        Pickr.create({
            el: ".colorpicker-opacity-hue",
            theme: "monolith",
            default: "#0ab39c",
            components: {
                preview: !0,
                opacity: !0,
                hue: !0,
                interaction: { clear: !0, save: !0 },
            },
        });
    });
var swatcherColorPickr = document.querySelectorAll(".colorpicker-swatches");
swatcherColorPickr &&
    swatcherColorPickr.forEach(function () {
        Pickr.create({
            el: ".colorpicker-swatches",
            theme: "monolith",
            default: "#3577f1",
            swatches: [
                "rgba(244, 67, 54, 1)",
                "rgba(233, 30, 99, 0.95)",
                "rgba(156, 39, 176, 0.9)",
                "rgba(103, 58, 183, 0.85)",
                "rgba(63, 81, 181, 0.8)",
                "rgba(33, 150, 243, 0.75)",
                "rgba(3, 169, 244, 0.7)",
            ],
            components: {
                preview: !0,
                opacity: !0,
                hue: !0,
                interaction: { clear: !0, save: !0 },
            },
        });
    });
var inputColorPickr = document.querySelectorAll(".colorpicker-input");
inputColorPickr &&
    inputColorPickr.forEach(function () {
        Pickr.create({
            el: ".colorpicker-input",
            theme: "monolith",
            default: "#f7b84b",
            swatches: [
                "rgba(244, 67, 54, 1)",
                "rgba(233, 30, 99, 0.95)",
                "rgba(156, 39, 176, 0.9)",
                "rgba(103, 58, 183, 0.85)",
                "rgba(63, 81, 181, 0.8)",
                "rgba(33, 150, 243, 0.75)",
                "rgba(3, 169, 244, 0.7)",
            ],
            components: {
                preview: !0,
                opacity: !0,
                hue: !0,
                interaction: { input: !0, clear: !0, save: !0 },
            },
        });
    });
var formatColorPickr = document.querySelectorAll(".colorpicker-format");
formatColorPickr &&
    formatColorPickr.forEach(function () {
        Pickr.create({
            el: ".colorpicker-format",
            theme: "monolith",
            default: "#f06548",
            swatches: [
                "rgba(244, 67, 54, 1)",
                "rgba(233, 30, 99, 0.95)",
                "rgba(156, 39, 176, 0.9)",
                "rgba(103, 58, 183, 0.85)",
                "rgba(63, 81, 181, 0.8)",
                "rgba(33, 150, 243, 0.75)",
                "rgba(3, 169, 244, 0.7)",
            ],
            components: {
                preview: !0,
                opacity: !0,
                hue: !0,
                interaction: {
                    hex: !0,
                    rgba: !0,
                    hsva: !0,
                    input: !0,
                    clear: !0,
                    save: !0,
                },
            },
        });
    });
