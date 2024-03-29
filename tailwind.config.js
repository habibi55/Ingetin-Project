/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                body: "#17171F",
                bg_primer: "#fdfcfb",
                primer: "#3AAFA9",
                primer_2: "#2B7A78",
                primer_3: "#3E4785",
                primer_3_hover: "#252b50",
                secondary: "#F17A7E",
                tersier: "#3c3f58",
                nav: "#0072AE",
            },
        },
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
        },
    },
    plugins: [],
};
