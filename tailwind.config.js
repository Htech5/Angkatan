/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            chocolate: "##66391C",
            vanilla: "#F9ECDC",
            mocca: "#AD7D4F",
        },
        extend: {
            fontFamily: {
                montserrat: ["Montserrat"],
            },
        },
    },
    plugins: [],
};
