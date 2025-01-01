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
            white: "#FFFFFF",
            black: "#000000",
            cards: "#F2E5BF",
        },
        extend: {
            fontFamily: {
                montserrat: ["Montserrat"],
            },
        },
    },
    plugins: [],
};
