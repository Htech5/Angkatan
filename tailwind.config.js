/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                chocolate: "#66391C",
                vanilla: "#F9ECDC",
                mocca: "#AD7D4F",
            },
            fontFamily: {
                montserrat: ["Montserrat"],
            },
            gradientColorStopPositions: {
                65: '65%',
                
            }
        },
    },
    plugins: [],
};
